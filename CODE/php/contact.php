<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vita forma - Je me remets au sport</title>
    <link rel="stylesheet" href="./includes/header-style.css" />
    <link rel="stylesheet" href="../style_css/contact-style.css" />
</head>

<body>
    <?php require './includes/header.php'; ?>
    <main>
        <div class="contact-section">
            <div class="contact-info">
                <h2>Coordonnées</h2>
                <p><strong>Vita-Forma</strong></p>
                <p>Email : contact@vita-forma.fr</p>
                <p>Téléphone : +33 6 12 34 56 78</p>
                <p>Adresse : 10 rue de la Vitalité, 75000 Paris</p>
            </div>

            <div class="contact-form">
                <h2>Formulaire de Contact</h2>
                <form action="#" method="post">
                    <label for="email">Adresse Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" required>

                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" required>

                    <label for="sujet">Sujet</label>
                    <input type="text" id="sujet" name="sujet" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </form>

                <button class="cta-button" type="submit">Envoyer</button>

            </div>
        </div>

    </main>



</body>

</html>