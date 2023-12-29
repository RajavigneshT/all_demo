<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | view</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
            <td>delete</td>
        </tr>
        @foreach($students as $student)
        <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td><a href="edit/{{$student->id}}">Edit</a></td>
        <td><a href="delete/{{$student->id}}">Delete</a></td>
        </tr>
        @endforeach
        </table>
    </body>
</html>