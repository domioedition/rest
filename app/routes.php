<?php


$app->get('/', 'ControllerHome:index');


$app->get('/task', 'ControllerTask:index');
$app->post('/task', 'ControllerTask:addNewTask');
$app->get('/task/{id}', 'ControllerTask:findById');
$app->put('/task/{id}', 'ControllerTask:updateById');
$app->delete('/task/{id}', 'ControllerTask:deleteById');

$app->get('/projects', function ($request, $response) {
    try {
        $con = $this->db;
        $sql = "SELECT * FROM projects";
        $result = null;
        foreach ($con->query($sql) as $row) {
            $result[] = $row;
        }
        if ($result) {
            return $response->withJson($result, 200)
                ->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
            
        } else {
            return $response->withJson(array('status' => 'Users Not Found'), 422);
        }
    } catch (\Exception $ex) {
        return $response->withJson(array('error' => $ex->getMessage()), 422);
    }
});

$app->post('/projects', function ($request, $response) {
    try {
        $data = $request->getParsedBody();
        // var_dump($data);
        // die();
        $project_data = array();
        $project_data['project_user_id_creator'] = filter_var($data['project_user_id_creator'], FILTER_SANITIZE_NUMBER_INT);
        $project_data['project_name'] = filter_var($data['project_name'], FILTER_SANITIZE_STRING);
        $project_data['project_description'] = filter_var($data['project_description'], FILTER_SANITIZE_STRING);
        $sql = "INSERT INTO projects (project_user_id_creator, project_name, project_description) VALUES ('".$project_data['project_user_id_creator']."','". $project_data['project_name']."','". $project_data['project_description']."')";
        $con = $this->db;
        $result = null;
        $result = $con->query($sql);
        if ($result) {
            return $response->withJson(array('status' => 'true','result'=>$project_data), 201)->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        } else {
            return $response->withJson(array('status' => 'Project not added','result'=>$project_data), 422);
        }
    } catch (\Exception $ex) {
        return $response->withJson(array('error' => $ex->getMessage()), 422);
    }
});

$app->put('/projects/{id}', function ($request, $response) {
    try {
        $id = $request->getAttribute('id');
        $data = $request->getParsedBody();
        $project_data = array();
        $project_data['project_name'] = filter_var($data['project_name'], FILTER_SANITIZE_STRING);
        $project_data['project_description'] = filter_var($data['project_description'], FILTER_SANITIZE_STRING);
        $sql = "UPDATE projects SET project_name='".$project_data['project_name']."', project_description='".$project_data['project_description']."' WHERE id='$id'";
        $con = $this->db;
        $result = null;
        $result = $con->query($sql);
        if ($result) {
            return $response->withJson(array('status' => 'true','result'=>$project_data), 201);
        } else {
            return $response->withJson(array('status' => 'Project not added','result'=>$project_data), 422);
        }
    } catch (\Exception $ex) {
        return $response->withJson(array('error' => $ex->getMessage()), 422);
    }
});


$app->delete('/projects/{id}', function ($request, $response) {
    try {
        $id = $request->getAttribute('id');
        $con = $this->db;
        $sql = "DELETE FROM projects WHERE id = :id";
        $pre  = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $values = array(
      ':id' => $id);
        $result = $pre->execute($values);
        if ($result) {
            return $response->withJson(array('status' => 'Project Deleted'), 200);
        } else {
            return $response->withJson(array('status' => 'Project Not Found'), 422);
        }
    } catch (\Exception $ex) {
        return $response->withJson(array('error' => $ex->getMessage()), 422);
    }
});

$app->get('/projects/{id}', function ($request, $response) {
    try {
        $id = $request->getAttribute('id');
        $con = $this->db;
        $sql = "SELECT * FROM projects WHERE id = :id";
        $pre  = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $values = array(
      ':id' => $id);
        $pre->execute($values);
        $result = $pre->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $response->withJson($result, 200)
                ->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        } else {
            return $response->withJson(array('status' => 'false', 'result' => 'Project Not Found'), 422);
        }
    } catch (\Exception $ex) {
        return $response->withJson(array('error' => $ex->getMessage()), 422);
    }
});

$app->options('/projects', function ($request, $response) {

return $response->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');    
    
});
