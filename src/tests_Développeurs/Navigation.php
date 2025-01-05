<?php
use PHPUnit\Framework\TestCase;

class NavigationTest extends TestCase
{
    public function testRedirectionPageProtegee()
    {
        $_SESSION['role'] = 'admin';  // Simuler un utilisateur admin

        // Appeler une fonction qui redirige selon le rôle (par exemple, une page protégée)
        $result = accederPageProtegee();

        // Vérifier que la redirection est correcte selon le rôle
        $this->assertEquals("admin_dashboard.php", $result);
    }
}
