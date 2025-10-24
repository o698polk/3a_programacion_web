<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Página Web</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">
  <style>
    /* =====================
       VARIABLES DE COLOR
    ====================== */
    :root {
      --primary-color: #4a6fa5;
      --secondary-color: #6b8cbc;
      --background-color: #f5f5f5;
      --surface-color: #ffffff;
      --text-color: #333333;
      --text-secondary: #666666;
      --border-color: #dddddd;
      --hover-color: #3a5a8c;
      --shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* =====================
       ESTILOS GENERALES
    ====================== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      transition: background-color 0.4s ease, color 0.4s ease;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      background-color: var(--background-color);
      color: var(--text-color);
      line-height: 1.6;
      transition: background-color 0.4s, color 0.4s;
      opacity: 0;
      animation: fadeIn 1s ease-in forwards;
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }

    h1, h2, h3 {
      font-family: 'Montserrat', sans-serif;
      margin-bottom: 1rem;
    }

    p {
      margin-bottom: 1rem;
    }

    a {
      text-decoration: none;
      color: var(--primary-color);
      position: relative;
      overflow: hidden;
      transition: color 0.3s;
    }

    a::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0%;
      height: 2px;
      background-color: var(--primary-color);
      transition: width 0.3s;
    }

    a:hover::after {
      width: 100%;
    }

    img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }

    /* =====================
       HEADER
    ====================== */
    header {
      background-color: var(--surface-color);
      box-shadow: var(--shadow);
      position: sticky;
      top: 0;
      z-index: 100;
      transition: background-color 0.4s;
    }

    .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 0;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--primary-color);
    }

    nav ul {
      display: flex;
      list-style: none;
    }

    nav li {
      margin-left: 1.5rem;
    }

    nav a {
      font-weight: 600;
      padding: 0.5rem;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    nav a:hover {
      background-color: rgba(74, 111, 165, 0.1);
    }

    /* =====================
       SECCIÓN PRINCIPAL
    ====================== */
    .main-section {
      padding: 3rem 0;
    }

    .articles-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }

    .article {
      background-color: var(--surface-color);
      border-radius: 8px;
      overflow: hidden;
      box-shadow: var(--shadow);
      transition: transform 0.3s, box-shadow 0.3s, background-color 0.4s;
    }

    .article:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .article-content {
      padding: 1.5rem;
    }

    .article h2 {
      color: var(--primary-color);
    }

    .article p {
      color: var(--text-secondary);
    }

    /* =====================
       FOOTER
    ====================== */
    footer {
      background-color: var(--surface-color);
      padding: 2rem 0;
      margin-top: 2rem;
      border-top: 1px solid var(--border-color);
      transition: background-color 0.4s;
    }

    .footer-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    /* =====================
       BOTONES
    ====================== */
    .btn {
      display: inline-block;
      background-color: var(--primary-color);
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 4px;
      border: none;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s, transform 0.2s;
    }

    .btn:hover {
      background-color: var(--hover-color);
      transform: scale(1.05);
    }

    /* =====================
       BOTÓN "VOLVER ARRIBA"
    ====================== */
    .btn-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background-color: var(--primary-color);
      color: white;
      border: none;
      border-radius: 50%;
      width: 45px;
      height: 45px;
      font-size: 1.2rem;
      display: none;
      cursor: pointer;
      box-shadow: var(--shadow);
      transition: background-color 0.3s, transform 0.2s;
      z-index: 200;
    }

    .btn-top:hover {
      background-color: var(--hover-color);
      transform: scale(1.1);
    }

    /* =====================
       RESPONSIVIDAD
    ====================== */
    @media (max-width: 768px) {
      .header-container {
        flex-direction: column;
        text-align: center;
      }

      nav ul {
        margin-top: 1rem;
        flex-wrap: wrap;
        justify-content: center;
      }

      nav li {
        margin: 0.5rem;
      }

      .footer-content {
        flex-direction: column;
        text-align: center;
      }

      .footer-content p {
        margin-bottom: 1rem;
      }
    }

    @media (max-width: 480px) {
      .articles-container {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="container header-container">
      <h1 class="logo">Mi Sitio Web</h1>
      <nav>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Acerca de</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container main-section">
    <h1>Artículos Destacados</h1>
    <div class="articles-container">
      <article class="article">
        <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?auto=format&fit=crop&w=1470&q=80" alt="Desarrollo Web">
        <div class="article-content">
          <h2>Desarrollo Web Moderno</h2>
          <p>Exploramos las últimas tendencias en desarrollo web, incluyendo frameworks JavaScript, diseño responsivo y mejores prácticas de accesibilidad.</p>
          <button class="btn">Leer más</button>
        </div>
      </article>

      <article class="article">
        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1470&q=80" alt="Diseño UX/UI">
        <div class="article-content">
          <h2>Principios de Diseño UX/UI</h2>
          <p>Descubre los fundamentos del diseño centrado en el usuario. Desde la investigación hasta la implementación, te guiamos a través de los procesos más importantes.</p>
          <button class="btn">Leer más</button>
        </div>
      </article>
    </div>
  </main>

  <footer>
    <div class="container footer-content">
      <p>&copy; 2025 Mi Sitio Web. Todos los derechos reservados.</p>
      <p>Contacto: info@misitioweb.com | Tel: +34 123 456 789</p>
    </div>
  </footer>

  <!-- Botón volver arriba -->
  <button id="scrollTopBtn" class="btn-top">⬆️</button>

  <script>
    // ======== BOTÓN VOLVER ARRIBA ========
    const scrollBtn = document.getElementById('scrollTopBtn');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        scrollBtn.style.display = 'block';
      } else {
        scrollBtn.style.display = 'none';
      }
    });

    scrollBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  </script>
</body>
</html>

