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
    <script src="https://cdn.tiny.cloud/1/ta_cle_API/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
        <label for="titre">Titre :</label><br>
        <input type="text" name="titre" id="titre" required><br><br>
        <label for="contenu">Contenu :</label><br>
        <textarea id="contenu" name="contenu"></textarea><br><br>
        <button type="submit">Publier</button>
    </form>
</body>

</html>