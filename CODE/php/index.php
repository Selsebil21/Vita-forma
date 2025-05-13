<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vita forma - Je me remets au sport</title>
    <link rel="stylesheet" href="./includes/header-style.css" />
    <link rel="stylesheet" href="./includes/footer-style.css" />
    <link rel="stylesheet" href="../style_css/index-style.css" />
</head>

<body>
    <?php require './includes/header.php'; ?>

    <main>
        <section id="hero">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1>
                    Retrouvez tous nos conseils pour se<br />
                    remettre au sport en toute confiance
                </h1>
                <button class="cta-button">
                    Accéder au blog
                    <img src="../assets/double_chevron.png" alt="double chevron" />
                </button>
            </div>
            <img class="hero-img" src="../assets/entrainement-exercice.jpg" alt="entrainement-exercice" />
        </section>

        <section id="A-propos">
            <h2>A propos de nous</h2>
            <div class="content-a-propos">
                <h3>Bienvenue sur Vita-Forma, votre allié forme et bien-être !</h3>
                <p>
                    Nous sommes ravis de vous accueillir dans notre communauté dédiée à
                    la reprise d’une vie active et équilibrée. Envie de mieux comprendre
                    votre corps, d’améliorer vos entraînements et de prendre soin de
                    vous au quotidien ? Vita-Forma vous guide pas à pas avec des
                    conseils clairs, des programmes accessibles, et des analyses
                    complètes d’exercices pour bouger efficacement et en toute sécurité.
                    Sur le blog de notre site, nous vous proposons des articles
                    captivants enrichis de conseils précieux sur le sport, la santé et
                    la nutrition.
                </p>
                <a href="./a-propos.php">
                    <button class="button-sample" type="button">En savoir plus</button>
                </a>
            </div>
        </section>

        <section id="Categories">
            <h2>Catégories du Blog</h2>
            <div class="categories">
                <div class="item-categories">
                    <div class="content-categories">
                        <h3>Nos fiches d'exercices sportifs</h3>
                        <p>
                            <span> Boostez votre forme, un mouvement à la fois ! </span>
                            <br />
                            Découvrez nos programmes efficaces, des conseils pratiques et
                            des routines adaptées à tous les niveaux pour sculpter votre
                            corps et retrouver votre énergie. Que vous débutiez ou que vous
                            soyez déjà passionné(e) de sport, chaque article vous guide pas
                            à pas vers vos objectifs...
                        </p>
                        <button class="button-sample" type="button">
                            En savoir plus
                        </button>
                    </div>
                    <img src="../assets/athletic-exercise.jpg" alt="exercice d'entrainement sportif" />
                </div>

                <div class="item-categories">
                    <img src="../assets/training-gym.jpg" alt="exercice d'entrainement sportif" />
                    <div class="content-categories">
                        <h3>Nos programmes d'entrainement</h3>
                        <p>
                            <span> Boostez votre forme, un mouvement à la fois ! </span>
                            <br />
                            Découvrez nos programmes efficaces, des conseils pratiques et
                            des routines adaptées à tous les niveaux pour sculpter votre
                            corps et retrouver votre énergie. Que vous débutiez ou que vous
                            soyez déjà passionné(e) de sport, chaque article vous guide pas
                            à pas vers vos objectifs...
                        </p>
                        <button class="button-sample" type="button">
                            En savoir plus
                        </button>
                    </div>
                </div>

                <div class="item-categories">
                    <div class="content-categories">
                        <h3>Notre blog santé et bien-être</h3>
                        <p>
                            <span id="second">Prenez soin de vous, de l’intérieur comme de
                                l’extérieur!</span>
                            <br />
                            Retrouvez ici des conseils simples, naturels et efficaces pour
                            améliorer votre hygiène de vie, mieux récupérer après l’effort,
                            gérer votre stress et booster votre vitalité au quotidien. Parce
                            que le sport, c’est aussi l’équilibre du corps et de l’esprit...
                        </p>
                        <button class="button-sample" type="button">
                            En savoir plus
                        </button>
                    </div>
                    <img src="../assets/sante-bien-etre.jpg" alt="conseil santé bien-être blog" />
                </div>
            </div>
        </section>

        <section id="recemment-publies">
            <h2>Articles récemment publiés</h2>
            <div class="carousel-container">
                <button class="fleche gauche">
                    <img src="../assets/en-arriere.png" alt="flèche gauche" />
                </button>

                <div class="carousel-wrapper">
                    <div class="carousel-track">
                        <!-- Article 1 -->
                        <div class="article">
                            <img class="image-article" src="../assets/sport-dysfonction-erectrile.jpg" alt="..." />
                            <div class="article-content">
                                <h3>La pratique du sport et la dysfonction érectile</h3>
                                <p>
                                    <span id="second">Par l'auteur, le 24 Avril 2025</span><br />
                                    La dysfonction érectile (DE) est un problème de santé qui
                                    touche une proportion significative d’hommes, en particulier
                                    après l’âge de 40 ans. Mais saviez-vous que l’activité
                                    physique régulière peut jouer un rôle déterminant dans la
                                    prévention et la prise en charge de ce trouble ?
                                </p>
                                <button class="button-sample">Lire l'article</button>
                            </div>
                        </div>

                        <!-- Article 2 -->
                        <div class="article">
                            <img class="image-article" src="../assets/perte-ventre.jpg"
                                alt="perte de ventre après 40 ans" />
                            <div class="article-content">
                                <h3>Perdre du ventre après 40 ans : les vraies solutions</h3>
                                <p>
                                    <span id="second">Par l'auteur, le 18 Avril 2025</span><br />
                                    Perdre du ventre après 40 ans n’est pas seulement une question
                                    d’esthétique : c’est aussi un enjeu de santé. L’accumulation
                                    de graisse abdominale augmente considérablement le risque de
                                    maladies cardiovasculaires, de diabète de type 2 et
                                    d’hypertension...
                                </p>
                                <button class="button-sample">Lire l'article</button>
                            </div>
                        </div>

                        <!-- Article 3 -->
                        <div class="article">
                            <img class="image-article" src="../assets/alimentation-avant-sport.avif"
                                alt="alimentation avant le sport" />
                            <div class="article-content">
                                <h3>
                                    Alimentation avant le sport : quoi manger pour performer?
                                </h3>
                                <p>
                                    <span id="second">Par l'auteur, le 13 Avril 2025</span><br />
                                    Bien s’alimenter avant une séance de sport est la clé d’une
                                    performance réussie. Mais entre les conseils contradictoires
                                    et les idées reçues, il peut être difficile de savoir quoi
                                    manger exactement...
                                </p>
                                <button class="button-sample">Lire l'article</button>
                            </div>
                        </div>

                        <!-- Article 4 -->
                        <div class="article">
                            <img class="image-article" src="../assets/regime-vegetarien.jpg"
                                alt="regime végétarien ou vegetalien" />
                            <div class="article-content">

                                <h3>Régime végétarien : bienfaits, risques et conseils</h3>
                                <p>
                                    <span id="second">Par l'auteur, le 5 Avril 2025</span><br />
                                    Adopter un régime végétarien ou végétalien est devenu une
                                    tendance forte ces dernières années. Qu’il s’agisse de raisons
                                    éthiques, écologiques ou sanitaires, de plus en plus de
                                    Français renoncent à consommer de la viande et des produits
                                    d’origine animale. Mais ces régimes sont-ils vraiment
                                    bénéfiques pour la santé ?
                                </p>
                                <button class="button-sample">Lire l'article</button>
                            </div>
                        </div>


                        <!-- Ajoute autant d'articles que tu veux -->
                    </div>
                </div>
                <button class="fleche2">
                    <img src="../assets/en-arriere.png" alt="flèche droite" />
                </button>
            </div>

            <div class="carousel-dots">
                <!-- Les bulles seront générées dynamiquement en JS -->
            </div>
        </section>

        <section id="regles-cover">
            <div class="overlay">
                <div class="regles-content">
                    <h2>10 règles d'or à connaître avant de reprendre le sport</h2>
                    <p>
                        Reprendre une activité physique après une pause est une excellente
                        initiative. Mais pour éviter blessures et complications, voici les
                        10 règles d’or à suivre pour une reprise sportive sereine.
                    </p>
                    <a href="article.html" class="button-sample">Lire l'article</a>
                </div>
            </div>
        </section>

        <section id="simulateurs">
            <h2>Utilisez le simulateur pour :</h2>
            <div class="simulateurs-container">
                <div class="simulateur-card imc">
                    <h3>Calculer votre IMC</h3>
                </div>
                <div class="simulateur-card img">
                    <h3>Calculer votre IMG</h3>
                </div>
                <div class="simulateur-card calories">
                    <h3>Calculer votre apport calorique quotidien</h3>
                </div>
            </div>

            <!-- Un seul bouton, centré -->
            <div class="simulateur-button-container">
                <a href="simulateurs.html" class="cta-button"> Lancer la simulation</a>
            </div>
        </section>


        <section class=" slider">
            <div class="slides">
                <div class="slide active">
                    <img src="../assets/Panorama-planche-plage.jpg" alt="Slide 1" />
                    <div class="caption">
                        <p>Se remettre au sport en toute confiance</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="../assets/Panorama-tennis-woman.jpg" alt="Slide 2" />
                    <div class="caption">Reprenez en main votre forme physique</div>
                </div>
                <div class="slide">
                    <img src="../assets/Panorama-running-woman.jpg" alt="Slide 3" />
                    <div class="caption">Des conseils pour tous !</div>
                </div>
            </div>
        </section>

        <section id="newsletter">
            <h2>Abonnez-vous à notre newsletter</h2>

            <div class="newsletter-container">

                <p class="newsletter-text">
                    Tu veux des conseils simples, efficaces et motivants pour prendre
                    soin de ta santé et de ton corps ?
                    <br />
                    Rejoins la communauté <strong>Vita-Forma</strong> et transforme ta
                    routine santé en une vraie source d'énergie et de plaisir !
                    <br />
                    C’est gratuit et sans engagement.
                </p>
                <div class="news-bottom">
                    <div class="news-bottom-content">
                        <h3>Ne rate rien pour booster ta forme !</h3>
                        <form class="newsletter-form">
                            <input type="text" placeholder="Nom ou Pseudo" />
                            <input type="email" placeholder="exemple.nom@gmail.com" required />
                            <button type="submit" class="cta-button">Soumettre</button>
                        </form>
                    </div>
                    <img class="newsletter-image" src="../assets/megaphone-newletter-removebg-preview.png"
                        alt="megaphone alerte mail" />
                </div>
            </div>
        </section>
    </main>

    <?php require './includes/footer.php'; ?>

