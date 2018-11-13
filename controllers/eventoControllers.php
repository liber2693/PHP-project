<?php

	/*echo "aqui estoy llege al controlador";
	echo $_POST['titulo'];
	echo "<br>";
	echo $_POST['contenido'];
	echo "<br>";*/
	echo $nombre = $_FILES['imagen']['name'];
	echo $tipo = $_FILES['imagen']['type'];
    echo $error = $_FILES['imagen']['error'];
    echo$tamano = $_FILES['imagen']['size'];
	
	print_r($_FILES['imagen']['type']);die();

	$nombreArchivo=str_replace(" ","_",$_FILES['archivo']['name']);
	
    //$rutaArchivo="../img/documentos/".$codigo_d."_".$i."_".$nombreArchivo;
    $tipo = $_FILES['archivo']['type']; 
    $rutaArchivo="../img/documentos/".$codigo_d."_".$i.tipo_archivo($tipo);
    $foto=$_FILES['archivo']['tmp_name'];

    

        
        



	//header('Content-type: application/json; charset=utf-8');
	echo json_encode(1);
	//exit();

?>