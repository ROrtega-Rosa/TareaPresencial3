
<?php 

session_start();

if(!isset($_SESSION["logeadoAdmin"]) && !isset($_COOKIE["abierta"])){


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
    <h1>Opcion A</h1>
<?php
           
           
           if(isset($_COOKIE["abierta"])){

                echo "<h2> ".$_COOKIE["abierta"]."</br>";
               

           }else if(isset($_COOKIE["usuario"])){

            echo "<h2>".$_COOKIE["usuario"]."</br>";
           
           }else{

            echo "<h2>Bienvenido </br>";
            

           }
           
           
           
           
        
           
           ?>
    <a href="admin.php">volver a principal</a>
    <a href="cerrarSesion.php">Cerrar sesion</a>
</body>
</html>