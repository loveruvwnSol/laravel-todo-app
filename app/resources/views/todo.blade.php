<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel todo app</title>
</head>
<body>
    <form action="{{url()->current()}}" method="POST">
        @csrf
        <input type="text" name="text" placeholder="todo text" required>
        <button type="submit">add</button>
    </form>
    <ul>
        @foreach ($todos as $todo)
        <div style="display: flex; align-items: center;">
            <li style="margin:10px 0">{{$todo->text}}</li>
            <form action="/todos/{{$todo->id}}" method="POST">
                @csrf
                @method("DELETE")
                <button style="margin-left: 10px" type="submit">remove</button>
            </form> 
        </div>
        @endforeach
    </ul>
</body>
</html>