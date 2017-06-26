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
			<a class="navbar-brand" href="<?php echo base_url() ?>">UNCuyo</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
			<ul class="nav navbar-nav navbar-right">
				<?php  
				if (isset($_SESSION['newsession'])) {
					if ($_SESSION['newsession']=='yes'){
						?>
						<li><a href="#" id="donar">DONAR</a></li>
						<li><a href="#" id="salir">SALIR</a></li>
						<?php
					}else{
						?>
						<li><a href="#" >ACERCA DE</a></li>
						<li><a href="#" >COMO FUNCIONA</a></li>
						<li><a href="#" id="registrate">REGISTRARSE</a></li>
						<li><a href="#" id="ingresar">INGRESAR</a></li>
						<?php
					}
				}else{
					?>
					<li><a href="#" >ACERCA DE</a></li>
					<li><a href="#" >COMO FUNCIONA</a></li>
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