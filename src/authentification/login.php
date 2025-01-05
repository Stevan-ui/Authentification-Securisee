<?php
session_start(); // Démarre la session
require 'connexion.php'; // Inclure le fichier de connexion à la base de données

// Vérifie si l'utilisateur est déjà connecté
if (isset($_SESSION['user_email'])) {
    header("Location: welcome.php"); // Redirige vers la page de bienvenue si déjà connecté
    exit();
}

// Traitement du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Vérification de l'utilisateur dans la base de données
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    // Vérifie si l'utilisateur existe et si le mot de passe est correct
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_email'] = $user['email']; // Stocke l'email dans la session
        header("Location: welcome.php"); // Redirige vers la page de bienvenue
        exit();
    } else {
        $error = "Email ou mot de passe incorrect."; // Message d'erreur
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css"> <!-- Intégration du CSS -->
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <form action="login.php" method="POST">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Se connecter">
        </form>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?> <!-- Affiche le message d'erreur -->
    </div>
</body>
</html>