@props([
    'tasks' => []
])
<div vlass="bg-white rounded-md shadow-lg mt-5 mb-5">
    @if (count($tasks)===0)
        <p>タスクが登録されていません</p>
        <p>タスクを登録しましょう！</p>
    @else
    <ul>
        @foreach ($tasks as $task)
        <li class="border-b last:border-b-0 border-gray-200 p-4 flex items-start justify-between">
            <div>
                <p class="text-gray-600"
                @if ($task->completed===1)
                    style="text-decoration: line-through"
                @endif
                >{!! nl2br(e($task->content)) !!}</p>
                {{-- 開始日と終了日の取得
                     <div>
                    <p>{{ $task->start }}</p>
                    <p>{{ $task->end }}</p>
                </div> --}}
            </div>
            <div>
                <!-- TODO 編集と削除 -->
                <x-task.options :taskId="$task->id" :userId="$task->user_id">
                </x-task.options>
            </div>
        </li>
        @endforeach
    </ul>
    @endif
</div>
