<?php


namespace App\Controllers;

use Slim\App;

class ControllerTask extends Controller
{
    public function __construct($container)
    {
        parent::__construct($container);
    }

    public function index($request, $response, $args)
    {
        $pid = (int)$args['pid'];
        $tasks = new \App\Models\ModelTask($this->db);
        $result = $tasks->findAll($pid);
        if ($result) {
            return $response->withJson($result, 200)
                ->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        } else {
            return $response->withJson($result, 404)
                ->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        }
    }

    public function findById($request, $response, $args)
    {
        $pid = (int)$args['pid'];
        $id = (int)$args['id'];
        $task = new \App\Models\ModelTask($this->db);
        $result = $task->findById($pid, $id);
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
            return $response->withJson($result, 201)->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        } else {
            return $response->withJson(array('status' => 'Task not found'), 422);
        }
    }
    
    public function updateById($request, $response, $args)
    {
        $pid = (int)$args['pid'];
        $id = (int)$args['id'];        
        $task = new \App\Models\ModelTask($this->db);
        $result = $task->updateById($pid, $id, $request->getParsedBody());
        if ($result) {
            return $response->withJson(array('s'=>'true'), 201)->withHeader('Access-Control-Allow-Origin', '*')
                            ->withHeader('Content-Type', 'application/x-www-form-urlencoded');
        } else {
            return $response->withJson(array('status' => 'Task not found'), 422);
        }
    }
    
    public function deleteById($request, $response, $args)
    {
        $pid = (int)$args['pid'];
        $id = (int)$args['id'];
        $task = new \App\Models\ModelTask($this->db);
        $result = $task->deleteById($pid, $id);
        if ($result) {
            return $response->withJson(array('status' => 'true'), 200)->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        } else {
            return $response->withJson(array('status' => 'Task not found'), 422);
        }
    }
    
    public function changeStatus($request, $response, $args)
    {
        $pid = (int)$args['pid'];
        $id = (int)$args['id'];
        $status = (int)$args['status'];
        $task = new \App\Models\ModelTask($this->db);
        $result = $task->changeStatus($pid, $id, $status);
        if ($result) {
            return $response->withJson(array('status' => 'true'), 200)->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        } else {
            return $response->withJson(array('status' => 'Task not found'), 422);
        }
    }    
}
