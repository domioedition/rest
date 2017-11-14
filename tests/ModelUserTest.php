<?php

require 'app/ModelUser.php';

use PHPUnit\Framework\TestCase;

class ModelUserTest extends TestCase
{

public function testConstructor(){
    $user = new App\ModelUser(1000);
    $this->assertAttributeEquals(1000, 'id', $user);
}

public function testAssertsTrue(){
  $this->assertTrue(true);
}

//public function testCreateUser(){
//  
//}




}



?>
