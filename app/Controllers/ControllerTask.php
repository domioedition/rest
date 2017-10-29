<?php


namespace App\Controllers;


use Slim\App;

class ControllerTask extends Controller
{


    public function index($request, $response)
    {
        return $this->view->render($response, 'task.twig');
    }

    public function findById($request, $response)
    {
        echo "Task controller";
        return $response;
    }

}
