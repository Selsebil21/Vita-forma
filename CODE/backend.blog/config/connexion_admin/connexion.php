<?php
session_start();

// Générer un token CSRF si inexistant
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Récupérer et afficher les messages d'erreur ou de succès
$erreur = $_GET['erreur'] ?? '';
$succes = $_GET['succes'] ?? '';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion - Espace Administrateur</title>
    <link rel="stylesheet" href="./connexion.css">
</head>

<body>
    <h1>Connexion à l’espace administrateur</h1>

    <?php if ($erreur): ?>
        <p class="error"><?= htmlspecialchars($erreur) ?></p>
    <?php endif; ?>

    <?php if ($succes): ?>
        <p class="success"><?= htmlspecialchars($succes) ?></p>
    <?php endif; ?>


    <form action="./config_connexion.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <div>
            <label for="email">Email :</label><br>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="mot_de_passe">Mot de passe :</label><br>
            <input type="password" name="mot_de_passe" id="mot_de_passe" required>
        </div>
        <div>
            <input type="submit" value="Se connecter">
        </div>
    </form>
</body>

</html>