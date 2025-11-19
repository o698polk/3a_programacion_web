  <?php
$nombre= "Jessica Angulo";
$edad= "24 AÑOS";
$imagen= "Img/IMG_b8c31c78.jpg";
$cedula= "0804386621";
$celular= "0985866533";
$correo= "anguloestaciojesicaselena@gmail.com"
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
<button id="boton_saludar" onclick="alert('HOLA, BIENVENIDO')">SALUDAR</button>
</div>
</center>
</body>
</html>
