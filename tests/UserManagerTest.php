<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../core/init.php';
require_once __DIR__ . '/../vendor/autoload.php';

class UserManagerTest extends TestCase
{

    public function testLogin() {
        global $getUserManager;
        // False using random combination in database
        $this->assertFalse($getUserManager->login('badem@il', 'fail'));

        // False using combination not in database
        $this->assertFalse($getUserManager->login('a@b.com', 'abc'));

        // True using combination in database
        $this->assertTrue($getUserManager->login('y@z.com', 'z'));


    }

    public function testSignup() {
        global $getUserManager;
        // False name combination
        $this->assertFalse($getUserManager->validateName('steve@'));

        // False name combination too many characters
        $this->assertFalse($getUserManager->validateName('steve rogers'));

        // False email combination
        $this->assertFalse($getUserManager->validateEmail('steve@@#'));

        // True email combination
        $this->assertTrue($getUserManager->validateEmail('steve@gmail.com'));

        // False password combination
        $this->assertFalse($getUserManager->validatePassword('ste'));

        // True password combination
        $this->assertTrue($getUserManager->validatePassword('steve123456'));
    }
}