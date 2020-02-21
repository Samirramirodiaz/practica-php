<?php
require("conexion.php");
session_start();
$varSesion = $_SESSION['usuario'];
if($varSesion == null || $varSesion == ""){
    echo'No tenés permisos para entrar ';
    die();
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo3.css">
    <title>examen php</title>
</head>

<body>
    <header>
        <h2>Bienvenidos al Imalaya</h2>
        <div class="a_la_derecha">
            <label for=""><?php echo $varSesion?></label>
            <a href="cerrar_sesion.php">cerrar sesion</a>
        </div>
    </header>
    <div class="contenedor">
        <div class="formulario">
            <form action="agregarUsuario.php" method="POST">
                <input type="text" placeholder="nombre" name="nombre" id="">
                <input type="email" placeholder="email" name="mail" id="">
                <input type="password" placeholder="contraseña" name="password" id="">
                <input type="date" placeholder="fecha" name="ult_sesion" id="">
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="">
            <?php
            $sql = "SELECT * FROM usuarios";
            $resultado = mysqli_query($conexion, $sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
                $newDate = date("d/m/Y", strtotime($mostrar['ult_sesion']));
            ?>
                <div class="card">
                    <h3 class="nombre"><?php echo $mostrar['nombre'] ?></h3>
                    <p class="otro">mail: <?php echo $mostrar['mail'] ?></p>
                    <p class="otro">password: <?php echo $mostrar['password'] ?></p>
                    <label class="ultConexion">ultima conexion: <?php echo $newDate ?> </label>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>