<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
        <h1>BENVINGUT/DA ADMIN</h1>
        <div>
            <a href="{{ route('centres')}}" >CENTRES</a> 
            <a href="{{ route('professorat')}}" >PROFESSORAT</a>
            <a href="{{ route('alumnat')}}" >ALUMNAT</a>
        </div>
        <a href="{{route('signin')}}">Log Out </a>

</body>
</html>