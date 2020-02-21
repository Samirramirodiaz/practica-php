<?php
require("conexion.php");

if(isset($_POST)){
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    session_start();
    $_SESSION['usuario'] = $nombre;
}
    

    $query = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND password = '$contraseña'";

    $consulta = mysqli_query($conexion, $query);

    if(mysqli_num_rows($consulta) > 0){

        header('Location: index.php');
    }
    else{
        header("Location: login.php");
        echo('<script>alert("Usuario y/o Contraseña incorrecto")</script>');
    }
