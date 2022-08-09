<?php

namespace App\Services;

use App\Models\Task;

class TaskService
{
    public function getTasks(int $userId)
    {
        return Task::where('user_id', '=', $userId)
            ->orderBy('start')
            ->orderBy('end')
            ->get();
    }

    public function checkOwnTask(int $userId, int $taskId): bool
    {
        $task = Task::where('id', $taskId)->first();
        if (!$task) {
            return false;
        }

        return $task->user_id === $userId;
    }
}
