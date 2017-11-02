<?php


namespace App\Models;



use Slim\App;

class ModelTask extends Model
{
    protected $db;
    public $id;


    public function __construct($db) {
        $this->db = $db;
    }

    public function findAll()
    {
        try{
             $con = $this->db;
             $sql = "SELECT * FROM tasks";
             $result = null;
             foreach ($con->query($sql) as $row) {
                 $result[] = $row;
             }
             if($result){
                 return $result;
             }else{
                 return null;
             }
         }
         catch(\Exception $ex){
             die('Tasks not found. exit.');
         }
    }
    
    public function findById($id)
    {
        try{
             $con = $this->db;
             $sql = "SELECT * FROM tasks WHERE id='$id'";
             $result = null;
             foreach ($con->query($sql) as $row) {
                 $result[] = $row;
             }
             if($result){
                 return $result;
             }else{
                 return null;
             }
         }
         catch(\Exception $ex){
             die('Tasks not found. exit.');
         }      
    }
 
}