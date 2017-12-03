<?php


namespace App\Models;

use Slim\App;

class ModelTask extends Model
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findAll($pid)
    {
        try {
            $con = $this->db;
            $sql = "SELECT * FROM tasks WHERE pid='$pid'";
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
    
    public function findById($pid, $id)
    {
        try {
            $con = $this->db;
            $sql = "SELECT * FROM tasks WHERE pid='$pid'and id='$id'";
            $result = null;
            foreach ($con->query($sql) as $row) {
                $result[] = $row;
            }
            if ($result) {
                return $result[0];
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
            $task_data['pid'] =  filter_var($data['pid'], FILTER_SANITIZE_NUMBER_INT);
            $task_data['user_id_creator'] = filter_var($data['user_id_creator'], FILTER_SANITIZE_NUMBER_INT);
            $task_data['user_id_assignee'] = filter_var($data['user_id_assignee'], FILTER_SANITIZE_STRING);
            $task_data['task_name'] = filter_var($data['task_name'], FILTER_SANITIZE_STRING);
            $task_data['task_description'] = filter_var($data['task_description'], FILTER_SANITIZE_STRING);
            $task_data['task_date_creation'] = time();
            $task_data['task_status'] = 0;
            $sql = "insert into tasks (pid, user_id_creator, user_id_assignee, task_name, task_description, task_date_creation, task_status)
                        values
                        (
                        '".$task_data['pid']."',
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
    public function updateById($pid, $id, $data)
    {
        try {
            $task_data = array();
            if (!empty($data['task_name'])) {
                $task_data['task_name'] = filter_var($data['task_name'], FILTER_SANITIZE_STRING);
            }
            if (!empty($data['task_description'])) {
                $task_data['task_description'] = filter_var($data['task_description'], FILTER_SANITIZE_STRING);
            }

            $sql = "UPDATE tasks SET task_name='".$task_data['task_name']."', task_description='".$task_data['task_description']."' WHERE pid='$pid' AND id='$id'";
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
    
    public function deleteById($pid, $id)
    {
        try {
            $con = $this->db;
            $sql = "DELETE FROM tasks WHERE pid='$pid' AND id='$id'";
            $result = null;
            $result = $con->query($sql);
            if ($result) {
                return $result;
            } else {
                return null;
            }
        } catch (\Exception $ex) {
            return $response->withJson(array('error' => $ex->getMessage()), 422);
        }
    }
    
    public function changeStatus($pid, $id, $status)
    {
        try {
            $con = $this->db;
            $sql = "UPDATE tasks SET task_status='$status' WHERE pid='$pid' AND id='$id'";
            $result = null;
            $result = $con->query($sql);
            if ($result) {
                return $result;
            } else {
                return null;
            }
        } catch (\Exception $ex) {
            return $response->withJson(array('error' => $ex->getMessage()), 422);
        }
    }
}
