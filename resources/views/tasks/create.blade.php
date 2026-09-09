<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Task</title>
</head>
<body>
    <h1>Add new Task</h1>

    <form action=" {{ route('tasks.store') }}" method="POST">
        @csrf 

        <label>Title: </label>
        <input type="text" name="title" class="title" value="{{ old('title') }}">
        <br><br>

        <label>Descrition: </label>
        <textarea name="description">{{ old('description')}}</textarea>
        <br><br>

        <button type="submit">Save</button>
        <a href="{{ route('tasks.index')}}">Cancel</a>
    </form>
    
</body>
</html>