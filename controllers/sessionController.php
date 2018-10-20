<?php
require_once '../models/usuarios.php';
require_once '../models/conexion.php';
//include '../funciones/funciones.php';
date_default_timezone_set('America/Caracas');
  $fecha=date("Y-m-d");
  $hora=date("H:m:s");

  if(!empty($_POST['usuario']) && !empty($_POST['password']))
  {
    $usuario=$_POST['usuario'];
    $password=md5(base64_encode($_POST['password']));
    $i = 0;

    $clase_usuario = new Usuarios();
    $retorno = $clase_usuario->buscarUsuariosOne($usuario);

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

  if(isset($_GET['close'])){
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
  		echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
  }

?>
