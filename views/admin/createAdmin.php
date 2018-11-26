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
	<?php include 'encabezado.php'; ?>
</head>
<body>
	<div align="center" class="loader" id="loader"></div>
	<div id="wrapper">
		<!--<header>-->
			<?php include 'menu.php';?>
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
                                    	<div class="form-group" id="error_div_titulo">
                                            <label id="error_label_titulo_1">
                                            	Titulo
                                            </label>
                                            <input class="form-control crear_evento" type="text" id="titulo" name="titulo">
                                            <p class="help-block">Titulo del Evento</p>
                                        </div>
                                        <div class="form-group" id="error_div_contenido">
                                            <label id="error_label_contenido">
                                            	Contenido del evento
                                            </label>
                                            <textarea id="contenido" name="contenido" class="form-control crear_evento" rows="10"></textarea>
                                        </div>
                                        <div class="form-group text-center" id="error_div_imagen">
                                            <label id="error_label_imagen">
                                            	Imagen del evento
                                            </label>
                                            <br>
                                            <input type="file" class="oculto" name="imagen" id="imagen"  accept="image/png, image/jpeg, image/jpg">

											<img src="../../img/team-1.jpg" alt="Weppage_bell" id="imagen_previa" style="width:50%;margin:auto;">
					                        <br>
					                        <label  for="imagen" class="btn btn-primary btn-lg btn-block" id="estilo">
					                            Cargar Imagen <span id="filename"></span>
					                        </label>
                                        </div>
                                        <div class="text-right">
                                        	<button type="button" title="Guardar Evento" class="btn btn-primary btn-circle btn-lg" id="enviar_evento"><i class="fas fa-check 2x"></i>
                           					 </button>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Cuerpo -->
	</div>
	<?php include 'footer.php';?>
</html>
<?php
}
else
{
	header('Location: ../../');
}
?>