<?php
//fecha creacion:  04-11-2018
require_once '../models/usuarioController.php';
$db = new User();
/*require_once '../models/conexion.php';
//include '../funciones/funciones.php';

/*date_default_timezone_set('America/Caracas');
$fecha=date("Y-m-d");
$hora=date("H:m:s");*/

if(!empty($_POST['usuario']) && !empty($_POST['password']))
{
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    //print_r($_POST);
    //$password=md5(base64_encode($_POST['password']));
    
    //Paso 1 verificar que existe el usuario
    $resulPaso1 = $db->selectUserOne($usuario);
     
    if($resulPaso1 != 0)
    {
        $id_User = $resulPaso1['id_usuario'];
        
        //Paso 2 verificar contraseña de ese usuario para logear
        $resulPaso2 = $db->selectUserPassword($id_User,$usuario,$password);
        
        if ($resulPaso2 != 0)
        {
            //paso 3 usuario existoso llenar variables de seccion
            if($usuario == $resulPaso2['usuario'] && $password == $resulPaso2['password'])
            {
                session_start();
                $id_usuario = $resulPaso2['id_usuario'];
                $nombre_usuario = $resulPaso2['usuario'];
                $contrasena = $resulPaso2['password'];
                $nombre = $resulPaso2['nombre'];
                $apellido = $resulPaso2['apellido'];
                $rol = $resulPaso2['rol'];
                $actividad = $resulPaso2['actividad'];
                $estatus_logico = $resulPaso2['estatus_logico'];

                #Varibles de session_start
                $_SESSION['id'] = $id_usuario;
                $_SESSION['nombre_usuario'] = $nombre_usuario;
                $_SESSION['contrasena'] = $contrasena;
                $_SESSION['actividad'] = $actividad;
                $_SESSION['estatus_logico'] = $estatus_logico;
                $_SESSION['acceso'] = 'LiberWEB';

                echo json_encode(3); //LOGEADO con exito

            }
        }
        else
        {
            echo json_encode(2); //Contraseña Invalida
        }
    }
    else
    {
        echo json_encode(1); //Usuario no existe
    }
}
else
{
    echo "pa donde vas tu menor";
}
    


    /*$clase_usuario = new Usuarios();
    echo $retorno = $clase_usuario->buscarUsuariosOne($usuario);*/
    /*

    if (count($retorno) != 0) {
      if ($usuario == $retorno['username'] && $password == $retorno['password']) {
          session_start();
          $id_usuario = $retorno['id'];
          $nombre_usuario = $retorno['username'];
          $contraseña = $retorno['password'];
          $nombre = $retorno['nombre'];
          $apellido = $retorno['apellido'];
          $actividad = $retorno['actividad'];
          $estatus_logico = $retorno['estatus_logico'];

      $actualiza_actividad = $clase_usuario->usuarioLogeado($id_usuario);

          #Varibles de session_start
          $_SESSION['id_usuario'] = $id_usuario;
          $_SESSION['nombre_usuario'] = $nombre_usuario;
          $_SESSION['contraseña'] = $contraseña;
          $_SESSION['nombre'] = $nombre;
          $_SESSION['apellido'] = $apellido;
          $_SESSION['actividad'] = $actividad;
          $_SESSION['estatus_logico'] = $estatus_logico;

          echo json_encode(3); //LOGEADO con exito
      }
        else{
          echo json_encode(2); //contraseña invalidad
        }
    }
      else{
        echo json_encode(1); //Vacios los campos o no existe
      }

  }
  /*else{
    echo json_encode(4) ."tas vacio menor";
  }*/

  /*if(isset($_GET['close'])){
  	session_start();
  	$id_usuario = $_SESSION['id_usuario'];
    $clase_usuario = new Usuarios();
    $actualiza_actividad = $clase_usuario->cerrarSesion($id_usuario);

  		unset($_SESSION['id_usuario']);
  		unset($_SESSION['nombre_usuario']);
  		unset($_SESSION['contraseña']);
  		unset($_SESSION['nombre']);
      unset($_SESSION['apellido']);
      unset($_SESSION['actividad']);
      unset($_SESSION['estatus_logico']);

  		session_destroy();
  		echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";*/


?>
