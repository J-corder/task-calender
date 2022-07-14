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
        <details>
            <summary
            @if($task->completed===1)
                style="text-decoration: line-through;"
            @endif
            >{{ $task->content }}
            <div>
                <p>{{ $task->start }}</p>
                <p>{{ $task->end }}</p>
            </div>
            </summary>
            <div>
                <a href="{{ route('task.update.index', ['taskId' => $task->id]) }}">編集</a>
                {{-- <a href="{{ route('task.completed', ['taskId' => $task->id]) }}">完了</a> --}}
                <form action="{{ route('task.completed', ['taskId' => $task->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <button type="submit">完了</button>
                </form>
                <form action="{{ route('task.delete', ['taskId' => $task->id]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">削除</button>
                </form>
            </div>
        </details>
    @endforeach
    </div>
</body>
</html>
