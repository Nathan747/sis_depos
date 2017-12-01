<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
<style>

/*menu hamburguesa*/
.hamburger {
  -webkit-transform: scale(0.5);
  transform: scale(0.5);
  position: relative;
  display: block;
  width: 68px;
  height: 68px;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor:pointer;
  float:right;
}
.navbar-toggle{
display:none;

}

.burger-main {
  position: absolute;
  padding: 20px 16px;
  height: 68px;
  width: 68px;
}

.burger-inner {
  position: relative;
  height: 28px;
  width: 36px;
}

.burger-main span {
  position: absolute;
  display: block;
  height: 4px;
  width: 36px;
  border-radius: 2px;
  background: #3F9FFF;
}

.top {
  top: 0;
  transform-origin: 34px 2px;
}

.bot {
  bottom: 0;
  transform-origin: 34px 2px;
}

.mid {
  top: 12px;
}

.svg-main {
  position: absolute;
  top: 0;
  left: 0;
  width: 68px;
  height: 68px;
}

.circle {
  width: 68px;
  height: 68px;
}

.path {
  stroke-dasharray: 240;
  stroke-dashoffset: 240;
  stroke-linejoin: round;
}

.hamburger.open .path {
  animation: dash-in 0.6s linear normal;
  animation-fill-mode: forwards;
}

.hamburger.closed .path {
  animation: dash-out 0.6s linear normal;
  animation-fill-mode: forwards;
}

.hamburger.open .top {
  animation: close-top-out 0.6s linear normal;
  animation-fill-mode: forwards;
}

.hamburger.open .bot {
  animation: close-bot-out 0.6s linear normal;
  animation-fill-mode: forwards;
}

.hamburger.closed .top {
  animation: close-top-in 0.6s linear normal;
  animation-fill-mode: forwards;
}

.hamburger.closed .bot {
  animation: close-bot-in 0.6s linear normal;
  animation-fill-mode: forwards;
}

.hamburger.open .mid {
  animation: burger-fill-out 0.6s linear normal;
  animation-fill-mode: forwards;
}

.hamburger.closed .mid {
  animation: burger-fill-in 0.6s linear normal;
}

