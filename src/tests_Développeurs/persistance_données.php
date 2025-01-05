<?php
use PHPUnit\Framework\TestCase;

class PersistanceDonneesTest extends TestCase
{
    public function testSauvegardeEtRecuperation()
    {
        $email = "test@example.com";
        $password = "password123";

        sauvegarderUtilisateur($email, $password);

        $utilisateur = recupererUtilisateurParEmail($email);
        $this->assertEquals($email, $utilisateur['email']);
        $this->assertNotNull($utilisateur['id']);
    }
}
