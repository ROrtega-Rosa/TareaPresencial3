<?php

$userAdmin="admin";
$passAdmin="admin";
$userUser="user";
$passUser="user";
if(isset($_POST["enviar"])){

    $myUsuario=$_POST["nombre"];
    $myContrasenia=$_POST["contrasenia"];

    if(!empty($myUsuario)&& !empty($myContrasenia)){
        if($myUsuario==$userAdmin && $myContrasenia==$passAdmin){

            session_start();
            $_SESSION["logeadoAdmin"]=1;
            
           
            header("Location:admin.php");

            if(!empty($_POST["check"])){
                $fecha=date("d/m/Y|H:i:s");
                
            setcookie("usuario",$myUsuario,time()+(365*24*60*60));
            setcookie("contrasenia",$myContrasenia,time()+(365*24*60*60));
            setcookie("recuerdame",$_POST["check"],time()+(365*24*60*60));
            setcookie("fecha",$fecha,time()+(365*24*60*60)); //para detectar la fecha de la ultima visita
            
            

        }else{
            setcookie("usuario","",time()-100);
            setcookie("contrasenia","",time()-100);
            setcookie("recuerdame","",time()-100);
            setcookie("fecha","",time()-100);
            

        }
        if(isset($_POST["check2"])){
            setcookie("abierta",$myUsuario);
           
        
          }else{
            // sino eliminamos la cookie retrocediendo el tiempo
            setcookie("abierta", "", time() - 100);
        
          }


        } else if($myUsuario==$userUser && $myContrasenia==$passUser){

            session_start();
            $_SESSION["logeadoUser"]=1;
           
           
            header("Location:user.php");

            if(!empty($_POST["check"])){
                $fecha=date("d/m/Y|H:i:s");
                
            setcookie("usuario",$myUsuario,time()+(365*24*60*60));
            setcookie("contrasenia",$myContrasenia,time()+(365*24*60*60));
            setcookie("recuerdame",$_POST["check"],time()+(365*24*60*60));
            setcookie("fecha",$fecha,time()+(365*24*60*60)); //para detectar la fecha de la ultima visita
            
            

        }else{
            setcookie("usuario","",time()-100);
            setcookie("contrasenia","",time()-100);
            setcookie("recuerdame","",time()-100);
            setcookie("fecha","",time()-100);
            

        }
        if(isset($_POST["check2"])){
            setcookie("abierta",$myUsuario);
         
        
          }else{
            // sino eliminamos la cookie retrocediendo el tiempo
            setcookie("abierta", "", time() - 100);
        
          }


        } else{


            
            header("Location:login.php?error=datos");
        }



    }else{


        header("Location:login.php?error=si");
    }

    





}


?>