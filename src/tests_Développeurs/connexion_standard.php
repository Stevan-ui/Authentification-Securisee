<?php
use PHPUnit\Framework\TestCase;

class ConnexionTest extends TestCase
{
    public function testConnexionValide()
    {
        $email = "existinguser@example.com";
        $password = "password123";

        // Appeler la fonction de connexion (à adapter)
        $result = seConnecter($email, $password);

        // Vérifier que la connexion est réussie (une session est créée)
        $this->assertTrue($result);

        // Vérifier que la redirection est correcte
        $this->assertEquals("dashboard.php", $_SESSION['redirect']);  // Exemple de redirection
    }
}
