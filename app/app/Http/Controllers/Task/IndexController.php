<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Services\TaskService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TaskService $taskService)
    {
        $tasks = $taskService->getTasks($request->user()->id);
        return view('task.index')
            ->with('tasks', $tasks);
    }
}
