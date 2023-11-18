 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÀCTICA 3 - FORM EN PHP CON PHPMYADMIN</title>
</head>
<body>
    <!-- <form action="index.php" method="POST"> -->
        <h1>{{$titolFinal}}</h1>
        <div>
            <label>ID</label>
            <input type="text" name="id">
        </div>
        <div>
            <label>NAME</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>SURNAME</label>
            <input type="text" name="surname">
        </div>
        <div>
            <label>
                <select name="ROL">
                    <option value="Professorat">Professorat</option>
                    <option value="Alumnat">Alumnat</option>
                </select>
            </label>
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="passwd">
        </div>
        <div>
            <label>email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="active">Active</label>
            <input type="checkbox" name="active">
        </div>
        <div>
            <button type="submit" name="send">SEND</button>
        </div>
    </form>
    <div>
    <a href="{{ route('signin', ['valor1' => 'Iniciar', 'valor2' => 'sessió', 'valor3' => 'de', 'valor4' => 'l\'usuari']) }}">Iniciar sessió</a> <!-- envio uns valors predeterminats ja que l'enrutament requereix del nº de paràmetres esperats en aquest cas-->

    </div>
</body>
</html> 