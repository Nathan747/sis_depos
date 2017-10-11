<?php 
if (isset($_SESSION['newsession'])) {
	if ($_SESSION['newsession'] == "yes"){
		?>
		<div class="contenedor-donar respuesta">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<a href="#" id="cerrar-donar"><img src="<?php echo base_url('assets/img/cruz.png') ?>" alt=""></a>
				</div>

			</div>
		</div>

		<?php 
	}
}
?>