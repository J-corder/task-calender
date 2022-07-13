<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タスクカレンダー</title>
</head>
<body>
    <h1>タスク追加</h1>
    <form action="{{ route('task.create') }}" method="post">
        @csrf
        <div>
            <div>
                <label for="task-content">タスク</label>
                <span>140文字まで</span>
                <textarea id="task-content" type="text" name="content" placeholder="タスクを入力"></textarea>
            </div>
            <div>
                <label for="task-start">開始日</label>
                <input id="task-start" type="date" name="start" value="{{ $today }}">
            </div>
            <div>
                <label for="task-end">終了日</label>
                <input id="task-end" type="date" name="end" value="{{ $today }}">
            </div>
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
        <button type="submit">追加</button>
    </form>
</body>
</html>
