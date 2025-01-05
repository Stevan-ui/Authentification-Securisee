<?php
use PHPUnit\Framework\TestCase;

class CreationCompteTest extends TestCase
{
    public function testCreationCompte()
    {
        // Simuler les données de création de compte
        $email = "newuser@example.com";
        $password = "password123";

        // Appeler la fonction de création de compte (à adapter à votre projet)
        $result = creerCompte($email, $password);

        // Vérifier que le compte a bien été créé
        $this->assertTrue($result);  // Si la fonction retourne true après création

        // Vérification que les données sont dans la base (adapté à votre logique)
        $utilisateur = recupererUtilisateurParEmail($email);
        $this->assertNotNull($utilisateur);
        $this->assertEquals($email, $utilisateur['email']);
    }
}
