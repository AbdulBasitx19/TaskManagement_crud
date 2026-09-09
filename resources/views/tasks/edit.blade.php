<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit task</title>
</head>
<body>
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title: </label>
        <input type="text" name="title" class="title" value="{{ old('title', $task->title) }}">
         @error('title') <span style="color:red;">{{ $message }}</span> @enderror
        <br><br>

        <label>Description: </label>
        <textarea name="description">{{ old('description', $task->description)}}</textarea>
        <br><br>

        <button type="submit">Update task</button>
        <a href="{{ route('tasks.index')}}">Cancel</a>
    </form>
    
</body>
</html>