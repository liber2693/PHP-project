<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sistema Administrativo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="login">
				<div class="modal-body">
					<div class="alert alert-danger oculto" id="error" role="alert">
						<strong>Ingresar Usuario</strong>
					</div>
					<div class="alert alert-warning oculto" id="error2" role="alert">
					 	<strong>Verifique el usuario</strong>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label" placeholder="usuario">
							Usuario:
						</label>
						<input type="text" class="form-control" id="user">
					</div>
					<div class="alert alert-danger oculto" id="error1" role="alert">
						<strong>Ingresar Contraseña</strong>
					</div>
					<div class="alert alert-warning oculto" id="error3" role="alert">
					 	<strong>Verifique contraseña</strong>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label" placeholder="contraseña">
							Contraseña:
						</label>
						<input type="password" class="form-control" id="password">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" id="enviar">
						Acceder
					</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						Cerrar
					</button>
				</div>
			</form>
		</div>
	</div>
</div>