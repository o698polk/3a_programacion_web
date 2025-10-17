<!DOCTYPE html>
<html>
<body>

<form method="post">
  Ingresa tu nombre: <input type="text" name="nombre">
  <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    echo "¡Hola, " . htmlspecialchars($nombre) . "!";
}
?>
</body>
</html>
