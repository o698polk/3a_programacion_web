<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Sencilla</title>
  <style>
    body {
      font-family: sans-serif;
      line-height: 1.6;
      background-color: #f4f4f4;
      color: #333;
      padding: 20px;
    }
    .container {
      max-width: 800px;
      margin: auto;
      background: #fff;
      padding: 20px;
      border: 1px solid #ddd;
    }
    h1, h2 {
      color: #0056b3;
    }
    nav ul {
      padding: 0;
    }
    nav li {
      display: inline;
      margin-right: 15px;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1>Bienvenido a Mi Página Sencilla</h1>
      <nav>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Acerca de</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <h2>Contenido Principal</h2>
      <p>Este es un ejemplo de una página web sencilla creada con HTML, un poco de CSS interno y PHP.</p>
      <p>El objetivo es tener una estructura clara y fácil de modificar.</p>

      <?php
        // Ejemplo de código PHP para mostrar la fecha actual
        echo "<p>La fecha de hoy es: " . date("d/m/Y") . "</p>";
      ?>
    </main>

    <footer>
      <hr>
      <p>&copy; <?php echo date("Y"); ?> Mi Sitio Sencillo. Todos los derechos reservados.</p>
    </footer>
  </div>
</body>
</html>
