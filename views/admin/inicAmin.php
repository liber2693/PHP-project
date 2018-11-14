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
	
	<header>
		<?php include 'menu.php';?>
	</header>
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
                    <div class="panel-heading">
                       Lista de eventos registrados
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                            	<div id="lista_error_alert"></div>
                                <!-- lista -->
			                    <section class="panel">
                      <div class="table-responsive">
                        <table class="table display" id="table_id1">
                          <thead>
                            <tr>
                              <th><i class="fa fa-archive"></i> Type</th>
                              <th><i class="fa fa-list"></i> Docket #</th>
                              <th><i class="icon_profile"></i> Shipper</th>
                              <th><i class="icon_calendar"></i> Date</th>
                              <th><i class="fa fa-location-arrow"></i> Origin</th>
                              <th><i class="fa fa-location-arrow"></i> Destination</th>
                              <th width="4%"><i class="fa fa-check"></i>Ready Invoices</th>
                              <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                               	pro
                              </td>
                              <td>2</td>
                              <td>3</td>
                              <td>
                                4
                              </td>
                              <td>5</td>
                              <td>6</td>
                              <td>7</td>
                              <td>8</td>
                            </tr>
                            
                          </tbody>
                        </table>
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
	<!-- tabla -->
	<script src="jquery.dataTables.min.js" type="text/javascript" charset="utf8"></script>
	<script src="js/parametros.js" type="text/javascript" charset="utf8"></script>

	<script type="text/javascript">
		$(document).ready( function () {
	      	$('#table_id1').DataTable();
	    });
	</script>

</html>
<?php
}
else
{
	header('Location: ../../');
}
?>
