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
		console.log("CANT_ITEMS: "+cant_items);
		var aux_cant = cant_items;

		var cant_items_mostrados = 9;



		if(done==0){
			while(aux_cant>0){
				aux_cant-=cant_items_mostrados;
				cant_paginas++;
			}
			done=1;
		}
		
		console.log("CANT_PAGINAS: "+cant_paginas);
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

		console.log("INDICE: "+indice);
		if(indice==0){
			i = 0;
			if(cant_items_mostrados>cant_items){
				limite = cant_items;	
			}else{

				limite = cant_items_mostrados; 
			}
			console.log("LIMITE: "+limite);
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

		if(cant_paginas==1){
			$("#ultimo").find(".siguiente").addClass("boton-deshabilitado");
			$("#next").find(".siguiente").addClass("boton-deshabilitado");
			$("#last").find(".anterior").addClass("boton-deshabilitado");
			$("#primer-elemento").find(".anterior").addClass("boton-deshabilitado");
		}

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
		}else{
			if(cant_paginas==1){
				$("#ultimo").find(".siguiente").addClass("boton-deshabilitado");
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

	console.log(page_selected + " - " + cant_paginas);
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
		}else{
			if(cant_paginas==1){
				$("#ultimo").find(".siguiente").addClass("boton-deshabilitado");
				$("#next").find(".siguiente").addClass("boton-deshabilitado");
			}
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
		}else{
			if(page_selected==1){
				$("#primer-elemento").find(".anterior").addClass("boton-deshabilitado");

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

		var becario_buscar = $("#dni-buscar-becario").val();
		$(".padre-becario-asignado").animate({
			left: "-250px"
		});
		$.ajax({
			type: "POST",
			url: "buscar_becario",
			data: {
				dni: becario_buscar
			}
		}).done(function(json){
			var objeto = $.parseJSON(json);
			console.log(objeto);
			if(objeto.cantidad>0){
				$(".padre-contenedor-dni").animate({
					top: "-70px"
				},function(){
					$(".contenedor-no-dni").css("display","none");
				});
				var date = new Date(objeto.fecha_ingreso);
				var year = date.getFullYear();

				var month = (1 + date.getMonth()).toString();
				month = month.length > 1 ? month : '0' + month;

				var day = (1 +date.getDate()).toString();
				day = day.length > 1 ? day : '0' + day;

				objeto.fecha_ingreso = day + '-' + month + '-' + year;

				objeto.carrera_user = deco_carrera(parseInt(objeto.carrera_user));

				$(".nombre-becario").find("span").text(objeto.nombre_user);
				$(".apellido-becario").find("span").text(objeto.apellido_user);
				$(".dni-becario").find("span").text(objeto.dni_user);
				$(".edad-becario").find("span").text(objeto.edad_user);
				$(".carrera-becario").find("span").text(objeto.carrera_user);
				$(".anio-ingreso-becario").find("span").text(objeto.fecha_ingreso);

				$(".contenedor-info-becario").animate({
					top: "340px"
				},function(){
					$(".monto-buscar").animate({
						top: "340px"
					},function(){
						$(".texto-monto").animate({
							top: "340px"
						},function(){	
							$(".botones-monto").animate({
								top: "340px"
							},function(){
								$(".botones-confirmacion-final").animate({
									top: "340px"
								},function(){
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
							});
						});
					});
				});
				
			}else{
				$(".contenedor-info-becario").animate({
					top: "340px"
				},function(){
					$(".monto-buscar").animate({
						top: "340px"
					},function(){
						$(".texto-monto").animate({
							top: "340px"
						},function(){	
							$(".botones-monto").animate({
								top: "340px"
							},function(){
								$(".botones-confirmacion-final").animate({
									top: "340px"
								},function(){
									$(".contenedor-no-dni").css("display","inline-block");
									$(".padre-contenedor-dni").animate({
										top: "0px"
									});
								});
							});
						});
					});
				});
				
			}

			
			


		});
	});
	/* FIN BUSCAR BECARIO */

	/* DINERO A DERIVAR */
	var testo;
	$("#dinero-derivar").keyup(function(e){
		if ( (e.key=="0") || (e.key=="1") || (e.key=="2") || (e.key=="3") || (e.key=="4") || (e.key=="5") || (e.key=="6") || (e.key=="7") || (e.key=="8") || (e.key=="9") || (e.key==".") || (e.key==",") ){
			$(".boton-confirmar").removeAttr('disabled');
		} 
	});
	/* FIN A DERIVAR */

	$(".boton-confirmar").click(function(){
		var dinero_becario_final = parseFloat($("#dinero-derivar").val()).toFixed(2);
		var total_dinero = parseFloat($($(".cantidad-total-numero")[0]).text()).toFixed(2);
		console.log(total_dinero);

		if(dinero_becario_final<=total_dinero){
			$(".padre-mensaje-error").animate({
				top: "-70px"
			});
			$(".boton-final").removeAttr('disabled');	
			$(".monto_a_derivar").text(dinero_becario_final);		
		}else{
			$(".padre-mensaje-error").animate({
				top: "0px"
			});
		}
	});

	$(".boton-final").click(function(){
		var dni_becario_final = $(".dni-becario-span").text();
		var dinero_becario_final = $("#dinero-derivar").val();

		var dinero_final = parseFloat($(".cantidad-total-numero").text()).toFixed(2);
		var dinero_derivar = parseFloat($(".monto_a_derivar").text()).toFixed(2);
		dinero_final -= dinero_derivar; 
		dinero_final = dinero_final.toFixed(2);

		$.ajax({
			type: "POST",
			url: "asignar_beca",
			data: {
				dni: dni_becario_final,
				dinero: dinero_becario_final,
				dinero_total: dinero_final
			}
		}).done(function(json){
			
			$(".cantidad-total-numero").text(dinero_final);
			$(".padre-becario-asignado").animate({
				left: "0px"
			});
		});
	});

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
		var universidad_becario = $("#universidad-2").val();
		$(".carreras-becario").find("select").each(function(){
			$(this).css("display","none");
			$(this).val(null);
		});
		var becario_clase = "#carrera-becario-"+universidad_becario;
		$(becario_clase).css("display","inline-block");

	});

	$("#boton-enviar-2").click(function(){
		var nombre_becario = $("#nombre-2").val();
		var apellido_becario = $("#apellido-2").val();
		var dni_becario = $("#dni-2").val();
		var telefono_becario = $("#telefono-2").val();
		var facultad_becario = $("#universidad-2").val();
		var clase_becario = "#carrera-becario-"+facultad_becario;
		var carrera_becario = $(clase_becario).val();
		var fecha_ingreso = $("#fecha-2").val();
		var edad_becario = $("#edad-2").val();

		$.ajax({
			url: "load_becario",
			type: "post",
			data: {
				nombre: nombre_becario,
				apellido: apellido_becario,
				dni: dni_becario,
				telefono: telefono_becario,
				facultad: facultad_becario,
				carrera: carrera_becario,
				fecha: fecha_ingreso,
				edad: edad_becario
			}
		}).done(function(json){
			$(".padre-mensaje-becario").animate({
				left: "0px"
			});
			var objeto = $.parseJSON(json);

			var elemento;
			$(".editar-becario").each(function(){
				elemento = $(this);
			});
			var id_becario = "becario-editar-"+objeto.id_user;
			elemento.attr("id",id_becario);

			objeto.facultad_user = deco_facultad(parseInt(objeto.facultad_user));
			objeto.carrera_user = deco_carrera(parseInt(objeto.carrera_user));

			var date = new Date(objeto.fecha_egreso_user);
			var year = date.getFullYear();

			var month = (1 + date.getMonth()).toString();
			month = month.length > 1 ? month : '0' + month;

			var day = (1 +date.getDate()).toString();
			day = day.length > 1 ? day : '0' + day;

			objeto.fecha_egreso_user = day + '-' + month + '-' + year;

			$("#section5").find(".tabla-max-width").find("tbody").append("<tr>"+
				"<td style='text-align: center;'>"+objeto.nombre_user+" "+objeto.apellido_user+"</td>"+
				"<td style='text-align: center;'>"+objeto.telefono_user+"</td>"+
				"<td style='text-align: center;'>"+objeto.dni_user+"</td>"+
				"<td style='text-align: center;'>"+objeto.fecha_egreso_user+"</td>"+
				"<td style='text-align: center;'>"+objeto.edad_user+"</td>"+
				"<td style='text-align: center;'>"+objeto.facultad_user+"</td>"+
				"<td style='text-align: center;'>"+objeto.carrera_user+"</td>"+
				"<td style='text-align: center;''><a class='editar-becario' href='#' id='becario-editar-"+objeto.id_user+"'><span class='icon-pencil'></span></a></td>"+
				"<td style='text-align: center;''><a class='eliminar-becario' href='#' id='becario-eliminar-"+objeto.id_user+"'><span class='icon-cross'></span></a></td>"+
				"</tr>")
		});
	});



	$("#boton-enviar-3").click(function(){
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
		});
	});



	$(".editar-colaborador").click(function(){
		var elemento = $(this);
		var id_buscar = $(this).attr("id");
		id_buscar = id_buscar.replace("colaborador-editar-","");
		id_buscar = parseInt(id_buscar);
		muestraModal(id_buscar);
	});

	$(".editar-becario").click(function(){
		var elemento = $(this);
		var id_buscar = $(this).attr("id");
		id_buscar = id_buscar.replace("becario-editar-","");
		id_buscar = parseInt(id_buscar);
		muestraModal2(id_buscar);

	});



	$(".eliminar-colaborador").click(function(){
		var elemento = $(this);
		var id_buscar = $(this).attr("id");
		id_buscar = id_buscar.replace("colaborador-eliminar-","");
		id_buscar = parseInt(id_buscar);
		muestraModalConfirmacion(id_buscar);
	});

	$(".eliminar-becario").click(function(){
		var elemento = $(this);
		var id_buscar = $(this).attr("id");
		id_buscar = id_buscar.replace("becario-eliminar-","");
		id_buscar = parseInt(id_buscar);
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

	function enviardatos2(parametro){
		var nombre_editar = $("#NombreEditar2").val();
		var apellido_editar = $("#ApellidoEditar2").val();
		var dni_editar = $("#DNIEditar2").val();
		var edad_editar = $("#EdadEditar2").val();
		var fecha_editar = $("#FechaEditar2").val();
		var telefono_editar = $("#TelefonoEditar2").val();
		var facultad_editar = $("#universidad-editar-2").val();
		var test_carrera = "#carrera-editar-becario-"+facultad_editar;
		var carrera_editar = $(test_carrera).val();
		var id_editar = parametro;	
		
		$.ajax({
			url: "editar_becario",
			type: "post",
			data: {
				nombre: nombre_editar,
				apellido: apellido_editar,
				telefono: telefono_editar,
				dni: dni_editar,
				fecha: fecha_editar,
				edad: edad_editar,
				facultad: facultad_editar,
				carrera: carrera_editar,
				id: id_editar
			}
		}).done(function(){
			var busqueda = "#becario-editar-"+parametro;
			var tds = $(busqueda).parent().parent().find("td");
			$(tds[0]).text(nombre_editar+" "+apellido_editar);
			$(tds[1]).text(telefono_editar);
			$(tds[2]).text(dni_editar);
			$(tds[3]).text(fecha_editar);
			$(tds[4]).text(edad_editar);
			facultad_editar = deco_facultad(parseInt(facultad_editar));
			carrera_editar = deco_carrera(parseInt(carrera_editar));
			$(tds[5]).text(facultad_editar);
			$(tds[6]).text(carrera_editar);
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
		$("#boxes").find(".close").css("display","block");

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

        	$("#boxes").find(".close").fadeOut(1000, function(){
        		$("#boxes").find(".close").css("display","none"); 
        	});
        	$("#boxes").find(".close").fadeTo("slow",1); 

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
    	$("#boxes .close").css("display","block"); 

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

    	'<label>Teléfono:</label>'+
    	'<span id="alertTelefono2" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
    	'<input type="text" class="form-control" id="TelefonoEditar2" placeholder="Introduzca su Teléfono" required data-validation-required-message="Por favor introduzca su Teléfono.">'+
    	'</span><br>'+

    	'<label>DNI:</label>'+
    	'<span id="alertDNI2" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
    	'<input type="text" class="form-control" id="DNIEditar2" placeholder="Introduzca su DNI" required data-validation-required-message="Por favor introduzca su DNI.">'+
    	'</span><br>'+

    	'<label>EDAD:</label>'+
    	'<span id="alertEdad2" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
    	'<input type="text" class="form-control" id="EdadEditar2" placeholder="Introduzca su Edad" required data-validation-required-message="Por favor introduzca su Edad.">'+
    	'</span><br>'+

    	'<label>FECHA DE INGRESO:</label>'+
    	'<span id="alertFecha2" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
    	'<input name="FechaEditar2" class="form-control" placeholder="Fecha de Ingreso" type="text" onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')" id="FechaEditar2" step="1" max="2020-12-31">'+
    	'</span><br>'+


    	'<label>Facultad:</label>'+
    	'<span id="FacultadEditar2" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
    	'<select name="facultad-2" class="form-control" id="universidad-editar-2">'+
    	'<option selected disabled></option>'+
    	'<option value="1">Facultad de Artes y Diseño</option>'+
    	'<option value="2">Facultad de Ciencias Agrarias</option>'+
    	'<option value="3">Facultad de Ciencias Aplicadas a la Industria</option>'+
    	'<option value="4">Facultad de Ciencias Económicas</option>'+
    	'<option value="5">Facultad de Ciencias Exactas y Naturales</option>'+
    	'<option value="6">Facultad de Ciencias Médicas</option>'+
    	'<option value="7">Facultad de Ciencias Políticas y Sociales</option>'+
    	'<option value="8">Facultad de Derecho</option>'+
    	'<option value="9">Facultad de Educación</option>'+
    	'<option value="10">Facultad de Filosofía y Letras</option>'+
    	'<option value="11">Facultad de Ingeniería</option>'+
    	'<option value="12">Facultad de Odontología</option>'+
    	'<option value="13">Instituto Balseiro</option>'+
    	'<option value="14">Instituto Tecnológico Universitario</option>'+
    	'<option value="15">Instituto Universitario de Seguridad Pública</option>'+
    	'</select>'+
    	'</span><br>'+

    	'<label>Carrera:</label>'+
    	'<span id="CarreraEditar2" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">'+
    	
    	'<select name="carrera-2" class="form-control class-carrera-editar" id="carrera-Editar">'+
    	'<option selected disabled>Carreras</option>'+
    	'</select>'+

    	'<select name="carrera-2" class="form-control class-carrera-editar" id="carrera-editar-becario-1" >'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="1">Ciclo de Formación Básica en Artes Visuales</option>'+
    	'<option value="2">Ciclo de Prof. de Grado Univ. de Diseño</option>'+
    	'<option value="3">Ciclo de Prof. de Grado Univ. en Música</option>'+
    	'<option value="4">Diseño Escenográfico</option>'+
    	'<option value="5">Diseño Gráfico</option>'+
    	'<option value="6">Diseño Industrial</option>'+
    	'<option value="7">Licenciatura en Arte Dramático</option>'+
    	'<option value="8">Licenciatura en Artes Plásticas</option>'+
    	'<option value="9">Licenciatura en Canto</option>'+
    	'<option value="10">Licenciatura en Cerámica Artística</option>'+
    	'<option value="11">Licenciatura en Cerámica Industrial</option>'+
    	'<option value="12">Licenciatura en Composición Musical</option>'+
    	'<option value="13">Licenciatura en Dirección Coral</option>'+
    	'<option value="14">Licenciatura en Historia de las Artes Plásticas</option>'+
    	'<option value="15">Licenciatura en Instrumento</option>'+
    	'<option value="16">Licenciatura en Música Popular</option>'+
    	'<option value="17">Licenciatura en Órgano</option>'+
    	'<option value="18">Licenciatura en Piano o Guitarra</option>'+
    	'<option value="19">Profesorado de Grado Universitario de Teorías Musicales</option>'+
    	'<option value="20">Profesorado de Grado Universitario en Artes Visuales</option>'+
    	'<option value="21">Profesorado de Grado Universitario en Cerámica Artística</option>'+
    	'<option value="22">Profesorado de Grado Universitario en Historia del Arte</option>'+
    	'<option value="23">Profesorado de Grado Universitario en Música</option>'+
    	'<option value="24">Profesorado de Grado Universitario en Teatro</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-2" >'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="25">Bromatología</option>'+
    	'<option value="26">Ingeniería Agronómica</option>'+
    	'<option value="27">Ingeniería en Recursos Naturales Renovables</option>'+
    	'<option value="28">Licenciatura en Bromatología</option>'+
    	'<option value="29">Tecnicatura Universitaria en Enología y Viticultura</option>'+
    	'<option value="30">Tecnicatura Universitaria en Producción Animal de Zonas Áridas</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-3" >'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="31">Bromatología</option>'+
    	'<option value="32">Ciclo de Lic. en Enología</option>'+
    	'<option value="33">Ingeniería en Industrias de la Alimentación</option>'+
    	'<option value="34">Ingeniería Química</option>'+
    	'<option value="35">Profesorado de Grado Universitario en Química</option>'+
    	'<option value="36">Técnico Universitario en Enología y Viticultura</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-4">'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="37">Ciclo de Formación Básica en Ciencias Económicas</option>'+
    	'<option value="38">Ciclo de Lic. en Gestión de Negocios Regionales</option>'+
    	'<option value="39">Contador Público Nacional</option>'+
    	'<option value="40">Licenciatura en Administración</option>'+
    	'<option value="41">Licenciatura en Economía</option>'+
    	'<option value="42">Licenciatura en Logística</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-5" >'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="43">Ciclo General de Conocimientos Básicos en Ciencias Exactas y Naturales</option>'+
    	'<option value="44">Licenciatura en Ciencias Básicas con Orientación en Biología</option>'+
    	'<option value="45">Licenciatura en Ciencias Básicas con Orientación en Física</option>'+
    	'<option value="46">Licenciatura en Ciencias Básicas con Orientación en Geología</option>'+
    	'<option value="47">Licenciatura en Ciencias Básicas con Orientación en Matemática</option>'+
    	'<option value="48">Licenciatura en Ciencias Básicas con Orientación en Química</option>'+
    	'<option value="49">Profesorado de Grado Universitario en Ciencias Básicas Orientación en Biología</option>'+
    	'<option value="50">Profesorado de Grado Universitario en Ciencias Básicas Orientación en Física</option>'+
    	'<option value="51">Profesorado de Grado Universitario en Ciencias Básicas Orientación en Matemática</option>'+
    	'<option value="52">Profesorado de Grado Universitario en Ciencias Básicas Orientación en Química</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-6">'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="53">Ciclo de Lic. en Enfermería</option>'+
    	'<option value="54">Ciclo de Licenciatura en Higiene y Seguridad en el Trabajo</option>'+
    	'<option value="55">Enfermería Universitaria</option>'+
    	'<option value="56">Medicina</option>'+
    	'<option value="57">Tecnicatura Universitaria en Anestesia</option>'+
    	'<option value="58">Tecnicatura Universitaria en Diagnóstico por Imágenes</option>'+
    	'<option value="59">Tecnicatura Universitaria en Esterilización</option>'+
    	'<option value="60">Tecnicatura Universitaria en Hemoterapia</option>'+
    	'<option value="61">Tecnicatura Universitaria en Laboratorio</option>'+
    	'<option value="62">Tecnicatura Universitaria en Promoción de la Salud</option>'+
    	'<option value="63">Tecnicatura Universitaria en Quirófano</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-7" >'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="64">Ciclo de Profesorado para Graduados de la carrera de Ciencia Política y Administración Pública</option>'+
    	'<option value="65">Ciclo de Profesorado para Graduados de la carrera de Comunicación Social</option>'+
    	'<option value="66">Ciclo de Profesorado para Graduados de la carrera de Sociología</option>'+
    	'<option value="67">Ciclo de Profesorado para Graduados de la carrera de Trabajo Social</option>'+
    	'<option value="68">Licenciatura en Ciencia Política y Administración Pública</option>'+
    	'<option value="69">Licenciatura en Comunicación Social</option>'+
    	'<option value="70">Licenciatura en Sociología</option>'+
    	'<option value="71">Licenciatura en Trabajo Social</option>'+
    	'<option value="72">Tecnicatura en Gestión de Políticas Públicas</option>'+
    	'<option value="73">Tecnicatura Universitaria en Producción Audiovisual</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-8">'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="74">Abogacía</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-9" >'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="75">Ciclo de Licenciatura en Psicomotricidad Educativa</option>'+
    	'<option value="76">Ciclo de Prof. de Grado Univ. en Informática</option>'+
    	'<option value="77">Licenciatura en Terapia del Lenguaje</option>'+
    	'<option value="78">Profesorado Universitario de Educación Inicial</option>'+
    	'<option value="79">Profesorado Universitario de Educación para Personas Sordas</option>'+
    	'<option value="80">Profesorado Universitario de Educación Primaria</option>'+
    	'<option value="81">Profesorado Universitario de Pedagogía Terapéutica en Discapacidad Intelectual con Orientación en Discapacidad Motora</option>'+
    	'<option value="82">Profesorado Universitario de Pedagogía Terapéutica en Discapacidad Visual</option>'+
    	'<option value="83">Tecnicatura en Cuidados Infantiles</option>'+
    	'<option value="84">Tecnicatura en Interpretación de Lengua de Señas</option>'+
    	'<option value="85">Tecnicatura Universitaria en Educación Social</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-10" >'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="86">Ciclo de Licenciatura en Literatura Infantil</option>'+
    	'<option value="87">Ciclo de Profesorado para Profesionales Universitarios</option>'+
    	'<option value="88">Geógrafo Profesional</option>'+
    	'<option value="89">Licenciatura en Ciencias de la Educación</option>'+
    	'<option value="90">Licenciatura en Filología Inglesa</option>'+
    	'<option value="91">Licenciatura en Filosofía</option>'+
    	'<option value="92">Licenciatura en Francés</option>'+
    	'<option value="93">Licenciatura en Geografía</option>'+
    	'<option value="94">Licenciatura en Historia</option>'+
    	'<option value="95">Licenciatura en Letras</option>'+
    	'<option value="96">Licenciatura en Turismo</option>'+
    	'<option value="97">Profesorado de Grado Universitario en Ciencias de la Educación</option>'+
    	'<option value="98">Profesorado de Grado Universitario en Filosofía</option>'+
    	'<option value="99">Profesorado de Grado Universitario en Geografía</option>'+
    	'<option value="100">Profesorado de Grado Universitario en Historia</option>'+
    	'<option value="101">Profesorado de Grado Universitario en Lengua y Cultura Inglesas</option>'+
    	'<option value="102">Profesorado de Grado Universitario en Lengua y Literatura</option>'+
    	'<option value="103">Profesorado de Grado Universitario en Lengua y Literatura Francesas</option>'+
    	'<option value="104">Profesorado de Grado Universitario en Portugués</option>'+
    	'<option value="105">Tecnicatura Universitaria de Francés</option>'+
    	'<option value="106">Tecnicatura Universitaria en Cartografía, Sistemas de Información Geográfica y Teledetección</option>'+
    	'<option value="107">Traductorado Público Inglés - Español</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-11" >'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="108">Arquitectura</option>'+
    	'<option value="109">Ingeniería Civil</option>'+
    	'<option value="110">Ingeniería de Petróleos</option>'+
    	'<option value="111">Ingeniería en Mecatrónica</option>'+
    	'<option value="112">Ingeniería Industrial</option>'+
    	'<option value="113">Licenciatura en Ciencias de la Computación</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-12" >'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="114">Odontología</option>'+
    	'<option value="115">Tecnicatura Universitaria en Asistencia Odontológica</option>'+
    	'<option value="116">Tecnicatura Universitaria en Prótesis Dental</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-13" >'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="117">Ingeniería en Telecomunicaciones</option>'+
    	'<option value="118">Ingeniería Mecánica</option>'+
    	'<option value="119">Ingeniería Nuclear</option>'+
    	'<option value="120">Licenciatura en Física</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-14" >'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="121">Tecnicatura en Higiene y Seguridad en el Trabajo</option>'+
    	'<option value="122">Tecnicatura Universitaria en Electricidad y Sistemas de Control Industriales</option>'+
    	'<option value="123">Tecnicatura Universitaria en Gestión de Empresas</option>'+
    	'<option value="124">Tecnicatura Universitaria en Instalaciones Industriales y Mantenimiento</option>'+
    	'<option value="125">Tecnicatura Universitaria en Logística y Transporte</option>'+
    	'<option value="126">Tecnicatura Universitaria en Marketing</option>'+
    	'<option value="127">Tecnicatura Universitaria en Producción Industrial Automatizada</option>'+
    	'<option value="128">Tecnicatura Universitaria en Redes y Telecomunicaciones</option>'+
    	'</select>'+

    	'<select class="form-control class-carrera-editar" id="carrera-editar-becario-15" >'+
    	'<option selected disabled>Carrera</option>'+
    	'<option value="129">Licenciatura en Seguridad Pública</option>'+
    	'<option value="130">Tecnicatura Universitaria en Seguridad Penitenciaria</option>'+
    	'<option value="131">Tecnicatura Universitaria en Seguridad Pública</option>'+
    	'</select>'+

    	'</span><br><br>'+

    	'<button type="button" id="btnModificarModal2" class="btn btn-primary boton-modificar-modal" onclick="enviardatos2('+parametro+');">Actualizar</button>'+

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

        	$("#boxes").find(".close").fadeOut(1000, function(){
        		$("#boxes .close").css("display","none"); 
        	});
        	$("#boxes").find(".close").fadeTo("slow",1);  

        });      

        $("#mask").click(function () {  
        	$("#boxes").find(".close").click();
        });    

        for (var j = 0; j < jerarquia.cantidad; j++) {
        	if(jerarquia[j].id_user==parametro){
        		$("#NombreEditar2").val(jerarquia[j].nombre_user);
        		$("#ApellidoEditar2").val(jerarquia[j].apellido_user);
        		$("#TelefonoEditar2").val(jerarquia[j].telefono_user);
        		$("#DNIEditar2").val(jerarquia[j].dni_user);
        		$("#universidad-editar-2").val(jerarquia[j].facultad_user);
        		$("#carrera-Editar").css("display","none");
        		var test = "#carrera-editar-becario-"+jerarquia[j].facultad_user;
        		$(test).css("display","inline-block");
        		$(test).val(jerarquia[j].carrera_user);
        	}
        }

        $("#universidad-editar-2").change(function(){
        	var test = "#carrera-editar-becario-"+$("#universidad-editar-2").val();
        	$(".class-carrera-editar").each(function(){
        		$(this).css("display","none");
        	});
        	$(test).css("display","inline-block");
        });
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

    function eliminarUsuario2(parametro){
    	var id_editar = parametro;
    	$.ajax({
    		url: "eliminar_user",
    		type: "post",
    		data: {
    			id: id_editar
    		}
    	}).done(function(){
    		var busqueda = "#becario-editar-"+parametro;
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

    function muestraModalConfirmacion2(parametro) {
    	$("#boxes #dialog").css("display","block");

    	var contentString2 = '<div id="content">'+
    	'<div id="contenedor-marcador">'+
    	'<div class="control-group form-group">'+
    	'<h1>¿Desea eliminar este usuario?</h1><br>'+
    	'<div class="controls">'+

    	'<button type="button" id="btnModalSi" class="btn btn-primary boton-modal-si" onclick="eliminarUsuario2('+parametro+');">Si</button>'+
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