<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student |Edit Page</title>
</head>
<body>
    <form action="/edit/{{$student[0]->id}}" method="post">
        @csrf
        <table>
            <tr>
                <td>Name</td>
                <td>
                <input type='text' name='student_name' value='{{$student[0]->name}}'/>

                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <input type="submit" value="update_student">
                </td>
            </tr>
        </table>
    </form>

    
</body>
</html>