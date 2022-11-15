<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="validarlogin.php" style="padding: 200px;">
    <label> Nombre:
        <input type="text" name="nombre" value="<?php if(!empty($_COOKIE['usuario'])){ echo $_COOKIE['usuario'];}?>"></br>
        </label></br>
        <label>Contraseña
            <input type="text" name="contrasenia" value="<?php if(!empty($_COOKIE['contrasenia'])){echo $_COOKIE['contrasenia'];}?>"></br>
        </label><br>
        <input type="checkbox" name="check" value="check" <?php if(isset($_COOKIE['recuerdame'])){?> checked <?php }
        ?>> 
        <label>recuerdame</label></br>
        <input type="checkbox" name="check2" value="check2" <?php  if(isset($_COOKIE['abierta'])){?> checked <?php } ?>" > 
        <label>mantener sesion iniciada</label></br>
        <input type="submit" name="enviar" value="enviar">

    </form>
    <?php
    if(isset($_GET["error"])){
    if($_GET["error"]=="datos"){

        echo '<div class="alert alert-danger" role="alert">
        tu usuario y contraseña no son correctos
      </div>';
      
    }else if($_GET["error"]=="si"){

        echo '<div class="alert alert-danger" role="alert">
        no se puede acceder a la pagina
      </div>';
    }
}
    
    ?>
    
</body>
</html>