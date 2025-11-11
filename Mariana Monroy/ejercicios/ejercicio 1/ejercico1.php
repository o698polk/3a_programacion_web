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
   
    <style>
    .panel_datos{
   background-color: rgba(247, 127, 197, 1);
   border-radius: 10px;
   border:solid 3px rgba(1, 19, 26, 1);
   width: 300px; 
}
#imagen_perfil{
    width:80px;
    height: 80px;
    border-radius: 100px;
    border:solid 2px rgb(240, 202, 202)
}

    #boton_saludar{
        background-color: rgb(129, 0, 75);
        color: rgb(255, 255, 255);
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 12px;
        animation: alternate blinker 1s linear infinite;
}
.Boton_saludar:hover {
        background-color: rgb(240, 144, 184);
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
<button id="boton_saludar" onclick="alert('HOLA, BIENVENIDO A LA PROGRAMACIÓN WEB')">Mi Perfil</button>
</div>
</center>
</body>
</html>