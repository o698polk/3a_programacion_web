<!DOCTYPE html>
<html lang="es">
<head><meta charset="utf-8"><title>Contacto</title></head>
<body>
  <h1>Contacto</h1>
  <form action="enviar.php" method="post">
    <label>Nombre:<br><input name="nombre" required></label><br><br>
    <label>Correo:<br><input name="email" type="email" required></label><br><br>
    <label>Mensaje:<br><textarea name="mensaje" required></textarea></label><br><br>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>