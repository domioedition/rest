<?php


namespace App\Models;

use Slim\App;

class ModelTask extends Model
{
    protected $db;
    public $id;


    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findAll()
    {
        try {
            $con = $this->db;
            $sql = "SELECT * FROM tasks";
            $result = null;
            foreach ($con->query($sql) as $row) {
                $result[] = $row;
            }
            if ($result) {
                return $result;
            } else {
                return null;
            }
        } catch (\Exception $ex) {
            die('Tasks not found. exit.');
        }
    }
    
    public function findById($id)
    {
        try {
            $con = $this->db;
            $sql = "SELECT * FROM tasks WHERE id='$id'";
            $result = null;
            foreach ($con->query($sql) as $row) {
                $result[] = $row;
            }
            if ($result) {
                return $result;
            } else {
                return null;
            }
        } catch (\Exception $ex) {
            die('Tasks not found. exit.');
        }
    }
    
    
    public function addNewTask($data)
    {
        try {
            $task_data = array();
            $task_data['user_id_creator'] = filter_var($data['user_id_creator'], FILTER_SANITIZE_NUMBER_INT);
            $task_data['user_id_assignee'] = filter_var($data['user_id_assignee'], FILTER_SANITIZE_STRING);
            $task_data['task_name'] = filter_var($data['task_name'], FILTER_SANITIZE_STRING);
            $task_data['task_description'] = filter_var($data['task_description'], FILTER_SANITIZE_STRING);
            $task_data['task_date_creation'] = time();
            $task_data['task_status'] = 0;
            $sql = "insert into tasks (user_id_creator, user_id_assignee, task_name, task_description, task_date_creation, task_status)
                        values
                        (
                        '".$task_data['user_id_creator']."',
                        '".$task_data['user_id_assignee']."',
                        '".$task_data['task_name']."',
                        '".$task_data['task_description']."',
                        '".$task_data['task_date_creation']."',
                        '".$task_data['task_status']."'
                        )";
            $con = $this->db;
            $result = null;
            $result = $con->query($sql);
            if ($result) {
                return $result;
            } else {
                return null;
            }
        } catch (\Exception $ex) {
            die('Tasks not created. exit.');
        }
    }
    public function updateById($id, $data)
    {
        try {
            $task_data = array();
            if (!empty($data['task_name'])) {
                $task_data['task_name'] = filter_var($data['task_name'], FILTER_SANITIZE_STRING);
            }
            if (!empty($data['task_description'])) {
                $task_data['task_description'] = filter_var($data['task_description'], FILTER_SANITIZE_STRING);
            }

            $sql = "UPDATE tasks SET task_name='".$task_data['task_name']."', task_description='".$task_data['task_description']."' WHERE id=$id";
            $con = $this->db;
            $result = null;
            $result = $con->query($sql);
            if ($result) {
                return $result;
            } else {
                return null;
            }
        } catch (\Exception $ex) {
            die('Tasks not created. exit.');
        }
    }
    public function deleteById($id)
    {
        try {
            $con = $this->db;
            $sql = "DELETE FROM tasks WHERE id=$id";
            $result = null;
            $result = $con->query($sql);
            if ($result) {
                return $result;
            } else {
                return null;
            }
            if ($result) {
                return $response->withJson(array('status' => 'Task Deleted'), 200);
            } else {
                return $response->withJson(array('status' => 'Task Not Found'), 422);
            }
        } catch (\Exception $ex) {
            return $response->withJson(array('error' => $ex->getMessage()), 422);
        }
//        try{
//            $con = $this->db;
//            $sql = "DELETE FROM tasks WHERE id = :id";
//            $pre  = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//            $values = array(
//            ':id' => $id);
//            $result = $pre->execute($values);
//            if($result){
//               return $response->withJson(array('status' => 'Task Deleted'),200);
//            }else{
//               return $response->withJson(array('status' => 'Task Not Found'),422);
//            }
//         }
//         catch(\Exception $ex){
//             return $response->withJson(array('error' => $ex->getMessage()),422);
//         }
    }
}
