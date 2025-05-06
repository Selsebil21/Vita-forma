<script src="https://cdn.tiny.cloud/1/vtoaw4icl2qa7rhhcu8v58zx1inrf17493vi2oe4zmu9ce3g/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: '#contenu',
    language: 'fr_FR',
    plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    toolbar_mode: 'floating',
    toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link image',
    branding: false
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

<form action="../form_ajout_article/publier_article.php" method="POST" enctype="multipart/form-data">
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