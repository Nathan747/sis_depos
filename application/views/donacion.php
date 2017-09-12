<?php 
if (isset($_SESSION['newsession'])) {
	if ($_SESSION['newsession'] == "yes"){
		?>
		<div class="contenedor-donar" style="right: 0px">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<a href="#" id="cerrar-donacion"><img src="<?php echo base_url('assets/img/cruz.png') ?>" alt=""></a>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenedor-wizard wizard-donar" style="display: none">
					<div class="wizard">
						<a id="bloque-05" href="#"><div class="bloque-wizard bloq-1 active">
							01
						</div></a>
						<div class="separador-wizard sep-d1">
							<div class="linea-separador active-sep"></div>
						</div>

						<a id="bloque-06" href="#"><div class="bloque-wizard bloq-2">
							02
						</div></a>
						<div class="separador-wizard sep-d2">
							<div class="linea-separador"></div>
						</div>
						<a id="bloque-07" href="#"><div class="bloque-wizard bloq-3">
							03
						</div></a>
					</div>
					<div class="word">
						<div class="palabras word-modo-donar word-active">
							Modo
						</div>
						<div class="palabras word-cantidad">
							Cantidad
						</div>
						<div class="palabras word-confirmacion">
							Confirmación
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenedor-wizard wizard-gracias">
				<div class="wizard">
					<a id="bloque-08" href="#"><div class="bloque-wizard bloq-1 active">
						01
					</div></a>
					<div class="separador-wizard sep-d1">
						<div class="linea-separador active-sep"></div>
					</div>

					<a id="bloque-09" href="#"><div class="bloque-wizard bloq-2 active">
						02
					</div></a>
					<div class="separador-wizard sep-d2">
						<div class="linea-separador active-sep"></div>
					</div>
					<a id="bloque-10" href="#"><div class="bloque-wizard bloq-3 active">
						03
					</div></a>
				</div>
				<div class="word">
					<div class="palabras word-modo-donar word-active">
						Modo
					</div>
					<div class="palabras word-cantidad word-active">
						Cantidad
					</div>
					<div class="palabras word-confirmacion word-active">
						Confirmación
					</div>
				</div>
			</div>

			<div class="contenedor-mensaje-confirmacion">
				<h1>¡Muchas Gracias por tu donación!</h1>
			</div>
		</div>

	</div>

	<?php 
}else{
	header("Location: ". base_url());
}
}else{
	header("Location: ". base_url());
}
?>