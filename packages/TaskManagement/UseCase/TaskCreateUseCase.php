<?php
declare(strict_types=1);

namespace TaskManagement\UseCase;

use TaskManagement\Domain\TaskRepository;
use TaskManagement\Domain\Task;

class TaskCreateUseCase
{
    private $respository;

    public function __construct(TaskRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createTask(string $taskName): int // TaskId classだとわかりやすい
    {
        $task = new Task($taskName);
        return $this->repository->save($task);
    }
}
