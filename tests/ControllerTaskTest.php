<?php

require 'app/Controllers/ControllerTask.php';
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ControllerTaskTest extends TestCase
{
    public $db;
    
    public function __construct()
    {
        parent::__construct();
//            $this->db = App\Db::instance();
    }
    
    public function testIndex()
    {
        $tasks = new \App\Models\ModelTask(1);
        $this->assertInstanceOf(\App\Models\ModelTask::class, $tasks, "Unknown instance");
//        $all = $tasks->findAll();
//        var_dump($all);
    }
}
