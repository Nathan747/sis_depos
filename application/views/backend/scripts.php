<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

<script>
	var done = 0;
	var cant_paginas=0;
	var page_selected=1;
	var facultad_sin_editar;
	var facultad_editada;
	var carrera_editada;
	var carrera_sin_editar;

	function deco_facultad(facultad){
		switch(facultad){
			case 1: 
			facultad = "Facultad de Artes y Diseño";
			break;
			case 2: 
			facultad = "Facultad de Ciencias Agrarias";
			break;
			case 3: 
			facultad = "Facultad de Ciencias Aplicadas a la Industria";
			break;
			case 4: 
			facultad = "Facultad de Ciencias Económicas";
			break;
			case 5: 
			facultad = "Facultad de Ciencias Exactas y Naturales";
			break;
			case 6: 
			facultad = "Facultad de Ciencias Médicas";
			break;
			case 7: 
			facultad = "Facultad de Ciencias Políticas y Sociales";
			break;
			case 8: 
			facultad = "Facultad de Derecho";
			break;
			case 9: 
			facultad = "Facultad de Educación";
			break;
			case 10: 
			facultad = "Facultad de Filosofía y Letras";
			break;
			case 11: 
			facultad = "Facultad de Ingeniería";
			break;
			case 12: 
			facultad = "Facultad de Odontología";
			break;
			case 13: 
			facultad = "Instituto Balseiro";
			break;
			case 14: 
			facultad = "Instituto Tecnológico Universitario";
			break;
			case 15: 
			facultad = "Instituto Universitario de Seguridad Pública";
			break;
		}
		return facultad;
	}

	function deco_carrera(carrera){
		switch(carrera){
			case 1: 
			carrera = "Ciclo de Formación Básica en Artes Visuales";
			break;
			case 2: 
			carrera = "Ciclo de Prof. de Grado Univ. de Diseño";
			break;
			case 3: 
			carrera = "Ciclo de Prof. de Grado Univ. en Música";
			break;
			case 4: 
			carrera = "Diseño Escenográfico";
			break;
			case 5: 
			carrera = "Diseño Gráfico";
			break;
			case 6: 
			carrera = "Diseño Industrial";
			break;
			case 7: 
			carrera = "Licenciatura en Arte Dramático";
			break;
			case 8: 
			carrera = "Licenciatura en Artes Plásticas";
			break;
			case 9: 
			carrera = "Licenciatura en Canto";
			break;
			case 10: 
			carrera = "Licenciatura en Cerámica Artística";
			break;
			case 11: 
			carrera = "Licenciatura en Cerámica Industrial";
			break;
			case 12: 
			carrera = "Licenciatura en Composición Musical";
			break;
			case 13: 
			carrera = "Licenciatura en Dirección Coral";
			break;
			case 14: 
			carrera = "Licenciatura en Historia de las Artes Plásticas";
			break;
			case 15: 
			carrera = "Licenciatura en Instrumento";
			break;
			case 16: 
			carrera = "Licenciatura en Música Popular";
			break;
			case 17: 
			carrera = "Licenciatura en Órgano";
			break;
			case 18: 
			carrera = "Licenciatura en Piano o Guitarra";
			break;
			case 19: 
			carrera = "Profesorado de Grado Universitario de Teorías Musicales";
			break;
			case 20: 
			carrera = "Profesorado de Grado Universitario en Artes Visuales";
			break;
			case 21: 
			carrera = "Profesorado de Grado Universitario en Cerámica Artística";
			break;
			case 22: 
			carrera = "Profesorado de Grado Universitario en Historia del Arte";
			break;
			case 23: 
			carrera = "Profesorado de Grado Universitario en Música";
			break;
			case 24: 
			carrera = "Profesorado de Grado Universitario en Teatro";
			break;
			case 25: 
			carrera = "Bromatología";
			break;
			case 26: 
			carrera = "Ingeniería Agronómica";
			break;
			case 27: 
			carrera = "Ingeniería en Recursos Naturales Renovables";
			break;
			case 28: 
			carrera = "Licenciatura en Bromatología";
			break;
			case 29: 
			carrera = "Tecnicatura Universitaria  en Enología y Viticultura";
			break;
			case 30: 
			carrera = "Tecnicatura Universitaria en Producción Animal de Zonas Áridas";
			break;
			case 31: 
			carrera = "Bromatología";
			break;
			case 32: 
			carrera = "Ciclo de Lic. en Enología";
			break;
			case 33: 
			carrera = "Ingeniería en Industrias de la Alimentación";
			break;
			case 34: 
			carrera = "Ingeniería Química";
			break;
			case 35: 
			carrera = "Profesorado de Grado Universitario en Química";
			break;
			case 36: 
			carrera = "Técnico Universitario en Enología y Viticultura";
			break;
			case 37: 
			carrera = "Ciclo de Formación Básica en Ciencias Económicas";
			break;
			case 38: 
			carrera = "Ciclo de Lic. en Gestión de Negocios Regionales";
			break;
			case 39: 
			carrera = "Contador Público Nacional";
			break;
			case 40: 
			carrera = "Licenciatura en Administración";
			break;
			case 41: 
			carrera = "Licenciatura en Economía";
			break;
			case 42: 
			carrera = "Licenciatura en Logística";
			break;
			case 43: 
			carrera = "Ciclo General de Conocimientos Básicos en Ciencias Exactas y Naturales";
			break;
			case 44: 
			carrera = "Licenciatura en Ciencias Básicas con Orientación en Biología";
			break;
			case 45: 
			carrera = "Licenciatura en Ciencias Básicas con Orientación en Física";
			break;
			case 46: 
			carrera = "Licenciatura en Ciencias Básicas con Orientación en Geología";
			break;
			case 47: 
			carrera = "Licenciatura en Ciencias Básicas con Orientación en Matemática";
			break;
			case 48: 
			carrera = "Licenciatura en Ciencias Básicas con Orientación en Química";
			break;
			case 49: 
			carrera = "Profesorado de Grado Universitario en Ciencias Básicas Orientación en Biología";
			break;
			case 50: 
			carrera = "Profesorado de Grado Universitario en Ciencias Básicas Orientación en Física";
			break;
			case 51: 
			carrera = "Profesorado de Grado Universitario en Ciencias Básicas Orientación en Matemática";
			break;
			case 52: 
			carrera = "Profesorado de Grado Universitario en Ciencias Básicas Orientación en Química";
			break;
			case 53: 
			carrera = "Ciclo de Lic. en Enfermería";
			break;
			case 54: 
			carrera = "Ciclo de Licenciatura en Higiene y Seguridad en el Trabajo";
			break;
			case 55: 
			carrera = "Enfermería Universitaria";
			break;
			case 56: 
			carrera = "Medicina";
			break;
			case 57: 
			carrera = "Tecnicatura Universitaria en Anestesia";
			break;
			case 58: 
			carrera = "Tecnicatura Universitaria en Diagnóstico por Imágenes";
			break;
			case 59: 
			carrera = "Tecnicatura Universitaria en Esterilización";
			break;
			case 60: 
			carrera = "Tecnicatura Universitaria en Hemoterapia";
			break;
			case 61: 
			carrera = "Tecnicatura Universitaria en Laboratorio";
			break;
			case 62: 
			carrera = "Tecnicatura Universitaria en Promoción de la Salud";
			break;
			case 63: 
			carrera = "Tecnicatura Universitaria en Quirófano";
			break;
			case 64: 
			carrera = "Ciclo de Profesorado para Graduados de la carrera de Ciencia Política y Administración Pública";
			break;
			case 65: 
			carrera = "Ciclo de Profesorado para Graduados de la carrera de Comunicación Social";
			break;
			case 66: 
			carrera = "Ciclo de Profesorado para Graduados de la carrera de Sociología";
			break;
			case 67: 
			carrera = "Ciclo de Profesorado para Graduados de la carrera de Trabajo Social";
			break;
			case 68: 
			carrera = "Licenciatura en Ciencia Política y Administración Pública";
			break;
			case 69: 
			carrera = "Licenciatura en Comunicación Social";
			break;
			case 70: 
			carrera = "Licenciatura en Sociología";
			break;
			case 71: 
			carrera = "Licenciatura en Trabajo Social";
			break;
			case 72: 
			carrera = "Tecnicatura en Gestión de Políticas Públicas";
			break;
			case 73: 
			carrera = "Tecnicatura Universitaria en Producción Audiovisual";
			break;
			case 74: 
			carrera = "Abogacía";
			break;
			case 75: 
			carrera = "Ciclo de Licenciatura en Psicomotricidad Educativa";
			break;
			case 76: 
			carrera = "Ciclo de Prof. de Grado Univ. en Informática";
			break;
			case 77: 
			carrera = "Licenciatura en Terapia del Lenguaje";
			break;
			case 78: 
			carrera = "Profesorado Universitario de Educación Inicial";
			break;
			case 79: 
			carrera = "Profesorado Universitario de Educación para Personas Sordas";
			break;
			case 80: 
			carrera = "Profesorado Universitario de Educación Primaria";
			break;
			case 81: 
			carrera = "Profesorado Universitario de Pedagogía Terapéutica en Discapacidad Intelectual con Orientación en Discapacidad Motora";
			break;
			case 82: 
			carrera = "Profesorado Universitario de Pedagogía Terapéutica en Discapacidad Visual";
			break;
			case 83: 
			carrera = "Tecnicatura en Cuidados Infantiles";
			break;
			case 84: 
			carrera = "Tecnicatura en Interpretación de Lengua de Señas";
			break;
			case 85: 
			carrera = "Tecnicatura Universitaria en Educación Social";
			break;
			case 86: 
			carrera = "Ciclo de Licenciatura en Literatura Infantil";
			break;
			case 87: 
			carrera = "Ciclo de Profesorado para Profesionales Universitarios";
			break;
			case 88: 
			carrera = "Geógrafo Profesional";
			break;
			case 89: 
			carrera = "Licenciatura en Ciencias de la Educación";
			break;
			case 90: 
			carrera = "Licenciatura en Filología Inglesa";
			break;
			case 91: 
			carrera = "Licenciatura en Filosofía";
			break;
			case 92: 
			carrera = "Licenciatura en Francés";
			break;
			case 93: 
			carrera = "Licenciatura en Geografía";
			break;
			case 94: 
			carrera = "Licenciatura en Historia";
			break;
			case 95: 
			carrera = "Licenciatura en Letras";
			break;
			case 96: 
			carrera = "Licenciatura en Turismo";
			break;
			case 97: 
			carrera = "Profesorado de Grado Universitario en Ciencias de la Educación";
			break;
			case 98: 
			carrera = "Profesorado de Grado Universitario en Filosofía";
			break;
			case 99: 
			carrera = "Profesorado de Grado Universitario en Geografía";
			break;
			case 100: 
			carrera = "Profesorado de Grado Universitario en Historia";
			break;
			case 101: 
			carrera = "Profesorado de Grado Universitario en Lengua y Cultura Inglesas";
			break;
			case 102: 
			carrera = "Profesorado de Grado Universitario en Lengua y Literatura";
			break;
			case 103: 
			carrera = "Profesorado de Grado Universitario en Lengua y Literatura Francesas";
			break;
			case 104: 
			carrera = "Profesorado de Grado Universitario en Portugués";
			break;
			case 105: 
			carrera = "Tecnicatura Universitaria de Francés";
			break;
			case 106: 
			carrera = "Tecnicatura Universitaria en Cartografía, Sistemas de Información Geográfica y Teledetección";
			break;
			case 107: 
			carrera = "Traductorado Público Inglés - Español";
			break;
			case 108: 
			carrera = "Arquitectura";
			break;
			case 109: 
			carrera = "Ingeniería Civil";
			break;
			case 110: 
			carrera = "Ingeniería de Petróleos";
			break;
			case 111: 
			carrera = "Ingeniería en Mecatrónica";
			break;
			case 112: 
			carrera = "Ingeniería Industrial";
			break;
			case 113: 
			carrera = "Licenciatura en Ciencias de la Computación";
			break;
			case 114: 
			carrera = "Odontología";
			break;
			case 115: 
			carrera = "Tecnicatura Universitaria en Asistencia Odontológica";
			break;
			case 116: 
			carrera = "Tecnicatura Universitaria en Prótesis Dental";
			break;
			case 117: 
			carrera = "Ingeniería en Telecomunicaciones";
			break;
			case 118: 
			carrera = "Ingeniería Mecánica";
			break;
			case 119: 
			carrera = "Ingeniería Nuclear";
			break;
			case 120: 
			carrera = "Licenciatura en Física";
			break;
			case 121: 
			carrera = "Tecnicatura en Higiene y Seguridad en el Trabajo";
			break;
			case 122: 
			carrera = "Tecnicatura Universitaria en Electricidad y Sistemas de Control Industriales";
			break;
			case 123: 
			carrera = "Tecnicatura Universitaria en Gestión de Empresas";
			break;
			case 124: 
			carrera = "Tecnicatura Universitaria en Instalaciones Industriales y Mantenimiento";
			break;
			case 125: 
			carrera = "Tecnicatura Universitaria en Logística y Transporte";
			break;
			case 126: 
			carrera = "Tecnicatura Universitaria en Marketing";
			break;
			case 127: 
			carrera = "Tecnicatura Universitaria en Producción Industrial Automatizada";
			break;
			case 128: 
			carrera = "Tecnicatura Universitaria en Redes y Telecomunicaciones";
			break;
			case 129: 
			carrera = "Licenciatura en Seguridad Pública";
			break;
			case 130: 
			carrera = "Tecnicatura Universitaria en Seguridad Penitenciaria";
			break;
			case 131: 
			carrera = "Tecnicatura Universitaria en Seguridad Pública";
			break;
		}
		return carrera;
	}

	$(".facultad_numero").each(function(){
		facultad_sin_editar = parseInt($(this).text());
		facultad_editada = deco_facultad(facultad_sin_editar);
		console.log("FACULTAD: "+facultad_editada);
		$(this).empty();
		$(this).text(facultad_editada);
	});

	$(".carrera_numero").each(function(){
		carrera_sin_editar = parseInt($(this).text());
		carrera_editada = deco_carrera(carrera_sin_editar);
		console.log("CARRERA: "+carrera_editada);
		$(this).empty();
		$(this).text(carrera_editada);
	});

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

	var jerarquia = <?php echo json_encode($jerarquia) ?>;
	console.log(jerarquia);
	
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



	$(".editar-colaborador").click(function(){
		var elemento = $(this);
		var id_buscar = $(this).attr("id");
		id_buscar = id_buscar.replace("colaborador-editar-","");
		id_buscar = parseInt(id_buscar);
		console.log(id_buscar);
		muestraModal(id_buscar);
    });

    $(".editar-becario").click(function(){
		var elemento = $(this);
		var id_buscar = $(this).attr("id");
		id_buscar = id_buscar.replace("becario-editar-","");
		id_buscar = parseInt(id_buscar);
		console.log(id_buscar);
		muestraModal2(id_buscar);

    });



	$(".eliminar-colaborador").click(function(){
		var elemento = $(this);
		var id_buscar = $(this).attr("id");
		id_buscar = id_buscar.replace("colaborador-eliminar-","");
		id_buscar = parseInt(id_buscar);
		console.log(id_buscar);
		muestraModalConfirmacion(id_buscar);
	});

	$(".eliminar-becario").click(function(){
		var elemento = $(this);
		var id_buscar = $(this).attr("id");
		id_buscar = id_buscar.replace("becario-eliminar-","");
		id_buscar = parseInt(id_buscar);
		console.log(id_buscar);
		muestraModalConfirmacion2(id_buscar);
	});


	function enviardatos(parametro){
		var nombre_editar = $("#NombreEditar").val();
		var apellido_editar = $("#ApellidoEditar").val();
		var email_editar = $("#EmailEditar").val();
		var telefono_editar = $("#TelefonoEditar").val();
		var id_editar = parametro;
		$.ajax({
			url: "editar_user",
			type: "post",
			data: {
				nombre: nombre_editar,
				apellido: apellido_editar,
				email: email_editar,
				telefono: telefono_editar,
				id: id_editar
			}
		}).done(function(){
			var busqueda = "#colaborador-editar-"+parametro;
			var tds = $(busqueda).parent().parent().find("td");
			$(tds[0]).text(nombre_editar+" "+apellido_editar);
			$(tds[1]).text(email_editar);
			$(tds[2]).text(telefono_editar);
			$("#boxes").find(".close").click();
		});
	};

	$("#boxes").find(".close").click(function (e) {  
		e.preventDefault();  
		$("#mask").fadeOut(1000);      
		$("#mask").fadeTo("slow",0.8);   
		$("#dialog").fadeOut(1000, function(){
			$("#mask, .window").hide(); 
			$("#boxes #dialog").css("display","none"); 
		});
		$("#dialog").fadeTo("slow",1);  

	});      

	function muestraModal(parametro) {
		$("#boxes #dialog").css("display","block");

		var contentString2 = '<div id="content">'+
		'<div id="contenedor-marcador">'+
		'<div class="control-group form-group">'+
		'<h1>Editar Usuario</h1><br>'+
		'<div class="controls">'+

		'<label>Nombre:</label>'+
		'<span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
		'<input type="text" class="form-control" id="NombreEditar" placeholder="Introduzca su Nombre" required data-validation-required-message="Por favor introduzca su Nombre.">'+
		'</span><br>'+

		'<label>Apellido:</label>'+
		'<span id="alertLastName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
		'<input type="text" class="form-control" id="ApellidoEditar" placeholder="Introduzca su Apellido" required data-validation-required-message="Por favor introduzca su Apellido.">'+
		'</span><br>'+

		'<label>E-Mail:</label>'+
		'<span id="alertEmail" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
		'<input type="text" class="form-control" id="EmailEditar" placeholder="Introduzca su E-Mail" required data-validation-required-message="Por favor introduzca su E-Mail.">'+
		'</span><br>'+

		'<label>Teléfono:</label>'+
		'<span id="alertTelefono" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
		'<input type="text" class="form-control" id="TelefonoEditar" placeholder="Introduzca su Teléfono" required data-validation-required-message="Por favor introduzca su Teléfono.">'+
		'</span><br>'+

		'<button type="button" id="btnModificarModal" class="btn btn-primary boton-modificar-modal" onclick="enviardatos('+parametro+');">Actualizar</button>'

		'</div>'+
		'</div>'+
		'</div>'; 

		var maskHeight = $(document).height();  
		var maskWidth = $(window).width();  
        //Set height and width to mask to fill up the whole screen  
        $("#mask").css({"width":maskWidth,"height":maskHeight});  
        //transition effect      
        $("#mask").fadeIn(1000);      
        $("#mask").fadeTo("slow",0.8);   
        $("#dialog").fadeIn(1000);
        $("#dialog").fadeTo("slow",1);  

        //Get the window height and width  
        var winH = $(window).height();  
        var winW = $(window).width();  
        var close =$("#boxes #dialog .close").clone();
        $("#boxes #dialog").empty();
        $("#boxes #dialog").append(contentString2);
        $("#boxes #dialog").prepend(close);

        $("#boxes").find(".close").click(function (e) {  
        	e.preventDefault();  
        	$("#mask").fadeOut(1000);      
        	$("#mask").fadeTo("slow",0.8);   
        	$("#dialog").fadeOut(1000, function(){
        		$("#mask, .window").hide(); 
        		$("#boxes #dialog").css("display","none"); 
        	});
        	$("#dialog").fadeTo("slow",1);  

        });      

        $("#mask").click(function () {  
        	$("#boxes").find(".close").click();
        });    

        for (var j = 0; j < jerarquia.cantidad; j++) {
        	if(jerarquia[j].id_user==parametro){
        		$("#NombreEditar").val(jerarquia[j].nombre_user);
        		$("#ApellidoEditar").val(jerarquia[j].apellido_user);
        		$("#EmailEditar").val(jerarquia[j].email_user);
        		$("#TelefonoEditar").val(jerarquia[j].telefono_user);
        	}
        }
    }


    function muestraModal2(parametro) {
		$("#boxes #dialog").css("display","block");

		var contentString2 = '<div id="content">'+
		'<div id="contenedor-marcador">'+
		'<div class="control-group form-group">'+
		'<h1>Editar Becario</h1><br>'+
		'<div class="controls">'+

		'<label>Nombre:</label>'+
		'<span id="alertName2" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
		'<input type="text" class="form-control" id="NombreEditar2" placeholder="Introduzca su Nombre" required data-validation-required-message="Por favor introduzca su Nombre.">'+
		'</span><br>'+

		'<label>Apellido:</label>'+
		'<span id="alertLastName2" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
		'<input type="text" class="form-control" id="ApellidoEditar2" placeholder="Introduzca su Apellido" required data-validation-required-message="Por favor introduzca su Apellido.">'+
		'</span><br>'+

		'<label>DNI:</label>'+
		'<span id="alertDNI2" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
		'<input type="text" class="form-control" id="DNIEditar2" placeholder="Introduzca su DNI" required data-validation-required-message="Por favor introduzca su DNI.">'+
		'</span><br>'+

		'<label>Teléfono:</label>'+
		'<span id="alertTelefono2" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
		'<input type="text" class="form-control" id="TelefonoEditar2" placeholder="Introduzca su Teléfono" required data-validation-required-message="Por favor introduzca su Teléfono.">'+
		'</span><br>'+

		'<button type="button" id="btnModificarModal" class="btn btn-primary boton-modificar-modal" onclick="enviardatos('+parametro+');">Actualizar</button>'

		'</div>'+
		'</div>'+
		'</div>'; 

		var maskHeight = $(document).height();  
		var maskWidth = $(window).width();  
        //Set height and width to mask to fill up the whole screen  
        $("#mask").css({"width":maskWidth,"height":maskHeight});  
        //transition effect      
        $("#mask").fadeIn(1000);      
        $("#mask").fadeTo("slow",0.8);   
        $("#dialog").fadeIn(1000);
        $("#dialog").fadeTo("slow",1);  

        //Get the window height and width  
        var winH = $(window).height();  
        var winW = $(window).width();  
        var close =$("#boxes #dialog .close").clone();
        $("#boxes #dialog").empty();
        $("#boxes #dialog").append(contentString2);
        $("#boxes #dialog").prepend(close);

        $("#boxes").find(".close").click(function (e) {  
        	e.preventDefault();  
        	$("#mask").fadeOut(1000);      
        	$("#mask").fadeTo("slow",0.8);   
        	$("#dialog").fadeOut(1000, function(){
        		$("#mask, .window").hide(); 
        		$("#boxes #dialog").css("display","none"); 
        	});
        	$("#dialog").fadeTo("slow",1);  

        });      

        $("#mask").click(function () {  
        	$("#boxes").find(".close").click();
        });    

        for (var j = 0; j < jerarquia.cantidad; j++) {
        	if(jerarquia[j].id_user==parametro){
        		$("#NombreEditar").val(jerarquia[j].nombre_user);
        		$("#ApellidoEditar").val(jerarquia[j].apellido_user);
        		$("#EmailEditar").val(jerarquia[j].email_user);
        		$("#TelefonoEditar").val(jerarquia[j].telefono_user);
        	}
        }
    }


    function cerrarModal(){
    	$("#boxes").find(".close").click();
    }

    function eliminarUsuario(parametro){
    	var id_editar = parametro;
    	$.ajax({
    		url: "eliminar_user",
    		type: "post",
    		data: {
    			id: id_editar
    		}
    	}).done(function(){
    		var busqueda = "#colaborador-editar-"+parametro;
    		var trs = $(busqueda).parent().parent().remove();
    		$("#boxes").find(".close").click();
    	});
    }

    function muestraModalConfirmacion(parametro) {
    	$("#boxes #dialog").css("display","block");

    	var contentString2 = '<div id="content">'+
    	'<div id="contenedor-marcador">'+
    	'<div class="control-group form-group">'+
    	'<h1>¿Desea eliminar este usuario?</h1><br>'+
    	'<div class="controls">'+

    	'<button type="button" id="btnModalSi" class="btn btn-primary boton-modal-si" onclick="eliminarUsuario('+parametro+');">Si</button>'+
    	'<button type="button" id="btnModalNo" class="btn btn-primary boton-modal-no" onclick="cerrarModal();">No</button>'

    	'</div>'+
    	'</div>'+
    	'</div>'; 

    	var maskHeight = $(document).height();  
    	var maskWidth = $(window).width();  
        //Set height and width to mask to fill up the whole screen  
        $("#mask").css({"width":maskWidth,"height":maskHeight});  
        //transition effect      
        $("#mask").fadeIn(1000);      
        $("#mask").fadeTo("slow",0.8);   
        $("#dialog").fadeIn(1000);
        $("#dialog").fadeTo("slow",1);  

        //Get the window height and width  
        var winH = $(window).height();  
        var winW = $(window).width();  
        var close =$("#boxes #dialog .close").clone();
        $("#boxes #dialog").empty();
        $("#boxes #dialog").append(contentString2);
        $("#boxes #dialog").prepend(close);

        $("#boxes").find(".close").click(function (e) {  
        	e.preventDefault();  
        	$("#mask").fadeOut(1000);      
        	$("#mask").fadeTo("slow",0.8);   
        	$("#dialog").fadeOut(1000, function(){
        		$("#mask, .window").hide(); 
        		$("#boxes #dialog").css("display","none"); 
        	});
        	$("#dialog").fadeTo("slow",1);  

        });      

        $("#mask").click(function () {  
        	$("#boxes").find(".close").click();
        });    

        for (var j = 0; j < jerarquia.cantidad; j++) {
        	if(jerarquia[j].id_user==parametro){
        		$("#NombreEditar").val(jerarquia[j].nombre_user);
        		$("#ApellidoEditar").val(jerarquia[j].apellido_user);
        		$("#EmailEditar").val(jerarquia[j].email_user);
        		$("#TelefonoEditar").val(jerarquia[j].telefono_user);
        	}
        }
    }

</script>