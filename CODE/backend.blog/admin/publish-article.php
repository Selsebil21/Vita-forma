<?php
require_once '../config/db.php';
require_once '../config/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_articles'])) {
    $id = (int)$_POST['id_articles'];

    // Met à jour le statut et la date de publication
    $stmt = $pdo->prepare("UPDATE articles SET statut = 'publié', date_publication = NOW() WHERE id_articles = ?");
    $stmt->execute([$id]);

    // Redirection vers la liste
    header('Location: articles.php');
    exit;
}
