<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "conexion.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="contenedor">
        <div class="log-in">
            <form action="login-logica.php" method="POST">
                <input type="text" name="usuario" id="" placeholder="Ingrese Usuario">
                <input type="password" name="password" id="" placeholder="Ingrese Contraseña">
                <button type="submit">Iniciar</button>
            </form>
        </div>
    </div>
</body>

</html>