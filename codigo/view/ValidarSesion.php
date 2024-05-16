<?php
namespace App\view;

$user = $_POST["user"];
$password = $_POST["pwd"];


use App\model\Usuario;
use App\controller\ConexDBController;


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar</title>
</head>
<body>
    <?php
        if($IniciarSesion) {
            session_start();
            $_SESSION['Iniciar Sesion'] = true;
            header('Location: inicio.php');
        }else {
            echo '<h1>DATOS INCORRECTOS</h1>';
            echo '<br>';
            echo '<a href="../index.php">Intentar nuevamente</a>'; 
        }
    ?>
</body>
</html>