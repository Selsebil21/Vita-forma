<?php
require_once '../backend.blog/config/db.php';
require_once '../backend.blog/config/auth.php';


$id_articles = $_GET['id_articles'] ?? null;
if (!$id_articles) exit('Article introuvable');

$stmt = $pdo->prepare("SELECT * FROM articles WHERE id_articles = ?");
$stmt->execute([$id_articles]);
$article = $stmt->fetch();

if (!$article) exit('Article introuvable');
?>

<!DOCTYPE html>
<html lang="fr">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($article['titre']) ?> - Vita-Forma</title>
    <link rel="stylesheet" href="./includes/header-style.css" />
    <link rel="stylesheet" href="./includes/footer-style.css" />
</head>

<body>
    <?php require './includes/header.php'; ?>
    <h1><?= htmlspecialchars($article['titre']) ?></h1>
    <p><strong>Date :</strong> <?= date('d/m/Y', strtotime($article['date_publication'])) ?></p>
    <hr>
    <div>
        <?= nl2br($article['contenu']) ?>
    </div>

    <p><a href="articles.php">← Retour aux articles</a></p>
</body>

</html>