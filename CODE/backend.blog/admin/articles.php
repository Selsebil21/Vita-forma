<?php
require_once '../config/db.php';
require_once '../config/auth.php';

// Récupération des articles publiés
$stmtPublies = $pdo->prepare("SELECT * FROM articles WHERE statut = 'publié' ORDER BY date_publication DESC");
$stmtPublies->execute();
$articlesPublies = $stmtPublies->fetchAll();

// Récupération des brouillons
$stmtBrouillons = $pdo->prepare("SELECT * FROM articles WHERE statut = 'brouillon' ORDER BY id_articles DESC");
$stmtBrouillons->execute();
$articlesBrouillons = $stmtBrouillons->fetchAll();
?>

<h1>Liste des articles</h1>
<a href="add_article.php">➕ Nouvel article</a><br><br>

<h2>🟢 Articles publiés</h2>
<?php if (count($articlesPublies) > 0): ?>
    <?php foreach ($articlesPublies as $article): ?>
        <h3><?= htmlspecialchars($article['titre']) ?></h3>
        <p><?= date('d/m/Y à H:i', strtotime($article['date_publication'])) ?></p>
        <a href="edit_article.php?id_articles=<?= $article['id_articles'] ?>">✏️ Modifier</a> |
        <a href="delete_article.php?id_articles=<?= $article['id_articles'] ?>"
            onclick="return confirm('Supprimer cet article ?')">🗑️ Supprimer</a>
        <hr>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun article publié.</p>
<?php endif; ?>

<h2>📝 Brouillons</h2>
<?php if (count($articlesBrouillons) > 0): ?>
    <?php foreach ($articlesBrouillons as $article): ?>
        <h3><?= htmlspecialchars($article['titre']) ?> <em>(brouillon)</em></h3>
        <p><small>Non publié</small></p>
        <a href="edit_article.php?id_articles=<?= $article['id_articles'] ?>">✏️ Modifier</a> |
        <a href="delete_article.php?id_articles=<?= $article['id_articles'] ?>"
            onclick="return confirm('Supprimer ce brouillon ?')">🗑️ Supprimer</a>
        <!-- Bouton pour publier le brouillon -->
        <form action="publish_article.php" method="POST" style="display:inline;">
            <input type="hidden" name="id_articles" value="<?= $article['id_articles'] ?>">
            <button type="submit" onclick="return confirm('Publier cet article ?')">✅ Publier</button>
        </form>
        <hr>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun brouillon pour le moment.</p>
<?php endif; ?>