<?php 

session_start();

if(!isset($_SESSION["logeadoUser"]) && !isset($_COOKIE["abierta"])){


header("Location:/TareaPresencial3/login.php?error=si");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Opcion D</h1>
    <a href="user.php">volver a principal</a>
    <a href="cerrarSesion.php">Cerrar sesion</a>
</body>
</html>