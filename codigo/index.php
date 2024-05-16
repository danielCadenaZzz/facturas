


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
</head>
<body>
    <h1>INICIAR SESION</h1>
    <form action="view/ValidarSesion.php" method="post">
        <label for="">Usuario</label>
        <input type="text" name="user" required> <!-- required dato requerido *-->
        <br>
        <label for="">Contraseña</label>
        <input type="password" name="psw" required> <!-- required dato requerido *-->
        <br>
        <button type="submit">Iniciar Sesion</button>
    </form>
</body>
</html>