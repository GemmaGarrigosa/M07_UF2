<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>CP</th>
            <th>City</th>
        </tr>
        @foreach($totsCentres as $info)
        <tr>
            <td>{{$info['id']}}</td> <!--no he trobat cap altra manera per que m'agafés les dades-->
            <td>{{$info['name']}}</td>
            <td>{{$info['address']}}</td>
            <td>{{$info['cp']}}</td>
            <td>{{$info['city']}}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('admin_view')}}">ADMIN VISTA </a>
</body>
</html>