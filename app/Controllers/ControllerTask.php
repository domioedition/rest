<?php


namespace App\Controllers;


use Slim\App;

class ControllerTask extends Controller
{
    
    public function __construct($container) {
        parent::__construct($container);
//        $x = $container->get('settings')['db'];
//        var_dump($x);
    }

    public function index($request, $response)
    {
//        var_dump($this->db);
        $tasks = new \App\Models\ModelTask($this->db);
        $result = $tasks->findAll();
        if($result){
            return $response->withJson(array('status' => 'true','result'=>$result),200);
        }else{
            return $response->withJson(array('status' => 'Tasks not found'),422);
        }
    }

    public function findById($request, $response, $args)
    {
        $id = (int)$args['id'];
        $task = new \App\Models\ModelTask($this->db);
        $result = $task->findById($id);
        if($result){
            return $response->withJson(array('status' => 'true','result'=>$result),200);
        }else{
            return $response->withJson(array('status' => 'Task not found'),422);
        }
    }

}
