

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessió</title>
</head>
<body>

    <h1> {{$titolFinal}}</h1>
    <!-- <form action="usuari.php" method="POST"> obrim formulari i passem el mètoda donat, post perque estem fent ús de dades sensibles -->
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
        <!-- <a href="index.html"> Crear usuari </a> -->
    </div>
    </form>
</body>
</html>

