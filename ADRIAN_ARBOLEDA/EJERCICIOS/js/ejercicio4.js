  // Función para validar el formulario
  function validarFormulario(event) {
    event.preventDefault();
    
    // Limpiar mensajes de error previos
    document.querySelectorAll('.error').forEach(el => el.textContent = '');
    document.querySelectorAll('input').forEach(input => {
        input.classList.remove('invalid', 'valid', 'shake');
    });
    
    let esValido = true;
    
    // Validar usuario
    const usuario = document.getElementById('usuario').value.trim();
    if (usuario === '') {
        mostrarError('errorUsuario', 'El usuario es obligatorio');
        marcarInvalido('usuario');
        esValido = false;
    } else if (usuario.length < 3) {
        mostrarError('errorUsuario', 'El usuario debe tener al menos 3 caracteres');
        marcarInvalido('usuario');
        esValido = false;
    } else {
        marcarValido('usuario');
    }
    
    // Validar email
    const email = document.getElementById('email').value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === '') {
        mostrarError('errorEmail', 'El email es obligatorio');
        marcarInvalido('email');
        esValido = false;
    } else if (!emailRegex.test(email)) {
        mostrarError('errorEmail', 'El formato del email no es válido');
        marcarInvalido('email');
        esValido = false;
    } else {
        marcarValido('email');
    }
    
    // Validar contraseña
    const password = document.getElementById('password').value;
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
    if (password === '') {
        mostrarError('errorPassword', 'La contraseña es obligatoria');
        marcarInvalido('password');
        esValido = false;
    } else if (!passwordRegex.test(password)) {
        mostrarError('errorPassword', 'La contraseña debe tener al menos 8 caracteres, una mayúscula, una minúscula y un número');
        marcarInvalido('password');
        esValido = false;
    } else {
        marcarValido('password');
    }
    
    // Validar confirmación de contraseña
    const confirmarPassword = document.getElementById('confirmarPassword').value;
    if (confirmarPassword === '') {
        mostrarError('errorConfirmar', 'Debes confirmar tu contraseña');
        marcarInvalido('confirmarPassword');
        esValido = false;
    } else if (password !== confirmarPassword) {
        mostrarError('errorConfirmar', 'Las contraseñas no coinciden');
        marcarInvalido('confirmarPassword');
        esValido = false;
    } else if (password !== '') {
        marcarValido('confirmarPassword');
    }
    
    // Si el formulario es válido
    if (esValido) {
        alert('¡Registro exitoso! Bienvenido/a a nuestra comunidad.');
        // Aquí normalmente enviarías los datos al servidor
        // document.getElementById('formularioRegistro').submit();
    }
    
    return false;
}

// Funciones auxiliares
function mostrarError(elementId, mensaje) {
    document.getElementById(elementId).textContent = mensaje;
}

function marcarInvalido(elementId) {
    const element = document.getElementById(elementId);
    element.classList.add('invalid', 'shake');
    element.classList.remove('valid');
}

function marcarValido(elementId) {
    const element = document.getElementById(elementId);
    element.classList.add('valid');
    element.classList.remove('invalid', 'shake');
}

// Mostrar/ocultar contraseña
document.getElementById('togglePassword').addEventListener('click', function() {
    const passwordInput = document.getElementById('password');
    const toggleButton = this;
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleButton.textContent = '🙈';
    } else {
        passwordInput.type = 'password';
        toggleButton.textContent = '👁️';
    }
});

// Indicador de fortaleza de contraseña
document.getElementById('password').addEventListener('input', function() {
    const password = this.value;
    const strengthBar = document.getElementById('passwordStrength');
    
    // Reiniciar la barra
    strengthBar.className = 'password-strength';
    
    if (password.length === 0) {
        return;
    }
    
    // Calcular fortaleza
    let strength = 0;
    
    // Longitud
    if (password.length >= 8) strength += 1;
    
    // Caracteres variados
    if (/[a-z]/.test(password)) strength += 1;
    if (/[A-Z]/.test(password)) strength += 1;
    if (/[0-9]/.test(password)) strength += 1;
    if (/[^a-zA-Z0-9]/.test(password)) strength += 1;
    
    // Aplicar clases según la fortaleza
    if (strength <= 2) {
        strengthBar.classList.add('strength-weak');
    } else if (strength <= 4) {
        strengthBar.classList.add('strength-medium');
    } else {
        strengthBar.classList.add('strength-strong');
    }
});

// Validación en tiempo real
document.querySelectorAll('#formularioRegistro input').forEach(input => {
    input.addEventListener('blur', function() {
        // Validación básica en tiempo real
        if (this.value.trim() !== '') {
            this.classList.add('valid');
            this.classList.remove('invalid');
        } else {
            this.classList.add('invalid');
            this.classList.remove('valid');
        }
    });
});