<?php
//fecha creacion:  04-11-2018
require_once '../models/usuarioController.php';
$db = new User();
session_start();
//include '../funciones/funciones.php';

date_default_timezone_set('America/Caracas');
$fecha=date("Y-m-d");
$hora=date("H:m:s");

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
                $id_usuario = $resulPaso2['id_usuario'];
                $nombre_usuario = $resulPaso2['usuario'];
                $contrasena = $resulPaso2['password'];
                $nombre = $resulPaso2['nombre'];
                $apellido = $resulPaso2['apellido'];
                $rol = $resulPaso2['rol'];
                $actividad = $resulPaso2['actividad'];
                $estatus_logico = $resulPaso2['estatus_logico'];

                //actualizar conexion
                $db->updateactivity($id_usuario,$fecha,$hora,1);

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

if(isset($_GET['acceso']) && isset($_GET['id']) && $_GET['acceso'] == 'LiberWEB')
{
    $id = $_GET['id'];
    //actualizar conexion
    $db->updateactivity($id,'','',0);

    unset($_SESSION['id']);
    unset($_SESSION['nombre_usuario']);
    unset($_SESSION['contrasena']);
    unset($_SESSION['actividad']);
    unset($_SESSION['acceso']);
    unset($_SESSION['estatus_logico']);
    
    session_destroy();
    echo json_encode(4); //Sesion cerrada
}  
?>
