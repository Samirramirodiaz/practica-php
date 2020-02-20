<?php
    require("conexion.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>examen PHP</title>
</head>
<body>
    <h2>bienvenidos al imalaia</h2>
    <?php
    $sql = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($resultado)){
        $newDate = date("d/m/Y", strtotime($mostrar['ult_sesion']))
        ?>
        <div class="contenedor">
            <div class="card">
                <h3 class="nombre"><?php echo $mostrar['nombre']?></h3>
                <p class="otro">mail: <?php echo$mostrar['mail']?></p>
                <p class="otro">password: <?php echo $mostrar['password']?></p>
                <label class="ultConexion">ultima conexion: <?php echo $newDate?> </label>
            </div>
        </div>
        <?php
    }
    ?>
    
</body>
</html>