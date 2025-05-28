<?php
require_once '../config/db.php';
require_once '../config/auth.php';

$id_articles = $_GET['id_articles'] ?? null;
if (!$id_articles) exit('ID manquant');

$stmt = $pdo->prepare("SELECT * FROM articles WHERE id_articles = ?");
$stmt->execute([$id_articles]);
$article = $stmt->fetch();

if (!$article) exit('Article introuvable');

// Récupérer toutes les catégories depuis la base de données
$stmtCat = $pdo->query("SELECT * FROM categorie");
$categories = $stmtCat->fetchAll();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'] ?? '';
    $contenu = $_POST['contenu'] ?? '';
    $id_categorie = $_POST['id_categorie'] ?? null;
    $action = $_POST['action'] ?? 'brouillon';
    $statut = ($action === 'publie') ? 'publié' : 'brouillon';
    $datePublication = ($statut === 'publié') ? date('Y-m-d H:i:s') : null;

    // Traitement de l'image
    if (!empty($_FILES['image']['name'])) {
        $imageName = basename($_FILES['image']['name']);
        $imageTmp = $_FILES['image']['tmp_name'];
        $uploadDir = 'uploads/';
        $uploadPath = $uploadDir . $imageName;

        // Crée le dossier s'il n'existe pas
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        move_uploaded_file($imageTmp, $uploadPath);
    } else {
        // Conserve l'image existante
        $imageName = $article['image'];
    }

    // Mise à jour de l'article
    $stmt = $pdo->prepare("UPDATE articles 
        SET titre = ?, contenu = ?, id_categorie = ?, image = ?, statut = ?, date_publication = ? 
        WHERE id_articles = ?");

    $stmt->execute([$titre, $contenu, $id_categorie, $imageName, $statut, $datePublication, $id_articles]);

    $message = "Article mis à jour.";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier l'article</title>
    <script src="https://cdn.tiny.cloud/1/6w8t9ht7k3ffytn50aoc1xtszvpijqh371ttxzc6ogin6cj3/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#contenu',
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
    <h1>Modifier l'article</h1>
    <?php if (isset($message)) echo "<p style='color: green;'>$message</p>"; ?>

    <form method="POST" enctype="multipart/form-data">
        <div>
            <label for="titre">Titre :</label><br>
            <input type="text" name="titre" id="titre" value="<?= htmlspecialchars($article['titre']) ?>"
                required><br><br>
        </div>

        <div>
            <label for="image">Image de couverture :</label><br>
            <input type="file" id="image" name="image" accept="image/*"><br>
            <?php if (!empty($article['image'])): ?>
                <p>Image actuelle : <img src="image-couverture-article/<?= htmlspecialchars($article['image']) ?>"
                        alt="Image" width="150">
                </p>
            <?php endif; ?>
        </div>
        <br>

        <div>
            <label for="contenu">Contenu :</label><br>
            <textarea id="contenu" name="contenu"><?= htmlspecialchars($article['contenu']) ?></textarea><br><br>
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

        <br>

        <div>
            <button type="submit" name="action" value="brouillon">Enregistrer les modifications</button>
            <button type="submit" name="action" value="publie">Publier</button>
        </div>

        <a href="dashboard.php">
            <button type="button">⬅ Revenir à l'espace admin</button>
        </a>
</body>

</html>