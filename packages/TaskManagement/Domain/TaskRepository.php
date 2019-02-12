<?php
declare(strict_types=1);

namespace TaskManagement\Domain;

interface TaskRepository
{
    public function save(Task $task): int;
}