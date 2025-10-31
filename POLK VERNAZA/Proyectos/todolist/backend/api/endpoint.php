<?php 
include '../query/complemte.php';

// Asegurar que la respuesta sea JSON
header('Content-Type: application/json');

class endpoint{
    public static function mostrarActividades(){
        return consultas::mostrarActividad();
    }

    public static function EndpointController(){
        if($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            if(isset($_GET['mostar_actividades_getmethod'])){
               echo endpoint::mostrarActividades();
            } else if(isset($_GET['obtener_actividad_por_id'])){
                echo consultas::obtenerActividadPorId($_GET['id']);
            } else {
                echo json_encode(['error' => 'Parámetro no válido']);
            }
        } else if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if(isset($_POST['crear_actividad_postmethod'])){
                echo consultas::crearActividad($_POST['actividad'], $_POST['descripcion'], $_POST['estado'], $_POST['tipo']);
            } else if(isset($_POST['editar_actividad_postmethod'])){
                echo consultas::editarActividad($_POST['id'], $_POST['actividad'], $_POST['descripcion'], $_POST['estado'], $_POST['tipo']);
            }  else if(isset($_POST['login_usuario_postmethod'])){
                echo user::loginUsuario($_POST['email'], $_POST['password']);
            }
             else {
                echo json_encode(['error' => 'Parámetro no válido']);
             }
          
        } 
        else if($_SERVER['REQUEST_METHOD'] == 'DELETE')
        {
            // Para DELETE, los datos vienen en el cuerpo de la petición
            parse_str(file_get_contents("php://input"), $_DELETE);
            if(isset($_DELETE['eliminar_actividad_deletemethod'])){
                echo consultas::eliminarActividad($_DELETE['id']);
            } else {
                echo json_encode(['error' => 'Parámetro no válido']);
            }
        }
        else {
            echo json_encode(['error' => 'Método no permitido']);
        } 
    }
    
}

endpoint::EndpointController();







?>