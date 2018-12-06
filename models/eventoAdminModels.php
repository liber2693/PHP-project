<?php 
require_once 'config.php';

/**
 * clase de eventos configuracion del administrador
 */
class EventAdmin
{


	//crear evento
	public function createEventAdmin($titulo,$descripcion,$imagen,$fecha_creacion,$status,$usuario_creador)
	{
		try {

			$conexion = new Database();

			$c = $conexion->connect();

			
			$sth = $c->prepare("INSERT INTO noticias(titulo, contenido, nombre_imagen, fecha_creacion,
							estatus, id_usuario_creador)
							VALUES ('$titulo','$descripcion','$imagen','$fecha_creacion',$status,$usuario_creador)");
			
			$sth->execute();
		
			$conexion->disconnec();
			
			return 4; //exito al guardar
			
		} catch (Exception $e) {
			return 5; //error en el insert
		}
	}

	//listar eventos en el admin
	public function listEventAdmin($text){

		$conexion = new Database();

		$c = $conexion->connect();
		

		$sql = null;

		if($text){
			$sql = "WHERE (titulo LIKE '%".$text."%' OR fecha_creacion LIKE '".$text."%')";
		}


		$sth = $c->prepare('SELECT * FROM noticias '.$sql.' ORDER BY fecha_creacion DESC');
		
		
		$sth->execute();
		
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
		
		$conexion->disconnec();
		
		return $result;

	}

	//buscar un evento
	public function selectEventAdmin($id){

		$conexion = new Database();

		$c = $conexion->connect();
		
		$sth = $c->prepare("SELECT * FROM noticias WHERE id = $id");

		$sth->execute();
		
		$result = $sth->fetch(PDO::FETCH_ASSOC);
		
		$conexion->disconnec();
		
		return $result;

	}

	//cambiar estatus
	public function changeStatusEventAdmin($id,$fecha_modificacion,$estatus)
	{

		try {
			
			$conexion = new Database();

			$c = $conexion->connect();

			if($estatus == 0)
			{
				$sql_estatus = 1; //activar
			}else{
				$sql_estatus = 0; //desactivar
			}
			
			$sth = $c->prepare("UPDATE noticias SET fecha_modificacion = '$fecha_modificacion', estatus = $sql_estatus WHERE id = $id");
			
			$sth->execute();
		
			$conexion->disconnec();

			return 1;
			
		} catch (Exception $e) {
			return 3; // error en actualizar
		}

	}

	//actualizar evento
	public function updateEventAdmin($id,$titulo,$contenido,$imagen,$fecha_modificacion,$usuario_creador,$tipo){
		
		try {
			
			$conexion = new Database();

			$c = $conexion->connect();

			if($tipo == 2)
			{
				$sql = "UPDATE noticias SET titulo = '$titulo', contenido = '$contenido', fecha_modificacion = '$fecha_modificacion', id_usuario_creador = $usuario_creador WHERE id = $id"; //actualziar registro sin imagen
			}
			elseif($tipo == 1)
			{
				$sql = "UPDATE noticias SET titulo = '$titulo', contenido = '$contenido', nombre_imagen = '$imagen', fecha_modificacion = '$fecha_modificacion', id_usuario_creador = $usuario_creador WHERE id = $id"; //actualziar registro COMPLETO

			}
			
			$sth = $c->prepare($sql);
			
			$sth->execute();
		
			$conexion->disconnec();

			return 5;
			
		} catch (Exception $e) {
			return 4; // error en actualizar
		}
		
	}
	//buscar imagen 
	public function selectPhoteEventAdmin($id){
		
		$conexion = new Database();

		$c = $conexion->connect();

		$sth = $c->prepare("SELECT nombre_imagen FROM noticias WHERE id = $id");
		
		$sth->execute();
		
		$result = $sth->fetch(PDO::FETCH_ASSOC);
		
		$conexion->disconnec();

		return $result;
	}
	//eliminar evento
	public function deleteEventAdmin($id){

		try {
			$conexion = new Database();

			$c = $conexion->connect();

			$sth = $c->prepare("DELETE FROM noticias WHERE id = $id");
			
			$sth->execute();
			
			$conexion->disconnec();

			return 1;

		} catch (Exception $e) {
			return 3;
		}
		
		
	}
	
}
?>