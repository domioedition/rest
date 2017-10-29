<?php


namespace App\Controllers;


class ControllerHome extends Controller
{

    public function index($request, $response)
    {
        return $this->view->render($response, 'home.twig');
    }

}