<?php
session_start();

// Vérifier la présence du token CSRF
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
        // Le token est valide, procéder à la connexion
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];

        // Connexion à la base de données
        $connexion = new mysqli('localhost', 'root', '', 'vita_forma');
        if ($connexion->connect_error) {
            die("Échec de la connexion : " . $connexion->connect_error);
        }

        // Préparer la requête pour vérifier les informations d'utilisateur
        $sql = "SELECT * FROM admin WHERE email = ?";
        $stmt = $connexion->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();

                // Vérifier le mot de passe
                if ($mot_de_passe === $user['mot_de_passe']) {
                    // Connexion réussie
                    $_SESSION['admin_id'] = $user['id_admin'];
                    $_SESSION['admin_email'] = $user['email'];
                    header("Location: espace_admin.php");
                    exit();
                } else {
                    echo "Mot de passe incorrect.";
                }
            } else {
                echo "Email non trouvé.";
            }
            $stmt->close();
        } else {
            echo "Erreur lors de la préparation de la requête : " . $connexion->error;
        }

        $connexion->close();
    } else {
        echo "Erreur CSRF : Token invalide.";
    }
}
