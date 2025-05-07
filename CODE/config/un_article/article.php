<?php
session_start();

// Générer un jeton CSRF s'il n'existe pas déjà
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Inclure le fichier de configuration de l'article
include_once "config_article.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Article</title>
    <link rel="stylesheet" href="/CODE/php/includes/header-style.css" />
    <link rel="stylesheet" href="/CODE/php/includes/footer-style.css" />
    <link rel="stylesheet" href="article.css">
</head>

<body>
    <?php require '../php/includes/header.php'; ?>

    <main>
        <?php if (isset($article) && !empty($article)): ?>
        <article>
            <div>
                <a href="../form_ajout_article/modifier_article.php?id_article=<?php echo htmlspecialchars($article['id_article']); ?>"
                    id="btn-modif-article">Modifier</a>
                <form id="form-supprimer-article" method="POST" action="../form_ajout_article/supprimer_article.php"
                    style="display:inline;">
                    <input type="hidden" name="id_article"
                        value="<?php echo htmlspecialchars($article['id_article']); ?>">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    <button type="submit" id="btn-suppr-article"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">Supprimer</button>
                </form>
            </div>
            <h2><?php echo htmlspecialchars($article['titre'] ?? 'Titre inconnu'); ?></h2>
            <p class="meta">
                Publié le <?php echo date('d/m/Y', strtotime($article['date_publication'] ?? '')); ?> par
                <?php echo htmlspecialchars($article['auteur'] ?? 'Auteur inconnu'); ?>
            </p>
            <div class="contenu-article">
                <?php echo $article['contenu'] ?? 'Contenu non disponible'; ?>
            </div>
            <?php if (!empty($article['image'])): ?>
            <div class="image-article">
                <img src="<?php echo htmlspecialchars($article['image']); ?>" alt="Image de l'article">
            </div>
            <?php endif; ?>
        </article>
        <?php else: ?>
        <p>Article introuvable.</p>
        <?php endif; ?>

        <?php
        // Génération automatique du sommaire
        $contenu_original = $article['contenu'] ?? '';
        $sommaire = '';
        $contenu_modifie = $contenu_original;
        preg_match_all('/<h2>(.*?)<\/h2>/', $contenu_original, $titres);

        if (!empty($titres[1])) {
            $sommaire .= '<div class="sommaire"><h3>Sommaire</h3><ul>';
            foreach ($titres[1] as $index => $titre) {
                $id = 'titre-' . $index;
                $contenu_modifie = preg_replace(
                    '/<h2>' . preg_quote($titre, '/') . '<\/h2>/',
                    '<h2 id="' . $id . '">' . htmlspecialchars($titre) . '</h2>',
                    $contenu_modifie,
                    1
                );
                $sommaire .= '<li><a href="#' . $id . '">' . htmlspecialchars($titre) . '</a></li>';
            }
            $sommaire .= '</ul></div>';
        }
        ?>

        <?= $sommaire ?>
        <div class="contenu-article">
            <?= $contenu_modifie ?>
        </div>
    </main>

    <?php require './includes/footer.php'; ?>
</body>

</html>