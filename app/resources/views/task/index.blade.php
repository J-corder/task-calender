<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タスクカレンダー</title>
</head>
<body>
    <h1>タスクカレンダー</h1>
    <a href="{{ route('task.add') }}">タスク追加</a>
    <div>
    @foreach($tasks as $task)
        <p
        @if($task->completed===1)
            style="text-decoration: line-through;"
        @endif
        >{{ $task->content }}</p>
        <div>
            <p>{{ $task->start }}</p>
            <p>{{ $task->end }}</p>
        </div>
    @endforeach
    </div>
</body>
</html>
