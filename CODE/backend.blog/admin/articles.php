<?php
require_once '../config/db.php';
require_once '../config/auth.php';

$stmt = $pdo->query("SELECT * FROM articles ORDER BY date_publication DESC");
$articles = $stmt->fetchAll();
?>

<h1>Liste des articles</h1>
<a href="add_article.php">➕ Nouvel article</a><br><br>

<?php foreach ($articles as $article): ?>
    <h2><?= htmlspecialchars($article['titre']) ?></h2>
    <p><?= date('d/m/Y à H:i', strtotime($article['date_publication'])) ?></p>
    <a href="edit_article.php?id_articles=<?= $article['id_articles'] ?>">✏️ Modifier</a> |
    <a href="delete_article.php?id_articles=<?= $article['id_articles'] ?>"
        onclick="return confirm('Supprimer cet article ?')">🗑️
        Supprimer</a>
    <hr>
<?php endforeach; ?>