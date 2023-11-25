

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessió</title>
</head>
<body>

    
    <form action="{{route('admin_view')}}" method="POST">
        @csrf
    <div>
        <label>Email</label>
        <input type="text" name="email" placeholder="Introdueix el teu e-mail" required>
    </div>
    <div>
        <label>Contrassenya</label>
        <input type="text" name="passwd" placeholder="Introdueix la teva contrassenya" required>
    </div>
    <div>
        <label>Remember me </label>
        <input type="checkbox" name="active">
    </div>
    <div>
        <button type="submit" name="send">Enviar</button>
    </div>
    <div>
     <a href="{{ route('signup')}}">Crear usuari</a>
    </div>
    </form>
</body>
</html>

