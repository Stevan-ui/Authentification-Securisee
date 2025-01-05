<?php
use PHPUnit\Framework\TestCase;

class ModificationProfilTest extends TestCase
{
    public function testModificationProfil()
    {
        $userId = 1;
        $nouveauEmail = "newemail@example.com";
        $nouveauNom = "New Name";

        $result = modifierProfil($userId, $nouveauEmail, $nouveauNom);

        $utilisateur = recupererUtilisateurParId($userId);
        $this->assertEquals($nouveauEmail, $utilisateur['email']);
        $this->assertEquals($nouveauNom, $utilisateur['nom']);
        
        $this->assertTrue($result);  
    }
}
