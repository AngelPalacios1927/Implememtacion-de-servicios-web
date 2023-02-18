<?php
$error;

if(!empty($_POST['Nombre']) && !empty($_POST['Password'])){
    $Nombre = $_POST['Nombre'];
    $Password = $_POST['Password'];
    if($Nombre == "Admin" && $Password == "asd"){
       // $error = "OK";
        header("Location: Administrador.php");
        //echo "EXITOSO";
        
    }else{
        if($Nombre == "Cliente" && $Password == "123")
        {
            header("Location: Clientes.php");
        }else{
        
            header("Location: AlertaDialogo.php");

        }
        
    }
}else{
    $error = "vacio";
    header("Location: AlertaDialogo.php");
}