<?php
session_start();

// Vérifier que la requête est de type POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier la présence et la validité du jeton CSRF
    if (!isset($_POST['csrf_token'], $_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Erreur de validation du jeton CSRF.');
    }

    // Valider et récupérer l'ID de l'article
    $id_article = filter_input(INPUT_POST, 'id_article', FILTER_VALIDATE_INT);
    if (!$id_article) {
        die('ID d\'article invalide.');
    }

    // Inclure le fichier de connexion à la base de données
    require_once '../database/connex_bdd.php';

    // Récupérer le chemin de l'image associée à l'article
    $stmt = $connexion->prepare("SELECT image FROM articles WHERE id_article = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id_article);
        $stmt->execute();
        $stmt->bind_result($chemin_image);
        $stmt->fetch();
        $stmt->close();

        // Supprimer l'image du serveur si elle existe
        if (!empty($chemin_image) && file_exists($chemin_image)) {
            unlink($chemin_image);
        }
    } else {
        die("Erreur lors de la récupération de l'image : " . $connexion->error);
    }

    // Supprimer l'article de la base de données
    $stmt = $connexion->prepare("DELETE FROM articles WHERE id_article = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id_article);
        if ($stmt->execute()) {
            echo "L'article a été supprimé avec succès.";
        } else {
            echo "Erreur lors de la suppression de l'article : " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Erreur lors de la préparation de la requête : " . $connexion->error;
    }

    $connexion->close();

    // Bouton de retour
    echo "<br><button><a href='../connexion_admin/espace_admin.php'>Retour vers l'espace administrateur</a></button>";
} else {
    echo "Requête invalide.";
    echo "<br><button><a href='../connexion_admin/espace_admin.php'>Retour vers l'espace administrateur</a></button>";
}
