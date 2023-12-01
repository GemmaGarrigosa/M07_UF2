<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat</title>
</head>
<body>
    <h1> LLISTA ALUMNAT </h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>ROL</th>
            <th>EMAIL</th>
        </tr>
        @foreach($totsAlumnes as $info)
        <tr>
            <td>{{$info['id']}}</td> <!--no he trobat cap altra manera per que m'agafés les dades-->
            <td>{{$info['name']}}</td>
            <td>{{$info['surname']}}</td>
            <td>{{$info['rol']}}</td>
            <td>{{$info['email']}}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('admin_view')}}">ADMIN VISTA </a>
</body>
</html>