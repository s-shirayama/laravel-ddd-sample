<?php
declare(strict_types=1);

namespace TaskManagement\Infrastructure;

use TaskManagement\Domain\TaskRepository;
use App\Task as TaskModel;
use TaskManagement\Domain\Task;

class DbTaskRepository implements TaskRepository
{
    public function save(Task $task): int
    {
        $taskModel = new TaskModel();
        $taskModel->name = $task->getName();
        $taskModel->save();
        return $taskModel->id;
    }
}