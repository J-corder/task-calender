<x-layout title="TOP | タスクカレンダー">
    <x-layout.single>
        // タスク追加 → component化
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            タスク追加
        </h2>

        <x-task.form.post></x-task.form.post>
    </x-layout.single>
</x-layout>
