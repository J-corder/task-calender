<?php

namespace App\View\Components\Task;

use Illuminate\View\Component;

class Options extends Component
{
    private int $taskId;
    private int $userId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $taskId, int $userId)
    {
        $this->taskId = $taskId;
        $this->userId = $userId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task.options')
            ->with('taskId', $this->taskId)
            ->with('myTask', \Illuminate\Support\Facades\Auth::id() === $this->userId);
    }
}
