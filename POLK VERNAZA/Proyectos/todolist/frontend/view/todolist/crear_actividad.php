<!DOCTYPE html>
<html lang="es">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Todo List</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap-5.3.8-dist/css/bootstrap.min.css">
        <!-- SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    </head>
    <body>
        <div class="container cont_todolist">
            <h1 class="text-center">CREAR ACTIVIDAD</h1>
         <a href="index.html" class="btn btn-primary">Regresar al index</a>
      
         <div class="container fomulario_actividad" >
            <form action="" method="post" id="formulario_crear_actividad">
                <div class="form-group">
                    <label for="actividad">Actividad</label>
                    <input type="text" class="form-control" id="actividad" name="actividad" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                   <select name="estado" id="estado" class="form-control">
                    <option value="Completado">Completado</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="En progreso">En progreso</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control">
                        <option value="Deberes">Deberes</option>
                        <option value="Tareas">Tareas</option>
                        <option value="Proyectos">Proyectos</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Crear Actividad</button>
            </form>
         </div>
        </div>
        <script src="js/jquery-3.7.1.min.js" ></script>
        <script src="css/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
        <!-- SweetAlert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            CrearActividad();
        });
    </script>
    </body>
</html>
