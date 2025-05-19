<?php
session_start();

// Vérification de la session de l'administrateur
if (!isset($_SESSION['admin_id'])) {
    header('Location: connexion.php');
    exit();
}

$page_name = basename($_SERVER['PHP_SELF'], ".php");

switch ($page_name) {
    case 'espace_admin':
        $h1_text = 'Votre espace administrateur';
        break;
    default:
        $h1_text = '';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($h1_text); ?></title>
    <link rel="stylesheet" href="/CODE/php/includes/header-style.css">
    <link rel="stylesheet" href="./espace_admin.css">
</head>

<body>
    <header>
        <img src="/CODE/assets/logo-vita-forma_transparent.png" alt="logo du blog">
        <nav>
            <ul>
                <li><a href="/CODE/php/index.php">Accueil</a></li>
                <li><a href="../tous_les_articles/liste_articles.php">Les articles</a></li>
                <li><a href="./deconnexion.php">Se déconnecter</a></li>
            </ul>
        </nav>
    </header>

    <h1>Bienvenue, administrateur <?php echo htmlspecialchars($_SESSION['admin_email']); ?> !</h1>

    <main>
        <section id="ajout_article">
            <h2>Ajouter un article</h2>
            <?php include __DIR__ . '/../form_ajout_article/ajout_article.php'; ?>
        </section>

        <hr>

        <section id="gestion_articles">
            <h2>Gérer les articles</h2>
            <div>
                <?php include __DIR__ . '/../tous_les_articles/liste_articles.php'; ?>
            </div>
        </section>
    </main>
</body>

</html>