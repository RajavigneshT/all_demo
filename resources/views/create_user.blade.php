<h3> Create User Form </h3>
<form action="store" method="post">
    <label for ="">Name</label><input type="text" name="name"><br>
    <label for ="">Age</label><input type="text" name="age"><br>
    <label for ="">Phone</label><input type="text" name="phone"><br>
    <input type="Submit"  value="Create User">
    @csrf
</form>