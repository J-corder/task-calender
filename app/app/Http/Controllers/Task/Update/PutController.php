<?php

namespace App\Http\Controllers\Task\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Task\UpdateRequest;
use App\Models\Task;
use App\Services\TaskService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class PutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request, TaskService $taskService)
    {
        if (!($taskService->checkOwnTask($request->user()->id, $request->id()))) {
            throw new AccessDeniedHttpException();
        }

        $task = Task::where('id', $request->id())->firstOrFail();
        $task->content = $request->content();
        $task->start = $request->start();
        $task->end = $request->end();
        $task->save();
        return redirect()
            ->route('task.update.index', ['taskId' => $task->id])
            ->with('feedback.success', "タスクを編集しました");
    }
}
