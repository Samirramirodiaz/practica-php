<!DOCTYPE html>
<html lang="es">

<head>
    <?php 
    session_start();
    $usuario = $_SESSION['usuario'];
    if($usuario == null || $usuario == ""){
        echo 'Debes iniciar sesión para continuar';
        echo ' <a href="login.php">iniciar sesión</a>';
        die();
    }
    require "conexion.php" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <p class="nombre">
            <?php echo $usuario ?>
        </p>
        <a style="float: right;margin-top: -18px;" href="cerrar_sesion.php">cerrar sesión</a>
    </div>
    <div class="usuarios">
    <?php
    $sql = "SELECT * FROM usuarios";
    $query = mysqli_query($conexion,$sql);
    while ($registros = mysqli_fetch_array($query)) {
        ?>
        <div class="usuario">
            <h3><?php echo $registros['usuario']; ?></h3>
            <p><strong>Gmail: </strong><?php echo $registros['mail']; ?></p>
            <p><strong>Última conexión: </strong><?php echo $registros['ult_sesion']; ?></p>
        </div>
        
        <?php
    }
    
    ?>
    </div>

</body>

</html>