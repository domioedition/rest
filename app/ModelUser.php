<?php

namespace App;


use Slim\App;

class ModelUser
{

public $name = 'Bob';
public $id;

public function __construct($id){
    $this->id = $id;
}

public function getName()
{
  return $this->name;
}




}
