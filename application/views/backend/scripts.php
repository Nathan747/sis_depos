<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

<script>

	
	$("#ejemplo_email_1").val("");
	$("#becario-1").val("");
	$("#admin-1").val("");
	
	/* BACK END */

	$("#gestar").click(function(){
		var x=1;
		var selected;
		$("aside").find("a").each(function(){
			if($(this).hasClass("li-active")){
				selected=x;
			}
			x++;
		});

		switch(selected){
			case 1: break;
			case 2:
			if(!$("#gestar").hasClass("li-active")){
				var etiquetas = $("aside").find("a");
				etiquetas.each(function(){
					if($(this).hasClass("li-active")){
						$(this).removeClass("li-active");
					}
				});
				$("#gestar").addClass("li-active");

				$("#ultimos-movimientos").animate({
					left: "-100%"
				},function(){
					$("#crear-usuario").animate({
						right: "0"
					});
				});
			} 
			break;
			case 3: 
			if(!$("#gestar").hasClass("li-active")){
				var etiquetas = $("aside").find("a");
				etiquetas.each(function(){
					if($(this).hasClass("li-active")){
						$(this).removeClass("li-active");
					}
				});
				$("#gestar").addClass("li-active");

				$("#menu-recaudado").animate({
					top: "-1850px"
				},function(){
					$("#crear-usuario").animate({
						right: "0"
					});
				});
			} 
			break;
			case 4: 
			if(!$("#gestar").hasClass("li-active")){
				var etiquetas = $("aside").find("a");
				etiquetas.each(function(){
					if($(this).hasClass("li-active")){
						$(this).removeClass("li-active");
					}
				});
				$("#gestar").addClass("li-active");

				$("#menu-becarios").animate({
					top: "10px"
				},function(){
					$("#crear-usuario").animate({
						right: "0"
					});
				});
			} 
			break;
		}
	});

	$("#movimientos").click(function(){
		var x=1;
		var selected;
		$("aside").find("a").each(function(){
			if($(this).hasClass("li-active")){
				selected=x;
			}
			x++;
		});

		switch(selected){
			case 1: 
			if(!$("#movimientos").hasClass("li-active")){
				var etiquetas = $("aside").find("a");
				etiquetas.each(function(){
					if($(this).hasClass("li-active")){
						$(this).removeClass("li-active");
					}
				});
				$("#movimientos").addClass("li-active");

				$("#crear-usuario").animate({
					right: "-100%"
				},function(){
					$("#ultimos-movimientos").animate({
						left: "0"
					});
				});
			}
			break;
			case 2: break;
			case 3: 
			if(!$("#movimientos").hasClass("li-active")){
				var etiquetas = $("aside").find("a");
				etiquetas.each(function(){
					if($(this).hasClass("li-active")){
						$(this).removeClass("li-active");
					}
				});
				$("#movimientos").addClass("li-active");

				$("#menu-recaudado").animate({
					top: "-1850px"
				},function(){
					$("#ultimos-movimientos").animate({
						left: "0"
					});
				});
			}
			break;
			case 4: 
			if(!$("#movimientos").hasClass("li-active")){
				var etiquetas = $("aside").find("a");
				etiquetas.each(function(){
					if($(this).hasClass("li-active")){
						$(this).removeClass("li-active");
					}
				});
				$("#movimientos").addClass("li-active");

				$("#menu-becarios").animate({
					top: "10px"
				},function(){
					$("#ultimos-movimientos").animate({
						left: "0"
					});
				});
			}
			break;
		}

	});

	$("#becarios").click(function(){
		var x=1;
		var selected;
		$("aside").find("a").each(function(){
			if($(this).hasClass("li-active")){
				selected=x;
			}
			x++;
		});
		switch(selected){
			case 1: 
			if(!$("#becarios").hasClass("li-active")){
				var etiquetas = $("aside").find("a");
				etiquetas.each(function(){
					if($(this).hasClass("li-active")){
						$(this).removeClass("li-active");
					}
				});
				$("#becarios").addClass("li-active");

				$("#crear-usuario").animate({
					right: "-100%"
				},function(){
					$("#menu-becarios").animate({
						top: "-850px"
					});
				});
			}
			break;
			case 2: 
			if(!$("#becarios").hasClass("li-active")){
				var etiquetas = $("aside").find("a");
				etiquetas.each(function(){
					if($(this).hasClass("li-active")){
						$(this).removeClass("li-active");
					}
				});
				$("#becarios").addClass("li-active");

				$("#ultimos-movimientos").animate({
					left: "-100%"
				},function(){
					$("#menu-becarios").animate({
						top: "-850px"
					});
				});
			}
			break;
			case 3: 
			if(!$("#becarios").hasClass("li-active")){
				var etiquetas = $("aside").find("a");
				etiquetas.each(function(){
					if($(this).hasClass("li-active")){
						$(this).removeClass("li-active");
					}
				});
				$("#becarios").addClass("li-active");

				$("#menu-recaudado").animate({
					top: "-1850px"
				},function(){
					$("#menu-becarios").animate({
						top: "-850px"
					});
				});
			}
			break;
			case 4: break;
		}
	});


	$("#recaudado").click(function(){
		var x=1;
		var selected;
		$("aside").find("a").each(function(){
			if($(this).hasClass("li-active")){
				selected=x;
			}
			x++;
		});
		switch(selected){
			case 1: 
			if(!$("#recaudado").hasClass("li-active")){
				var etiquetas = $("aside").find("a");
				etiquetas.each(function(){
					if($(this).hasClass("li-active")){
						$(this).removeClass("li-active");
					}
				});
				$("#recaudado").addClass("li-active");

				$("#crear-usuario").animate({
					right: "-100%"
				},function(){
					$("#menu-recaudado").animate({
						top: "-1360px"
					});
				});
			}
			break;
			case 2: 
			if(!$("#recaudado").hasClass("li-active")){
				var etiquetas = $("aside").find("a");
				etiquetas.each(function(){
					if($(this).hasClass("li-active")){
						$(this).removeClass("li-active");
					}
				});
				$("#recaudado").addClass("li-active");

				$("#ultimos-movimientos").animate({
					left: "-100%"
				},function(){
					$("#menu-recaudado").animate({
						top: "-1360px"
					});
				});
			}
			break;
			case 3: 
			break;
			case 4: 
			if(!$("#recaudado").hasClass("li-active")){
				var etiquetas = $("aside").find("a");
				etiquetas.each(function(){
					if($(this).hasClass("li-active")){
						$(this).removeClass("li-active");
					}
				});
				$("#recaudado").addClass("li-active");

				$("#menu-becarios").animate({
					top: "-250px"
				},function(){
					$("#menu-recaudado").animate({
						top: "-1360px"
					});
				});
			}
			break;
		}
	});

	/* FIN BACK-END */

	/* ULTIMOS MOVIMIENTOS */

	$("#last").click(function(){
		var i=1;
		var min=1;
		var max;
		var actual=-1;
		var padre;
		if(!$(this).children().hasClass("boton-deshabilitado")){
			$(".selector-numero").each(function(){
				if($(this).hasClass("numero-activo")){
					$(this).removeClass("numero-activo");
					actual = parseInt($(this).children().text());
					actual-=2;
				}
				i++;
			});
			var change = ($(".selector-numero")[actual]);
			$(change).addClass("numero-activo");
			actual++;
			max = i-1;
			if(actual==min){
				$("#last").children().removeClass("boton-deshabilitado");
				$("#last").children().addClass("boton-deshabilitado");
				$("#next").children().removeClass("boton-deshabilitado");
			}else{
				if(actual==max){
					$("#next").children().removeClass("boton-deshabilitado");
					$("#next").children().addClass("boton-deshabilitado");
					$("#last").children().removeClass("boton-deshabilitado");
				}else{
					$("#next").children().removeClass("boton-deshabilitado");
					$("#last").children().removeClass("boton-deshabilitado");
				}
			}
		}
	});

	$("#next").click(function(){
		var i=1;
		var min=1;
		var max;
		var actual=-1;
		if(!$(this).children().hasClass("boton-deshabilitado")){
			$(".selector-numero").each(function(){
				if($(this).hasClass("numero-activo")){
					$(this).removeClass("numero-activo");
					actual = parseInt($(this).children().text());
					actual++;
				}
				if(actual==i){
					$(this).addClass("numero-activo");
				}
				i++;
			});
			max = i-1;
			if(actual==min){
				$("#last").children().removeClass("boton-deshabilitado");
				$("#last").children().addClass("boton-deshabilitado");
				$("#next").children().removeClass("boton-deshabilitado");
			}else{
				if(actual==max){
					$("#next").children().removeClass("boton-deshabilitado");
					$("#next").children().addClass("boton-deshabilitado");
					$("#last").children().removeClass("boton-deshabilitado");
				}else{
					$("#next").children().removeClass("boton-deshabilitado");
					$("#last").children().removeClass("boton-deshabilitado");
				}
			}
		}
	});

	$(".selector-numero").click(function(){
		var min = 1;
		var max;
		var i=0;
		$(".selector-numero").each(function(){
			if($(this).hasClass("numero-activo")){
				$(this).removeClass("numero-activo");
			}
			i++;
		});
		$(this).addClass("numero-activo");
		max = i;
		if ($(this).children().text()==min){
			$("#last").children().removeClass("boton-deshabilitado");
			$("#last").children().addClass("boton-deshabilitado");
			$("#next").children().removeClass("boton-deshabilitado");
		}else{
			if ($(this).children().text()==max){
				$("#next").children().removeClass("boton-deshabilitado");
				$("#next").children().addClass("boton-deshabilitado");
				$("#last").children().removeClass("boton-deshabilitado");
			}else{
				$("#next").children().removeClass("boton-deshabilitado");
				$("#last").children().removeClass("boton-deshabilitado");
			}
		}
	});

	/* FIN ULTIMOS MOVIMIENTOS */


	/* BUSCAR BECARIO */
	$(".boton-buscar").click(function(){
		$(".contenedor-info-becario").animate({
			top: "0px"
		},function(){
			$(".monto-buscar").animate({
				top: "0px"
			},function(){
				$(".texto-monto").animate({
					top: "0px"
				},function(){	
					$(".botones-monto").animate({
						top: "0px"
					},function(){
						$(".botones-confirmacion-final").animate({
							top: "0px"
						});
					});
				});
			});
		});
	});
	/* FIN BUSCAR BECARIO */

</script>