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
            <h1 class="text-center">ELIMINAR ACTIVIDAD</h1>
         <a href="index.html" class="btn btn-primary">Regresar al index</a>
         <div class="container fomulario_actividad" >
            <p> <strong>Actividad:</strong> <span id="actividad">Deberes de calculo</span></p>
            <p> <strong>Descripción:</strong> <span id="descripcion">Deberes de calculo</span></p>
            <p> <strong>Estado:</strong> <span id="estado">Completado</span></p>
            <p> <strong>Fecha de Creación:</strong> <span id="fecha_creacion">2025-10-22</span></p>
            <p> <strong>Fecha de Actualización:</strong> <span id="fecha_actualizacion">2025-10-22</span></p>
           
         </div>
         <form action="" method="post" id="formulario_eliminar_actividad">
            <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
            <input type="submit" class="btn btn-danger" value="Eliminar Actividad">
         </form>
        </div>
        <script src="js/jquery-3.7.1.min.js" ></script>
        <script src="css/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
        <!-- SweetAlert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            EliminarActividad();
        });
    </script>
    </body>
</html>