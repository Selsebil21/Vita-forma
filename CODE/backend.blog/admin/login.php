<?php
session_start();

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère les valeurs du formulaire (sans valeur par défaut dangereuse)
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Identifiants valides (à personnaliser ou stocker en base de données)
    $adminUsername = 'selsebil.merine@gmail.com';
    $adminPassword = 'vitaforma';

    // (Optionnel mais recommandé) — mot de passe haché à la place d’un mot de passe en clair
    // $adminPasswordHash = '$2y$10$...'; // À générer avec password_hash()
    // if ($username === $adminUsername && password_verify($password, $adminPasswordHash)) {

    // Vérifie les identifiants simples
    if ($username === $adminUsername && $password === $adminPassword) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Identifiants incorrects";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Identifiant">
    <input type="password" name="password" placeholder="Mot de passe">
    <button type="submit">Se connecter</button>
</form>
<?php if (isset($error)) echo "<p>$error</p>"; ?>