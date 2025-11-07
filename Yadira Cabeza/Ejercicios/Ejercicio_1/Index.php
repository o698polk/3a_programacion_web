  <?php
$nombre= "YADIRA CABEZA";
$edad= "29 AÑOS";
$imagen= "Img/IMG_20250805.jpg";
$cedula= "1050480000";
$celular= "0988630000";
$correo= "yadicabeza00000@gmail.com"
?>

<html>
<head>
    <title>Ejercicio_1</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<center>
<div class="panel_datos">
 <h2 >DATOS PERSONALES</h2>
 <img src="<?php echo $imagen ?>" id="imagen_perfil" >
<p> <strong> NOMBRE: </strong><?php echo $nombre ?></p><br>
<p> <strong> EDAD: </strong><?php echo $edad ?></p><br>
<p> <strong> CEDULA: </strong><?php echo $cedula ?></p><br>
<p> <strong> CELULAR: </strong><?php echo $celular ?></p><br>
<p> <strong> CORREO: </strong><?php echo $correo ?></p><br>
<button id="boton_saludar" onclick="alert('HOLA, BIENVENIDO A LA PROGRAMACIÓN WEB')">SALUDAR</button>
</div>
</center>
</body>
</html>

