<?php


namespace App\Models;



class ModelTask{
    public $id;
    public $name;



    public function __construct($id)
    {
      $this->id = $id;
      echo "SELECT * FROM tasks WHERE id='$id'";
    }
}

?>
