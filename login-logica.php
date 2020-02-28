<?php
require "conexion.php";

date_default_timezone_set("America/Argentina/Buenos_Aires");

if(isset($_REQUEST)){
    $nombre = $_REQUEST['usuario'];
    $contraseña = $_REQUEST['password'];

    session_start();
    $_SESSION['usuario'] = $nombre;

}

    $sql = "SELECT * FROM usuarios WHERE usuario = '$nombre' AND password = '$contraseña'";
    
    $query = mysqli_query($conexion,$sql);

    
    
    if(mysqli_num_rows($query) > 0){
        
        $newDate = date("Y-m-d");
        
        $actualizarFecha =  "UPDATE usuarios SET ult_sesion = '$newDate' WHERE usuario = '$nombre' AND password = '$contraseña'";
    
        $sqlFecha = mysqli_query($conexion,$actualizarFecha) ;

        header('Location: index.php');

    } else{
        header('Location: login.php');
    }


    

?>