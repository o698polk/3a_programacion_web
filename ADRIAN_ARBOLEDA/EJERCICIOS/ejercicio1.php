<?php
$nombre = "Adrian Arboleda";
$edad = "24";
$imagen= "naruto.png";
$cedula = "080363367-6";
?>

<html>
<head>
    <tittle> EJERCICIO 1 </tittle>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="panel_datos"> 
        <center>
         <h2>DATOS PERSONALES</h2>
<img src="<?php echo $imagen?>" id="imagen_perfil">
 <br> <p>   <h3><strong> Nombre: </strong> <?php echo $nombre?> </p> </br>
<p>   <h3><strong> edad: </strong> <?php echo $edad?> </p>
 </center>
</div>
</body>
</html>