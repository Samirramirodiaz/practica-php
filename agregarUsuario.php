<?php
require("conexion.php");

if(isset($_POST)){
    $nombre = $_POST['nombre'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $ult_sesion = $_POST['ult_sesion'];
}

$sql = "INSERT INTO usuarios(nombre, mail, password, ult_sesion) VALUES('$nombre', '$mail', '$password','$ult_sesion')";

$verificar_mail = mysqli_query($conexion, "SELECT mail FROM usuarios WHERE mail = '$mail'");

if(mysqli_num_rows($verificar_mail) > 0){
    echo '<script>alert("Mail ya existente")</script>';
    exit;
}

$agregar = mysqli_query($conexion,$sql) ? print('<script>alert("Usuario creado correctamente")</script>') : print('<script>alert("Usuario creado correctamente")</script>');

header("Location: index.php"); 

?>