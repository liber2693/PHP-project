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
	<!--de la hoja -->
	<link href="css/style.css" style.css" rel="stylesheet" type="text/css">
	<!-- fas fa -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
	<div align="center" class="loader" id="loader"></div>
	<div id="wrapper">
	<!--<header>-->
		<nav class="navbar navbar-expand-lg navbar-light bg-dark">
			<a class="navbar-brand" href="#"><img src="../../img/favicon.png"></a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class=""><i class="fas fa-align-justify" style="color: #fff;"></i></span>
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
	<!--</header>-->
	
	<!-- Cuerpo -->
		<div id="page-wrapper"> 
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Crear Evento</h2>
                </div>
                
            </div>
			<div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Completas los campos para crear un evento
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                	<div id="crear_error_alert"></div>
	                                <form role="form">
                                    	<!-- 
                                    		error en el div has-error 
                                    		al lebel control-label
                                    	-->
                                        <div class="form-group" id="error_div_titulo">
                                            <label id="error_label_titulo_1">
                                            	Titulo
                                            </label>
                                            <input class="form-control" type="text" id="titulo" name="titulo">
                                            <p class="help-block">Titulo del Evento</p>
                                        </div>
                                        <div class="form-group" id="error_div_contenido">
                                            <label id="error_label_contenido">
                                            	Contenido del evento
                                            </label>
                                            <textarea id="contenido" name="contenido" class="form-control" rows="10"></textarea>
                                        </div>
                                        <div class="form-group" id="error_div_imagen">
                                            <label id="error_label_imagen">
                                            	Imagen del evento
                                            </label>
                                            <br>
                                            <input type="file" class="oculto" name="imagen" id="imagen"  accept="image/png, image/jpeg, image/jpg">

											<img src="../../img/team-1.jpg" alt="Weppage_bell" id="imagen_previa" style="width:50%;margin:auto;">
					                        <br>
					                        <label  for="imagen" class="btn btn-primary btn-lg btn-block" id="estilo">
					                            Cargar Imagen <span id="filename" class="seccion_producto"></span>
					                        </label>


                                        </div>
                                        <div class="text-right">
                                        	<button type="button" title="Guardar Evento" id="registrar" class="btn btn-primary btn-circle btn-lg"><i class="fas fa-check 2x"></i>
                           					 </button>
										</div>
                                    </form>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        </div>
	


	
	<!-- Cuerpo -->
	</div>
	
	<footer class="footer bg-dark">
		<div class="container">
			<span class="text-muted">Producciones Liber2693@.</span>
		</div>
    </footer>

</body>
	<!-- JavaScript Libraries -->
	<script src="../../js/jquery/jquery.min.js"></script>
	<script src="../../css/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="loginOut.js" type="text/javascript"></script>
	<script src="funciones.js" type="text/javascript"></script>
	<script src="envento.js" type="text/javascript"></script>

</html>
<?php
}
else
{
	header('Location: ../../');
}
?>
