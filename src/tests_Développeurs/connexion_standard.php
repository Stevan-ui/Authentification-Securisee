<?php
use PHPUnit\Framework\TestCase;

class ConnexionTest extends TestCase
{
    public function testConnexionValide()
    {
        $email = "existinguser@example.com";
        $password = "password123";

        $result = seConnecter($email, $password);

        $this->assertTrue($result);

        $this->assertEquals("dashboard.php", $_SESSION['redirect']);  
    }
}
