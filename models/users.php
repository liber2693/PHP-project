<?php
//include 'conexion.php';
//error_reporting(0);
    class Usuarios {

      //Metodo para insertar un usuario en la BD
      public function insertarUsuario($username, $password, $nombre, $apellido, $status){

        $modelo = new Conexion();
        $conexion = $modelo->conectar();
        $sql = "insert into usuarios (username, password, nombre, apellido, estatus_logico)
                values (:username, :password, :nombre, :apellido, :estatus_logico)";

        $statement = $conexion->prepare($sql);
        $insertar = array(
                          ':username'=>$username,
                          ':password'=>$password,
                          ':nombre'=>$nombre,
                          ':apellido'=>$apellido,
                          ':estatus_logico'=>$status
                        );

        /*$statement = $conexion->prepare($sql);
        $statement->bindParam(':nombre',$username);
        $statement->bindParam(':password',$password);
        $statement->bindParam(':nombre',$nombre);
        $statement->bindParam(':apellido',$apellido);
        $statement->bindParam(':estatus_logico',$estatus_logico);
        print_r($statement);exit; */

          if (!$statement){
            return "Error al intentar insertar en la Base de Datos";
            }
          else{
            $statement->execute($insertar);
            return "Registro guardado con exito";

          }
      }

      //Metodo para buscar todos los usuarios en la base de datos
      public function buscarUsuariosAll(){

        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->conectar();
        $sql = "select * from usuarios";

          $statement = $conexion->prepare($sql);
          $statement->execute();

        while ($resultado = $statement->fetch(PDO::FETCH_ASSOC)){
          $rows[] = $resultado;
        }
        if ($rows){
          $statement = null;
          return $rows;
          }
        else{
          return "No existen registros";
        }
      }


      //Metodo para buscar un unico usuario en la base de datos
      public function buscarUsuariosOne($username){

        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->conectar();
        $sql = "select * from usuarios where username=:username";

          $statement = $conexion->prepare($sql);
          $consultar = array(
                            ':username'=>$username
                          );

          $statement->execute($consultar);
          $rows = $statement->fetch(PDO::FETCH_ASSOC);
          if ($rows){
            $statement = null;
            return $rows;
            }
          else{
            return null; //No existe el usuario
          }
      }

      /*Metodo para  editar la informacion de algun usuario en particular*/
      public function editarUsuario($id, $username){

        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->conectar();
        $sql = "update usuarios set username=:username where id=:id";

          $statement = $conexion->prepare($sql);
          $consultar = array(
                            ':id'=>$id,
                            ':username'=>$username
                          );

          $statement->execute($consultar);
            return "Usuario actualizado con exito";
        }


      /*Metodo para  editar la informacion de algun usuario en particular*/
      public function eliminarUsuario($id){

        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->conectar();
        $sql = "delete from usuarios where id=:id";

          $statement = $conexion->prepare($sql);
          $consultar = array(
                            ':id'=>$id
                          );

          $statement->execute($consultar);
            return "eliminado exitosamente el usuario con id " .$id;
          }


      public function usuarioLogeado($id){

        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->conectar();
        $sql = "update usuarios set actividad = 1 where id=:id";

          $statement = $conexion->prepare($sql);
          $consultar = array(
                            ':id'=>$id
                          );

          $statement->execute($consultar);
            return 'Sesion iniciada';
        }


      public function cerrarSesion($id){

        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->conectar();
        $sql = "update usuarios set actividad = 0 where id=:id";

          $statement = $conexion->prepare($sql);
          $consultar = array(
                            ':id'=>$id
                          );

          $statement->execute($consultar);
            return 'Sesion cerrada';
        }


    }

?>
