<?php echo "PAGE OK"; ?>
<?php
session_start();

// Activer l'affichage des erreurs pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Vérifier que le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    var_dump($_POST); // Debug ici pour voir ce qui est reçu
    // Vérification du jeton CSRF
    // if (!isset($_POST['csrf_token'], $_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    //     die('Erreur de validation du jeton CSRF.');
    // }

    // Nettoyage et récupération des données du formulaire
    $titre = htmlspecialchars(trim($_POST['titre']));
    $extrait = htmlspecialchars(trim($_POST['extrait']));
    $contenu = trim($_POST['contenu']); // Si vous autorisez le HTML via TinyMCE
    $id_categorie = intval($_POST['categorie']);
    $id_auteur = 1; // Remplacez par l'ID de l'auteur connecté (par exemple, via une session)

    // Traitement de l'image (optionnel)
    $chemin_image = NULL;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $imageInfo = getimagesize($fileTmpPath);
        if ($imageInfo === false) {
            die("Le fichier téléchargé n'est pas une image valide.");
        }
        $fileType = $imageInfo['mime'];
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($fileType, $allowedTypes)) {
            die("Type de fichier non autorisé.");
        }

        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $newFileName = uniqid('img_', true) . '.' . $extension;
        $uploadDir = 'CODE\config\database\image_couverture_article';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $destPath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $destPath)) {
            $chemin_image = $destPath;
        } else {
            echo "Erreur lors du téléchargement de l'image. Vérifiez les permissions du dossier et le chemin.<br>";
            $chemin_image = NULL;
        }
    }

    // Inclure le fichier de connexion à la base de données
    include '../database/connex_bdd.php'; // Connexion à la base de données 

    // Préparer la requête SQL pour insérer l'article dans la base de données
    $sql = "INSERT INTO articles (titre, extrait, contenu, image, date_publication, id_categorie, id_auteur)
            VALUES (?, ?, ?, ?, NOW(), ?, ?)";
    $stmt = $connexion->prepare($sql);
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $connexion->error);
    }

    $stmt->bind_param("sssiii", $titre, $extrait, $contenu, $chemin_image, $id_categorie, $id_auteur);

    // Exécuter la requête et vérifier le résultat
    if ($stmt->execute()) {
        $id_article = $stmt->insert_id;
        echo "L'article a été ajouté avec succès.<br>";

        // Ajouter les boutons "Voir l'article" et "Retour vers l'espace administrateur"
        echo "<button><a href='../un_article/article.php?id=$id_article'>Voir l'article</a></button>";
        echo "<button><a href='../connexion_admin/espace_admin.php'>Retour vers l'espace administrateur</a></button>";
    } else {
        echo "Erreur lors de l'ajout de l'article : " . $stmt->error;
    }

    // Fermer la requête préparée
    $stmt->close();

    // Fermer la connexion à la base de données
    $connexion->close();

    // Supprimer le jeton CSRF après utilisation
    unset($_SESSION['csrf_token']);
} else {
    echo "Méthode de requête invalide.";
}
