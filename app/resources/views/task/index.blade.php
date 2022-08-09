<x-layout title="TOP | タスクカレンダー">
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            タスクカレンダー
        </h2>
        // タスク一覧の表示
        // 最終的には月ごとの表示を目指す
        // 表示月の切り替わりボタン
        <div class="flex justify-between">
            <x-element.input-date type="month"></x-element.input-date>
            <x-element.button-a :href="route('task.add')">タスク追加</x-element.button-a>
        </div>
        <x-task.list :tasks="$tasks"></x-task.list>
    </x-layout.single>
</x-layout>
