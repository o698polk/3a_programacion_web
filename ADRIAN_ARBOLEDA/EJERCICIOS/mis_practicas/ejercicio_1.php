<?php
$nombre="ADRIAN ARBOLEDA";
$edad="24";
$imagen="rrtt.png";
$cedula="080363367-6";
?>

<html>
<head>
    <title>EJERCICIO 1</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<center>
<div class="panel_datos">
 <h2 >DATOS PERSONALES</h2>
 <img src="<?php echo $imagen ?>" id="imagen_perfil" >
<p> <strong> NOMBRE:</strong><?php echo $nombre ?></p><br>
<p> <strong> EDAD:</strong><?php echo $edad ?></p><br>
<p> <strong> CEDULA:</strong><?php echo $cedula ?></p><br>
 <button id="boton_saludar" onclick="alert('HOLA <?php echo $nombre ?>, BIENVENIDO A LA PROGRAMACION WEB')">SALUDAR</button>
</div>
</center>
</body>
</html>
