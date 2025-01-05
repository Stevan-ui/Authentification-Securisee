<?php
use PHPUnit\Framework\TestCase;

class CreationCompteTest extends TestCase
{
    public function testCreationCompte()
    {
        
        $email = "newuser@example.com";
        $password = "password123";
        $result = creerCompte($email, $password);
        $this->assertTrue($result);  
        $utilisateur = recupererUtilisateurParEmail($email);
        $this->assertNotNull($utilisateur);
        $this->assertEquals($email, $utilisateur['email']);
    }
}