.path-burger {
  position: absolute;
  top: 0;
  left: 0;
  height: 68px;
  width: 68px;
  -webkit-mask: url(#mask);
  mask: url(#mask);
  -webkit-mask-box-image: url(http://dev.awsm.in/codepen/mask.svg);
}

.animate-path {
  position: absolute;
  top: 0;
  left: 0;
  width: 68px;
  height: 68px;
}

.path-rotation {
  height: 34px;
  width: 34px;
  margin: 34px 34px 0 0;
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transform-origin: 100% 0;
  transform-origin: 100% 0;
}

.path-rotation:before {
  content: '';
  display: block;
  width: 30px;
  height: 34px;
  margin: 0 4px 0 0;
  background: #3F9FFF;
}

.hamburger.open .animate-path {
  animation: circle-in 0.6s linear normal;
  animation-fill-mode: forwards;
}

.hamburger.closed .animate-path {
  animation: circle-out 0.6s linear normal;
  animation-fill-mode: forwards;
}

@-webkit-keyframes dash-in {
  0% {
    stroke-dashoffset: 240;
  }

  40% {
    stroke-dashoffset: 240;
  }

  100% {
    stroke-dashoffset: 0;
  }

}

@keyframes dash-in {
  0% {
    stroke-dashoffset: 240;
  }

  40% {
    stroke-dashoffset: 240;
  }

  100% {
    stroke-dashoffset: 0;
  }

}

@-webkit-keyframes dash-out {
  0% {
    stroke-dashoffset: 0;
  }

  40% {
    stroke-dashoffset: 240;
  }

  100% {
    stroke-dashoffset: 240;
  }

}

@keyframes dash-out {
  0% {
    stroke-dashoffset: 0;
  }

  40% {
    stroke-dashoffset: 240;
  }

  100% {
    stroke-dashoffset: 240;
  }

}

@keyframes close-top-out {
  0% {
    left: 0;
    top: 0;
    transform: rotate(0deg);
  }

  20% {
    left: 0;
    top: 0;
    transform: rotate(15deg);
  }

  80% {
    left: -5px;
    top: 0;
    transform: rotate(-60deg);
  }

  100% {
    left: -5px;
    top: 1px;
    transform: rotate(-45deg);
  }

}

@keyframes close-bot-out {
  0% {
    left: 0;
    transform: rotate(0deg);
  }

  20% {
    left: 0;
    transform: rotate(-15deg);
  }

  80% {
    left: -5px;
    transform: rotate(60deg);
  }

  100% {
    left: -5px;
    transform: rotate(45deg);
  }

}

@keyframes close-top-in {
  0% {
    left: -5px;
    bot: 0;
    transform: rotate(-45deg);
  }

  20% {
    left: -5px;
    bot: 0;
    transform: rotate(-60deg);
  }

  80% {
    left: 0;
    bot: 0;
    transform: rotate(15deg);
  }

  100% {
    left: 0;
    bot: 1px;
    transform: rotate(0deg);
  }

}

@keyframes close-bot-in {
  0% {
    left: -5px;
    transform: rotate(45deg);
  }

  20% {
    left: -5px;
    transform: rotate(60deg);
  }

  80% {
    left: 0;
    transform: rotate(-15deg);
  }

  100% {
    left: 0;
    transform: rotate(0deg);
  }

}

@keyframes burger-fill-in {
  0% {
    width: 0;
    left: 36px;
  }

  40% {
    width: 0;
    left: 40px;
  }

  80% {
    width: 36px;
    left: -6px;
  }

  100% {
    width: 36px;
    left: 0px;
  }

}

@keyframes burger-fill-out {
  0% {
    width: 36px;
    left: 0px;
  }

  20% {
    width: 42px;
    left: -6px;
  }

  40% {
    width: 0;
    left: 40px;
  }

  100% {
    width: 0;
    left: 36px;
  }

}
@keyframes circle-out {
  0% {
    transform: rotate(0deg);
  }

  40% {
    transform: rotate(180deg);
  }

  100% {
    transform: rotate(360deg);
  }

}


@keyframes circle-in {
  0% {
    transform: rotate(360deg);
  }

  40% {
    transform: rotate(180deg);
  }

  100% {
    transform: rotate(0deg);
  }

}
/*fin menu hamburguesa*/


.navbar-toggle {
    margin-top: 18px!important;
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

.hamburger {
display:none;
}






@media(max-width:767px) {


.contenedor-wizard{
display:none;

}



	.hamburger {
display:block!important;
}





	.navbar-nav li a:hover:after {
    width: 21%;
    background: #3d3d3d;
}


.face{

text-align:center;

}

.padre-biografia, .allFormButtons {
    position: relative;
    top: -26px!important;
}


/*maps*/

#contenedor-imagen {
    height: 148px;
    overflow: hidden;
}



#contenedor-leer {
    position: absolute;
    width: 195px;
    bottom: 18px;
    left: -25px;
    height: 25px;
    background-color: transparent;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-direction: column;
}

#map>div>.gm-style>div:nth-child(1)>div:nth-child(4)>div:nth-child(4)>div>.gm-style-iw {
    top: 0 !important;
    left: 0 !important;
    width: 200px !important;
    height: 330px!important;
}



#map>div>.gm-style>div:nth-child(1)>div:nth-child(4)>div:nth-child(4){
	position: absolute;
    left: 24px!important;
    top: 23px!important;
    z-index: 107;
    width: 100%;
}


#map>div>.gm-style>div:nth-child(1)>div:nth-child(4)>div:nth-child(4)>div>div:nth-child(1)>div:nth-child(4) {
	height: 330px !important;
    width: 199px!important;
}

#map>div>.gm-style>div:nth-child(1)>div:nth-child(4)>div:nth-child(4)>div>div:nth-child(1)>div:nth-child(2) {
    height: 330px !important;
    width: 201px!important;
}

#map>div>.gm-style>div:nth-child(1)>div:nth-child(4)>div:nth-child(4)>div {
	cursor: default;
    position: absolute;
    width: 201px!important;
    height: 330px!important;
    left: 172px;
    top: -49px;
    z-index: -49;

}

/*maps*/



.profile .container .expand {
	max-height: 2194px!important;
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
    background:#ffffff;
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