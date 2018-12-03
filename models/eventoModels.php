<?php 
require_once 'config.php';

/**
 * clase de eventos configuracion del administrador
 */
class Event
{
	//listar eventos activos
	public function listEvent($text){

		$conexion = new Database();

		$c = $conexion->connect();
		

		$sql = null;

		if($text){
			$sql = "AND (titulo LIKE '%".$text."%' OR fecha_creacion LIKE '".$text."%')";
		}

		$sth = $c->prepare('SELECT * FROM noticias  WHERE estatus = 1 '.$sql.' ORDER BY fecha_creacion DESC');
				
		$sth->execute();
		
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
		
		$conexion->disconnec();
		
		return $result;

	}	
}
?>