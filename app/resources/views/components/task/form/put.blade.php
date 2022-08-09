@props([
    'task'
])
<div class="p-4">
    <form action="{{ route('task.update.put', ['taskId' => $task->id]) }}" method="post">
        @method('PUT')
        @csrf
        @if (session('feedback.success'))
        <x-alert.success>{{ session('feedback.success') }}</x-alert.success>
        @endif
        <div class="mt-1">
            <textarea
                name="content"
                rows="3"
                class="focus:ring-blue-400 focus:border-blue-400 mt-1 blick w-full sm:text-sm border border-gray-300 rounded-md p-2"
                placeholder="タスクを入力">{{ $task->content }}</textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            140文字まで
        </p>
        <div>
            <label for="task-start">開始日</label>
            <input id="task-start" type="date" name="start" value="{{ $task->start }}">
        </div>
        <div>
            <label for="task-end">終了日</label>
            <input id="task-end" type="date" name="end" value="{{ $task->end }}">
        </div>

        {{-- @error('task')
        <x-alert.error>{{ $mesage }}</x-alert.error>
        @enderror --}}
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <x-alert.error>
                {{ $error }}
            </x-alert.error>
            @endforeach
        @endif

        <div class="flex flex-wrap justify-end">
            <x-element.button>
                編集
            </x-element.button>
        </div>
    </form>
</div>
