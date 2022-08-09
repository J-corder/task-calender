<div class="p-4">
    <form action="{{ route('task.create') }}" method="post">
        @csrf
        <div class="mt-1">
            <textarea
                name="task"
                rows="3"
                class="focus:ring-blue-400 focus-border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2"
                placeholder="タスクを入力"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            140文字まで
        </p>
        <div class="flex justify-evenly">
            <div>
                <label for="task-start">開始日</label>
                <x-element.input-date label="task-start"></x-element.input-date>
            </div>
            <div>
                <label for="task-end">終了日</label>
                <x-element.input-date label="task-end"></x-element.input-date>
            </div>
        </div>

        @error('task')
        <x-alert.error>{{ $message }}</x-alert.error>
        @enderror

        <div class="flex flex-wrap justify-end">
            <x-element.button>
                追加
            </x-element.button>
        </div>
    </form>
</div>
