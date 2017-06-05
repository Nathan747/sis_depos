<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<style>
	body{
		font-family: Open Sans;
		position: relative;
		overflow: hidden;
	}

	.navbar{
		min-height: 75px;
		border-radius: 0px;
		border: 0px;
		border-bottom: 1px solid #e7e7e7;
		margin-bottom: 0px;
	}

	.navbar-nav>li{
		height: 75px;
		display: flex;
		justify-content: center;
		align-content: center;
		flex-direction: column;
	}

	.navbar-brand{
		height: 75px;
		display: flex;
		justify-content: center;
		align-content: center;
		flex-direction: column;
	}

	#map{
		height: calc(100vh - 92px);
	}
	.mapa-popup{
		position: absolute;
		width: 75%;
		z-index: 1000;
		margin: 0 auto;
		top: 0;
		height: 100vh;
		background-color: rgba(0,0,0,0.5);
		display: flex;
		justify-content: center;
		align-content: center;
		flex-direction: column;
	}
	.contenedor-mapa{
		width: 720px;
		height: 470px;
		margin: 0 auto;
		padding: 10px;
		background-color: white;
		z-index: 1002;

	}

	.close{
		position: relative;
		right: 0px;
		z-index: 1002;
	}

	#mapa_registro{
		z-index: 1;
		position: relative;
		width: 100%;
		height: 250px;
	}

	.has-error .form-control,.has-error .form-control:focus{
		border-color: rgb(240,20,20);
		outline: 0;
		-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.2), 0 0 4px rgba(240, 20, 20, 1);
		box-shadow: inset 0 1px 1px rgba(0,0,0,0.2), 0 0 4px rgba(240, 20, 20, 1);
		transition: box-shadow 0.2s;
		border-radius: 4px;
	}

	#cerrar-registro img{
		position: fixed;
		z-index: 1000;
	}

	.contenedor-registro{
		clear: both;
		position: absolute;
		top: 76px;
		background: white;
		height: calc(100vh - 76px);
		right:-100%;
		width: 800px;
		padding: 25px 20px;
		overflow: hidden;
	}    

	.contenedor-wizard{
		padding-top: 40px;
	}

	.wizard{
		width: 585px;
		height: 35px;
		margin: 0 auto;
	}

	.bloque-wizard{
		height: 35px;
		width: 35px;
		float: left;
		color: #D3D3D3;
		border: 1px solid #D3D3D3;
		display: flex;
		justify-content: center;
		align-content: center;
		flex-direction: column;
		text-align: center;
		font-size: 18px;
		font-weight: 700;
		background: transparent;
		-webkit-transition: background .5s;
		-moz-transition: background .5s;
		-o-transition: background .5s;
		transition: background .5s
	}

	.separador-wizard{
		height: 35px;
		width: 148px;
		float: left;
		padding-top: 16px;
	}


	.linea-separador{
		height: 4px;
		width: 100%;
		background-color: #D3D3D3;
		-webkit-transition: background-color .5s;
		-moz-transition: background-color .5s;
		-o-transition: background-color .5s;
		transition: background-color .5s
	}

	.active-sep{
		background-color: #34495E;
		-webkit-transition: background-color .5s;
		-moz-transition: background-color .5s;
		-o-transition: background-color .5s;
		transition: background-color .5s
	}

	.contenedor-carreras{
		float: left;
		clear: both;
		width: 100%;
		border-top: 1px solid rgba(0,0,0,0.1);
		padding-top: 30px;
		position: relative;
	}

	.siguiente-carrera, .siguiente-modo, .siguiente-registro-basico, .siguiente-facebook, .siguiente-finalizar{
		padding-top: 20px;
		text-align: center;
		float: left;
		width: 100%;
	}

	.contenedor-modo, .mapa-registro{
		float: left;
		clear: both;
		width: 100%;
		border-top: 1px solid rgba(0,0,0,0.1);
		padding-top: 30px;
		right: -100%;
		position: relative;
	}

	

	.word{
		width: 650px;
		height: 30px;
		margin: 0 auto;
		padding-left: 7px;
		padding-top: 20px;
		padding-bottom: 50px;
	}

	.palabras{
		float: left;
		margin-right: 196px;
		font-size: 16px;
		font-weight: 700;
		color: #D3D3D3;
		-webkit-transition: color .5s;
		-moz-transition: color .5s;
		-o-transition: color .5s;
		transition: color .5s
	}

	.word-carrera{
		margin-left: 13px;
		margin-right: 130px;
	}

	.word-modo, .word-datos{
		margin-right: 137px;
	}

	.word-mapa{
		margin-right: 0px;
	}

	.active{
		background-color: #34495E;
		color: white;
	-webkit-transition:background-color .5s;
	-moz-transition:background-color .5s;
	-o-transition:background-color .5s;
	transition:background-color .5s
	}

	.word-active{
		color: #34495E;
		font-weight: 700;
		-webkit-transition: color .5s;
		-moz-transition: color .5s;
		-o-transition: color .5s;
		transition: color .5s
	}

	.contenedor-boton-enviar{
		text-align: center;
		padding-top: 40px;
	}

	#enviar-registro{
		padding: 15px 110px; 
		border-radius: 30px;
		background-color: #D4D4D4;
		color: #A6AFB8;
		text-transform: uppercase;
		font-size: 18px;
		-webkit-box-shadow:0 4px 1px #909AA6,0 0 40px rgba(0, 0, 0, 0.1) inset;
		-moz-box-shadow:0 4px 1px #909AA6, 0 0 40px rgba(0, 0, 0, 0.1) inset;
		box-shadow:0 4px 1px #909AA6, 0 0 40px rgba(0, 0, 0, 0.1) inset;
	}

	#enviar-registro:hover{
		color: white;
	}

	.form-control{
		border-radius: 0px;
		border-color: #7f8c8d;
		color: #34495E;
	}

	#nombre_login::-webkit-input-placeholder,#apellido_login::-webkit-input-placeholder,#email_login::-webkit-input-placeholder,#telefono_login::-webkit-input-placeholder,#universidad_login::-webkit-input-placeholder,#usuario_login::-webkit-input-placeholder,#password_login::-webkit-input-placeholder,#password2_login::-webkit-input-placeholder{color:#7f8c8d;} 

	textarea:focus,
	input[type="text"]:focus,
	input[type="password"]:focus,
	input[type="datetime"]:focus,
	input[type="datetime-local"]:focus,
	input[type="date"]:focus,
	input[type="month"]:focus,
	input[type="time"]:focus,
	input[type="week"]:focus,
	input[type="number"]:focus,
	input[type="email"]:focus,
	input[type="url"]:focus,
	input[type="search"]:focus,
	input[type="tel"]:focus,
	input[type="color"]:focus,
	.uneditable-input:focus {   
		border-color: rgba(126, 239, 104, 0.8);
		border-color: #7f8c8d;
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px #FAFAFA;
		outline: 0 none;
	}

	#universidad_login:focus{
		border-color: rgba(126, 239, 104, 0.8);
		border-color: #7f8c8d;
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px #FAFAFA;
		outline: 0 none;
	}

	.no-face, .face{
		text-align: center;
		position: relative;
	}

	.no-face a, #siguiente-run, #siguiente-basico, #siguiente-fin, #siguiente-fb{
		padding: 9px 89px;
		border: 1px solid #ccc;
		border-radius: 4px;
		color: white;
		background-color: #9b59b6;
		text-decoration: none;
	}

	.no-face a:hover, #siguiente-run:hover, #siguiente-basico:hover, #siguiente-fin:hover, #siguiente-fb:hover{
		background-color: #8e44ad;
		color: white;
	}

	.formulario-padre{
		position: relative;
		right: -100%;
		overflow: hidden;
		float: left
	}
	


	
</style>
</head>