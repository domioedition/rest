<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';



$app = new \Slim\App(
    [
        'settings' => [
            'displayErrorsDetails' => true,
            'addContentLengthHeader' => false
        ]
    ]
);


$container = $app->getContainer();

$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'],
        $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};


$container['view'] = function($container){
    $view = new \Slim\Views\Twig(__DIR__.'/../resources/views', [
        'cache' => false,
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));
    return $view;
};

$container['ControllerHome'] = function($container){
    return new \App\Controllers\ControllerHome($container);
};

$container['ControllerTask'] = function($container){
    return new \App\Controllers\ControllerTask($container);
};

//$container['ControllerProject'] = function($container){
//    return new \App\Controllers\ControllerProject($container);
//};


require __DIR__ . '/../app/routes.php';

