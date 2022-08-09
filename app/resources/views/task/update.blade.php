<x-layout title="編集 | タスクカレンダー">
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            タスクカレンダー
        </h2>
        @php
            $breadcrumbs = [
                ['href' => route('task.index'), 'label' => 'TOP'],
                ['href' => '#', 'label' => '編集']
            ];
        @endphp
        <x-element.breadcrumbs :breadcrumbs="$breadcrumbs">
        </x-element.breadcrumbs>
        <x-task.form.put :task="$task"></x-task.form.put>
    </x-layout.single>
    {{-- TODO 削除ボタン --}}
</x-layout>