</body>

<script>
window.addEventListener("scroll", () => {
    const header = document.getElementById("main-header");
    if (window.scrollY > 700) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
</script>

<script>
const items = document.querySelectorAll('.item-categories');

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, {
    threshold: 0.3
});

items.forEach((item, index) => {
    // Alterne gauche/droite selon la position de l'élément
    if (index % 2 === 0) {
        item.classList.add('from-left');
    } else {
        item.classList.add('from-right');
    }
    observer.observe(item);
});
</script>

<script>
let currentIndex = 0;
const slides = document.querySelectorAll(".slide");

setInterval(() => {
    slides[currentIndex].classList.remove("active");
    currentIndex = (currentIndex + 1) % slides.length;
    slides[currentIndex].classList.add("active");
    document.querySelector(".slides").style.transform = `translateX(-${
        currentIndex * 100
      }%)`;
}, 4000);
</script>

<script>
const track = document.querySelector(".carousel-track");
const articles = document.querySelectorAll(".article");
const nextBtn = document.querySelector(".fleche2");
const prevBtn = document.querySelector(".gauche");
const dotsContainer = document.querySelector(".carousel-dots");

const visibleArticles = 3;
const total = articles.length;
const totalSlides = Math.ceil(total / visibleArticles);
let index = 0;

// Crée les bulles
for (let i = 0; i < totalSlides; i++) {
    const dot = document.createElement("div");
    dot.classList.add("dot");
    if (i === 0) dot.classList.add("active");
    dot.addEventListener("click", () => {
        index = i;
        updateCarousel();
    });
    dotsContainer.appendChild(dot);
}

function updateDots() {
    document.querySelectorAll(".carousel-dots .dot").forEach((dot, i) => {
        dot.classList.toggle("active", i === index);
    });
}

function updateCarousel() {
    const width = articles[0].offsetWidth + 19; // 19px ≈ gap
    track.style.transform = `translateX(-${index * width * visibleArticles}px)`;
    updateDots();
}

function next() {
    index = (index + 1) % totalSlides;
    updateCarousel();
}

function prev() {
    index = (index - 1 + totalSlides) % totalSlides;
    updateCarousel();
}

nextBtn.addEventListener("click", next);
prevBtn.addEventListener("click", prev);
setInterval(next, 5000);
</script>

</html>