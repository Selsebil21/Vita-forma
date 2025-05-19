<?php
require_once '../config/db.php';
require_once '../config/auth.php';

$stmt = $pdo->query("SELECT * FROM articles ORDER BY date_creation DESC");
$articles = $stmt->fetchAll();
?>

<h1>Liste des articles</h1>
<a href="add_article.php">➕ Nouvel article</a><br><br>

<?php foreach ($articles as $article): ?>
    <h2><?= htmlspecialchars($article['titre']) ?></h2>
    <p><?= date('d/m/Y à H:i', strtotime($article['date_creation'])) ?></p>
    <a href="edit_article.php?id=<?= $article['id'] ?>">✏️ Modifier</a> | 
    <a href="delete_article.php?id=<?= $article['id'] ?>" onclick="return confirm('Supprimer cet article ?')">🗑️ Supprimer</a>
    <hr>
<?php endforeach; ?>
