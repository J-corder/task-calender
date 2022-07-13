<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タスクカレンダー</title>
</head>
<body>
<h1>タスクを編集する</h1>
<div>
    <a href="{{ route('task.index') }}">< 戻る</a>
    <p>タスクフォーム</p>
    <form action="{{ route('task.update.put', ['taskId' => $task->id]) }}" method="post">
        @method('PUT')
        @csrf
        <label for="task-content">タスク</label>
        <span>140文字まで</span>
        <textarea id="task-content" type="text" name="content" placeholder="タスクを入力">
            {{ $task->content}}
        </textarea>
        <div>
            <label for="task-start">開始日</label>
            <input id="task-start" type="date" name="start" value="{{ $today }}">
        </div>
        <div>
            <label for="task-end">終了日</label>
            <input id="task-end" type="date" name="end" value="{{ $today }}">
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit">編集</button>
    </form>
</div>

</body>
</html>
