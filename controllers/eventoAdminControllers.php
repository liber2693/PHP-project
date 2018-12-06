<?php
include "../models/eventoAdminModels.php";
include "../views/admin/funciones.php";
date_default_timezone_set("America/Caracas");
session_start();
$db = new EventAdmin();
$id = $_SESSION['id'];
$fecha = date("Y-m-d H:m:s");
//ruta a donde va
$ruta = "../img/eventos/";
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
					$titulo = $_POST['titulo'];
					$contenido = addslashes($_POST['contenido']);
					$fecha_creacion = $fecha;
					$estatus = 0;
					
					$result = $db->createEventAdmin($titulo,$contenido,$nombre_definido,$fecha_creacion,$estatus,$id);
					
					//Registro completado
		        	header('Content-type: application/json; charset=utf-8');
					echo json_encode($result);
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

if(isset($_GET['page']))
{
	$currentPage = $_GET['page'] - 1;
	$text = $_GET['text'];
	
	//print_r($text);die();
	//$lista = array();
	
	$lista = $db->listEventAdmin($text);

	
	$total = count($lista);

	$data = array_slice($lista, $currentPage * 10, 10);

	//print_r($data);die();

	$data = [ 
		"lista" => $data,
	 	"total" => $total 
	];


	header('Content-type: application/json; charset=utf-8');
	echo json_encode($data);
	exit();
}	

//cambiar estatus
if(isset($_POST['id']) && isset($_POST['estatus'])){

	$id_registro = $_POST['id'];
	$estatus = $_POST['estatus'];
	$fecha_modificacion = $fecha;

	$result = $db->changeStatusEventAdmin($id_registro,$fecha_modificacion,$estatus);
	
	$data = [ 
		"result" => $result
	];

	
	header('Content-type: application/json; charset=utf-8');
	echo json_encode($data);
	exit();

}

//buscar un evento
if(isset($_GET['id_evento']))
{
	$id_evento = $_GET['id_evento'];
	
	//buscar registro por el id
	$data = $db->selectEventAdmin($id_evento);

	header('Content-type: application/json; charset=utf-8');
	echo json_encode($data);
	exit();
	
}

// actualziar evento
if(isset($_POST['id_registro']) && isset($_POST['titulo_Actualizar']) && isset($_POST['contenido_Actualizar']))
{	
	$id_registro = $_POST['id_registro'];
	$titulo = $_POST['titulo_Actualizar'];
	$contenido = addslashes($_POST['contenido_Actualizar']);
	$fecha_modificacion = $fecha;

	//si llega una nueva imagen
	if(isset($_FILES['imagen']))
	{
		if ($_FILES["imagen"]["error"] > 0){
	 		header('Content-type: application/json; charset=utf-8');
			echo json_encode(0);
			exit();
		}
		else
		{
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
						//buscar imagen vieja para modificarla
						$imagen_vieja = $db->selectPhoteEventAdmin($id_registro);	
						$archivo_viejo = $ruta.$imagen_vieja['nombre_imagen'];
						//eliminar registro
						if(file_exists($archivo_viejo)){
							unlink($archivo_viejo);
						}
						//actualizar registro con la imagen			
						$result = $db->updateEventAdmin($id_registro,$titulo,$contenido,$nombre_definido,$fecha_modificacion,$id,1);
						
						//Registro completado
			        	header('Content-type: application/json; charset=utf-8');
						echo json_encode($result);
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
	//actualiza puro registro
	else
	{
		//parte del codigo para actualizar solo texto del evento
		$result = $db->updateEventAdmin($id_registro,$titulo,$contenido,null,$fecha_modificacion,$id,2);

	}
	print_r($result);die();
}

//eliminar registro evento
if(isset($_POST['id_registro_eliminar'])){
	
	$id = $_POST['id_registro_eliminar'];

	//buscar imagen vieja para modificarla
	$imagen_evento = $db->selectPhoteEventAdmin($id);	
	$archivo_evento = $ruta.$imagen_evento['nombre_imagen'];
	//eliminar registro
	if(file_exists($archivo_evento)){
		unlink($archivo_evento);
	}

	$result = $db->deleteEventAdmin($id);

	header('Content-type: application/json; charset=utf-8');
	echo json_encode($result);
	exit();
}
?>