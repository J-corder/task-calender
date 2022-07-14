<?php

namespace App\Http\Controllers\Task\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class IndexController extends Controller
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
        return view('task.update')->with('task', $task);
    }
}
