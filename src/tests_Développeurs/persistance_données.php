<?php
use PHPUnit\Framework\TestCase;

class PersistanceDonneesTest extends TestCase
{
    public function testSauvegardeEtRecuperation()
    {
        $email = "test@example.com";
        $password = "password123";

        // Sauvegarder les données en base
        sauvegarderUtilisateur($email, $password);

        // Vérifier que les données sont persistées
        $utilisateur = recupererUtilisateurParEmail($email);
        $this->assertEquals($email, $utilisateur['email']);
        $this->assertNotNull($utilisateur['id']);
    }
}
