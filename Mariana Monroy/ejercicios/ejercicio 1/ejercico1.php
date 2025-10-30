<?php
$nombre="MARIANA MONROY";
$edad="31";
$imagen="img/IMG_9773MARIANA.JPG";
$cedula="0804388569";
$correo="marianamonroy1993@gmail.com";
?>

<html>
<head>
    <title>EJERCICIO 1</title>
    <link href="style.css" rel="stylesheet">
    <style>
        .panel_datos{
   background-color: rgb(236, 104, 197);
   border-radius: 20px;
   border:solid 3px black;
   width: 350px; 
}
.imagen_perfil{
    width:80px;
    height: 80px;
    border-radius: 100px;
    border:solid 2px rgb(148, 11, 130)
}
    </style>
</head>

<body>
<center>
<div class="panel_datos">
 <h2 >DATOS PERSONALES</h2>
 <img src="<?php echo $imagen ?>" id="imagen_perfil">
<p> <strong> NOMBRE:</strong><?php echo $nombre ?></p><br>
<p> <strong> EDAD:</strong><?php echo $edad ?></p><br>
<p> <strong> CEDULA:</strong><?php echo $cedula ?></p><br>
<p> <strong> CORREO:</strong><?php echo $correo ?></p><br>
</div>
</center>
</body>
</html>