<?php
include "../models/emailModels.php";

$email = new Email();

/** variables para enviar correo **/
if(isset($_GET['email'])){

	$emisor_email = $_GET['email'];
	$asunto = $_GET['asunto'];
	$marca = $_GET['marca'];
	$modelo = $_GET['modelo'];
	$serial = $_GET['serial'];
	$contenido = $_GET['contenido'];

	$result = $email->sendEmail($emisor_email,$asunto,$marca,$modelo,$serial,$contenido);


	header('Content-type: application/json; charset=utf-8');
	echo json_encode($result);
	exit();
	
}


	
?>