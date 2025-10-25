<?php
$nombre = "ADRIAN ARBOLEDA";
$edad = "24";
$imagen = "rrtt.png";
$cedula = "080363367-6";
?>

<html>
<head>
    <title>EJERCICIO 1</title>
    <link href="Ai.css" rel="stylesheet">
</head>

<body>
<center>
<div class="panel_datos">
    <h2>DATOS PERSONALES</h2>
    <img src="<?php echo $imagen ?>" id="imagen_perfil">
    <p><strong>NOMBRE:</strong> <?php echo $nombre ?></p><br>
    <p><strong>EDAD:</strong> <?php echo $edad ?></p><br>
    <p><strong>CEDULA:</strong> <?php echo $cedula ?></p><br>
    <button id="boton_saludar">SALUDAR</button>

    <!-- Contenedor del mensaje -->
    <div id="mensaje_saludo"> 👋<br>Bienvenido a la Programación Web 🚀</div>
</div>
</center>

<!-- Script de animación -->
<script>
const boton = document.getElementById("boton_saludar");
const mensaje = document.getElementById("mensaje_saludo");

boton.addEventListener("click", () => {
    // Efecto rebote del botón
    boton.classList.add("rebote");
    setTimeout(() => boton.classList.remove("rebote"), 600);

    // Mostrar el mensaje animado
    mensaje.classList.add("visible");
    setTimeout(() => mensaje.classList.remove("visible"), 3500);
});
</script>

</body>
</html>
