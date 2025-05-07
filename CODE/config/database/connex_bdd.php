<?php
// Paramètres de connexion pour WAMP en local
$serveur = "localhost";
$utilisateur = "root"; // Nom d'utilisateur par défaut sur WAMP
$mot_de_passe = ""; // Pas de mot de passe par défaut
$base_de_donnees = "vita_forma"; // Nom de la base que tu as créée dans phpMyAdmin

// Création de la connexion
$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

// Configuration du jeu de caractères
$connexion->set_charset("utf8mb4");
