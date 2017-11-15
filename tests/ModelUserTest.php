<?php

require 'app/ModelUser.php';

//todo not working, need investigate
//require '../../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ModelUserTest extends TestCase
{
    public function testConstructor()
    {
        $user = new App\ModelUser(1000, 'Bob');
        $this->assertAttributeEquals(1000, 'id', $user);
        $this->assertAttributeEquals('Bob', 'name', $user);
    }

    public function testAssertsTrue()
    {
        $this->assertTrue(true);
    }

    public function testGetUserName()
    {
        $user = new App\ModelUser(1000, 'Bob');
        $expected = $user->getName();
        $this->assertEquals('My name is Bob', $expected, "Sorry wrong name");
    }
}
