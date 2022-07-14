<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $taskId = (int) $request->route('taskId');
        $task = Task::where('id', $taskId)->firstOrFail();
        $task->delete();
        return redirect()
            ->route('task.index')
            ->with('feedback.success', "タスクを削除しました");
    }
}
