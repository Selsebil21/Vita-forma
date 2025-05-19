<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vita forma - Je me remets au sport</title>
    <link rel="stylesheet" href="./includes/header-style.css" />
    <link rel="stylesheet" href="./includes/footer-style.css" />
    <link rel="stylesheet" href="../style_css/simulateur-style.css" />
</head>

<body>
    <?php require './includes/header.php'; ?>

    <main>
        <img id="hero-simulateur" src="/assets/fresque silhouette multiple.avif" alt="">
        <div class="tabs">
            <div class="tab-titles">
                <button class="tab-button active" data-tab="imc">IMC</button>
                <button class="tab-button" data-tab="img">IMG</button>
                <button class="tab-button" data-tab="apport">Apport Calorique</button>
            </div>

            <div class="tab-content active" id="imc">
                <!-- IMC -->
                <section id="imc-section">
                    <h2>Calcul de l'IMC (Indice de Masse Corporelle)</h2>
                    <p> Il permet de définir des catégories de poids, qui sont associées à des risques différents
                        pour
                        la santé. <br> Voici les catégories standards de l’IMC et leurs interprétations pour les adultes
                        selon l’Organisation Mondiale de la Santé (OMS):
                    </p>
                    <ul>
                        <li>
                            <h3>Insuffisance pondérale (maigreur)</h3>
                            <p> si le résultat est inférieur à 16,5, alors le sujet est en dénutrition ou maigreur
                                sévère <br>
                                si le résultat est compris entre : 16,5 ≤ IMC < 18,5, alors le sujet est en maigreur
                                    </p>
                        </li>
                        <li>
                            <h3> Corpulence normale</h3>
                            <p> 18,5 ≤ IMC < 25 : Normale </p>
                        </li>
                        <li>
                            <h3> Surpoids</h3>
                            <p> 25 ≤ IMC < 30 : Surpoids </p>
                        </li>
                        <li>
                            <h3> Obésité</h3>
                            <p> 30 ≤ IMC < 35 : Obésité modérée (classe 1)<br>
                                    35 ≤ IMC < 40 : Obésité élevée (classe 2)<br>
                                        IMC ≥ 40 : Obésité morbide ou massive (classe 3)
                            </p>
                        </li>
                    </ul>

                    <h3>Comment se calcul l'IMC ?</h3>
                    <p>
                        L'IMC est calculé selon la formule :
                        <strong>poids
                            (kg) / (taille en m)²</strong>.
                    </p>

                    <img src="/assets/IMC.jpg" alt="Indice de Masse Corporelle" />


                    <form id="imc-form">
                        <label for="imc-poids">Poids (kg)</label>
                        <input type="number" id="imc-poids" required />

                        <label for="imc-taille">Taille (cm)</label>
                        <input type="number" id="imc-taille" required />

                        <button type="submit">Calculer l'IMC</button>
                    </form>
                    <div class="result" id="imc-result"></div>
                    <div class="visuel">
                        <img id="image-resultat" src="../assets/IMC.jpg" alt="résultat visuel IMC graphique"
                            style="display:none;" />
                    </div>
                </section>
            </div>

            <div class="tab-content" id="img">
                <!-- IMG -->
                <section id="img-section">
                    <h2>Calcul de l'IMG (Indice de Masse Grasse)</h2>
                    <p>L'IMG est une estimation du pourcentage de masse grasse selon la formule de Deurenberg
                        :<br />
                        <strong>(1.2 × IMC) + (0.23 × âge) - (10.8 × sexe) - 5.4</strong><br />
                        (sexe = 1 pour homme, 0 pour femme)
                    </p>

                    <form id="img-form">
                        <label for="img-age">Âge</label>
                        <input type="number" id="img-age" required />

                        <label for="img-sexe">Sexe</label>
                        <select id="img-sexe">
                            <option value="0">Femme</option>
                            <option value="1">Homme</option>
                        </select>

                        <label for="img-poids">Poids (kg)</label>
                        <input type="number" id="img-poids" required />

                        <label for="img-taille">Taille (cm)</label>
                        <input type="number" id="img-taille" required />

                        <button type="submit">Calculer l'IMG</button>
                    </form>
                    <div class="result" id="img-result"></div>
                    <div class="visuel">
                        <img id="image-resultat" src="" alt="résultat visuel" style="display:none;" />
                    </div>
                </section>
            </div>

            <div class="tab-content" id="apport">
                <!-- Apport calorique -->
                <section id="calories-section">
                    <h2>Calcul des Besoins Caloriques Journaliers</h2>
                    <p>Formule de Harris-Benedict (pour le métabolisme de base) ajustée selon le niveau d'activité.
                    </p>

                    <form id="calorie-form">
                        <label for="calorie-age">Âge</label>
                        <input type="number" id="calorie-age" required />

                        <label for="calorie-sexe">Sexe</label>
                        <select id="calorie-sexe">
                            <option value="femme">Femme</option>
                            <option value="homme">Homme</option>
                        </select>

                        <label for="calorie-poids">Poids (kg)</label>
                        <input type="number" id="calorie-poids" required />

                        <label for="calorie-taille">Taille (cm)</label>
                        <input type="number" id="calorie-taille" required />

                        <label for="calorie-activite">Niveau d'activité</label>
                        <select id="calorie-activite">
                            <option value="1.2">Sédentaire</option>
                            <option value="1.375">Légèrement actif</option>
                            <option value="1.55">Modérément actif</option>
                            <option value="1.725">Très actif</option>
                            <option value="1.9">Extrêmement actif</option>
                        </select>

                        <button type="submit">Calculer les calories</button>
                    </form>
                    <div class="result" id="calorie-result"></div>
                    <div class="visuel">
                        <img id="image-resultat" src="" alt="résultat visuel" style="display:none;" />
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php require './includes/footer.php'; ?>

