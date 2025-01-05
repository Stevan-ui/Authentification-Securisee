<?php
use PHPUnit\Framework\TestCase;

class DeconnexionTest extends TestCase
{
    public function testDeconnexion()
    {
        $_SESSION['user'] = ['id' => 1, 'email' => 'user@example.com'];

        deconnecterUtilisateur();

        $this->assertEmpty($_SESSION);

        $this->assertEquals("login.php", $_SESSION['redirect']);
    }
}
