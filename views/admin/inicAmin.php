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
    	<main role="main" class="container">
          	<h1 class="mt-5">Bienvenido:</h1>
          	<p class="lead">Nombre del usuario: <?php echo $nombre_user;?></p>
          	<p>Acceso: <?php echo $acceso;?> <i class="fab fa-500px"></i></p>
        </main>

        <div id="page-wrapper"> 
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Eventos</h2>
                </div>
            </div>
    		<div class="row" id="lista_eventos">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Lista de eventos registrados</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                	<div id="lista_error_alert"></div>
                                    <!-- lista -->
                                    <section class="panel">
                                        <div class="pull-right form-group input-group col-lg-6 col-sm-6 col-md-6">
                                            <input type="text" id="text_evento" class="form-control" placeholder="buscar evento">
                                            <button class="btn btn-boton" id="buscar_evento"><i class="fas fa-search"></i></button>
                                        </div>
                                        <div class="table-responsive">

                                            <table class="table display">

                                                <thead>
                                                    <tr>
                                                        <th><i class="fa fa-archive"></i> #</th>
                                                        <th><i class="fa fa-list"></i> Título</th>
                                                        <th><i class="icon_profile"></i> Fecha Creación</th>
                                                        <th><i class="icon_calendar"></i> Estatus</th>
                                                        <th><i class="fa fa-location-arrow"></i> Accion</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="registros">
                                                <!-- Registros -->

                                                </tbody>
                                            </table>
                                            <div class="text-center" id="paginado_lista">
                                                <!-- paginado -->
                                            </div>
                                        </div>
                                    </section>
                    			</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- actualizar evento -->
            <div class="row oculto" id="actualizar_evento">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Actualizar Evento
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div id="crear_error_alert"></div>
                                    <form role="form">
                                        <div class="form-group" id="error_div_titulo">
                                            <label id="error_label_titulo_1">
                                                Título del Evento
                                            </label>
                                            <input class="form-control crear_evento" type="text" id="titulo_Actualizar" name="titulo_Actualizar" placeholder="Título">
                                            <!-- <p class="help-block">Titulo del Evento</p> -->
                                        </div>
                                        <div class="form-group" id="error_div_contenido">
                                            <label id="error_label_contenido">
                                                Cuerpo del Evento
                                            </label>
                                            <textarea id="contenido_Actualizar" name="contenido_Actualizar" class="form-control crear_evento" rows="7" placeholder="Redacte aquí su evento..."></textarea>
                                        </div>
                                        <div class="form-group text-center" id="error_div_imagen">
                                            <label id="error_label_imagen">
                                                Imagen del evento
                                            </label>
                                            <br>
                                            <input type="file" class="oculto" name="imagen" id="imagen"  accept="image/png, image/jpeg, image/jpg">

                                            <img src="../../img/team-1.jpg" alt="Weppage_bell" id="imagen_previa" style="width:auto;margin:auto;">
                                            <br><br>
                                            <label  for="imagen" class="btn btn-primary btn-lg btn-block" id="estilo">
                                                Cargar Imagen <span id="filename"></span>
                                            </label>
                                        </div>
                                        <div class="text-right">
                                            <button type="button" title="Volver" class="btn btn-dange btn-circle btn-lg" id="volver_lista"><i class="fas fa-arrow-left"></i>
                                            </button>
                                            <button type="button" title="Actualizar Evento" class="btn btn-primary btn-circle btn-lg" id="enviar_actualizar_evento"><i class="fas fa-check 2x"></i>
                                             </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin -->

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
