<?php

    class Conexion {
      public function conectar(){

        $usuario = 'root';
        $contrasena = '';
        $host = 'localhost';
        $db = 'pagina_web_bell';

        try {
          $conexion = new PDO("mysql:host=$host;dbname=$db;", $usuario, $contrasena);
        } catch (PDOException $e) {
            echo "Error: " .$e->getMessage();
        }
        return $conexion;
      }
    }

?>
