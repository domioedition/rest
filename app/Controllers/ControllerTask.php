<?php


namespace App\Controllers;


use Slim\App;

class ControllerTask extends Controller
{


    public function index($request, $response)
    {
        return $this->view->render($response, 'task.twig');
    }

    public function findById($request, $response, $args)
    {
        $id = (int)$args['id'];

        //TODO get info pro model and send it on view
        $m = new \App\Models\ModelTask($id);
        var_dump($m);
        // var_dump($body);

        $body = $response->getBody();
        // var_dump($body);
        return $this->view->render($response, 'task.twig');
    }

}
