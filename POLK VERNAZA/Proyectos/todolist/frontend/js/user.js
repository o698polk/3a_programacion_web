function RegistrarUsuario(){
  $('#formulario_registrar_usuario').submit(function(e){
    e.preventDefault();
  });
}
function LoginUsuario(){
  $('#formulario_login').submit(function(e){
    e.preventDefault();
    alert('Contraseña: ' + $('#password').val());
    $.ajax({
        url: '../../backend/api/endpoint.php',
        type: 'POST',
        dataType: 'json',
        timeout: 10000, // 10 second timeout
        data: {
          login_usuario_postmethod: true,
          email: email,
          password: password,
        },
        success: function(data){
          console.log(data);  
          if(data.success){
            Swal.fire({
              icon: 'success',
              title: 'Éxito',
              text: 'Usuario logueado correctamente',
              timer: 1500,
              showConfirmButton: false
            }).then(() => {
              window.location.href = '../todolist/index.php';
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: data.message || 'Error al iniciar sesión',
              confirmButtonText: 'Aceptar'
            });
            // Re-enable button
            if (submitBtn) {
              submitBtn.disabled = false;
              submitBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right me-2" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/><path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/></svg>Iniciar Sesión';
            }
          }
        },
        error: function(xhr, status, error){
          console.error('Error:', error);
          Swal.fire({
            icon: 'error',
            title: 'Error de conexión',
            text: 'No se pudo conectar con el servidor',
            confirmButtonText: 'Aceptar'
          });
          // Re-enable button
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right me-2" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/><path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/></svg>Iniciar Sesión';
          }
        }
      });
    
  });
}