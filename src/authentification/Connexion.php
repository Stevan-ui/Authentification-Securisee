<?php
$host = 'localhost';
$db = 'authentification'; // Nom de votre base de données
$user = 'root'; // Remplacez par votre utilisateur de base de données
$pass = ''; // Remplacez par votre mot de passe de base de données

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>