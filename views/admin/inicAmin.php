<!DOCTYPE html>
<?php
session_start();
$id = $_SESSION['id'];
$nombre_user = $_SESSION['nombre_usuario'];
$acceso = $_SESSION['acceso'];

if(!empty($id) && !empty($acceso) && $acceso == 'LiberWEB')
{
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin_MaschinenWerk 2000</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  	<meta content="" name="keywords">
  	<meta content="" name="description">
	<!-- Favicon -->
  	<link rel="shortcut icon" href="../../img/favicon.png">
	<!-- Bootstrap CSS File -->
	<link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Libraries CSS Files -->
	<link href="../../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Main Stylesheet File -->
	<link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	
<div>Bienvenido: <?php echo $nombre_user;?> Acceso: <?php echo $acceso;?></div>
<div><i id="login_out" onclick="<?php echo "cerrar_seccion(".$id.",'".$acceso."')";?>" class="fa fa-user"></i></div>
</body>
	<!-- JavaScript Libraries -->
	<script src="../../js/jquery/jquery.min.js"></script>
	<script src="../../css/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="loginOut.js" type="text/javascript"></script>

</html>
<?php
}
else
{
	header('Location: ../../');
}
?>
