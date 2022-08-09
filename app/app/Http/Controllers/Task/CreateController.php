<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\CreateRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request)
    {
        $task = new Task;
        $task->user_id = $request->userId();
        $task->content = $request->content();
        $task->start = $request->start();
        $task->end = $request->end();
        $task->save();
        return redirect()->route('task.index');
    }
}
