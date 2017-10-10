<div id="crear-usuario" class="background-opciones contenedor-crear-usuario">
	<div class="tab-horizontal">
		<!-- Nav tabs -->
		<div class="col-lg-12"><ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#section1" aria-controls="section1" role="tab" data-toggle="tab">Crear Usuario</a></li>
			<li role="presentation"><a href="#section2" aria-controls="section2" role="tab" data-toggle="tab">Crear Becario</a></li>
			<li role="presentation"><a href="#section3" aria-controls="section3" role="tab" data-toggle="tab">Crear Admin</a></li>
		</ul></div>
		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="section1">
				<div class="contenedor-titulo">
					<div class="col-lg-12"><h1>Crear Usuario</h1></div>
				</div>
				<div class="col-lg-12"><div class="separador"></div></div>
				<div class="col-lg-12"><form role="form" autocomplete="off">
					<div class="form-group">
						<label for="usuario-1">Usuario</label>
						<input type="nombre" name="usuario-1" class="form-control" id="usuario-1" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="password-1">Contraseña</label>
						<input type="password" name="password-1" class="form-control" id="password-1" autocomplete="new-password">
					</div>

					<button type="submit" class="btn btn-default boton-enviar">Crear</button>
				</form></div>
			</div>
			<div role="tabpanel" class="tab-pane" id="section2">
				<div class="contenedor-titulo">
					<div class="col-lg-12"><h1>Crear Becario</h1></div>
				</div>
				<div class="col-lg-12"><div class="separador"></div></div>
				<div class="col-lg-12"><form role="form">
					<div class="form-group">
						<label for="becario-1">Becario</label>
						<input type="nombre" name="becario-1" class="form-control" id="becario-1">
					</div>
					<div class="form-group">
						<label for="password-2">Contraseña</label>
						<input type="password" name="password-2" class="form-control" id="password-2" autocomplete="new-password">
					</div>

					<button type="submit" class="btn btn-default boton-enviar">Crear</button>
				</form></div>
			</div>
			<div role="tabpanel" class="tab-pane" id="section3">
				<div class="contenedor-titulo">
					<div class="col-lg-12"><h1>Crear Admin</h1></div>
				</div>
				<div class="col-lg-12"><div class="separador"></div></div>
				<div class="col-lg-12"><form role="form">
					<div class="form-group">
						<label for="admin-1">Admin</label>
						<input type="nombre" name="admin-1" class="form-control" id="admin-1">
					</div>
					<div class="form-group">
						<label for="password-3">Contraseña</label>
						<input type="password" class="form-control" name="password-3" id="password-3" autocomplete="new-password">
					</div>

					<button type="submit" class="btn btn-default boton-enviar">Crear</button>
				</form></div>
			</div>
		</div>	
	</div>
</div>