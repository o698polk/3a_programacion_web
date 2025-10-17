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
         /* Variables CSS para tema claro y oscuro */
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

        [data-theme="dark"] {
            --primary-color: #6b8cbc;
            --secondary-color: #4a6fa5;
            --background-color: #1a1a1a;
            --surface-color: #2d2d2d;
            --text-color: #f5f5f5;
            --text-secondary: #cccccc;
            --border-color: #444444;
            --hover-color: #8ba8d6;
            --shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        /* Estilos generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
            transition: background-color 0.3s, color 0.3s;
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
            transition: color 0.3s;
        }

        a:hover {
            color: var(--hover-color);
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

        /* Header */
        header {
            background-color: var(--surface-color);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
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

        /* Sección principal */
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
            transition: transform 0.3s, box-shadow 0.3s;
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

        /* Footer */
        footer {
            background-color: var(--surface-color);
            padding: 2rem 0;
            margin-top: 2rem;
            border-top: 1px solid var(--border-color);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Botón con animación */
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

        /* Toggle de tema */
        .theme-toggle {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
            color: var(--text-color);
            margin-left: 1rem;
        }

        /* Responsividad */
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
                    <li>
                        <button class="theme-toggle" id="themeToggle">🌙</button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container main-section">
        <h1>Artículos Destacados</h1>
        <div class="articles-container">
            <article class="article">
                <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Desarrollo Web">
                <div class="article-content">
                    <h2>Desarrollo Web Moderno</h2>
                    <p>Exploramos las últimas tendencias en desarrollo web, incluyendo frameworks JavaScript, diseño responsivo y mejores prácticas de accesibilidad. Aprende cómo crear experiencias web atractivas y funcionales.</p>
                    <button class="btn">Leer más</button>
                </div>
            </article>
            <article class="article">
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Diseño UX/UI">
                <div class="article-content">
                    <h2>Principios de Diseño UX/UI</h2>
                    <p>Descubre los fundamentos del diseño centrado en el usuario. Desde la investigación hasta la implementación, te guiamos a través de los procesos que hacen que las interfaces sean intuitivas y agradables.</p>
                    <button class="btn">Leer más</button>
                </div>
            </article>
        </div>
    </main>

    <footer>
        <div class="container footer-content">
            <p>&copy; 2023 Mi Sitio Web. Todos los derechos reservados.</p>
            <p>Contacto: info@misitioweb.com | Tel: +34 123 456 789</p>
        </div>
    </footer>

    <script>
        // Toggle de tema oscuro/claro
        const themeToggle = document.getElementById('themeToggle');
        const currentTheme = localStorage.getItem('theme') || 'light';
        
        // Aplicar tema guardado
        if (currentTheme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
            themeToggle.textContent = '☀️';
        } else {
            document.documentElement.setAttribute('data-theme', 'light');
            themeToggle.textContent = '🌙';
        }
        
        // Cambiar tema al hacer clic
        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            
            themeToggle.textContent = newTheme === 'dark' ? '☀️' : '🌙';
        });
    </script>
</body>
</html>