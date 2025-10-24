<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AppEducación - Calculadora</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(145deg, #e9eef1, #f6f8f9);
      font-family: 'Segoe UI', sans-serif;
      min-height: 100vh;
    }

    /* Barra de navegación */
    .navbar {
      background-color: #ffffff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .navbar-brand {
      color: #0078b0;
      font-weight: bold;
    }
    .navbar-brand span {
      color: #1a73e8;
    }
    .nav-link {
      color: #444 !important;
      font-weight: 500;
    }
    .btn-register {
      background-color: #1a73e8;
      color: white;
      border-radius: 20px;
      font-weight: 600;
    }
    .btn-register:hover {
      background-color: #1565c0;
    }

    /* Contenedor de la calculadora */
    .calc-container {
      background: white;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      width: 320px;
      margin: 80px auto;
      padding: 30px;
      text-align: center;
    }

    .calc-display {
      background-color: #d9e3e5;
      color: #222;
      font-size: 2rem;
      text-align: right;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 20px;
      box-shadow: inset 0 2px 4px rgba(0,0,0,0.2);
    }


    
    .btn-calc {
      width: 65px;
      height: 65px;
      margin: 5px;
      font-size: 1.3rem;
      font-weight: 600;
      border-radius: 10px;
      border: none;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      transition: all 0.2s;
    }
    .btn-calc:hover {
      transform: scale(1.05);
    }

    .btn-number {
      background-color: #f1f3f4;
    }
    .btn-operator {
      background-color: #a8dcf0;
      color: #004a75;
    }
    .btn-equal {
      background-color: #1a73e8;
      color: white;
    }
    .btn-clear {
      background-color: #c3e1f3;
      color: #004a75;
    }

  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">App<span>Educación</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav me-3">
          <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
        </ul>
        <button class="btn btn-register">Registrarse</button>
      </div>
    </div>
  </nav>

  <!-- Calculadora -->
  <div class="calc-container">
    <h5 class="mb-3">Calculadora</h5>
    <div id="display" class="calc-display">0</div>

    <!-- Fila 1: C, ▶, %, ÷ -->
    <div>
      <button class="btn-calc btn-clear" onclick="clearDisplay()">C</button>
      <button class="btn-calc btn-operator" onclick="backspace()">▶</button>
      <button class="btn-calc btn-operator" onclick="input('%')">%</button>
    </div>
    
    <!-- Fila 2: 7, 8, 9, × -->
    <div>
    <button class="btn-calc btn-operator" onclick="input('*')">×</button>
    <button class="btn-calc btn-operator" onclick="input('-')">−</button>
    <button class="btn-calc btn-equal"  onclick="input('+')">+</button>
    
 
     
    </div>
    
    <!-- Fila 3: 4, 5, 3, − -->
    <div>
    <button class="btn-calc btn-operator" onclick="calculate()">=</button>
    <button class="btn-calc btn-operator" onclick="input('/')">÷</button>
    <button class="btn-calc btn-number" onclick="input('0')">0</button>
    </div>
    
    <!-- Fila 4: 0, 00, =, + (+ es botón alto) -->
    <div style="position: relative;">
      <button class="btn-calc btn-number" onclick="input('1')">1</button>
       <button class="btn-calc btn-number" onclick="input('2')">2</button>
     <button class="btn-calc btn-number" onclick="input('3')">3</button>
    </div>
    <div style="position: relative;">
      <button class="btn-calc btn-number" onclick="input('4')">4</button>
    <button class="btn-calc btn-number" onclick="input('6')">5</button>
     <button class="btn-calc btn-number" onclick="input('8')">7</button>
     <button class="btn-calc btn-number" onclick="input('9')">9</button>
    </div>

  </div>

  <script>
    let display = document.getElementById('display');
    let currentInput = '';

    function input(value) {
      currentInput += value;
      display.textContent = currentInput;
    }

    function clearDisplay() {
      currentInput = '';
      display.textContent = '0';
    }

    function backspace() {
      currentInput = currentInput.slice(0, -1);
      display.textContent = currentInput || '0';
    }

    function calculate() {
      try {
        currentInput = eval(currentInput.replace('÷', '/').replace('×', '*').replace('%', '/100'));
        display.textContent = currentInput;
      } catch {
        display.textContent = 'Error';
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>