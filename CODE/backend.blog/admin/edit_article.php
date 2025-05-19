<?php
require_once '../config/db.php';
require_once '../config/auth.php';

$id_articles = $_GET['id_articles'] ?? null;
if (!$id_articles) exit('ID manquant');

$stmt = $pdo->prepare("SELECT * FROM articles WHERE id_articles = ?");
$stmt->execute([$id_articles]);
$article = $stmt->fetch();

if (!$article) exit('Article introuvable');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'] ?? '';
    $contenu = $_POST['contenu'] ?? '';

    $stmt = $pdo->prepare("UPDATE articles SET titre = ?, contenu = ? WHERE id_articles = ?");
    $stmt->execute([$titre, $contenu, $id_articles]);

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
</head>

<body>
    <h1>Modifier l'article</h1>
    <?php if (isset($message)) echo "<p style='color: green;'>$message</p>"; ?>
    <form method="POST">
        <div>
            <label for="titre">Titre :</label><br>
            <input type="text" name="titre" id="titre" value="<?= htmlspecialchars($article['titre']) ?>"
                required><br><br>
        </div>
        <div>
            <label for="image">Image de couverture pour présenter l'article :</label><br>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <br>
        <div>
            <label for="contenu">Contenu :</label><br>
            <textarea id="contenu" name="contenu"><?= htmlspecialchars($article['contenu']) ?></textarea><br><br>
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
        <button type="submit">Mettre à jour</button>
    </form>
</body>

</html>