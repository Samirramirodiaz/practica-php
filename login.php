<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo3.css">
    <?php require("conexion.php"); ?>
</head>

<body>
    <div class="formulario-login">
        <form action="loginLogica.php" method="POST">
            <label>Usuario:</label>
            <input type="text" placeholder="Ingrese nombre" name="nombre" id="">
            <label>contraseña:</label>
            <input type="password" placeholder="Ingrese contraseña" name="contraseña" id="">
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>

</html>
