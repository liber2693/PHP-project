<?php
require_once 'config.php';

/**
 * 
 */
class User 
{

	/*public function selectOne($sql){
		
		$this->connect();
		
		$sth = $this->pdo->prepare($sql);
		
		$sth->execute();
		
		$res = $sth->fetch();
		
		$this->disconnec();
		
		return $res;
	}*/
	
	public function selectUserOne($usuario){
		
		$conexion = new Database();

		$c = $conexion->connect();

		$sth = $c->prepare('SELECT * FROM usuarios WHERE usuario = :usuario');
		
		$sth->execute(array('usuario' => $usuario));
		
		$result = $sth->fetch(PDO::FETCH_ASSOC);

		$conexion->disconnec();
		
		return $result;
	}

	public function selectUserPassword($id_User,$usuario,$password){

		$conexion = new Database();

		$c = $conexion->connect();

		$sth = $c->prepare('SELECT * FROM usuarios WHERE id_usuario = :id  AND usuario = :usuario 
						    AND password = :password');
		
		$sth->execute(array('id' => $id_User,
							'usuario' => $usuario,
							'password' => $password));
		
		$result = $sth->fetch(PDO::FETCH_ASSOC);
		
		$conexion->disconnec();

		return $result;
	}

	public function updateactivity($id_User,$fecha,$hora,$actividad){

		$conexion = new Database();

		$c = $conexion->connect();

		/*if($activida == 1)
		{*/
			/*$sth = $c->prepare("UPDATE usuarios SET 
									actividad = $activida,
									hora_ultima_conexion = '$hora',
									fecha_ultima_conexion = '$fecha'
								WHERE  id_usuario = :id_User");
			$update = array(':id_User' => $id_User,':activida' => $activida);
			$sth->execute();	*/

			//prepare connection
			
			$sql = "UPDATE usuarios SET actividad = :actividad, 
										hora_ultima_conexion = :hora,
										fecha_ultima_conexion = :fecha
			 						WHERE id = :id_usuario";

			$stmt = $c->prepare($sql);

			//bind parameters
			$stmt->bindParam(':actividad', $actividad, PDO::PARAM_INT);
			$stmt->bindParam(':hora', $hora,  PDO::PARAM_STR);
			$stmt->bindParam(':fecha', $fecha,  PDO::PARAM_STR);
			$stmt->bindParam(':id_usuario', $id_User,  PDO::PARAM_INT);
			
			//execute it
			$stmt->execute();
		/*}
		else
		{*/
			/*$sql = "UPDATE usuarios SET actividad = $actividad WHERE  id_usuario = $id_User";
			$sth = $c->prepare($sql);	
			//$update = array(':id_User' => $id_User,':activida' => $activida);
			$sth->execute($update);*/
		///}

		$conexion->disconnec();

		
	}
	
	/*public function execute($sql){
		
		$this->connect();
		
		$sth = $this->pdo->prepare($sql);
		
		$res = $sth->execute();
		
		$this->disconnec();
		
		return $res;
	}*/
}

?>