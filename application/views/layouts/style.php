<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<style>
.navbar-toggle {
    margin-top: 13px!important;
}
.examinar{
	background:#22205F;
	color: white;
}
.profile2 {
	width: 1024px;
	right: -167px;
	height: 576px;
}
.close {
	right: -150px;
}
.profile2 {
	height: 576px;
}

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
	background: #8d6e63;
	width: 100%;
	height: 100px;
	border-bottom: 1px solid #e7e7e7;
}
.titl{
	color:white;
}
.container2 .page-header {
	padding-bottom: 21px;
	margin: 33px 0 20px;
	border-bottom: 0px solid #eee!important;
	padding: 0px 30px;
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
.profile2 {
	width: 936px;
	right: -110px;
}

.close {
	right: -72px;
}

}

@media(max-width:991px) and (min-width: 768px) {
.contenedor-profile-options{
	display: none;
}
.profile {
	width: 778px;
	overflow:scroll;
}

.contenedor-informacion-perfil {
	float: none;
	overflow: hidden;
	height: 223px;
}

.contenedor-donar {
	width: 600px;
}
}
@media(max-width:860px) {
.contenedor-registro{
	width:100%!important;
	overflow: scroll!important;
}
.contenedor-registro .wizard {
    width: 297px;
    height: 35px;
    margin: 0 auto;
}
.contenedor-registro .separador-wizard {
    height: 35px;
    width: 51px;
    float: left;
    padding-top: 16px;
}
.contenedor-registro .word {
    width: 370px;
    height: 30px;
    margin: 0 auto;
    padding-left: 7px;
    padding-top: 20px;
    padding-bottom: 50px;
}
.contenedor-registro .word-modo,.contenedor-registro .word-datos {
    margin-right: 22px;
    margin-left: 20px;
}
.contenedor-registro .word-carrera {
    margin-left: 10px;
    margin-right: 37px;
}
}

.nav-mobile{
	display:none;
}

@media(max-width:767px) {








/*maps*/


#contenedor-leer {
    position: absolute;
    width: 195px;
    bottom: 1px;
    left: 3px;
    height: 25px;
    background-color: #108CFF;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-direction: column;
}

#map>div>.gm-style>div:nth-child(1)>div:nth-child(4)>div:nth-child(4)>div>.gm-style-iw {
    top: 0 !important;
    left: 0 !important;
    width: 200px !important;
    height: 293px!important;
}



#map>div>.gm-style>div:nth-child(1)>div:nth-child(4)>div:nth-child(4){
	position: absolute;
    left: 24px!important;
    top: 23px!important;
    z-index: 107;
    width: 100%;
}


#map>div>.gm-style>div:nth-child(1)>div:nth-child(4)>div:nth-child(4)>div>div:nth-child(1)>div:nth-child(4) {
	height: 299px !important;
    width: 199px!important;
}

#map>div>.gm-style>div:nth-child(1)>div:nth-child(4)>div:nth-child(4)>div>div:nth-child(1)>div:nth-child(2) {
    height: 300px !important;
    width: 201px!important;
}

#map>div>.gm-style>div:nth-child(1)>div:nth-child(4)>div:nth-child(4)>div {
	cursor: default;
    position: absolute;
    width: 201px!important;
    height: 296px!important;
    left: 172px;
    top: -49px;
    z-index: -49;

}

/*maps*/



.profile .container .expand {
    max-height: 2000px!important;
}
.login {
    z-index: 9;
}
.camimg {
    z-index: 99999;
}
.examinar {
    width: 97%;
}
.profile .container .row {
	max-height: 1832px;
}
.contenedor-registro, .contenedor-donar {
    z-index: 9;
}
.profile {
    z-index: 9!important;
	overflow:scroll!important;
}
.navbar-right{
	top: -200px;
    position: relative;
    background: #22205F;
    margin: 0;
    padding-top: 10px;
}
.navbar-collapse.in{
-webkit-transition: all 1s ease;
-moz-transition: all 1s ease;
transition: all 1s ease;
display:block;
}
.navbar-collapse{
    position: absolute;
    width: 100%;
	/*background: #22205F;*/
	background: transparent;
    z-index: 99;
	border-bottom: white;
	height:auto!important;
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	transition: all 1s ease;
	display:block;
	top: 59px;
    overflow: hidden;
    padding: 0;
}
.nav-mobile{
	display:block;
}
.nav-mobile li{
	text-align:center;
	width:100%;
	padding-bottom:15px;
}
.nav-mobile li a{
	text-decoration:none;
}
.username-change a div{
	text-align:center;
	float:none;	
}
.trop{
	display:none!important;
}
.contenedor-donar .word .word-modo-donar {
	margin-right: 82px;
	font-size: 14px;
}
.contenedor-donar .word-modo-donar {
	margin-left: 11px;
}
.contenedor-donar .word .word-cantidad {
	margin-right: 51px;
	font-size: 14px;
}
.contenedor-donar .word .word-confirmacion {
	margin-right: 0px;
	font-size: 14px;
}

.contenedor-donar .word {
	width: 348px;
}
.contenedor-donar .wizard {
	width: 305px;
}
.contenedor-donar {
	width: 100%;
}
.separador-wizard {
	height: 35px;
	width: 100px;
	float: left;
	padding-top: 16px;
}

.contenedor-mercado-pago {
	left: 0;
	width: 100%!important;
}
.contenedor-paypal {
	padding: 0px 0px 0px 0px;
	float: left;
	width: 100%!important;
	top: 392px;
}
.profile2 {
	width: 100%;
	right: 0px;
	overflow: scroll;
}
.container2 {
	background: #22205F;
	width: 100%;
	height: 94px;
	border-bottom: 1px solid #e7e7e7;
	/* top: 16px; */
	/* margin-bottom: 19px; */
	padding-top: 1px;
}

.profile2 .photo{
	max-width: 320px;
	margin: 0 0;
}
.profile2 .contenedor-informacion-perfil {
	float: none;
	overflow: hidden;
	height: 81px;
}
.login {
	width:100%;
}
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
	height: 310px;
}
/*nav*/
#registrate,#ingresar{
	text-align: center;
}
}
</style>
</head>