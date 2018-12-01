<?php
include "../views/admin/funciones.php";

if(isset($_GET['page']))
{
	$currentPage = $_GET['page'] - 1;
	$texto = $_GET['text'];

	$lista = array(
		["id" => 1, "titulo" => "titulo 1", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 2, "titulo" => "titulo 2", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 3, "titulo" => "titulo 3", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 4, "titulo" => "titulo 4", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 5, "titulo" => "titulo 5", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 6, "titulo" => "titulo 6", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 7, "titulo" => "titulo 7", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 8, "titulo" => "titulo 8", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 9, "titulo" => "titulo 9", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 10, "titulo" => "titulo 10", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 11, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 12, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 13, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 14, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 15, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 16, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 17, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 18, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 19, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 20, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 21, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 22, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 23, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 24, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 25, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"],
		["id" => 26, "titulo" => "titulo 11", "fecha_cracion" => "2018-11-15 20:00:00", "estatus" => 1, "imagen" => "img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg"]
	);

	
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
?>