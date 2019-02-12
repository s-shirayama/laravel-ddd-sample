<?php

namespace Tests\Unit;

use Tests\TestCase;
use TaskManagement\UseCase\TaskCreateUseCase;
use TaskManagement\Infrastructure\DbTaskRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskCreateUseCaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $useCase = new TaskCreateUseCase(new DbTaskRepository());
        $taskName = 'TASK NAME';
        $this->assertNotNull($useCase->createTask($taskName));
    }
}
