Perdón — tuve un problema actualizando el archivo. Aquí tienes el código más corto y sencillo listo para copiar (archivo `index.html`):

```html
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Mi Página</title>
  <style>
    body{font-family:system-ui,Arial;margin:0;padding:1.25rem;background:#f7f7f8;color:#111}
    header,main,footer{max-width:900px;margin:0 auto}
    a{color:#2563eb}
    .card{padding:.75rem;border-radius:.5rem;background:#fff;box-shadow:0 6px 18px rgba(0,0,0,.06);margin-top:.75rem}
  </style>
</head>
<body>
  <header>
    <h1>Tu Nombre</h1>
    <p>Desarrollador · Diseñador · Creador</p>
  </header>

  <main>
    <section class="card">
      <h2>Sobre mí</h2>
      <p>Breve descripción sobre ti.</p>
    </section>

    <section class="card">
      <h2>Proyectos</h2>
      <ul>
        <li><a href="#">Proyecto 1</a></li>
        <li><a href="#">Proyecto 2</a></li>
      </ul>
    </section>

    <section class="card">
      <h2>Contacto</h2>
      <p>Email: <a href="mailto:tu@email.com">tu@email.com</a></p>
    </section>
  </main>

  <footer>
    <p style="text-align:center;color:#666">© <span id="y"></span> Tu Nombre</p>
  </footer>

  <script>document.getElementById('y').textContent=(new Date).getFullYear();</script>
</body>
</html>
```


