<?php

namespace Tests\Unit;

use Tests\TestCase;
use TaskManagement\Domain\Task;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testConstruct()
    {
        $taskName = 'TASK NAME';
        $task = new Task($taskName);
        $this->assertEquals($taskName, $task->getName());
    }
}
