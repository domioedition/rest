<?php

namespace App;

use Slim\App;

class ModelUser
{
    public $name;
    public $id;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getName()
    {
        return "My name is ".$this->name;
    }
}
