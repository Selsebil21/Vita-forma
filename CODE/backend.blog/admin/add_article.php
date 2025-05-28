<?php
require_once '../config/db.php';
require_once '../config/auth.php';

// Récupérer toutes les catégories depuis la base de données
$stmtCat = $pdo->query("SELECT * FROM categorie");
$categories = $stmtCat->fetchAll();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'] ?? '';
    $contenu = $_POST['contenu'] ?? '';
    $id_categorie = $_POST['id_categorie'] ?? null;
    $action = $_POST['action'] ?? 'brouillon'; // 'publie' ou 'brouillon'

    $statut = ($action === 'publie') ? 'publié' : 'brouillon';
    $datePublication = ($statut === 'publié') ? date('Y-m-d H:i:s') : null;

    // Traitement de l'image
    if (!empty($_FILES['image']['name'])) {
        $imageName = basename($_FILES['image']['name']);
        $imageTmp = $_FILES['image']['tmp_name'];
        $uploadDir = 'uploads/';
        $uploadPath = $uploadDir . $imageName;

        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        move_uploaded_file($imageTmp, $uploadPath);
    } else {
        $imageName = null;
    }

    // Requête INSERT 
    $stmt = $pdo->prepare("INSERT INTO articles (titre, contenu, id_categorie, image, statut, date_publication) 
                           VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$titre, $contenu, $id_categorie, $imageName, $statut, $datePublication]);

    $message = "Article ajouté avec succès en tant que $statut !";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajouter un article</title>
    <script src="https://cdn.tiny.cloud/1/6w8t9ht7k3ffytn50aoc1xtszvpijqh371ttxzc6ogin6cj3/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: '#contenu',
        plugins: 'link image code lists',
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | bullist numlist | link image | code',
        height: 400
    });
    </script>

    <style>
    body {
        font-family: 'Tahoma', sans-serif;
        color: black;
    }

    body h1 {
        text-align: center;
        font-size: 2em;
        margin-top: 20px;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: rgba(165, 103, 49, 0.66);
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        font-size: larger;
    }

    form button {
        border: none;
        padding: 5px 50px;
        border-radius: 12px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }

    form button:hover {
        border: 1px solid black;
        font-weight: bold;
    }

    input:focus,
    textarea:focus,
    select:focus {
        outline: none;
        border-color: rgb(76, 106, 175);
        box-shadow: 0 0 5px rgb(76, 104, 175);
    }

    label {
        font-weight: bold;
        margin-top: 10px;
        display: inline-block;
        margin-bottom: 10px;
    }

    input,
    textarea,
    select {
        margin-top: 4px;
        margin-bottom: 12px;
        padding: 6px;
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: 0.2s;
    }
    </style>
</head>

<body>
    <h1>Ajouter un article</h1>
    <?php if (isset($message)) echo "<p style='color: green;'>$message</p>"; ?>

    <form method="POST" enctype="multipart/form-data">
        <label for="titre">Titre :</label><br>
        <input type="text" name="titre" id="titre" required><br><br>
        </div>
        <div>
            <label for="image">Image de couverture pour présenter l'article :</label><br>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <div>
            <label for="contenu">Contenu :</label><br>
            <textarea id="contenu" name="contenu"></textarea><br><br>
        </div>
        <div>
            <label for="id_categorie">Catégorie :</label><br>
            <select id="id_categorie" name="id_categorie" required>
                <option value="">-- Sélectionnez une catégorie --</option>
                <?php foreach ($categories as $cat): ?>
                <option value="<?= $cat['id_categorie'] ?>"
                    <?= (isset($article['id_categorie']) && $cat['id_categorie'] == $article['id_categorie']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($cat['nom_categorie']) ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div>
            <button type="submit" name="action" value="brouillon">Enregistrer en brouillon</button>
            <button type="submit" name="action" value="publie">Publier</button>
        </div>
        <a href="dashboard.php">
            <button type="button">⬅ Revenir à l'espace admin</button>
        </a>
    </form>
</body>

</html>