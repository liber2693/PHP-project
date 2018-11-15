<?php
include "../views/admin/funciones.php";
date_default_timezone_set("America/Caracas");
session_start();
$id = $_SESSION['id'];
if(isset($_POST['titulo']) && isset($_POST['contenido']) && isset($_FILES['imagen']))
{
	//comprobamos si ha ocurrido un error.
	if ($_FILES["imagen"]["error"] > 0){
 		header('Content-type: application/json; charset=utf-8');
		echo json_encode(0);
		exit();
	}
	else
	{
		//ruta a donde va
		$ruta = "../img/eventos/";;

		$nombreImagen = str_replace(" ","_",$_FILES['imagen']['name']);
		$tipoImagen = $_FILES['imagen']['type'];
		//tipo permitido
		$permitidos = array("image/jpg", "image/jpeg", "image/png");
 		$limite_kb = 16384;
 		//&& $_FILES['imagen']['size'] <= $limite_kb * 1024

 		if (in_array($_FILES['imagen']['type'], $permitidos))
 		{
 			//nombre definifo
			$nombre_definido = md5(rand() * time()).tipo_archivo($tipoImagen);
			$temporalImagen = $_FILES['imagen']['tmp_name'];
			//si no existe la carpeta eventos se crea
			if(!file_exists($ruta))
	        {
	            mkdir($ruta, 0777, true);
	        }

	        $completo = $ruta.$nombre_definido;

	        if (!file_exists($completo)){
				
				//mover la imagen a la carpeta
				$resultado = move_uploaded_file($temporalImagen, $completo);
				if ($resultado)
				{
					
					//parte del codigo donde se va a poner la funcion para hacer el registro del evento
					//titulo $titulo = $_POST['titulo'];
					//contenido $contenido = $_POST['contenido'];
					//fecha hora $fecha_creacion = date("Y-m-d H:m:s");
					//nombre de la imagen $nombre_definido;
					//estatus 0
					//usuario creador: $id

					//Registro completado
		        	header('Content-type: application/json; charset=utf-8');
					echo json_encode(4);
					exit();
				}
				else
				{
					//la imagen no la movio
		        	header('Content-type: application/json; charset=utf-8');
					echo json_encode(3);
					exit();
				}
			}
	        else
	        {	
	        	//ya existe la imagen
	        	header('Content-type: application/json; charset=utf-8');
				echo json_encode(2);
				exit();
	        }
		}
 		else
 		{
 			//no es el tipo de imagen
 			header('Content-type: application/json; charset=utf-8');
			echo json_encode(1);
			exit();
 		}
	}
}
?>