-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 27 mai 2025 à 06:50
-- Version du serveur : 9.1.0
-- Version de PHP : 8.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vita_forma`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `prenom`, `email`, `mot_de_passe`) VALUES
(1, 'Merine', 'Selsebil', 'selsebil.merine@gmail.com', 'vitaforma');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_articles` int NOT NULL,
  `titre` varchar(250) NOT NULL,
  `extrait` varchar(1000) NOT NULL,
  `contenu` varchar(5000) NOT NULL,
  `id_categorie` int NOT NULL,
  `date_publication` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(250) NOT NULL,
  `statut` varchar(20) NOT NULL DEFAULT 'brouillon',
  PRIMARY KEY (`id_articles`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_articles`, `titre`, `extrait`, `contenu`, `id_categorie`, `date_publication`, `image`, `statut`) VALUES
(1, 'Calcul ton IMG', '', '<div class=\"elementor-element elementor-element-b72a8da e-flex e-con-boxed e-con e-parent e-lazyloaded\" data-id=\"b72a8da\" data-element_type=\"container\">\r\n<div class=\"e-con-inner\">\r\n<div class=\"elementor-element elementor-element-a182b6f elementor-widget elementor-widget-text-editor\" data-id=\"a182b6f\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h3 data-start=\"0\" data-end=\"63\"><strong data-start=\"4\" data-end=\"63\">D&eacute;finition &nbsp;l&rsquo;Indice de Masse Grasse (IMG)</strong></h3>\r\n<p data-start=\"85\" data-end=\"414\">L&rsquo;<strong data-start=\"87\" data-end=\"119\">Indice de Masse Grasse (IMG)</strong> est un pourcentage qui repr&eacute;sente la proportion de masse grasse dans le corps par rapport &agrave; la masse totale. Il est utilis&eacute; pour &eacute;valuer la composition corporelle d&rsquo;un individu, contrairement &agrave; l&rsquo;<strong data-start=\"316\" data-end=\"352\">Indice de Masse Corporelle (IMC)</strong>, qui ne distingue pas la masse grasse de la masse musculaire.</p>\r\n<p data-start=\"416\" data-end=\"480\">L&rsquo;IMG peut &ecirc;tre estim&eacute; &agrave; l&rsquo;aide de diff&eacute;rentes m&eacute;thodes, comme :</p>\r\n<ul data-start=\"481\" data-end=\"811\">\r\n<li data-start=\"481\" data-end=\"579\"><strong data-start=\"483\" data-end=\"509\">Formules math&eacute;matiques</strong> (ex: m&eacute;thode de Deurenberg prenant en compte l&rsquo;IMC, l&rsquo;&acirc;ge et le sexe)</li>\r\n<li data-start=\"580\" data-end=\"679\"><strong data-start=\"582\" data-end=\"601\">Imp&eacute;dancem&eacute;trie</strong> (utilisation d&rsquo;un appareil envoyant un courant &eacute;lectrique &agrave; travers le corps)</li>\r\n<li data-start=\"680\" data-end=\"742\"><strong data-start=\"682\" data-end=\"697\">Plicom&eacute;trie</strong> (mesure des plis cutan&eacute;s avec un adipom&egrave;tre)</li>\r\n<li data-start=\"743\" data-end=\"811\"><strong data-start=\"745\" data-end=\"769\">Densitom&eacute;trie ou IRM</strong> (techniques plus pr&eacute;cises mais co&ucirc;teuses)</li>\r\n</ul>\r\n<p data-start=\"813\" data-end=\"829\">&nbsp;</p>\r\n<p data-start=\"813\" data-end=\"829\"><strong data-start=\"818\" data-end=\"829\">Utilit&eacute;: </strong>L&rsquo;IMG est important pour :</p>\r\n<ol data-start=\"857\" data-end=\"1454\">\r\n<li data-start=\"857\" data-end=\"1007\"><strong data-start=\"860\" data-end=\"892\">&Eacute;valuer la sant&eacute; m&eacute;tabolique</strong> : Un exc&egrave;s de masse grasse est li&eacute; &agrave; des risques accrus de maladies cardiovasculaires, diab&egrave;te, hypertension, etc.</li>\r\n<li data-start=\"1008\" data-end=\"1166\"><strong data-start=\"1011\" data-end=\"1051\">Diff&eacute;rencier surpoids et musculature</strong> : Contrairement &agrave; l&rsquo;IMC, l&rsquo;IMG permet de distinguer une personne muscl&eacute;e d&rsquo;une personne ayant un exc&egrave;s de graisse.</li>\r\n<li data-start=\"1167\" data-end=\"1294\"><strong data-start=\"1170\" data-end=\"1208\">Suivi de la composition corporelle</strong> : Utile dans le cadre d&rsquo;un r&eacute;gime ou d&rsquo;un programme sportif pour mesurer les progr&egrave;s.</li>\r\n<li data-start=\"1295\" data-end=\"1454\"><strong data-start=\"1298\" data-end=\"1348\">Personnaliser les objectifs de remise en forme</strong> : Permet d&rsquo;adapter les strat&eacute;gies nutritionnelles et sportives en fonction du taux de masse grasse id&eacute;al.</li>\r\n</ol>\r\n<h4 data-start=\"1456\" data-end=\"1494\">&nbsp;</h4>\r\n<h4 data-start=\"1456\" data-end=\"1494\"><strong data-start=\"1461\" data-end=\"1494\">Valeurs de r&eacute;f&eacute;rence de l&rsquo;IMG</strong></h4>\r\n<p data-start=\"1495\" data-end=\"1557\">Les valeurs normales varient en fonction de l&rsquo;&acirc;ge et du sexe :</p>\r\n<ul data-start=\"1558\" data-end=\"1680\">\r\n<li data-start=\"1558\" data-end=\"1619\"><strong data-start=\"1560\" data-end=\"1570\">Femmes</strong> : 20-30 % (athl&egrave;tes : 14-20 %, ob&eacute;sit&eacute; : &gt; 32 %)</li>\r\n<li data-start=\"1620\" data-end=\"1680\"><strong data-start=\"1622\" data-end=\"1632\">Hommes</strong> : 10-20 % (athl&egrave;tes : 6-13 %, ob&eacute;sit&eacute; : &gt; 25 %)</li>\r\n</ul>\r\n<p data-start=\"1682\" data-end=\"1832\">Un IMG trop bas peut aussi &ecirc;tre probl&eacute;matique, entra&icirc;nant des risques comme des troubles hormonaux, une baisse d&rsquo;&eacute;nergie ou une fragilit&eacute; immunitaire.</p>\r\n<p data-start=\"1682\" data-end=\"1832\">&nbsp;</p>\r\n<h4 style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><strong>Hommes :</strong></span></h4>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>IMG tr&egrave;s bas : Moins de 6%</strong><br><strong>IMG bas : 6% &ndash; 14%</strong><br><strong>IMG normal : 14% &ndash; 25%</strong><br><strong>IMG &eacute;lev&eacute; : Plus de 25%</strong></p>\r\n<h4 style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><strong>Femmes:</strong></span></h4>\r\n<p style=\"text-align: center;\"><strong>IMG tr&egrave;s bas : Moins de 16%</strong><br><strong>IMG bas : 16% &ndash; 25%</strong></p>\r\n</div>\r', 2, NULL, 'calcul-img.jpg', 'brouillon'),
(2, 'Les 10 règles d’or à connaître avant de reprendre le sport', '', '<p>Reprendre une activit&eacute; physique apr&egrave;s une pause prolong&eacute;e est une excellente initiative pour votre bien-&ecirc;tre. Cependant, il est important de respecter certaines r&egrave;gles afin d&rsquo;&eacute;viter les blessures et les complications de sant&eacute;. Voici les&nbsp;<strong>10 r&egrave;gles d&rsquo;or</strong> pour une reprise sportive en toute s&eacute;r&eacute;nit&eacute;.</p>\r\n<h2 class=\"wp-block-heading\"><strong>1. Je signale toute douleur inhabituelle &agrave; mon m&eacute;decin</strong></h2>\r\n<p>&nbsp;</p>\r\n<p>Avant de reprendre une activit&eacute; physique, il est essentiel d&rsquo;&ecirc;tre &agrave; l&rsquo;&eacute;coute de son corps. Certaines douleurs peuvent &ecirc;tre des signaux d&rsquo;alerte :</p>\r\n<p>&nbsp;</p>\r\n<p>✅&nbsp;<strong>Douleurs dans la poitrine</strong><br>✅&nbsp;<strong>Essoufflement ou fatigue anormale</strong><br>✅&nbsp;<strong>Palpitations &agrave; l&rsquo;effort ou juste apr&egrave;s</strong><br>✅&nbsp;<strong>Malaise pendant ou apr&egrave;s l&rsquo;effort</strong></p>\r\n<p>Si vous ressentez l&rsquo;un de ces sympt&ocirc;mes, consultez un m&eacute;decin avant toute reprise. Cela peut &eacute;viter des complications graves, notamment d&rsquo;ordre cardiovasculaire.</p>\r\n<p>&nbsp;</p>\r\n<h2>&nbsp;</h2>\r\n<h2 class=\"wp-block-heading\"><strong>2. Je r&eacute;alise un bilan m&eacute;dical si n&eacute;cessaire</strong></h2>\r\n<p>&nbsp;</p>\r\n<p>Certaines personnes pr&eacute;sentent un risque accru lorsqu&rsquo;elles reprennent le sport apr&egrave;s un long arr&ecirc;t.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Un bilan m&eacute;dical est recommand&eacute; si vous &ecirc;tes :</strong></p>\r\n<p>&nbsp;</p>\r\n<ul class=\"wp-block-list\">\r\n<li style=\"list-style-type: none;\">&nbsp;</li>\r\n</ul>\r\n<ul class=\"wp-block-list\">\r\n<li style=\"list-style-type: none;\">\r\n<ul class=\"wp-block-list\">\r\n<li>Une femme de plus de&nbsp;<strong>45 ans</strong></li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul class=\"wp-block-list\">\r\n<li style=\"list-style-type: none;\">\r\n<ul class=\"wp-block-list\">\r\n<li>Un homme de plus de&nbsp;<strong>35 ans</strong></li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul class=\"wp-block-list\">\r\n<li style=\"list-style-type: none;\">\r\n<ul class=\"wp-block-list\">\r\n<li>Une personne ayant des ant&eacute;c&eacute;dents m&eacute;dicaux (hypertension, diab&egrave;te, ant&eacute;c&eacute;dents cardiaques)</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Ce bilan permet d&rsquo;&eacute;valuer votre &eacute;tat de sant&eacute; et d&rsquo;adapter votre programme d&rsquo;entra&icirc;nement en cons&eacute;quence.</p>\r\n<p>&nbsp;</p>\r\n<h2>&nbsp;</h2>\r\n<h2 class=\"wp-block-heading\"><strong>3. J&rsquo;adapte mon effort en fonction de mon &eacute;tat de forme</strong></h2>\r\n<p>&nbsp;</p>\r\n<p>Votre corps a perdu l&rsquo;habitude de l&rsquo;effort et a besoin de temps pour se r&eacute;adapter.</p>\r\n<p>&nbsp;</p>\r\n<p>????&nbsp;<strong>Conseils pour une reprise progressive :</strong></p>\r\n<p>&nbsp;</p>\r\n<ul class=\"wp-block-list\">\r\n<li style=\"list-style-type: none;\">&nbsp;</li>\r\n</ul>\r\n<ul class=\"wp-block-list\">\r\n<li style=\"list-style-type: none;\">\r\n<ul class=\"wp-block-list\">\r\n<li>Augmentez l&rsquo;intensit&eacute; et la dur&eacute;e de vos s&eacute;ances&nbsp;<strong>progressivement</strong></li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<div style=\"clear: both; margin-top: 0em; margin-bottom: 1em;\"><a class=\"u649ecbf20f43261424280317c63a6077\" href=\"https://jemeremetsausport.com/pompes-diamant/\" target=\"_blank\" rel=\"dofollow noopener\">\r\n<div style=\"padding-right: 1em;\">&nbsp;</div>\r\n</a></div>\r\n<p>&nbsp;</p>\r\n<ul class=\"wp-block-list\">\r\n<li style=\"list-style-type: none;\">\r\n<ul class=\"wp-block-list\">\r\n<li>&Eacute;coutez votre corps : la douleur et l&rsquo;&eacute;puisement sont des signaux d&rsquo;alerte</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul class=\"wp-block-list\">\r\n<li style=\"list-style-type: none;\">\r\n<ul class=\"wp-block-list\">\r\n<li>Ne cherchez pas &agrave; retrouver votre niveau d&rsquo;avant imm&eacute;diatement</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>⏳ R&egrave;gle des 10 %</strong>&nbsp;: n&rsquo;augmentez pas votre charge d&rsquo;entra&icirc;nement de plus de 10 % par semaine pour &eacute;viter les blessures.</p>\r\n<p>&nbsp;</p>\r\n<h2>&nbsp;</h2>\r\n<h2 class=\"wp-block-heading\"><strong>4. J&rsquo;encadre chaque s&eacute;ance d&rsquo;un &eacute;chauffement et d&rsquo;un retour au calme</strong></h2>\r\n<p>&nbsp;</p>\r\n<p>L&rsquo;&eacute;chauffement et la r&eacute;cup&eacute;ration sont essentiels pour &eacute;viter les blessures.</p>\r\n<p>&nbsp;</p>\r\n<p>????&nbsp;<strong>&Eacute;chauffement (10 &agrave; 15 min) :</strong></p>\r\n<p>&nbsp;</p>\r\n<ul class=\"wp-block-list\">\r\n<li style=\"list-style-type: none;\">&nbsp;</li>\r\n</ul>\r\n<ul class=\"wp-block-list\">\r\n<li style=\"list-style-type: none;\">\r\n<ul class=\"wp-block-list\">\r\n<li>Exercices cardiovasculaires l&eacute;gers (marche rapide, v&eacute;lo, corde &agrave; sauter)</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', 1, NULL, 'athletik-lacets2.jpg', 'brouillon'),
(3, 'Régime végétarien : bienfaits, risques et conseils', '', '<p>Adopter un r&eacute;gime v&eacute;g&eacute;tarien ou v&eacute;g&eacute;talien est devenu une tendance forte ces derni&egrave;res ann&eacute;es. Qu&rsquo;il s&rsquo;agisse de raisons &eacute;thiques, &eacute;cologiques ou sanitaires, de plus en plus de Fran&ccedil;ais renoncent &agrave; consommer de la viande et des produits d&rsquo;origine animale. Mais ces r&eacute;gimes sont-ils vraiment b&eacute;n&eacute;fiques pour la sant&eacute; ? L&rsquo;Agence nationale de s&eacute;curit&eacute; sanitaire de l&rsquo;alimentation, de l&rsquo;environnement et du travail (Anses) a publi&eacute; une revue compl&egrave;te des donn&eacute;es scientifiques disponibles afin d&rsquo;&eacute;valuer les b&eacute;n&eacute;fices et les risques associ&eacute;s &agrave; ces choix alimentaires.</p>\r\n<p><strong>Pourquoi cette &eacute;tude &eacute;tait-elle n&eacute;cessaire ?</strong><br>Le Programme National Nutrition Sant&eacute; (PNNS) de 2016 ne tenait pas compte des r&eacute;gimes dits &laquo;&nbsp;d&rsquo;exclusion&nbsp;&raquo;. Avec la progression rapide de l&rsquo;alimentation v&eacute;g&eacute;tarienne, il devenait urgent de proposer des rep&egrave;res nutritionnels adapt&eacute;s &agrave; ces populations. C&rsquo;est dans cette optique que l&rsquo;Anses a conduit une revue approfondie de 131 &eacute;tudes scientifiques, portant sur les effets du v&eacute;g&eacute;tarisme et du v&eacute;g&eacute;talisme sur la sant&eacute; globale.</p>\r\n<h2 class=\"wp-block-heading\">Que recouvrent les termes &laquo;&nbsp;v&eacute;g&eacute;tarien&nbsp;&raquo; et &laquo;&nbsp;v&eacute;g&eacute;talien&nbsp;&raquo; ?</h2>\r\n<p>Il existe plusieurs variantes du v&eacute;g&eacute;tarisme. Le point commun est l&rsquo;exclusion de toute chair animale, comme la viande, le poisson, les crustac&eacute;s ou les mollusques. &Agrave; l&rsquo;int&eacute;rieur de cette cat&eacute;gorie, on distingue :</p>\r\n<ul class=\"wp-block-list\">\r\n<li><strong>Les lacto-ovov&eacute;g&eacute;tariens</strong>, qui consomment encore des &oelig;ufs, des produits laitiers et parfois du miel.</li>\r\n<li><strong>Les v&eacute;g&eacute;taliens</strong>, qui excluent tous les produits d&rsquo;origine animale, y compris les &oelig;ufs, les produits laitiers et le miel.</li>\r\n</ul>\r\n<p>Selon les chiffres de Statista en 2024, environ 5 % des Fran&ccedil;ais seraient v&eacute;g&eacute;tariens et 3 % v&eacute;g&eacute;taliens, contre seulement 1 % en 2020 d&rsquo;apr&egrave;s une enqu&ecirc;te Ifop. Cette &eacute;volution rapide illustre un changement profond dans les habitudes alimentaires, n&eacute;cessitant un encadrement nutritionnel plus sp&eacute;cifique.</p>\r\n<h2 class=\"wp-block-heading\">Quels b&eacute;n&eacute;fices sant&eacute; sont associ&eacute;s &agrave; ces r&eacute;gimes ?</h2>\r\n<p>De nombreuses &eacute;tudes montrent que l&rsquo;adoption d&rsquo;un r&eacute;gime v&eacute;g&eacute;tarien ou v&eacute;g&eacute;talien peut apporter plusieurs avantages sur le plan de la sant&eacute;. Voici ce que r&eacute;v&egrave;le la revue de l&rsquo;Anses :</p>\r\n<div style=\"clear: both; margin-top: 0em; margin-bottom: 1em;\"><a class=\"u834c11f2bfd5df170acdd5de56f65cfd\" href=\"https://jemeremetsausport.com/la-surcharge-progressive/\" target=\"_blank\" rel=\"dofollow noopener\">\r\n<div style=\"padding-left: 1em; padding-right: 1em;\"><span class=\"ctaText\">LIRE AUSSI</span>&nbsp; <span class=\"postTitle\">Ma&icirc;trisez la surcharge progressive : le secret pour booster votre force et votre musculature</span></div>\r\n</a></div>\r\n<p><strong>Un meilleur contr&ocirc;le du poids</strong><br>Quatre &eacute;tudes prospectives ont montr&eacute; que les personnes suivant un r&eacute;gime v&eacute;g&eacute;talien tendent &agrave; prendre moins de poids au fil du temps par rapport aux omnivores. Cette association n&rsquo;a pas &eacute;t&eacute; retrouv&eacute;e de mani&egrave;re significative chez les v&eacute;g&eacute;tariens qui consomment encore des produits animaux.</p>\r\n<p><strong>Une r&eacute;duction marqu&eacute;e du risque de diab&egrave;te de type 2</strong><br>Les v&eacute;g&eacute;tariens ont entre 35 % et 38 % moins de risque de d&eacute;velopper un diab&egrave;te de type 2 selon plusieurs &eacute;tudes. &Agrave; l&rsquo;inverse, une consommation r&eacute;guli&egrave;re de viande est associ&eacute;e &agrave; une augmentation du risque pouvant atteindre 74 %. Une partie de cet effet semble s&rsquo;expliquer par un poids corporel plus faible chez les v&eacute;g&eacute;tariens, mais pas uniquement.</p>\r\n<div class=\"google-auto-placed ap_container\" style=\"width: 100%; height: auto; clear: both; text-align: center;\"><ins class=\"adsbygoogle adsbygoogle-noablate\" style=\"display: block; margin: auto; background-color: transparent; height: 0px;\" data-ad-format=\"auto\" data-ad-client=\"ca-pub-7314494662903523\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\"> </ins></div>', 3, NULL, 'regime-vegetarien.jpg', 'brouillon'),
(0, ' Perdre du ventre après 40 ans : les vraies solutions', '', '<h2><strong>Pourquoi Perdre du ventre apr&egrave;s 40 ans?&nbsp;</strong></h2>\r\n<p>Perdre du ventre apr&egrave;s 40 ans n&rsquo;est pas seulement une question d&rsquo;esth&eacute;tique : c&rsquo;est aussi un enjeu <strong>de sant&eacute;</strong>. L&rsquo;accumulation de graisse abdominale augmente consid&eacute;rablement le risque de maladies cardiovasculaires, de diab&egrave;te de type 2 et d&rsquo;hypertension.</p>\r\n<p>Avec l&rsquo;&acirc;ge, le m&eacute;tabolisme ralentit, la masse musculaire diminue et les hormones changent, favorisant <strong>le stockage de graisse autour de l&rsquo;abdomen</strong>. Heureusement, en adaptant son alimentation, son activit&eacute; physique et son mode de vie, il est tout &agrave; fait possible de retrouver un ventre plat et en bonne sant&eacute;.</p>\r\n<p class=\"p3\">Perdre du ventre apr&egrave;s 40 ans peut sembler plus difficile qu&rsquo;&agrave; 20 ou 30 ans, mais avec les bonnes strat&eacute;gies, c&rsquo;est tout &agrave; fait possible. Le m&eacute;tabolisme ralentit avec l&rsquo;&acirc;ge, la masse musculaire diminue, et les hormones peuvent jouer un r&ocirc;le dans l&rsquo;accumulation de graisse abdominale. Dans cet article, nous allons voir les causes de cette prise de poids et surtout les meilleures solutions pour retrouver un ventre plat efficacement.</p>\r\n<p>&nbsp;</p>\r\n<p class=\"p5\">Pourquoi Perd-on Moins Facilement du Ventre Apr&egrave;s 40 Ans ?</p>\r\n<p>Dans ce guide, nous allons voir <strong>pourquoi la graisse abdominale est un danger pour la sant&eacute; et comment s&rsquo;en d&eacute;barrasser efficacement</strong>.</p>\r\n<h2><strong>1.Pourquoi perd-on moins facilement du ventre apr&egrave;s 40 ans ? </strong></h2>\r\n<p>Pass&eacute; la quarantaine, perdre du ventre devient un v&eacute;ritable d&eacute;fi. Vous avez beau surveiller votre alimentation et faire du sport, les kilos s&rsquo;accrochent plus qu&rsquo;avant. <strong>Pourquoi est-il plus difficile d&rsquo;&eacute;liminer la graisse abdominale apr&egrave;s 40 ans ?</strong> Plusieurs facteurs entrent en jeu : ralentissement du m&eacute;tabolisme, d&eacute;s&eacute;quilibres hormonaux, diminution de la masse musculaire et mode de vie souvent plus s&eacute;dentaire. Analysons ces raisons en d&eacute;tail et voyons comment y rem&eacute;dier efficacement.</p>\r\n<h3><span style=\"text-decoration: underline;\">1. Un m&eacute;tabolisme plus lent avec l&rsquo;&acirc;ge</span></h3>\r\n<p>Le m&eacute;tabolisme de base correspond &agrave; la quantit&eacute; de calories br&ucirc;l&eacute;es au repos pour assurer les fonctions vitales (respiration, circulation sanguine, r&eacute;gulation de la temp&eacute;rature). <strong>Avec l&rsquo;&acirc;ge, ce m&eacute;tabolisme ralentit naturellement.</strong></p>\r\n<ul>\r\n<li><strong>Perte musculaire</strong> : D&egrave;s 30 ans, nous perdons environ 3 &agrave; 8 % de notre masse musculaire par d&eacute;cennie (sarcop&eacute;nie). Or, les muscles consomment plus d&rsquo;&eacute;nergie que la graisse, ce qui r&eacute;duit la d&eacute;pense calorique.</li>\r\n<li><strong>Moindre activit&eacute; physique</strong> : Avec les responsabilit&eacute;s professionnelles et familiales, on bouge souvent moins qu&rsquo;&agrave; 20 ou 30 ans.</li>\r\n</ul>\r\n<p>???? <strong>Solution</strong> : Augmenter la masse musculaire gr&acirc;ce &agrave; des exercices de renforcement (halt&egrave;res, gainage, squats).</p>\r\n<h2>2. Les hormones : un r&ocirc;le cl&eacute; dans l&rsquo;accumulation de la graisse abdominale</h2>\r\n<p>Les hormones jouent un r&ocirc;le majeur dans la r&eacute;partition des graisses corporelles. <strong>Apr&egrave;s 40 ans, leur production &eacute;volue, favorisant le stockage des graisses au niveau du ventre.</strong></p>\r\n<div style=\"clear: both; margin-top: 0em; margin-bottom: 1em;\"><a class=\"u87c8eba60e27120aa52cc2c94f4578d6\" href=\"https://jemeremetsausport.com/battle-rope/\" target=\"_blank\" rel=\"dofollow noopener\">\r\n<div style=\"padding-left: 1em; padding-right: 1em;\"><span class=\"ctaText\">LIRE AUSSI</span>&nbsp; <span class=\"postTitle\">D&eacute;cha&icirc;nez votre force avec la Battle Rope !</span></div>\r\n</a></div>\r\n<h4>Chez les femmes</h4>\r\n<ul>\r\n<li><strong>La m&eacute;nopause</strong> entra&icirc;ne une chute des &oelig;strog&egrave;nes, favorisant un stockage des graisses sur l&rsquo;abdomen plut&ocirc;t que sur les hanches et les cuisses.</li>\r\n<li><strong>Augmentation du cortisol</strong> (l&rsquo;hormone du stress) : un stress chronique stimule la production de cortisol, ce qui favorise l&rsquo;accumulation de graisse visc&eacute;rale.</li>\r\n</ul>\r\n<h4>Chez les hommes</h4>\r\n<ul>\r\n<li><strong>Baisse de la testost&eacute;rone</strong> : Cette hormone favorise le d&eacute;veloppement musculaire et la combustion des graisses. Apr&egrave;s 40 ans, sa diminution entra&icirc;ne un stockage plus facile des graisses, notamment au niveau abdominal.</li>\r\n</ul>\r\n<p>???? <strong>Solution</strong> : R&eacute;duire le stress (m&eacute;ditation, yoga, sommeil de qualit&eacute;) et ad', 4, NULL, 'perte-ventre.jpg', 'brouillon');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'sport'),
(2, 'Santé & bien-être'),
(3, 'Alimentation'),
(4, 'Sport'),
(5, 'Programme');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sujet` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date_envoi` datetime NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id_newsletter` int NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_inscription` datetime NOT NULL,
  PRIMARY KEY (`id_newsletter`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
