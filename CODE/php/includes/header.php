<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./header-style.css" />
</head>

<body>
    <div id="logo-overlay">
        <img src="/CODE/assets/logo-vita-forma_transparent.png" alt="Logo Vita Forma" id="logo-anim" />
    </div>

    <header id="main-header">
        <div class="header-bottom">

            <a href="/CODE/php/index.php">
                <img src="/CODE/assets/logo-vita-forma_transparent.png" alt="Logo Vita Forma" class="logo" />
            </a>

            <nav class="navbar">
                <ul>
                    <li><a href="/CODE/php/index.php">Accueil</a></li>
                    <li class="li-dropdown">
                        <a href="#">
                            Blog
                            <img src="/CODE/assets/arrow_drop_down.png" alt="flèche vers le bas" />
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">Article de santé et de bien-être
                                    <img src="/CODE/assets/arrow-right.png" alt=" flèche vers la droite" />
                                </a>
                                <ul class="submenu">
                                    <li><a href="#">Santé</a></li>
                                    <li><a href="#">Bien-être</a></li>
                                    <li><a href="#">Régimes alimentaires</a></li>
                                    <li><a href="#">Remise en forme</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Fiches d'exercices sportifs
                                    <img src="/CODE/assets/arrow-right.png" alt=" flèche vers la droite" />
                                </a>
                                <ul class="submenu">
                                    <li><a href="#">Haut du corps</a></li>
                                    <li><a href="#">Bas du corps</a></li>
                                    <li><a href="#">Musculation</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Programmes d'entraînements
                                    <img src="/CODE/assets/arrow-right.png" alt=" flèche vers la droite" />
                                </a>
                                <ul class="submenu">
                                    <li><a href="#">Perte de poids</a></li>
                                    <li><a href="#">Musculation</a></li>
                                    <li><a href="#">Ventre plat</a></li>
                                    <li><a href="#">Bras toniques</a></li>
                                    <li><a href="#">Prise de muscle</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                    <li class="li-dropdown">
                        <a href="/CODE/php/simulateur.php">
                            Simulateurs
                            <img src="/CODE/assets/arrow_drop_down.png" alt="flèche vers le bas" />
                        </a>
                        <ul class="submenu">
                            <li><a href="/CODE/php/simulateur.php">Calcul ton IMC</a></li>
                            <li><a href="/CODE/php/simulateur.php">Calcul ton IMG</a></li>
                            <li><a href="/CODE/php/simulateur.php">Calcul ton apport calorique quotidien</a></li>
                        </ul>
                    </li>
                    <li><a href="/CODE/php/a-propos.php">À propos</a></li>
                    <li><a href="/CODE/php/contact.php">Contact</a></li>
                </ul>
            </nav>

            <div class="search-box">
                <img src="/CODE/assets/symbole-de-linterface-de-recherche.png" alt="Loupe" />
                <input type="search" placeholder="Rechercher..." />
            </div>
        </div>
    </header>

    <script>
    window.addEventListener("load", () => {
        const overlay = document.getElementById("logo-overlay");
        const logo = document.getElementById("logo-anim");

        // Délai avant l'animation
        setTimeout(() => {
            logo.classList.add("to-header"); // Déplace le logo
            overlay.classList.add("animate-out"); // Fond disparaît

            // Supprime l'overlay après transition
            setTimeout(() => {
                overlay.remove();
            }, 2000); // Durée de l'animation
        }, 200); // Délai avant lancement animation
    });
    </script>

</body>

</html>