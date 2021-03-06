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
				<input id="dni-buscar-becario" type="text" class="form-control" placeholder="Buscar por DNI">
			</div>
			<div class="icono-busqueda-dni">
				<img src="<?php echo base_url("assets/img/magnifier.png"); ?>" alt="">
			</div>
		</div>
		<div class="col-lg-4">
			<button type="submit" class="btn btn-default boton-buscar">Buscar</button>
		</div>
	</div>

	<div class="contenedor-no-dni">
		<div class="padre-contenedor-dni">
			No se encuentra el DNI del Becario
		</div>
	</div>

	<div class="contenedor-fade-in">
		<div class="informacion-obtenida">
			<div class="col-lg-6">
				<div class="contenedor-info-becario">
					<div class="item-buscado nombre-becario"><strong>Nombre:</strong> <span class="nombre-becario-span"></span></div>
					<div class="item-buscado apellido-becario"><strong>Apellido:</strong> <span class="apellido-becario-span"></span></div>
					<div class="item-buscado dni-becario"><strong>DNI:</strong> <span class="dni-becario-span"></span></div>
					<div class="item-buscado edad-becario"><strong>Edad:</strong> <span class="edad-becario-span"></span></div>
					<div class="item-buscado carrera-becario"><strong>Carrera:</strong> <span class="carrera-becario-span"></span></div>
					<div class="item-buscado anio-ingreso-becario"><strong>Año de Ingreso:</strong> <span class="anio-becario-span"></span></div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="monto-buscar">
					<div class="input-group monto-ingreso">
						<input type="number" id="dinero-derivar" class="form-control" placeholder="Dinero a derivar">
					</div>
				</div>
				<div class="texto-monto">
					<div class="texto-info-monto">Monto a Derivar: <span class="monto_a_derivar"></span> </div>
					<div class="cantidad-dinero-restante">Dinero restante: <strong>$<span class="cantidad-total-numero"><?php echo $becas["cantidad_dinero"] ?></span></strong></div>
				</div>

				<div class="mensaje-error-dinero">
					<div class="padre-mensaje-error">
						No dispone del dinero suficiente para derivar
					</div>
				</div>		

				<div class="botones-monto">
					<div class="botones">
						<button type="submit" class="btn btn-default boton-confirmar" disabled>Confirmar</button>
					</div>
				</div>
			</div>
		</div>

		<div class="botones-confirmacion-final">
			<div class="col-lg-12">
				<button type="submit" class="btn btn-default boton-final" disabled>Confirmar</button>
				<div class="contenedor-mensaje-becario-asignado">
					<div class="padre-becario-asignado">
						Beca guardada satisfactoriamente
					</div>
				</div>
			</div>
		</div>

	</div>

	
	
</div>