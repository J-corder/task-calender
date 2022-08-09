@if($myTask)
<details class="task-option relative text-gray-500">
    <summary>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
        </svg>
    </summary>
    <div class="bg-white rounded shadow-md absolute options right-0 w-24 z-20 pt-1 pb-1">
        <div>
            <a href="{{ route('task.update.index', ['taskId' => $taskId]) }}" class="flex items-center pt-1 pb-1 pl-3 pr-3 hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
                <span>編集</span>
            </a>
        </div>
        <div>
            <form action="{{ route('task.completed', ['taskId' => $taskId]) }}" method="post">
                @method('PUT')
                @csrf
                <button type="submit" class="flex items-center w-full pt-1 pb-1 pl-3 pr-3 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>完了</span>
                </button>
            </form>
        </div>
    </div>
</details>
@endif
@once
@push('css')
    <style>
        .task-option > summary {
            list-style: none;
            cursor: pointer;
        }
        /* TODO beforeが画面全体にかかって項目が選択できない */
        .task-option[open] > summary::before {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10;
            display: block;
            content: " ";
            background: transparent;
        }
    </style>
@endpush
@endonce
