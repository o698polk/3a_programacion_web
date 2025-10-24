<?php
$nombre = "Valdes Jokabeth";
$edad = "20";
$imagen = "img.jpg";
$cedula = "080492618-6";
?>

<html>
<head>
    <title>EJERCICIO 1</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="panel_datos">
        <h2>DATOS PERSONALES</h2>
        <img src="<?php echo $imagen; ?>" id="perfil_de_imagen">
        <h3><strong>Nombre:</strong> <?php echo $nombre; ?></h3>
        <h3><strong>Edad:</strong> <?php echo $edad; ?></h3>
        <h3><strong>Cédula:</strong> <?php echo $cedula; ?></h3>
    </div>
</body>
</html>
