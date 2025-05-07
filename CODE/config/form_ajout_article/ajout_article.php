<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Générer un jeton CSRF sécurisé s'il n'existe pas déjà
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajouter un article</title>
    <!-- Intégration de TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/6w8t9ht7k3ffytn50aoc1xtszvpijqh371ttxzc6ogin6cj3/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
    tinymce.init({
        selector: 'textarea',
        plugins: [
            // Core editing features
            'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media',
            'searchreplace', 'table', 'visualblocks', 'wordcount',
            // Your account includes a free trial of TinyMCE premium features
            // Try the most popular premium features until May 21, 2025:
            'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker',
            'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage',
            'advtemplate', 'ai', 'mentions', 'tableofcontents', 'footnotes', 'mergetags',
            'autocorrect', 'typography', 'inlinecss', 'markdown', 'importword', 'exportword', 'exportpdf'
        ],
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
            'See docs to implement AI Assistant')),
    });
    </script>

    <style>
    input:focus,
    textarea:focus,
    select:focus {
        outline: none;
        border-color: #4CAF50;
        box-shadow: 0 0 5px #4CAF50;
    }

    label {
        font-weight: bold;
        margin-top: 10px;
        display: inline-block;
    }

    input,
    textarea,
    select {
        margin-top: 4px;
        margin-bottom: 12px;
        padding: 6px;
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: 0.2s;
    }
    </style>
</head>

<body>
    <form action="publier_article.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

        <div>
            <label for="titre">Titre de l'article :</label><br>
            <input type="text" id="titre" name="titre" required>
        </div>

        <div>
            <label for="contenu">Contenu de l'article :</label><br>
            <textarea id="contenu" name="contenu" rows="10" cols="50" required></textarea>
        </div>
        <br>
        <div>
            <label for="categorie">Catégorie de l'article (1 seul choix possible):</label><br>
            <select id="categorie" name="categorie" required>
                <option value="">-- Sélectionnez une catégorie --</option>
                <option value="1">Santé et bien-être</option>
                <option value="2">Sport</option>
                <option value="3">Programme d'entrainement</option>
            </select>
        </div>
        <br>
        <div>
            <label for="extrait">Extrait (résumé attractif de présentation de l'article):</label><br>
            <textarea id="extrait" name="extrait" rows="10" cols="50" required></textarea>
        </div>
        <br>
        <div>
            <label for="image">Image de couverture pour présenter l'article :</label><br>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <br>
        <br>
        <div>
            <input type="submit" value="Publier l'article">
        </div>
    </form>

</body>

</html>