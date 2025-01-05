<?php
session_start(); 


if (!isset($_SESSION['user_email'])) {
    header("Location: login.php"); 
    exit();
}


if (isset($_GET['logout'])) {
    session_destroy(); 
    header("Location: login.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="welcome-container">
        <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['user_email']); ?>!</h2>
        <p><a href="welcome.php?logout=true">Se déconnecter</a></p>
    </div>
</body>
</html>