<div id="crear-usuario" class="background-opciones contenedor-crear-usuario">
	<div class="tab-horizontal">
		<!-- Nav tabs -->
		<div class="col-lg-12"><ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#section1" aria-controls="section1" role="tab" data-toggle="tab">Crear Colaborador</a></li>
			<li role="presentation"><a href="#section2" aria-controls="section2" role="tab" data-toggle="tab">Crear Becario</a></li>
			<li role="presentation"><a href="#section3" aria-controls="section3" role="tab" data-toggle="tab">Crear Admin</a></li>
			<li role="presentation"><a href="#section4" aria-controls="section4" role="tab" data-toggle="tab">Editar Colaborador</a></li>
			<li role="presentation"><a href="#section5" aria-controls="section5" role="tab" data-toggle="tab">Editar Becario</a></li>
		</ul></div>
		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="section1">
				<div class="contenedor-titulo">
					<div class="col-lg-12"><h1>Crear Colaborador</h1></div>
				</div>
				<div class="col-lg-12"><div class="separador"></div></div>
				<div class="contenedor-registro-colaboradores"><form role="form" autocomplete="off">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="nombre-1">Nombre</label>
							<input type="nombre" name="nombre-1" class="form-control" id="nombre-1" autocomplete="off">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="nombre-1">Apellido</label>
							<input type="nombre" name="apellido-1" class="form-control" id="apellido-1" autocomplete="off">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="email-1">Email</label>
							<input type="nombre" name="email-1" class="form-control" id="email-1" autocomplete="off">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="telefono-1">Teléfono</label>
							<input type="nombre" name="telefono-1" class="form-control" id="telefono-1" autocomplete="off">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="password-1">Contraseña</label>
							<input type="password" name="password-1" class="form-control" id="password-1" autocomplete="new-password">
						</div>

					</div>

					<div class="col-lg-12">
						<button type="button" id="boton-enviar-1" class="btn btn-default boton-enviar" style="float: left">Crear</button>
						<div class="contenedor-mensaje-colaborador" style="float: left">
							<div class="padre-mensaje-colaborador">
								<p>Colaborador creado exitosamente</p>
							</div>
						</div>
					</div>
				</form></div>
			</div>
			<div role="tabpanel" class="tab-pane" id="section2">
				<div class="contenedor-titulo">
					<div class="col-lg-12"><h1>Crear Becario</h1></div>
				</div>
				<div class="col-lg-12"><div class="separador"></div></div>
				<div class="contenedor-registro-becarios"><form role="form">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="nombre-2">Nombre</label>
							<input type="nombre" name="nombre-2" class="form-control" id="nombre-2">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="apellido-2">Apellido</label>
							<input type="nombre" name="apellido-2" class="form-control" id="apellido-2">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="telefono-2">Telefono</label>
							<input type="nombre" name="telefono-2" class="form-control" id="telefono-2">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="dni-2">DNI</label>
							<input type="nombre" name="dni-2" class="form-control" id="dni-2">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="facultad-2">Facultad</label>
							<select name="facultad-2" class="form-control" id="universidad-2" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled></option>
								<option value="1">Facultad de Artes y Diseño</option>
								<option value="2">Facultad de Ciencias Agrarias</option>
								<option value="3">Facultad de Ciencias Aplicadas a la Industria</option>
								<option value="4">Facultad de Ciencias Económicas</option>
								<option value="5">Facultad de Ciencias Exactas y Naturales</option>
								<option value="6">Facultad de Ciencias Médicas</option>
								<option value="7">Facultad de Ciencias Políticas y Sociales</option>
								<option value="8">Facultad de Derecho</option>
								<option value="9">Facultad de Educación</option>
								<option value="10">Facultad de Filosofía y Letras</option>
								<option value="11">Facultad de Ingeniería</option>
								<option value="12">Facultad de Odontología</option>
								<option value="13">Instituto Balseiro</option>
								<option value="14">Instituto Tecnológico Universitario</option>
								<option value="15">Instituto Universitario de Seguridad Pública</option>
							</select>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group carreras-becario">
							<label for="carrera-2">Carreras</label>
							<select name="carrera-2" class="form-control" id="carrera-2" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carreras</option>
							</select>

							<select name="carrera-2" class="form-control" id="carrera-becario-1" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="1">Ciclo de Formación Básica en Artes Visuales</option>
								<option value="2">Ciclo de Prof. de Grado Univ. de Diseño</option>
								<option value="3">Ciclo de Prof. de Grado Univ. en Música</option>
								<option value="4">Diseño Escenográfico</option>
								<option value="5">Diseño Gráfico</option>
								<option value="6">Diseño Industrial</option>
								<option value="7">Licenciatura en Arte Dramático</option>
								<option value="8">Licenciatura en Artes Plásticas</option>
								<option value="9">Licenciatura en Canto</option>
								<option value="10">Licenciatura en Cerámica Artística</option>
								<option value="11">Licenciatura en Cerámica Industrial</option>
								<option value="12">Licenciatura en Composición Musical</option>
								<option value="13">Licenciatura en Dirección Coral</option>
								<option value="14">Licenciatura en Historia de las Artes Plásticas</option>
								<option value="15">Licenciatura en Instrumento</option>
								<option value="16">Licenciatura en Música Popular</option>
								<option value="17">Licenciatura en Órgano</option>
								<option value="18">Licenciatura en Piano o Guitarra</option>
								<option value="19">Profesorado de Grado Universitario de Teorías Musicales</option>
								<option value="20">Profesorado de Grado Universitario en Artes Visuales</option>
								<option value="21">Profesorado de Grado Universitario en Cerámica Artística</option>
								<option value="22">Profesorado de Grado Universitario en Historia del Arte</option>
								<option value="23">Profesorado de Grado Universitario en Música</option>
								<option value="24">Profesorado de Grado Universitario en Teatro</option>
							</select>

							<select class="form-control" id="carrera-becario-2" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="25">Bromatología</option>
								<option value="26">Ingeniería Agronómica</option>
								<option value="27">Ingeniería en Recursos Naturales Renovables</option>
								<option value="28">Licenciatura en Bromatología</option>
								<option value="29">Tecnicatura Universitaria en Enología y Viticultura</option>
								<option value="30">Tecnicatura Universitaria en Producción Animal de Zonas Áridas</option>
							</select>

							<select class="form-control" id="carrera-becario-3" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="31">Bromatología</option>
								<option value="32">Ciclo de Lic. en Enología</option>
								<option value="33">Ingeniería en Industrias de la Alimentación</option>
								<option value="34">Ingeniería Química</option>
								<option value="35">Profesorado de Grado Universitario en Química</option>
								<option value="36">Técnico Universitario en Enología y Viticultura</option>
							</select>

							<select class="form-control" id="carrera-becario-4" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="37">Ciclo de Formación Básica en Ciencias Económicas</option>
								<option value="38">Ciclo de Lic. en Gestión de Negocios Regionales</option>
								<option value="39">Contador Público Nacional</option>
								<option value="40">Licenciatura en Administración</option>
								<option value="41">Licenciatura en Economía</option>
								<option value="42">Licenciatura en Logística</option>
							</select>

							<select class="form-control" id="carrera-becario-5" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="43">Ciclo General de Conocimientos Básicos en Ciencias Exactas y Naturales</option>
								<option value="44">Licenciatura en Ciencias Básicas con Orientación en Biología</option>
								<option value="45">Licenciatura en Ciencias Básicas con Orientación en Física</option>
								<option value="46">Licenciatura en Ciencias Básicas con Orientación en Geología</option>
								<option value="47">Licenciatura en Ciencias Básicas con Orientación en Matemática</option>
								<option value="48">Licenciatura en Ciencias Básicas con Orientación en Química</option>
								<option value="49">Profesorado de Grado Universitario en Ciencias Básicas Orientación en Biología</option>
								<option value="50">Profesorado de Grado Universitario en Ciencias Básicas Orientación en Física</option>
								<option value="51">Profesorado de Grado Universitario en Ciencias Básicas Orientación en Matemática</option>
								<option value="52">Profesorado de Grado Universitario en Ciencias Básicas Orientación en Química</option>
							</select>

							<select class="form-control" id="carrera-becario-6" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="53">Ciclo de Lic. en Enfermería</option>
								<option value="54">Ciclo de Licenciatura en Higiene y Seguridad en el Trabajo</option>
								<option value="55">Enfermería Universitaria</option>
								<option value="56">Medicina</option>
								<option value="57">Tecnicatura Universitaria en Anestesia</option>
								<option value="58">Tecnicatura Universitaria en Diagnóstico por Imágenes</option>
								<option value="59">Tecnicatura Universitaria en Esterilización</option>
								<option value="60">Tecnicatura Universitaria en Hemoterapia</option>
								<option value="61">Tecnicatura Universitaria en Laboratorio</option>
								<option value="62">Tecnicatura Universitaria en Promoción de la Salud</option>
								<option value="63">Tecnicatura Universitaria en Quirófano</option>
							</select>

							<select class="form-control" id="carrera-becario-7" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="64">Ciclo de Profesorado para Graduados de la carrera de Ciencia Política y Administración Pública</option>
								<option value="65">Ciclo de Profesorado para Graduados de la carrera de Comunicación Social</option>
								<option value="66">Ciclo de Profesorado para Graduados de la carrera de Sociología</option>
								<option value="67">Ciclo de Profesorado para Graduados de la carrera de Trabajo Social</option>
								<option value="68">Licenciatura en Ciencia Política y Administración Pública</option>
								<option value="69">Licenciatura en Comunicación Social</option>
								<option value="70">Licenciatura en Sociología</option>
								<option value="71">Licenciatura en Trabajo Social</option>
								<option value="72">Tecnicatura en Gestión de Políticas Públicas</option>
								<option value="73">Tecnicatura Universitaria en Producción Audiovisual</option>
							</select>

							<select class="form-control" id="carrera-becario-8" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="74">Abogacía</option>
							</select>

							<select class="form-control" id="carrera-becario-9" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="75">Ciclo de Licenciatura en Psicomotricidad Educativa</option>
								<option value="76">Ciclo de Prof. de Grado Univ. en Informática</option>
								<option value="77">Licenciatura en Terapia del Lenguaje</option>
								<option value="78">Profesorado Universitario de Educación Inicial</option>
								<option value="79">Profesorado Universitario de Educación para Personas Sordas</option>
								<option value="80">Profesorado Universitario de Educación Primaria</option>
								<option value="81">Profesorado Universitario de Pedagogía Terapéutica en Discapacidad Intelectual con Orientación en Discapacidad Motora</option>
								<option value="82">Profesorado Universitario de Pedagogía Terapéutica en Discapacidad Visual</option>
								<option value="83">Tecnicatura en Cuidados Infantiles</option>
								<option value="84">Tecnicatura en Interpretación de Lengua de Señas</option>
								<option value="85">Tecnicatura Universitaria en Educación Social</option>
							</select>

							<select class="form-control" id="carrera-becario-10" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="86">Ciclo de Licenciatura en Literatura Infantil</option>
								<option value="87">Ciclo de Profesorado para Profesionales Universitarios</option>
								<option value="88">Geógrafo Profesional</option>
								<option value="89">Licenciatura en Ciencias de la Educación</option>
								<option value="90">Licenciatura en Filología Inglesa</option>
								<option value="91">Licenciatura en Filosofía</option>
								<option value="92">Licenciatura en Francés</option>
								<option value="93">Licenciatura en Geografía</option>
								<option value="94">Licenciatura en Historia</option>
								<option value="95">Licenciatura en Letras</option>
								<option value="96">Licenciatura en Turismo</option>
								<option value="97">Profesorado de Grado Universitario en Ciencias de la Educación</option>
								<option value="98">Profesorado de Grado Universitario en Filosofía</option>
								<option value="99">Profesorado de Grado Universitario en Geografía</option>
								<option value="100">Profesorado de Grado Universitario en Historia</option>
								<option value="101">Profesorado de Grado Universitario en Lengua y Cultura Inglesas</option>
								<option value="102">Profesorado de Grado Universitario en Lengua y Literatura</option>
								<option value="103">Profesorado de Grado Universitario en Lengua y Literatura Francesas</option>
								<option value="104">Profesorado de Grado Universitario en Portugués</option>
								<option value="105">Tecnicatura Universitaria de Francés</option>
								<option value="106">Tecnicatura Universitaria en Cartografía, Sistemas de Información Geográfica y Teledetección</option>
								<option value="107">Traductorado Público Inglés - Español</option>
							</select>

							<select class="form-control" id="carrera-becario-11" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="108">Arquitectura</option>
								<option value="109">Ingeniería Civil</option>
								<option value="110">Ingeniería de Petróleos</option>
								<option value="111">Ingeniería en Mecatrónica</option>
								<option value="112">Ingeniería Industrial</option>
								<option value="113">Licenciatura en Ciencias de la Computación</option>
							</select>

							<select class="form-control" id="carrera-becario-12" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="114">Odontología</option>
								<option value="115">Tecnicatura Universitaria en Asistencia Odontológica</option>
								<option value="116">Tecnicatura Universitaria en Prótesis Dental</option>
							</select>

							<select class="form-control" id="carrera-becario-13" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="117">Ingeniería en Telecomunicaciones</option>
								<option value="118">Ingeniería Mecánica</option>
								<option value="119">Ingeniería Nuclear</option>
								<option value="120">Licenciatura en Física</option>
							</select>


							<select class="form-control" id="carrera-becario-14" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="121">Tecnicatura en Higiene y Seguridad en el Trabajo</option>
								<option value="122">Tecnicatura Universitaria en Electricidad y Sistemas de Control Industriales</option>
								<option value="123">Tecnicatura Universitaria en Gestión de Empresas</option>
								<option value="124">Tecnicatura Universitaria en Instalaciones Industriales y Mantenimiento</option>
								<option value="125">Tecnicatura Universitaria en Logística y Transporte</option>
								<option value="126">Tecnicatura Universitaria en Marketing</option>
								<option value="127">Tecnicatura Universitaria en Producción Industrial Automatizada</option>
								<option value="128">Tecnicatura Universitaria en Redes y Telecomunicaciones</option>
							</select>

							<select class="form-control" id="carrera-becario-15" style="border: 0px; background-color: rgb(245, 247, 248); box-shadow: none;">
								<option selected disabled>Carrera</option>
								<option value="129">Licenciatura en Seguridad Pública</option>
								<option value="130">Tecnicatura Universitaria en Seguridad Penitenciaria</option>
								<option value="131">Tecnicatura Universitaria en Seguridad Pública</option>
							</select>

						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="date-2">Fecha Ingreso</label>
							<input name="date-2" class="form-control" placeholder="Fecha de Ingreso" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="fecha-2" step="1" max="2020-12-31">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="edad-2">Edad</label>
							<input type="nombre" name="edad-2" class="form-control" id="edad-2">
						</div>
					</div>

					<div class="col-lg-12">
						<button type="button" id="boton-enviar-2" class="btn btn-default boton-enviar">Crear</button>
						<div class="contenedor-mensaje-becario" style="float: left">
							<div class="padre-mensaje-becario">
								<p>Becario creado exitosamente</p>
							</div>
						</div>
					</div>
				</form></div>
			</div>
			<div role="tabpanel" class="tab-pane" id="section3">
				<div class="contenedor-titulo">
					<div class="col-lg-12"><h1>Crear Admin</h1></div>
				</div>
				<div class="col-lg-12"><div class="separador"></div></div>
				<div class="contenedor-registro-admin"><form role="form">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="nombre-3">Nombre</label>
							<input type="nombre" name="nombre-3" class="form-control" id="nombre-3" autocomplete="off">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="nombre-3">Apellido</label>
							<input type="nombre" name="apellido-3" class="form-control" id="apellido-3" autocomplete="off">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="email-3">Email</label>
							<input type="nombre" name="email-3" class="form-control" id="email-3" autocomplete="off">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="telefono-3">Teléfono</label>
							<input type="nombre" name="telefono-3" class="form-control" id="telefono-3" autocomplete="off">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="password-3">Contraseña</label>
							<input type="password" name="password-3" class="form-control" id="password-3" autocomplete="new-password">
						</div>

					</div>

					<div class="col-lg-12">
						<button type="button" id="boton-enviar-3" class="btn btn-default boton-enviar">Crear</button>
						<div class="contenedor-mensaje-admin" style="float: left">
							<div class="padre-mensaje-admin">
								<p>Administrador creado exitosamente</p>
							</div>
						</div>	
					</div>
				</form></div>
			</div>


			<div role="tabpanel" class="tab-pane" id="section4">
				<div class="contenedor-titulo">
					<div class="col-lg-12"><h1>Editar Colaborador</h1></div>
				</div>
				<div class="col-lg-12"><div class="separador"></div></div>
				<div class="col-lg-12 tabla-max-width">	
					<table class="table table-hover table-condensed">
						<tr>
							<th style="text-align: center;">NOMBRE Y APELLIDO</th>
							<th style="text-align: center;">EMAIL</th>
							<th style="text-align: center;">TELEFONO</th>
							<th style="text-align: center;">EDITAR</th>
							<th style="text-align: center;">ELIMINAR</th>
						</tr>
						<?php 
						for ($i=0; $i < $jerarquia["cantidad"]; $i++) {
							if($jerarquia[$i]["jerarquia_user"]==1){	
								echo "<tr>";
								echo '<td style="text-align: center;">'.$jerarquia[$i]["nombre_user"]." ";
								echo $jerarquia[$i]["apellido_user"]."</td>";
								echo '<td style="text-align: center;">'.$jerarquia[$i]["email_user"]."</td>";
								echo '<td style="text-align: center;">'.$jerarquia[$i]["telefono_user"]."</td>";
								echo '<td style="text-align: center;"><a class="editar-colaborador" href="#" id="colaborador-editar-'.$jerarquia[$i]["id_user"].'"><span class="icon-pencil"></span></a></td>';
								echo '<td style="text-align: center;"><a class="eliminar-colaborador" href="#" id="colaborador-eliminar-'.$jerarquia[$i]["id_user"].'"><span class="icon-cross"></span></td>';
								echo "</tr>";
							} 
						}
						?>
					</table>
				</div>
			</div>


			<div role="tabpanel" class="tab-pane" id="section5">
				<div class="contenedor-titulo">
					<div class="col-lg-12"><h1>Editar Becario</h1></div>
				</div>
				<div class="col-lg-12"><div class="separador"></div></div>
				<div class="col-lg-12 tabla-max-width">	
					<table class="table table-hover table-condensed">
						<tr>
							<th style="text-align: center;">NOMBRE Y APELLIDO</th>
							<th style="text-align: center;">TELEFONO</th>
							<th style="text-align: center;">DNI</th>
							<th style="text-align: center;">FECHA INGRESO</th>
							<th style="text-align: center;">EDAD</th>
							<th style="text-align: center;">FACULTAD</th>
							<th style="text-align: center;">CARRERA</th>
							<th style="text-align: center;">EDITAR</th>
							<th style="text-align: center;">ELIMINAR</th>
						</tr>
						<?php 
						for ($i=0; $i < $jerarquia["cantidad"]; $i++) {
							if($jerarquia[$i]["jerarquia_user"]==3){
								$originalDate = $jerarquia[$i]["fecha_egreso_user"];
								$newDate = date("d-m-Y", strtotime($originalDate));	
								echo "<tr>";
								echo '<td style="text-align: center;">'.$jerarquia[$i]["nombre_user"]." ";
								echo $jerarquia[$i]["apellido_user"]."</td>";
								echo '<td style="text-align: center;">'.$jerarquia[$i]["telefono_user"]."</td>";
								echo '<td style="text-align: center;">'.$jerarquia[$i]["dni_user"]."</td>";
								echo '<td style="text-align: center;">'.$newDate."</td>";
								echo '<td style="text-align: center;">'.$jerarquia[$i]["edad_user"]."</td>";
								echo '<td class="facultad_numero" style="text-align: center;">'.$jerarquia[$i]["facultad_user"]."</td>";
								echo '<td class="carrera_numero" style="text-align: center;">'.$jerarquia[$i]["carrera_user"]."</td>";
								echo '<td style="text-align: center;"><a class="editar-becario" href="#" id="becario-editar-'.$jerarquia[$i]["id_user"].'"><span class="icon-pencil"></span></a></td>';
								echo '<td style="text-align: center;"><a class="eliminar-becario" href="#" id="becario-eliminar-'.$jerarquia[$i]["id_user"].'"><span class="icon-cross"></span></td>';
								echo "</tr>";
							} 
						}
						?>
					</table>
				</div>
			</div>

		</div>	
	</div>
</div>