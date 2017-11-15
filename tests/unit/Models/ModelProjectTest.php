<?php

require('vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class ModelProjectTest extends TestCase
{
    protected $client;

    protected function setUp()
    {
        $this->client = new GuzzleHttp\Client([
              'base_uri' => 'http://192.168.33.10/public/projects'
          ]);
    }
    public function testGetAllProjects()
    {
        $response = $this->client->get('/public/projects', []);

        $data = json_decode($response->getBody(), true);

        $this->assertArrayHasKey('id', $data['result'][0]);
        $this->assertArrayHasKey('project_user_id_creator', $data['result'][0]);
        $this->assertArrayHasKey('project_name', $data['result'][0]);
        $this->assertArrayHasKey('project_description', $data['result'][0]);

        $this->assertEquals(1, $data['result'][0]['id']);
        $this->assertEquals(1, $data['result'][0]['project_user_id_creator']);
        $this->assertEquals('RESTfull application', $data['result'][0]['project_name']);
        $this->assertEquals('Creating restfull application', $data['result'][0]['project_description']);

        $this->assertTrue(true);
        $this->assertFalse(false);
    }
}
