<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./header-style.css" />
</head>

<body>
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
                            <li><a href="#">Santé & Bien-être</a></li>
                            <li><a href="#">Sport</a></li>
                            <li><a href="#">Entraînements et programmes de sport</a></li>
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

</body>

</html>