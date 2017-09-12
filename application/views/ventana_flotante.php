<?php  
if ($this->session->has_userdata('newsession')) {
	if ($this->session->newsession=="yes"){
		?>

		<div class="container float2">
			<div class="row">
				<h3>#SoyDeLaUNCuyo</h3>
				<p>Formá parte de la comunidad de egresados de la Universidad Nacional de Cuyo alrededor del mundo.<br></p>
			</div>

			<div class="row">
				<div class="lcl">
					<a href="#">Localizate en el mapa y contanos tu historia...</a>
				</div>
			</div>

		</div>


		<?php
	}else{
		?>


		<div class="container float">
			<div class="row">
				<h3>#SoyDeLaUNCuyo</h3>
				<p>Formá parte de la comunidad de egresados de la Universidad Nacional de Cuyo alrededor del mundo.<br></p>
			</div>

			<div class="row">
				<div class="lcl">
					<a href="#">Localizate en el mapa y contanos tu historia...</a>
				</div>
			</div>

			<div class="row bttn">
				<button id="dnr" type="button" class="btn btn-default btn-lg">ENTRAR</button>
			</div>

		</div>
		<?php
	}
}else{
	?>

	<?php
}
?>

