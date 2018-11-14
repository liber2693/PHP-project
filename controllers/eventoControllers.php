<?php
include "../views/admin/funciones.php";
	/*echo "aqui estoy llege al controlador";
	echo $_POST['titulo'];
	echo "<br>";
	echo $_POST['contenido'];
	echo "<br>";*/
	$nombre=str_replace(" ","_",$_FILES['imagen']['name']);
	
	$tipo = $_FILES['imagen']['type'];
	
	$ruta = "../img/eventos/".$nombre.tipo_archivo($tipo);
    
    $imagen=$_FILES['imagen']['tmp_name'];
	copy($imagen,$ruta);
	/*echo $nombre = $_FILES['imagen']['name'];
	echo $tipo = $_FILES['imagen']['type'];
    echo $error = $_FILES['imagen']['error'];
    echo$tamano = $_FILES['imagen']['size'];*/
	
	
	

	
    //$rutaArchivo="../img/documentos/".$codigo_d."_".$i."_".$nombreArchivo;
     
    /*$rutaArchivo="../img/documentos/".$codigo_d."_".$i.tipo_archivo($tipo);
    $foto=$_FILES['archivo']['tmp_name'];*/

    

        
        



	header('Content-type: application/json; charset=utf-8');
	echo json_encode(1);
	exit();

?>