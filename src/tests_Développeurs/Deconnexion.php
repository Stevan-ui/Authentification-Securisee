<?php
use PHPUnit\Framework\TestCase;

class DeconnexionTest extends TestCase
{
    public function testDeconnexion()
    {
        // Simuler une session active
        $_SESSION['user'] = ['id' => 1, 'email' => 'user@example.com'];

        // Appeler la fonction de déconnexion
        deconnecterUtilisateur();

        // Vérifier que la session a bien été détruite
        $this->assertEmpty($_SESSION);

        // Vérifier la redirection
        $this->assertEquals("login.php", $_SESSION['redirect']);
    }
}
