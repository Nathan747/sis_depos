<?php  
if ($this->session->has_userdata('newsession')) {
	if ($this->session->newsession=="yes"){
		?>

		<!--div class="container float2">
			<div class="row">
				<h3>#SOYDELADECUYO</h3>
				<p>Formá parte de la comunidad de egresados de la Universidad Nacional de Cuyo alrededor del mundo.<br></p>
			</div>

			<div class="row">
				<div class="lcl">
					<a href="#">Localizate en el mapa y contanos tu historia...</a>
				</div>
			</div>

		</div-->

		<div class="container float2">
			
			<div class="contenedor-logo-mundo">
				<img src="<?php echo base_url("assets/img/logo.svg") ?>" alt="">
			</div>


			
			<div class="contenedor-logo-cuyo">
				<img src="<?php echo base_url("assets/img/soydeladecuyo.svg") ?>" alt="">
			</div>
			

			
			<div class="texto-flotante">
				¡Formá parte de la comunidad de egresados de la Universidad Nacional de Cuyo alrededor del mundo!
			</div>

			<div class="contenedor-ventana-flotante">
				<div class="boton-registrate">
					<button id="dnr">ENTRAR</button>
				</div>
				<div class="localizate">
					Localizate en el mapa y contanos tu historia.
				</div>
			</div>
			
		</div>


		<?php
	}else{
		?>


		<div class="container float2">
			
			<div class="contenedor-logo-mundo">
				<img src="<?php echo base_url("assets/img/logo.svg") ?>" alt="">
			</div>


			
			<div class="contenedor-logo-cuyo">
				<img src="<?php echo base_url("assets/img/soydeladecuyo.svg") ?>" alt="">
			</div>
			

			
			<div class="texto-flotante">
				¡Formá parte de la comunidad de egresados de la Universidad Nacional de Cuyo alrededor del mundo!
			</div>

			<div class="contenedor-ventana-flotante">
				<div class="boton-registrate">
					<button id="dnr">ENTRAR</button>
				</div>
				<div class="localizate">
					Localizate en el mapa y contanos tu historia.
				</div>
			</div>
			
		</div>
		<?php
	}
}else{
	?>
	<div class="container float2">
			
			<div class="contenedor-logo-mundo">
				<img src="<?php echo base_url("assets/img/logo.svg") ?>" alt="">
			</div>


			
			<div class="contenedor-logo-cuyo">
				<img src="<?php echo base_url("assets/img/soydeladecuyo.svg") ?>" alt="">
			</div>
			

			
			<div class="texto-flotante">
				¡Formá parte de la comunidad de egresados de la Universidad Nacional de Cuyo alrededor del mundo!
			</div>

			<div class="contenedor-ventana-flotante">
				<div class="boton-registrate">
					<button id="dnr">ENTRAR</button>
				</div>
				<div class="localizate">
					Localizate en el mapa y contanos tu historia.
				</div>
			</div>
			
		</div>
	<?php
}
?>

