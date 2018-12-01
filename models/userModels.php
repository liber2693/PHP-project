<?php
require_once 'config.php';

/** clase de los usuarios  */
class User 
{

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

		if($actividad == 1)
		{
			$sth = $c->prepare("UPDATE usuarios SET 
									actividad = $actividad,
									hora_ultima_conexion = '$hora',
									fecha_ultima_conexion = '$fecha'
								WHERE  id_usuario = $id_User");
			$sth->execute();

		}
		else
		{
			$sql = "UPDATE usuarios SET actividad = $actividad WHERE  id_usuario = $id_User";
			$sth = $c->prepare($sql);	
			$sth->execute();
		}

		$conexion->disconnec();	
	}

}

?>