<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professorat</title>
</head>
<body>
    <h1> LLISTA PROFESSORAT </h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>ROL</th>
            <th>EMAIL</th>
        </tr>
        @foreach($totsProfes as $info)
        <tr>
            <td>{{$info['id']}}</td> 
            <td>{{$info['name']}}</td>
            <td>{{$info['surname']}}</td>
            <td>{{$info['rol']}}</td>
            <td>{{$info['email']}}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('admin_view')}}">Admin Vista </a>
</body>
</html>