<?php
class Database{
	
	public $pdo;
	
	public function connect(){
		
		$usuario = 'root';
        $contrasena = '';
        $host = 'localhost';
        $db = 'pagina_web_bell';
		
		try {
			$this->pdo = new PDO("mysql:host={$host};dbname={$db};", $usuario, $contrasena);

			return $this->pdo;
			
		} catch (PDOException $e) {
			 echo "No hay conexion con la BD <br> Error: " .$e->getMessage();
		}
		
	}
	
	public function disconnec(){
		$this->pdo = null;

		return $this->pdo;
	}
}
