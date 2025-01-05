<?php
use PHPUnit\Framework\TestCase;

class ModificationProfilTest extends TestCase
{
    public function testModificationProfil()
    {
        $userId = 1;
        $nouveauEmail = "newemail@example.com";
        $nouveauNom = "New Name";

        // Appeler la fonction de mise à jour du profil
        $result = modifierProfil($userId, $nouveauEmail, $nouveauNom);

        // Vérifier que les informations sont mises à jour
        $utilisateur = recupererUtilisateurParId($userId);
        $this->assertEquals($nouveauEmail, $utilisateur['email']);
        $this->assertEquals($nouveauNom, $utilisateur['nom']);
        
        // Vérifier le message de confirmation
        $this->assertTrue($result);  // Par exemple, si la fonction retourne true
    }
}
