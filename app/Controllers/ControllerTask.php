<?php


namespace App\Controllers;

use Slim\App;

class ControllerTask extends Controller
{
    public function __construct($container)
    {
        parent::__construct($container);
//        $x = $container->get('settings')['db'];
//        var_dump($x);
    }

    public function index($request, $response)
    {
//        var_dump($this->db);
        $tasks = new \App\Models\ModelTask($this->db);
        $result = $tasks->findAll();
        if ($result) {
            return $response->withJson($result, 200)
                ->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        } else {
            return $response->withJson(array('status' => 'Tasks not found'), 422);
        }
    }

    public function findById($request, $response, $args)
    {
        $id = (int)$args['id'];
        $task = new \App\Models\ModelTask($this->db);
        $result = $task->findById($id);
        if ($result) {
            return $response->withJson($result, 200)
                ->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        } else {
            return $response->withJson(null, 404)
                ->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        }
    }
    
    public function addNewTask($request, $response, $args)
    {
        $task = new \App\Models\ModelTask($this->db);
        $result = $task->addNewTask($request->getParsedBody());
        if ($result) {
            return $response->withJson(array('status' => 'true','result'=>$result), 201);
        } else {
            return $response->withJson(array('status' => 'Task not found'), 422);
        }
    }
    
    public function updateById($request, $response, $args)
    {
        $id = (int)$args['id'];
        $task = new \App\Models\ModelTask($this->db);
        $result = $task->updateById($id, $request->getParsedBody());
        if ($result) {
            return $response->withJson(array('status' => 'true','result'=>$result), 201);
        } else {
            return $response->withJson(array('status' => 'Task not found'), 422);
        }
    }
    
    public function deleteById($request, $response, $args)
    {
        $id = (int)$args['id'];
        $task = new \App\Models\ModelTask($this->db);
        $result = $task->deleteById($id);
        if ($result) {
            return $response->withJson(array('status' => 'true','result'=>$result), 201);
        } else {
            return $response->withJson(array('status' => 'Task not found'), 422);
        }
    }
}
