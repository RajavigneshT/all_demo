<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Age</th>
    </thead>

    <tbody>
        @foreach(admin as $admin)
        <td>{{$admin->id}}</td>
        <td>{{$admin->name}}</td>
        <td>{{$admin->phone}}</td>
        <td>{{$admin->age}}</td>
        @endforeach
    </tbody>
</body>
</html>