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

	public function updateactivity($id_User,$fecha,$hora,$estatus){

		$conexion = new Database();

		$c = $conexion->connect();

		if($estatus == 1)
		{
			$sth = $c->prepare('UPDATE usuarios SET 
									actividad = :actividad,
									fecha_ultima_conexion = :fecha,
									hora_ultima_conexion = :hora
								WHERE  id_usuario = :id');
		}
		
		else
		{
			$sth = $c->prepare('UPDATE usuarios SET 
									actividad = :actividad,
									fecha_ultima_conexion = :fecha,
									hora_ultima_conexion = :hora
								WHERE  id_usuario = :id');	
		}
		
		
		$sth->execute(array('id' => $id_User,
							'activida' => $fecha,
							'fecha' => $password,
							'hora' => $hora));
		
		$result = $sth->fetch(PDO::FETCH_ASSOC);
		
		$conexion->disconnec();

		return $result;
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