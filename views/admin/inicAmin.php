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

	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<a class="navbar-brand" href="#"><img src="../../img/favicon.png"></a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	 	</button>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		    	<li class="nav-item active">
		        	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      	</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
		    </ul>
			<i id="login_out" onclick="<?php echo "cerrar_seccion(".$id.",'".$acceso."')";?>" class="fa fa-user"></i>
	  	</div>
	</nav>
	
<div>Bienvenido: <?php echo $nombre_user;?> Acceso: <?php echo $acceso;?></div>

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
