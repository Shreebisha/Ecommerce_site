<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{url('/create')}}"><button>Create</button></a>
<table> <tr>
        <th> Name</th>
        <th> Address</th>
        <th> Age</th>
        <th> DOB</th>
        <th> Image</th>

    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->dob}}</td>
            <td>{{$student->image}}</td>
            <td><img src="{{asset('storage/image/'.$student->image)}}"/></td>
            <td><a><a href="{{url('/edit/'.$student->id)}}" Edit</a> </td>
        </tr>

    @endforeach
</table>
</body>
</html>
