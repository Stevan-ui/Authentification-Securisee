<?php
use PHPUnit\Framework\TestCase;

class NavigationTest extends TestCase
{
    public function testRedirectionPageProtegee()
    {
        $_SESSION['role'] = 'admin';  

        $result = accederPageProtegee();

        $this->assertEquals("admin_dashboard.php", $result);
    }
}
