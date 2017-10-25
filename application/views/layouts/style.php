<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<style>
.name2 {
	top: 10px;
	position: relative;
	font-size: 20px;
	padding-left: 46px;
}

.job2 {
	font-weight: 400!important;
	line-height: 1;
	color: #777;
	padding-top: 10px;
	padding-left: 46px;
}


.first2{
	padding-left: 46px;
}

.container2{
	background:#22205F;
	width: 100%;
	height: 100px;
	border-bottom: 1px solid #e7e7e7;
}

.titl{
	color:white;

}

.container2 .page-header {
	padding-bottom: 21px;
	margin: 40px 0 20px;
	border-bottom: 0px solid #eee!important;
}

.profile2 .bio2{
	width: 71%;
}


.profile2{
	border-left:0px solid #cccccc!important;
}

.formul {
	top: 0px;
}


.profile {

	right: -350%;

}

.contenedor-donar {

	right: -250%;

}

.contenedor-registro, .contenedor-donar {

	right: -300%;

}

/*responsive*/

@media(max-width:1199px) and (min-width: 992px) {
	.profile {
		width: 1000px;
		overflow:scroll;
	}
}


@media(max-width:991px) and (min-width: 768px) {
	.profile {
		width: 778px;
		overflow:scroll;
	}

	.contenedor-informacion-perfil {
		float: none;
		overflow: hidden;
		height: 223px;
	}
}


@media(max-width:767px) {
	.float{
		display:none;
	}
	.float2{
		display:none;
	}
	.profile {
		width: 100%;
		overflow:scroll;
	}
	.page-header{
		font-size: 20px!important;
	}
	.photo{
		max-width: 320px;
		margin: 0 auto;
	}
	.bio2{
	}
	.bio{
	}
	.contenedor-informacion-perfil {
		float: none;
		overflow: hidden;
		height: 223px;
	}

}




</style>
</head>