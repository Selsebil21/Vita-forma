<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Article</title>
    <link rel="stylesheet" href="/CODE/php/includes/header-style.css" />
    <link rel="stylesheet" href="/CODE/php/includes/footer-style.css" />
    <link rel="stylesheet" href="article.css"> <!-- Inclure le fichier CSS -->
</head>

<body>
    <?php require './CODE/php/includes/header.php'; ?>

    <?php include_once "config_article.php"; ?>

    <main>
        <?php if ($article): ?>
            <article>
                <div>
                    <a href="../form_ajout_article/modifier_article.php?id_article=<?php echo htmlspecialchars($article['id_article']); ?>"
                        id="btn-modif-article">Modifier</a>
                    <a href="#" onclick="supprimerArticle(<?php echo htmlspecialchars($article['id_article']); ?>)"
                        id="btn-suppr-article">Supprimer</a>
                </div>
                <h2><?php echo ($article['titre'] ?? 'Titre inconnu'); ?></h2>
                <p class="meta">
                    Publié le <?php echo date('d/m/Y', strtotime($article['date_publication'] ?? '')); ?> par
                    <?php echo htmlspecialchars($article['auteur'] ?? 'Auteur inconnu'); ?>
                </p>
                <div class="contenu-article">
                    <?php echo (($article['contenu'] ?? 'Contenu non disponible')); ?>
                </div>
                <?php if (!empty($article['image'])): ?>
                    <div class="image-article">
                        <img src="<?php echo ($article['image'] ?? ''); ?>" alt="Image de l'article">
                    </div>

                <?php endif; ?>
            </article>
        <?php else: ?>
            <p>Article introuvable.</p>
        <?php endif; ?>



        <?php
        // $contenu contient le contenu de l'article avec les balises HTML (comme <h2>)
        $contenu_original = $article['contenu'];

        // Génération automatique du sommaire :
        $sommaire = '';
        $contenu_modifie = $contenu_original;
        preg_match_all('/<h2>(.*?)<\/h2>/', $contenu_original, $titres);

        if (!empty($titres[1])) {
            $sommaire .= '<div class="sommaire"><h3>Sommaire</h3><ul>';
            foreach ($titres[1] as $index => $titre) {
                $id = 'titre-' . $index;
                // Remplace le <h2> par un <h2 id="titre-0"> etc.
                $contenu_modifie = preg_replace(
                    '/<h2>' . preg_quote($titre, '/') . '<\/h2>/',
                    '<h2 id="' . $id . '">' . $titre . '</h2>',
                    $contenu_modifie,
                    1 // remplacer une seule fois à chaque itération
                );
                $sommaire .= '<li><a href="#' . $id . '">' . $titre . '</a></li>';
            }
            $sommaire .= '</ul></div>';
        }
        ?>

        <!-- Affichage dans ta page HTML -->
        <?= $sommaire ?>
        <div class="contenu-article">
            <?= $contenu_modifie ?>
        </div>

    </main>

    <?php require './CODE/php/includes/header.php'; ?>

    <script>
        // Fonction JavaScript pour confirmer et supprimer un article
        function supprimerArticle(id_article) {
            if (confirm('Êtes-vous sûr de vouloir supprimer cet article ?')) {
                // Rediriger vers le fichier de suppression avec l'ID de l'article
                window.location.href = '../form_ajout_article/supprimer_article.php?id_article=' + id_article;
            }
        }
    </script>

</body>

</html>