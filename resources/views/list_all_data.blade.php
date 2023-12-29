<h3>User list</h3>
<style>
    table th,td
    {
        border: 1px solid black;
        border-collapse: collapse;

    }
</style>
<table>
<thead>
    <th>ID</th>
    <th>NAME</th>
    <th>Created</th>
</thead>
<tbody>
@foreach($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->created_at}}</td>
    </tr>
@endforeach

</tbody>
</table>