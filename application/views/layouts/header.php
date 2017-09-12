<script>
console.log("<?php echo $this->session->newsession; ?>" + "Linea 2 HEADER.PHP");
	var registro_fb = localStorage.getItem("registro_facebook");
	var registro_normal = localStorage.getItem("ingreso_normal");
	if (registro_fb=="si") {
		console.log("entro si FB");
		<?php $this->session->set_userdata("newsession","yes"); ?>
	}else{
		if (registro_normal=="si") {
			console.log("entro si NORMAL");
			<?php $this->session->set_userdata("newsession","yes"); ?>
		}else{
			console.log("entro no");
			<?php $this->session->set_userdata("newsession","no"); ?>
		}
	}
	console.log("<?php echo $this->session->newsession; ?>" + "Linea 17 HEADER.PHP");
	</script>
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets/img/logo-header.png') ?>" alt=""></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
					<?php  
					if ($this->session->has_userdata('newsession')) {
						if ($this->session->newsession=="yes"){
							?>
							<li><a>new <?php echo $this->session->newsession; ?></a></li>
							<li><a href="#"><?php echo $this->session->email; ?></a></li>
							<li><a href="#" id="asd">CAMBIAR IMAGEN</a></li>
							<li><a href="#" id="donar">DONAR</a></li>
							<li><a href="#" id="salir">SALIR</a></li>
							<?php
						}else{
							if ($this->session->newsession=="no"){
								?>
						<!--li><a href="#" >ACERCA DE</a></li>
						<li><a href="#" >COMO FUNCIONA</a></li-->
							<li><a>new <?php echo $this->session->newsession; ?></a></li>
							<li><a href="#" id="registrate">REGISTRARSE</a></li>
							<li><a href="#" id="ingresar">INGRESAR</a></li>
							<?php
						}
					}
				}else{
					?>
					<!--li><a href="#" >ACERCA DE</a></li>
					<li><a href="#" >COMO FUNCIONA</a></li-->
						<li><a>no iniciada</a></li>
						<li><a href="#" id="registrate">REGISTRARSE</a></li>
						<li><a href="#" id="ingresar">INGRESAR</a></li>
						<?php
					}
					?>
					<!--	<li><a href="#">Salir</a></li>-->
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<script>console.log("<?php echo $this->session->newsession; ?>" + "Linea 70 HEADER.PHP");</script>