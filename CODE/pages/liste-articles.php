<?php
require_once '../backend.blog/config/db.php';
require_once '../backend.blog/config/auth.php';

$stmt = $pdo->query("SELECT id_articles, titre, date_publication FROM articles ORDER BY date_publication DESC");
$articles = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Le blog - Vita forma</title>
    <link rel="stylesheet" href="./includes/header-style.css" />
    <link rel="stylesheet" href="./includes/footer-style.css" />
</head>

<body>
    <?php require './includes/header.php'; ?>

    <h1>Tous nos articles de blog - Vita-Forma</h1>

    <?php foreach ($articles as $article): ?>
        <div style="margin-bottom: 20px;">
            <h2><a
                    href="article.php?id_articles=<?= $article['id_articles'] ?>"><?= htmlspecialchars($article['titre']) ?></a>
            </h2>
            <p><strong>Publié le :</strong> <?= date('d/m/Y', strtotime($article['date_publication'])) ?></p>
        </div>
    <?php endforeach; ?>

    <?php require './includes/footer.php'; ?>
</body>

</html>