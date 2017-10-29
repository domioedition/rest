<?php


namespace App\Controllers;


class ControllerProject extends Controller
{


    public function index($request, $response)
    {
        return $this->view->render($response, 'project.twig');
    }

}