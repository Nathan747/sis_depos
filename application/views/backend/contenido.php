<div class="padre-contenido">
	<div class="contenedor-contenido">	
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

		<div id="ultimos-movimientos" class="background-opciones contenedor-tablas" >
			<div class="contenedor-titulo">
				<div class="col-lg-12"><h1>Últimos movimientos</h1></div>
			</div>
			<div class="col-lg-12"><div class="separador"></div></div>
			<div class="col-lg-12"><table class="table table-condensed table-hover">
				<tr>
					<th style="text-align: center;">NOMBRE Y APELLIDO</th>
					<th style="text-align: center;">MOVIMIENTO</th>
					<th style="text-align: center;">% COMISIÓN</th>
					<th style="text-align: center;">NETO TOTAL</th>
				</tr>

				<tr>
					<td style="text-align: center;">Maximiliano Kadyszyn</td>
					<td style="text-align: center;"><strong>$4000</strong></td>
					<td style="text-align: center;">4%</td>
					<td style="text-align: center;">$3840</td>
				</tr>

				<tr>
					<td style="text-align: center;">Bernardo Fernández</td>
					<td style="text-align: center;"><strong>$3000</strong></td>
					<td style="text-align: center;">4%</td>
					<td style="text-align: center;">$3880</td>
				</tr>

				<tr>
					<td style="text-align: center;">Esteban Chiapa</td>
					<td style="text-align: center;"><strong>$3500</strong></td>
					<td style="text-align: center;">4%</td>
					<td style="text-align: center;">$3860</td>
				</tr>

				<tr>
					<td style="text-align: center;">Maximiliano Kadyszyn</td>
					<td style="text-align: center;"><strong>$4000</strong></td>
					<td style="text-align: center;">4%</td>
					<td style="text-align: center;">$3840</td>
				</tr>

				<tr>
					<td style="text-align: center;">Bernardo Fernández</td>
					<td style="text-align: center;"><strong>$3000</strong></td>
					<td style="text-align: center;">4%</td>
					<td style="text-align: center;">$3880</td>
				</tr>

				<tr>
					<td style="text-align: center;">Esteban Chiapa</td>
					<td style="text-align: center;"><strong>$3500</strong></td>
					<td style="text-align: center;">4%</td>
					<td style="text-align: center;">$3860</td>
				</tr>
			</table></div>
			<div class="col-lg-12"><div class="cuadro-busqueda">
				<div class="col-lg-2">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>
				</div>
				<div class="col-lg-5">
					<div class="texto-resultados">
						<p>
							Mostrando 1 a 1000 resultados de 1300 resultados
						</p>
					</div>
				</div>

				<div class="col-lg-5">
					<div class="busqueda-numeros">
						<a href="#" id="last">
							<div class="boton-numeros anterior boton-deshabilitado">
								<p>
									Anterior	
								</p>
							</div>
						</a>
						<a href="#" class="selector-numero numero-activo">
							<div class="numeros">1</div>
						</a>
						<a href="#" class="selector-numero">
							<div class="numeros">2</div>
						</a>
						<a href="#" class="selector-numero">
							<div class="numeros">3</div>
						</a>
						<a href="#" id="next">
							<div class="boton-numeros siguiente">
								<p>
									Siguiente	
								</p>
							</div>
						</a>
					</div>
				</div>
			</div></div>
		</div>

		<div id="menu-becarios" class="background-opciones contenedor-becarios">
			
			<div class="contenedor-titulo">
				<div class="col-lg-12">
					<h1>Becarios</h1>
				</div>
			</div>
			<div class="col-lg-12"><div class="separador"></div></div>
			<div class="dni-search">
				<div class="col-lg-8">
					<div class="input-group columna-busqueda-dni">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>
					<div class="icono-busqueda-dni">
						<img src="<?php echo base_url("assets/img/magnifier.png"); ?>" alt="">
					</div>
				</div>
				<div class="col-lg-4">
					<button type="submit" class="btn btn-default boton-buscar">Buscar</button>
				</div>
			</div>

			<div class="contenedor-fade-in">
				<div class="informacion-obtenida">
					<div class="col-lg-6">
						<div class="contenedor-info-becario">
							<div class="item-buscado nombre-becario">Nombre: Maximiliano</div>
							<div class="item-buscado apellido-becario">Apellido: Kadyszyn</div>
							<div class="item-buscado dni-becario">DNI: 35563679</div>
							<div class="item-buscado edad-becario">Edad: 26</div>
							<div class="item-buscado carrera-becario">Carrera: Ing. en Sistemas</div>
							<div class="item-buscado anio-ingreso-becario">Año de Ingreso: 03/03/2009</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="monto-buscar">
							<div class="input-group monto-ingreso">
								<input type="text" class="form-control" placeholder="Buscar">
							</div>
						</div>
						<div class="texto-monto">
							<div class="texto-info-monto">Monto a Derivar</div>
							<div class="cantidad-dinero-restante">Dinero restante: $2000</div>
						</div>
						<div class="botones-monto">
							<div class="botones">
								<button type="submit" class="btn btn-default boton-editar">Editar</button>
							</div>
							<div class="botones">
								<button type="submit" class="btn btn-default boton-confirmar">Confirmar</button>
							</div>
						</div>
					</div>
				</div>

				<div class="botones-confirmacion-final">
					<div class="col-lg-12">
						<button type="submit" class="btn btn-default boton-final">Confirmar</button>
					</div>
				</div>

			</div>
			
		</div>

		<div id="menu-recaudado" class="background-opciones contenedor-tablas" >
			<div class="contenedor-titulo">
				<div class="col-lg-12"><h1>Recaudado</h1></div>
			</div>
			<div class="col-lg-12"><div class="separador"></div></div>
			<div class="col-lg-12"><table class="table table-condensed table-hover">
				<tr>
					<th style="text-align: center;">NOMBRE Y APELLIDO</th>
					<th style="text-align: center;">MOVIMIENTO</th>
					<th style="text-align: center;">% COMISIÓN</th>
					<th style="text-align: center;">NETO TOTAL</th>
				</tr>

				<tr>
					<td style="text-align: center;">Maximiliano Kadyszyn</td>
					<td style="text-align: center;"><strong>$4000</strong></td>
					<td style="text-align: center;">4%</td>
					<td style="text-align: center;">$3840</td>
				</tr>

				<tr>
					<td style="text-align: center;">Bernardo Fernández</td>
					<td style="text-align: center;"><strong>$3000</strong></td>
					<td style="text-align: center;">4%</td>
					<td style="text-align: center;">$3880</td>
				</tr>

				<tr>
					<td style="text-align: center;">Esteban Chiapa</td>
					<td style="text-align: center;"><strong>$3500</strong></td>
					<td style="text-align: center;">4%</td>
					<td style="text-align: center;">$3860</td>
				</tr>

				<tr>
					<td style="text-align: center;">Maximiliano Kadyszyn</td>
					<td style="text-align: center;"><strong>$4000</strong></td>
					<td style="text-align: center;">4%</td>
					<td style="text-align: center;">$3840</td>
				</tr>

				<tr>
					<td style="text-align: center;">Bernardo Fernández</td>
					<td style="text-align: center;"><strong>$3000</strong></td>
					<td style="text-align: center;">4%</td>
					<td style="text-align: center;">$3880</td>
				</tr>

				<tr>
					<td style="text-align: center;">Esteban Chiapa</td>
					<td style="text-align: center;"><strong>$3500</strong></td>
					<td style="text-align: center;">4%</td>
					<td style="text-align: center;">$3860</td>
				</tr>
			</table></div>
			<div class="col-lg-12"><div class="cuadro-busqueda">
				<div class="col-lg-2">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>
				</div>
				<div class="col-lg-5">
					<div class="texto-resultados">
						<p>
							Mostrando 1 a 1000 resultados de 1300 resultados
						</p>
					</div>
				</div>

				<div class="col-lg-5">
					<div class="busqueda-numeros">
						<a href="#" id="last">
							<div class="boton-numeros anterior boton-deshabilitado">
								<p>
									Anterior	
								</p>
							</div>
						</a>
						<a href="#" class="selector-numero numero-activo">
							<div class="numeros">1</div>
						</a>
						<a href="#" class="selector-numero">
							<div class="numeros">2</div>
						</a>
						<a href="#" class="selector-numero">
							<div class="numeros">3</div>
						</a>
						<a href="#" id="next">
							<div class="boton-numeros siguiente">
								<p>
									Siguiente	
								</p>
							</div>
						</a>
					</div>
				</div>
			</div></div>
		</div>

	</div>
</div>

</div><!-- fin container fluid -->