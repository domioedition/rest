<?php


$app->get('/', 'ControllerHome:index');


$app->get('/task', 'ControllerTask:index');
$app->post('/task', 'ControllerTask:addNewTask');
$app->get('/task/{id}', 'ControllerTask:findById');
$app->put('/task/{id}', 'ControllerTask:updateById');
$app->delete('/task/{id}', 'ControllerTask:DeleteById');

$app->get('/projects', function ($request, $response) {

    echo "All projects";

    //$mapper = new TicketMapper($this->db);
    //$tickets = $mapper->getTickets();

    //$response->getBody()->write(var_export($tickets, true));
//    return $response;
});


