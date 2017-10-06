
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
				if ($this->session->has_userdata('newsession')){
					if ($this->session->newsession==="yes"){
						?>						
						<!--<li class="username-change"><a href="#"><div><?php //echo $this->session->username; ?></div><span class="icon-user"></span></a></li>
						<li><a href="#" id="prof">Perfil</a></li>
						<li><a href="#" id="donar">#BancáUnaBeca</a></li>
						<li><a href="#" id="salir">Salir</a></li>-->

						<li class="username-change"><a href="#"><div><?php echo $this->session->username; ?></div><span class="icon-user"></span></a></li>
						<div class="test-profile"> <li class="perfil-animation"><a href="#" id="prof">Perfil</a></li>
							<div class="profile-options">
								<div class="contenedor-profile-options">
									<li><a id="a" href="#" style="padding-left: 0px;padding-right: 2px;">|</a></li>
									<li><a id="b" class="myprof" href="#" style="padding-left: 0px;padding-right: 0px;font-size: 10px !important;">Perfil de Usuario</a></li>
									<li><a id="c" href="#" style="padding-left: 2px;padding-right: 2px;">|</a></li>
									<li><a id="d" class="editprof" href="#" style="padding-left: 0px;padding-right: 0px;font-size: 10px !important;">Editar Perfil</a></li>
									<li><a id="e" href="#" style="padding-left: 2px;padding-right: 2px;">|</a></li>
								</div>
							</div>
						</div>
						<div class="last-profile">
							<li><a href="#" id="donar">#BancáUnaBeca</a></li>
							<li><a href="#" id="salir">Salir</a></li>
						</div>



						<?php
					}else{
						if ($this->session->newsession==="no"){
							?>
							<li><a href="#" id="registrate">Registrarse</a></li>
							<li><a href="#" id="ingresar">Ingresar</a></li>
							<?php
						}
					}
				}else{
					?>
					<li><a href="#" id="registrate">Registrarse</a></li>
					<li><a href="#" id="ingresar">Ingresar</a></li>
					<?php
				}
				?>
				<!--	<li><a href="#">Salir</a></li>-->
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>