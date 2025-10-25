<?php
    echo "Hola, buenas tardes";

    $nombre = "Yadira";
    $edad = "29";
   $imagen "IMG_20250805.jpg";
    $cedula = "1050489762";
?>

<html>
<head>
        <title>Ejercicio 1</title>
        <link href="style.css" rel="Stylesheet">
<head>
    
<body>
    <center>
<div class="panel_datos">
<h2> DATOS PERSONALES</h2>
<img src="<?php echo $imagen?> id="imagen_perfil">
<p> <strong> NOMBRE:</strong><?php echo $nombre?></p><br>
<p> <strong> EDAD:</strong><?php echo $edad?></p><br>
</div>
</center>
</body>
</html>


