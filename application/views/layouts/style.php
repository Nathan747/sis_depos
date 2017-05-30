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
		overflow: auto;
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
	}

	.separador-wizard{
		height: 35px;
		width: 240px;
		float: left;
		padding-top: 16px;
	}

	.linea-separador{
		height: 4px;
		width: 100%;
		background-color: #D3D3D3;
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
	}

	.word-register{
		margin-right: 215px;
	}

	.word-confirmacion{
		margin-right: 0px;
	}

	.active{
		background-color: #34495E;
		color: white;
	}

	.word-active{
		color: #34495E;
		font-weight: 700;
	}

	
</style>
</head>