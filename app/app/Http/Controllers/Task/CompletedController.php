<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class CompletedController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $task = Task::where('id', $request->taskId)->firstOrFail();
        $task->completed = !($task->completed);
        $task->save();
        return redirect()
            ->route('task.index');
    }
}
