<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Services\TaskService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TaskService $taskService)
    {
        $taskId = (int) $request->route('taskId');
        if (!$taskService->checkOwnTask($request->user()->id, $taskId)) {
            throw new AccessDeniedHttpException();
        }

        $task = Task::where('id', $taskId)->firstOrFail();
        $task->delete();
        return redirect()
            ->route('task.index')
            ->with('feedback.success', "タスクを削除しました");
    }
}
