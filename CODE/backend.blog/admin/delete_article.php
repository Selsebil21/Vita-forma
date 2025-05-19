<?php
require_once '../config/db.php';
require_once '../config/auth.php';

$id = $_GET['id'] ?? null;
if ($id) {
    $stmt = $pdo->prepare("DELETE FROM articles WHERE id = ?");
    $stmt->execute([$id]);
}
header("Location: articles.php");
exit();
