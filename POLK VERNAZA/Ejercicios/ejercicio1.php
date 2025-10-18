<?php
$nombre="POLK VERNAZA";
$edad="24";
$imagen="img/3rre.png";
$cedula="085000000";
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
</div>
</center>
</body>
</html>