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
/* lista de eventos */
$lista = array(
		["id" => 1, "titulo" => "titulo 1", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1],
		["id" => 2, "titulo" => "titulo 2", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1],
		["id" => 3, "titulo" => "titulo 3", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1],
		["id" => 4, "titulo" => "titulo 4", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1],
		["id" => 5, "titulo" => "titulo 5", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1],
		["id" => 6, "titulo" => "titulo 6", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1],
		["id" => 7, "titulo" => "titulo 7", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1],
		["id" => 8, "titulo" => "titulo 8", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1],
		["id" => 9, "titulo" => "titulo 9", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1],
		["id" => 10, "titulo" => "titulo 10", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1],
		["id" => 11, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1]
	);

header('Content-type: application/json; charset=utf-8');
echo json_encode($lista);
exit();
?>