<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks List</title>
</head>
<body>
    <h1>My Tasks</h1>
    
    @if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
    @endif

    <a href="{{ route('tasks.create') }}">Add New Task</a>
    <table border="1" cellpadding="10" style="margin-top: 20px width: 50px%;">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description}}</td>
            <td>
                <a href="{{ route('tasks.edit') , $task->id}}">Edit</a>

                <form action="{{ route('tasks.destroy', $task->id)}}", method="POST">
                    @csrf 
                    @method('Delete')
                    <button type="submit" onclick="return confirm('Are you sure !')">Delete</button>
                    </form>
            </td>
        </tr>
        @endforeach

    </table>
    
</body>
</html>