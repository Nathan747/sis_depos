<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

<script>
	var done = 0;
	var cant_paginas=0;
	var page_selected=1;

	function limpiar_tabla(){
		for(var i=1;i<10;i++){
			$(".fila-"+i).find(".columna-1").text("\u00a0");
			$(".fila-"+i).find(".columna-2").text("\u00a0");
			$(".fila-"+i).find(".columna-3").text("\u00a0");
			$(".fila-"+i).find(".columna-4").text("\u00a0");
			$(".fila-"+i).find(".columna-5").text("\u00a0");
			$(".fila-"+i).find(".columna-6").text("\u00a0");
			$(".fila-"+i).find(".columna-7").text("\u00a0");

		}
	}

	function rellenar_tabla(indice=0){
		var i;
		var limite;
		var cant_items = objeto.cantidad;
		console.log(cant_items);
		var aux_cant = cant_items;

		var cant_items_mostrados = 4;



		if(done==0){
			while(aux_cant>0){
				aux_cant-=cant_items_mostrados;
				cant_paginas++;
			}
			done=1;
		}
		

		if($(".selectores-ultimos-movimientos").find(".selector-numero").length==0){
			for(var x=0;x<cant_paginas;x++){
				if(x==0){
					$(".selectores-numeros").append("<a href='#' class='selector-numero numero-activo'> <div class='numeros'>"+(x+1)+"</div> </a>");			
				}else{
					if(x<3){
						$(".selectores-numeros").append("<a href='#' class='selector-numero'> <div class='numeros'>"+(x+1)+"</div> </a>");
					}
				}
			}
		}	

		
		if(indice==0){
			i = 0;
			limite = cant_items_mostrados; 
		}else{
			i = indice*cant_items_mostrados
			limite = i + cant_items_mostrados; 
			if(limite>cant_items){
				limite = cant_items;
			}
		}

		// MOSTRAR INFO DE RESULTADOS
		$(".primer-elemento-resultados").text(" ");
		$(".primer-elemento-resultados").text(i+1);

		$(".ultimo-elemento-resultados").text(" ");
		$(".ultimo-elemento-resultados").text(limite);

		$(".total-resultados").text(" ");
		$(".total-resultados").text(cant_items);

		// FIN MOSTRAR INFO DE RESULTADOS

		if(cant_items<limite){
			for(fila=1;i<cant_items;i++,fila++){
				console.log("i: "+i);
				$(".table-condensed").append("<tr class=row-"+i+"></tr>");

				$(".fila-"+fila).find(".columna-1").text();
				$(".fila-"+fila).find(".columna-1").text(objeto[i]["nombre"]+" "+objeto[i]["apellido"]);

				$(".fila-"+fila).find(".columna-2").text();
				$(".fila-"+fila).find(".columna-2").text(objeto[i]["email"]);

				$(".fila-"+fila).find(".columna-3").text();
				$(".fila-"+fila).find(".columna-3").text(objeto[i]["dni"]);

				$(".fila-"+fila).find(".columna-4").text();
				$(".fila-"+fila).find(".columna-4").text(objeto[i]["telefono"]);

				var d = new Date(objeto[i]["fecha_creada"]);
				var dia = d.getUTCDate();
				var mes = d.getUTCMonth() + 1;
				var anio = d.getUTCFullYear();
				var fecha = dia+"/"+mes+"/"+anio;

				$(".fila-"+fila).find(".columna-5").text();
				$(".fila-"+fila).find(".columna-5").text(fecha);

				$(".fila-"+fila).find(".columna-6").text();
				$(".fila-"+fila).find(".columna-6").text(objeto[i]["monto_transaction"]);

				$(".fila-"+fila).find(".columna-7").text();

				$(".fila-"+fila).find(".columna-7").text(objeto[i]["neto_recibido"]);
			}	
		}else{
			for(fila=1;i<limite;i++,fila++){
				console.log("i: "+i);
				$(".table-condensed").append("<tr class=row-"+i+"></tr>");

				$(".fila-"+fila).find(".columna-1").text();
				$(".fila-"+fila).find(".columna-1").text(objeto[i]["nombre"]+" "+objeto[i]["apellido"]);

				$(".fila-"+fila).find(".columna-2").text();
				$(".fila-"+fila).find(".columna-2").text(objeto[i]["email"]);

				$(".fila-"+fila).find(".columna-3").text();
				$(".fila-"+fila).find(".columna-3").text(objeto[i]["dni"]);

				$(".fila-"+fila).find(".columna-4").text();
				$(".fila-"+fila).find(".columna-4").text(objeto[i]["telefono"]);

				var d = new Date(objeto[i]["fecha_creada"]);
				var dia = d.getUTCDate();
				var mes = d.getUTCMonth() + 1;
				var anio = d.getUTCFullYear();
				var fecha = dia+"/"+mes+"/"+anio;

				$(".fila-"+fila).find(".columna-5").text();
				$(".fila-"+fila).find(".columna-5").text(fecha);

				$(".fila-"+fila).find(".columna-6").text();
				$(".fila-"+fila).find(".columna-6").text(objeto[i]["monto_transaction"]);

				$(".fila-"+fila).find(".columna-7").text();

				$(".fila-"+fila).find(".columna-7").text(objeto[i]["neto_recibido"]);
			}	
		}

	}

	var objeto = <?php echo json_encode($objeto) ?>;
	console.log(objeto);
	
	rellenar_tabla();

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
					top: "-1950px"
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
					top: "-1950px"
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
						top: "-1010px"
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
						top: "-1010px"
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
					top: "-1950px"
				},function(){
					$("#menu-becarios").animate({
						top: "-1010px"
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
						top: "-1540px"
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
						top: "-1540px"
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
					top: "0px"
				},function(){
					$("#menu-recaudado").animate({
						top: "-1540px"
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
		var selected;
		$("#ultimo").find(".siguiente").removeClass("boton-deshabilitado");
		if(!$(this).children().hasClass("boton-deshabilitado")){
			$(".selector-numero").each(function(){
				if($(this).hasClass("numero-activo")){
					$(this).removeClass("numero-activo");
					actual = parseInt($(this).children().text());
					selected=actual;
					actual-=2;
				}
				i++;
			});
			console.log("SELECTED: "+selected);
			page_selected--;
			console.log("Page selected last: "+page_selected);
			if(selected>3){
				$($(".selector-numero")[2]).addClass("numero-activo");
				var first_number = parseInt($($(".selector-numero")[0]).children().text());
				first_number--;
				$(".selector-numero").each(function(){
					$(this).children().text(first_number);
					first_number++;
				});
			}else{
				var first_number=1;
				$(".selector-numero").each(function(){
					$(this).children().text(first_number);
					first_number++;
				});
				var change = ($(".selector-numero")[actual]);
				$(change).addClass("numero-activo");
				actual++;
				max = i-1;
			}


			if ((actual>3)&&(actual<max+1)){
				$($(".selector-numero")[2]).addClass("numero-activo");
				var first_number = parseInt($($(".selector-numero")[0]).children().text());
				first_number++;
				$(".selector-numero").each(function(){
					$(this).children().text(first_number);
					first_number++;
				});
			}

			if(actual==min){
				$("#last").children().removeClass("boton-deshabilitado");
				$("#last").children().addClass("boton-deshabilitado");
				$("#next").children().removeClass("boton-deshabilitado");
				$("#last").find(".anterior").addClass("boton-deshabilitado");
				$("#primer-elemento").find(".anterior").addClass("boton-deshabilitado");
				page_selected=1;
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
			console.log("Page selected last DESPUES: "+page_selected);
			limpiar_tabla();
			if (selected>2){
				rellenar_tabla(page_selected);
			}else{
				rellenar_tabla(page_selected-1);
			}
		}
	});

	$("#primer-elemento").click(function(){
		if(page_selected!=1){
			$(".selector-numero").each(function(){
				if($(this).hasClass("numero-activo")){
					$(this).removeClass("numero-activo");
					actual = parseInt($(this).children().text());
					actual++;
				}
			});
			$($(".selector-numero")[0]).addClass("numero-activo");
			var first_number = 1;
			$(".selector-numero").each(function(){
				$(this).children().text(first_number);
				first_number++;
			});

			$("#last").find(".anterior").addClass("boton-deshabilitado");
			$("#primer-elemento").find(".anterior").addClass("boton-deshabilitado");

			$("#ultimo").find(".siguiente").removeClass("boton-deshabilitado");
			$("#next").find(".siguiente").removeClass("boton-deshabilitado");

			///cant_paginas;
			page_selected = 1;
			console.log(page_selected);
			limpiar_tabla();
			rellenar_tabla(0);
		}
	});

	$("#ultimo").click(function(){
		if(page_selected!=cant_paginas){
			$(".selector-numero").each(function(){
				if($(this).hasClass("numero-activo")){
					$(this).removeClass("numero-activo");
					actual = parseInt($(this).children().text());
					actual++;
				}
			});
			if(cant_paginas>2){
				$($(".selector-numero")[2]).addClass("numero-activo");
			}else{
				$($(".selector-numero")[cant_paginas-1]).addClass("numero-activo");
			}
			var first_number;
			if(cant_paginas>2){
				first_number = cant_paginas-2;
			}else{
				first_number=1;
			}
			$(".selector-numero").each(function(){
				$(this).children().text(first_number);
				first_number++;
			});
			$("#last").find(".anterior").removeClass("boton-deshabilitado");
			$("#primer-elemento").find(".anterior").removeClass("boton-deshabilitado");

			$("#ultimo").find(".siguiente").addClass("boton-deshabilitado");
			$("#next").find(".siguiente").addClass("boton-deshabilitado");
			
			
			///cant_paginas;
			page_selected = cant_paginas;
			console.log(page_selected);
			limpiar_tabla();
			rellenar_tabla(cant_paginas-1);
		}
	});

	$("#next").click(function(){
		var i=1;
		var min=1;
		var cant_paginados=0;
		var max=cant_paginas;
		var actual=-1;
		$("#primer-elemento").find(".boton-numeros").removeClass("boton-deshabilitado");
		if(!$(this).children().hasClass("boton-deshabilitado")){ /// Si no esta deshabilitado
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

			page_selected++;
			if ((actual>3)&&(actual<max+1)){
				$($(".selector-numero")[2]).addClass("numero-activo");
				var first_number = parseInt($($(".selector-numero")[0]).children().text());
				console.log("FIRST NUMBER NEXT: "+first_number);
				first_number++;
				//console.log("FIRST NUMBER NEXT AUMENTADO: "+first_number);
				if(first_number+2>cant_paginas){
					first_number--;
				}
				$(".selector-numero").each(function(){
					$(this).children().text(first_number);
					first_number++;
				});
			}else{
				console.log("ELSE");
				var first_number = parseInt($($(".selector-numero")[0]).children().text());
				console.log(first_number);
				//first_number++;
				$(".selector-numero").each(function(){
					$(this).children().text(first_number);
					first_number++;
				});
			}
			
			cant_paginados = i-1;
			if(actual==min){
				$("#last").children().removeClass("boton-deshabilitado");
				$("#last").children().addClass("boton-deshabilitado");
				$("#next").children().removeClass("boton-deshabilitado");
			}else{
				if(actual==max){
					$("#next").children().removeClass("boton-deshabilitado");
					$("#next").children().addClass("boton-deshabilitado");
					$("#last").children().removeClass("boton-deshabilitado");
					$("#ultimo").find(".siguiente").addClass("boton-deshabilitado");
				}else{
					$("#next").children().removeClass("boton-deshabilitado");
					$("#last").children().removeClass("boton-deshabilitado");
				}
			}
			limpiar_tabla();
			rellenar_tabla(actual-1);
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

		var selected = parseInt($(this).children().text());
		page_selected = selected;

		if (selected==1){
			$("#last").find(".anterior").addClass("boton-deshabilitado");
			$("#primer-elemento").find(".anterior").addClass("boton-deshabilitado");
			$("#ultimo").find(".siguiente").removeClass("boton-deshabilitado");
			$("#next").find(".siguiente").removeClass("boton-deshabilitado");
		}else{
			if (selected==cant_paginas) {
				$("#last").find(".anterior").removeClass("boton-deshabilitado");
				$("#primer-elemento").find(".anterior").removeClass("boton-deshabilitado");

				$("#ultimo").find(".siguiente").addClass("boton-deshabilitado");
				$("#next").find(".siguiente").addClass("boton-deshabilitado");
			}else{
				$("#last").find(".anterior").removeClass("boton-deshabilitado");
				$("#primer-elemento").find(".anterior").removeClass("boton-deshabilitado");

				$("#ultimo").find(".siguiente").removeClass("boton-deshabilitado");
				$("#next").find(".siguiente").removeClass("boton-deshabilitado");
			}
		}

		



		limpiar_tabla();
		rellenar_tabla(selected-1);
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


	/* GESTIONAR USUARIOS */

	$("#boton-enviar-1").click(function(){
      console.log("CLICK");
      var nombre_colaborador = $("#nombre-1").val();
      var apellido_colaborador = $("#apellido-1").val();
      var email_colaborador = $("#email-1").val();
      var telefono_colaborador = $("#telefono-1").val();
      var password_colaborador = $("#password-1").val();

      $.ajax({
        url: "load_colaborador",
        type: "post",
        data: {
          nombre: nombre_colaborador,
          apellido: apellido_colaborador,
          telefono: telefono_colaborador,
          email: email_colaborador,
          pass: password_colaborador,
        }
      }).done(function(json){
      	$(".padre-mensaje-colaborador").animate({
      		left: "0px"
      	});
        var objeto = $.parseJSON(json);
        console.log(json);
      });
    });


	$("#universidad-2").change(function(){
		console.log($("#universidad-2").val());
		var universidad_becario = $("#universidad-2").val();
		$(".carreras-becario").find("select").each(function(){
			$(this).css("display","none");
			$(this).val(null);
		});
		var becario_clase = "#carrera-becario-"+universidad_becario;
		console.log(becario_clase);
		$(becario_clase).css("display","inline-block");

	});

	$("#boton-enviar-2").click(function(){
      console.log("CLICK");
      var nombre_becario = $("#nombre-2").val();
      var apellido_becario = $("#apellido-2").val();
      var dni_becario = $("#dni-2").val();
      var telefono_becario = $("#telefono-2").val();
      var password_becario = $("#password-2").val();
      var facultad_becario = $("#universidad-2").val();
      var clase_becario = "#carrera-becario-"+facultad_becario;
      var carrera_becario = $(clase_becario).val();

      $.ajax({
        url: "load_becario",
        type: "post",
        data: {
          nombre: nombre_becario,
          apellido: apellido_becario,
          dni: dni_becario,
          telefono: telefono_becario,
          pass: password_becario,
          facultad: facultad_becario,
          carrera: carrera_becario
        }
      }).done(function(json){
      	$(".padre-mensaje-becario").animate({
      		left: "0px"
      	});
        var objeto = $.parseJSON(json);
        console.log(json);
      });
    });



    $("#boton-enviar-3").click(function(){
      console.log("CLICK");
      var nombre_admin = $("#nombre-3").val();
      var apellido_admin = $("#apellido-3").val();
      var email_admin = $("#email-3").val();
      var telefono_admin = $("#telefono-3").val();
      var password_admin = $("#password-3").val();

      $.ajax({
        url: "load_admin",
        type: "post",
        data: {
          nombre: nombre_admin,
          apellido: apellido_admin,
          telefono: telefono_admin,
          email: email_admin,
          pass: password_admin,
        }
      }).done(function(json){
      	$(".padre-mensaje-admin").animate({
      		left: "0px"
      	});
        var objeto = $.parseJSON(json);
        console.log(json);
      });
    });

</script>