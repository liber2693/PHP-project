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
    		<div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Lista de eventos registrados</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                	<div id="lista_error_alert"></div>
                                    <!-- lista -->
    			                    <section class="panel">
                                        <div class="table-responsive">
                                            <table id="example" class="display" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th><i class="fa fa-archive"></i> #</th>
                                                        <th><i class="fa fa-list"></i> TíTulo</th>
                                                        <th><i class="icon_profile"></i> Fecha Creación</th>
                                                        <th><i class="icon_calendar"></i> Estatus</th>
                                                        <th><i class="fa fa-location-arrow"></i> Accion</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <!--<table class="table display" id="table_id1">
                                                <thead>
                                                    <tr>
                                                        <th><i class="fa fa-archive"></i> #</th>
                                                        <th><i class="fa fa-list"></i> TíTulo</th>
                                                        <th><i class="icon_profile"></i> Fecha Creación</th>
                                                        <th><i class="icon_calendar"></i> Estatus</th>
                                                        <th><i class="fa fa-location-arrow"></i> Accion</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="registros">-->
                                                <!-- Registros -->

                                                <!--</tbody>
                                            </table>-->
                                        </div>
                                    </section>
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
