<?php
require("conexion.php");

date_default_timezone_set("America/Argentina/Buenos_Aires");

if(isset($_REQUEST)){
    $nombre = $_REQUEST['nombre'];
    $contraseña = $_REQUEST['contraseña'];
    session_start();
    $_SESSION['usuario'] = $nombre;
}
    

    $query = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND password = '$contraseña'";

    $consulta = mysqli_query($conexion, $query);

    $newFecha = date('Y-m-d');

    
    if(mysqli_num_rows($consulta) > 0){
        
        $actualizarFecha = "UPDATE usuarios SET ult_sesion = '$newFecha' WHERE nombre = '$nombre' AND password = '$contraseña' ";
        $consulta = mysqli_query($conexion, $actualizarFecha);

        header('Location: index.php');
    }
    else{
        header("Location: login.php");
        echo('<script>alert("Usuario y/o Contraseña incorrecto")</script>');
    }
