<?php
class Conexion {
    
    public function conectar(){

        $usuario = 'root';
        $contrasena = '123456';
        $host = 'localhost';
        $db = 'pagina_web_bell';

        try{
            $conexion = new PDO("mysql:host = $host; dbname = $db;", $usuario, $contrasena);
            
            //$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           
        }
        catch (PDOException $e){
            echo "No hay conexion con la BD <br> Error: " .$e->getMessage();
        }
        
        return $conexion;
    }
}

?>
