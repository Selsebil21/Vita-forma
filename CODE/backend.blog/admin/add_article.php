<?php
require_once '../config/db.php';
require_once '../config/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'] ?? '';
    $contenu = $_POST['contenu'] ?? '';

    $stmt = $pdo->prepare("INSERT INTO articles (titre, contenu) VALUES (?, ?)");
    $stmt->execute([$titre, $contenu]);

    $message = "Article ajouté avec succès !";
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
</head>

<body>
    <h1>Ajouter un article</h1>
    <?php if (isset($message)) echo "<p style='color: green;'>$message</p>"; ?>
    <form method="POST">
        <div>
            <label for="titre">Titre :</label><br>
            <input type="text" name="titre" id="titre" required><br><br>
        </div>
        <div>
            <label for="image">Image de couverture pour présenter l'article :</label><br>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <br>
        <div>
            <label for="contenu">Contenu :</label><br>
            <textarea id="contenu" name="contenu"></textarea><br><br>
        </div>
        <div>
            <label for="categorie">Catégorie de l'article (1 seul choix possible):</label><br>
            <select id="categorie" name="categorie" required>
                <option value="">-- Sélectionnez une catégorie --</option>
                <option value="1">Santé et bien-être</option>
                <option value="2">Sport</option>
                <option value="3">Programme d'entrainement</option>
            </select>
        </div>
        <br>
        <button type="submit">Publier</button>
    </form>
</body>

</html>