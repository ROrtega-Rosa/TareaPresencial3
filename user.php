<?php 

session_start();

if(!isset($_SESSION["logeadoUser"]) && !isset($_COOKIE["abierta"])){


header("Location:/TareaPresencial3/login.php?error=si");

}
function fecha(){
   
    $mensaje="";
    if(isset($_COOKIE["fecha"]) && isset($_COOKIE["contador"])){
        setcookie('contador',$_COOKIE['contador']+1,time()+(365*24*60*60));

       $mensaje = "Bienvenido de nuevo.Tu ultima visita fue: ".$_COOKIE["fecha"]." Has entrado ".$_COOKIE['contador']." veces";
    }else{
        setcookie("contador",1,time()+(365*24*60*60)); //contador de visitas
        $mensaje= "Bienvenido por primera vez";
    }
    return $mensaje;
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
<?php
           
           
           if(isset($_COOKIE["abierta"])){

                echo "<h2>Bienvenido ".$_COOKIE["abierta"]."</br>";
                echo fecha()."</br>";
                

           }else if(isset($_COOKIE["usuario"])){

            echo "<h2>Bienvenido ".$_COOKIE["usuario"]."</br>";
            echo fecha()."</br>";
            
           }else{

            echo "<h2>Bienvenido </br>";
            echo fecha()."</br>";

           }
           
           
           
           
        
           
           ?>

<h2>Menu: </h2>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" onClick="window.location='opcionC.php'">
  <label class="form-check-label" for="flexRadioDefault1" >
    Opcion C
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" onClick="window.location='opcionD.php'">
  <label class="form-check-label" for="flexRadioDefault2" >
    Opcion D
  </label>
</div>
<a href="cerrarSesion.php">Cerrar sesion</a>
</body>
</html>