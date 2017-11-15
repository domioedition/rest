<?php
require('vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class TaskRestTest extends TestCase
{
    protected $client;

    protected function setUp()
    {
        $this->client = new GuzzleHttp\Client([
              'base_uri' => 'http://192.168.33.10/public/task'
          ]);
    }
    
      
    public function testGetAllProjects()
    {
        $response = $this->client->get('/public/task', []);

        $data = json_decode($response->getBody(), true);

        $this->assertArrayHasKey('id', $data['result'][0]);
        $this->assertArrayHasKey('user_id_creator', $data['result'][0]);
        $this->assertArrayHasKey('user_id_assignee', $data['result'][0]);
        $this->assertArrayHasKey('task_name', $data['result'][0]);
        $this->assertArrayHasKey('task_description', $data['result'][0]);
        $this->assertArrayHasKey('task_date_creation', $data['result'][0]);
        $this->assertArrayHasKey('task_status', $data['result'][0]);

        $this->assertEquals(1, $data['result'][0]['id']);
        $this->assertEquals(1, $data['result'][0]['user_id_creator']);
        $this->assertEquals('Unit tests', $data['result'][0]['task_name']);
        $this->assertEquals('Investigate opportunity of unit tests', $data['result'][0]['task_description']);

        $this->assertTrue(true);
        $this->assertFalse(false);
    }
        
    public function testAddNewTask()
    {
        $taskId = uniqid();

        $response = $this->client->post('/public/task', [
                'json' => [
                    "id" => $taskId,
                    "user_id_creator" => "1",
                    "user_id_assignee" => "1",
                    "task_name" => "Unit tests",
                    "task_description" => "Investigate opportunity of unit tests"
                ]
            ]);

        $this->assertEquals(201, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);
//            var_dump($data);
//            $this->assertEquals($taskId, $data['taskId']);
    }
}
