<?php
$nombre = "Verenice Valdes";
$edad = 20;
$imagen = "img.jpg";
$cedula = "0804926186";
?>

<html>
<head>
    <title>EJERCICIO 2</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<center>
    <div class="panel_datos">
        <h2>DATOS PERSONALES</h2>
 <img src="<?php echo $imagen; ?>" id="img.jpg"><br><br>
 <strong>NOMBRE:</strong> <?php echo $nombre; ?><br>
 <p> <strong>EDAD:</strong> <?php echo $edad; ?><br>
 <p><strong>CÉDULA:</strong> <?php echo $cedula; ?><br>
    </div>
</center>
</body>
</html>
