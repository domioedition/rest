<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testAssertsTrue(){
      $this->assertTrue(true);
    }
    // public function testFirstName()
    // {
    //     $user = new \App\Models\User;
    //     $user->setFirstName('Billy');
    //     $this->assertEquals($user->getFirstName(), 'Billy');
    // }
    // public function testLastName()
    // {
    //     $user = new \App\Models\User;
    //     $user->setLastName('Garett');
    //     $this->assertEquals($user->getLastName(), 'Garett');
    // }
    // public function testFullNameIsReturned(){
    //     $user = new \App\Models\User;
    //     $user->setFirstName('Billy');
    //     $user->setLastName('Garett');
    //     $this->assertEquals($user->getFullName(), 'Billy Garett');
    // }
    // public function testFirstAndLastNameAreTrimmed(){
    //     $user = new \App\Models\User;
    //     $user->setFirstName('    Billy    ');
    //     $user->setLastName('     Garett   ');
    //     $this->assertEquals($user->getFirstName(), 'Billy');
    //     $this->assertEquals($user->getLastName(), 'Garett');
    // }
    // public function testEmailAddressCanBeSet(){
    //     $user = new \App\Models\User;
    //     $user->setEmail('billy@somemail.com');
    //     $this->assertEquals($user->getEmail(), 'billy@somemail.com');
    // }
    // public function testEmailValidataContainCorrectValues(){
    //     $user = new \App\Models\User;
    //     $user->setFirstName('Billy');
    //     $user->setLastName('Garett');
    //     $user->setEmail('billy@somemail.com');
    //     $emailVariables = $user->getEmailVariables();
    //     $this->assertArrayHasKey('full_name', $emailVariables);
    //     $this->assertArrayHasKey('email', $emailVariables);
    //     $this->assertEquals($emailVariables['full_name'], 'Billy Garett');
    //     $this->assertEquals($emailVariables['email'], 'billy@somemail.com');
    // }
}
?>