</body>



<script>
    // IMC
    document.getElementById('imc-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const poids = parseFloat(document.getElementById('imc-poids').value);
        const taille = parseFloat(document.getElementById('imc-taille').value) / 100;
        const imc = (poids / (taille * taille)).toFixed(2);
        document.getElementById('imc-result').textContent = `Votre IMC est ${imc}`;
        afficherImageIMC(imc);

    });

    // IMG
    document.getElementById('img-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const age = parseFloat(document.getElementById('img-age').value);
        const sexe = parseInt(document.getElementById('img-sexe').value);
        const poids = parseFloat(document.getElementById('img-poids').value);
        const taille = parseFloat(document.getElementById('img-taille').value) / 100;
        const imc = poids / (taille * taille);
        const img = (1.2 * imc + 0.23 * age - 10.8 * sexe - 5.4).toFixed(2);
        document.getElementById('img-result').textContent = `Votre IMG est ${img} %`;
    });

    // Calories
    document.getElementById('calorie-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const age = parseInt(document.getElementById('calorie-age').value);
        const sexe = document.getElementById('calorie-sexe').value;
        const poids = parseFloat(document.getElementById('calorie-poids').value);
        const taille = parseFloat(document.getElementById('calorie-taille').value);
        const activite = parseFloat(document.getElementById('calorie-activite').value);

        let bmr;
        if (sexe === 'homme') {
            bmr = 88.362 + (13.397 * poids) + (4.799 * taille) - (5.677 * age);
        } else {
            bmr = 447.593 + (9.247 * poids) + (3.098 * taille) - (4.330 * age);
        }

        const calories = Math.round(bmr * activite);
        document.getElementById('calorie-result').textContent =
            `Vos besoins caloriques journaliers sont d’environ ${calories} kcal.`;
    });

    document.querySelectorAll(".tab-button").forEach(button => {
        button.addEventListener("click", () => {
            const tab = button.getAttribute("data-tab");

            document.querySelectorAll(".tab-button").forEach(btn => btn.classList.remove("active"));
            document.querySelectorAll(".tab-content").forEach(content => content.classList.remove(
                "active"));

            button.classList.add("active");
            document.getElementById(tab).classList.add("active");
        });
    });

    function afficherImageIMC(imc) {
        const img = document.getElementById("image-resultat");
        let src = "../assets/IMC.jpg";

        if (imc < 18.5) src = "images/maigreur.png";
        else if (imc < 25) src = "images/normal.png";
        else if (imc < 30) src = "images/surpoids.png";
        else src = "images/obesite.png";

        img.src = src;
        img.style.display = "block";
        img.classList.remove("show");

        // Forcer le reflow pour relancer l'animation
        void img.offsetWidth;

        img.classList.add("show");
    };
</script>

</html>