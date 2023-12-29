<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send insert Request</title>
</head>
<body>
    
    
    <!-- {{session('message')}}
    <form action="{{ route('user') }}" method="POST">
    @csrf
    <label>Name: <input type="text" name="name"></label><br>
    <label>Age: <input type="text" name="age"></label><br>
    <label>Phone: <input type="text" name="phone"></label><br>
    <input type="submit" value="send">
</form> -->

<form action="/create" method="post">
@csrf
<label>Name:<input type="text" name="student_name"></label><br>
<input type="submit" value="Add user">
</form>

    
<livewire:login-form />

</body>
</html>
