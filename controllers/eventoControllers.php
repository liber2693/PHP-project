<?php
include "../models/eventoModels.php";
include "../views/admin/funciones.php";
$db = new Event();

if(isset($_GET['page']))
{
	$currentPage = $_GET['page'] - 1;
	$texto = $_GET['text'];

	$lista = $db->listEvent($texto);

	
	$total = count($lista);

	$data = array_slice($lista, $currentPage * 6, 6);

	$data = [ 
		"lista" => $data,
	 	"total" => $total 
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
	$data = $db->selectEvent($id_evento);

	header('Content-type: application/json; charset=utf-8');
	echo json_encode($data);
	exit();
	
}
?>