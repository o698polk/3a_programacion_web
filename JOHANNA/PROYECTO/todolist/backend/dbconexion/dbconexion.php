<?php
class dbconexion{
    public static function conectar(){
        try{
          
            $host="localhost";
            $user="root";
            $password="";
            $port="3308";
            $database="dbactividades";
            $conn= new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conn;
           
        }catch(PDOException $e){
            echo "Error de conexión: " . $e->getMessage();
        }
    }
}
    


?>
