<?php  
if ($this->session->has_userdata('newsession')){
  if ($this->session->newsession==="yes"){

    function deco_carrera($carrera){
      switch($carrera){
        case 1: 
        $carrera = "Ciclo de Formación Básica en Artes Visuales";
        break;
        case 2: 
        $carrera = "Ciclo de Prof. de Grado Univ. de Diseño";
        break;
        case 3: 
        $carrera = "Ciclo de Prof. de Grado Univ. en Música";
        break;
        case 4: 
   /*   carrera = "Diseño Escenográfico";
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
      break;*/
    }
    return $carrera;
  }


  function deco_egreso($es_egresado){
    switch($es_egresado){
      case 0: 
      $es_egresado = "No";
      break;
      case 1: 
      $es_egresado = "Si";
      break;

    }
    return $es_egresado;
  }

  function deco_facultad($facultad){
    switch($facultad){
      case 1: 
      $facultad = "Facultad de Artes y Diseño";
      break;
      case 2: 
      $facultad = "Facultad de Ciencias Agrarias";
      break;
      case 3: 
      $facultad = "Facultad de Ciencias Aplicadas a la Industria";
      break;
     /* case 4: 
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
      break;*/
    }
    return $facultad;
  }

date_default_timezone_set('America/Argentina'); //puedes cambiar Guayaquil por tu Ciudad
setlocale(LC_TIME, 'spanish');
$fecha=strftime("%A, %d de %B de %Y");



  $carreras = deco_carrera($carrera);
  $egresado = deco_egreso($es_egresado);
  $facul = deco_facultad($facultad);
  ?>




  <!-- Contenido de la página -->
  <div class="profile">
    <div class="container">
      <!-- Encabezado de página / Breadcrumb -->
      <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <a href="#" id="cerrar-perfil"><img src="<?php echo base_url('assets/img/cruz.png') ?>" alt=""></a>
      </div>
      <div class="col-md-12">
        <h1 class="page-header">Perfil de <?php echo $nombre_completo ?>
          <small>editando datos</small>
        </h1>
      </div>
    </div>
    <!-- Fin Encabezado de página / Breadcrumb -->
    <!-- Contact Form -->
    <!-- Campos del formulario de contacto con validación de campos-->
    <div class="row">
      <!-- Columna de la izquierda -->
      <div class="col-md-3">
        <div class="col-md-12 first" align="left">
          <img class="photo img-responsive img-portfolio img-hover" src="<?php echo base_url($foto);?>">
        </div>
        <div class="contenedor-informacion-perfil">
          <form class="camimg" action="<?php echo base_url("") . "Cargar_Imagen/proceso"; ?>" method="POST" enctype="multipart/form-data">
            <!-- Mi código de agregado de imágenes -->
            <div class="inputModificado">
              <div class="botonInputFileModificado">
                <input style="display: none" name="imagen" type="file" class="inputImagenOculto" id="archivo_oculto1" name="archivo_oculto1"/>
                <div class="examinar">CAMBIAR IMAGEN</div>    
              </div>    
            </div>

            <!-- Fin de mi código -->  


            <!--input class="testo2" name="imagen" type="file" maxlength="150"-->
            <br>
            <input class="changeimg" type="submit" value="Cambiar imagen" name="enviar" style="cursor: pointer">

          </form>
          <div class="col-md-12 second">
            <p class="name text-left"><strong><?php echo $nombre_completo ?></strong></p>
            <p class="job text-left"><strong>Profesión: </strong><?php echo $profesion; ?></p>
          </div>

          <div class="col-md-10 third">
            <!-- Barra vertical de opciones del perfil de usuairo -->
            <br >
            <ul class="list-group list-primary">
              <a href="#" class="list-group-item myprof">Mi perfil</a>
              <a href="#" class="list-group-item editprof">Editar Perfil</a>
            </ul>
          </div>
        </div>
        <!-- Fin Barra vertical de opciones del perfil de usuario -->
      </div>
      <!-- Fin de Columna de la izquierda -->
      <!-- Parte central -->

      <div class="col-md-9 bio2">
        <div class="col-md-12" style="padding-left:0px;padding-right:0px;">
          <h3 style="text-align:left;padding-bottom: 10px;"><strong>Datos Académicos</strong></h3>
          <div class="col-md-12" style="background:#ecf0f1;">
            <p style="text-align: left; padding-top:10px"><strong>Facultad: </strong><?php echo $facul; ?></p>
            <p style="text-align: left; padding-top:10px"><strong>Carrera: </strong><?php echo $carreras; ?></p>
            <p style="text-align: left; padding-top:10px"><strong>Egreso: </strong><?php echo $egresado; ?></p>
            <p style="text-align: left; padding-top:10px"><strong>Fecha de Egreso: </strong><?php echo $fecha; ?></p>
          </div>
        </div>
      </div>




      <div class="col-md-9 bio">
        <div class="col-md-12" style="">
          <h3 style="text-align:left"><strong>Biografía</strong></h3>
        </div>
        <div class="col-md-12" style="background:#ecf0f1;">
          <p style="text-align: left; padding-top:10px"><?php echo $biografia; ?></p>
        </div>
      </div>  
      <!-- Fin del div de parte central -->
      <!-- Parte central -->
      <div class="col-md-9 formul">
        <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
          <h3 style="text-align: center">Mi perfil <p><small>Añade información personal para compartir tu perfil</small></p></h3>
        </div>
        <!-- Se inicia el form (ojo todos los elementos de formulario deben ir dentro de esta etiqueta-->
        <form name="modifyProfile" id="profileForm" novalidate>
          <!-- Inicio del div central parte de formulario información básica -->
          <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #f1f3f6; padding-bottom: 20px">
            <div class="col-md-8 col-md-offset-2">
             <div class="control-group form-group">
              <div class="controls">
               <br >
               <label>Nombre:</label>
               <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                <input type="text" class="form-control" id="txtName" placeholder="Introduzca su nombre" required data-validation-required-message="Por favor introduzca su nomnbre.">
              </span>
              <br >
              <label>Apellido:</label>
              <span id="alertSurname" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                <input type="text" class="form-control" id="txtSurname" placeholder="Introduzca sus apellidos" required data-validation-required-message="Por favor introduzca sus apellidos.">
              </span>
              <br >
              <label>E-Mail:</label>
              <span id="alertEmail" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                <input type="email" class="form-control" id="txtEmail" disabled>
              </span>
              <p class="help-block"></p>
              <br >
              <label>Teléfono:</label>
              <span id="alertPhone" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                <input type="number" class="form-control" id="txtPhone" placeholder="Introduzca su teléfono" required data-validation-required-message="Por favor introduzca su teléfono.">
              </span>
              <br >
              <label>D.N.I:</label>
              <span id="alertDni" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                <input type="number" class="form-control" id="txtDni" placeholder="Introduzca su D.N.I." required data-validation-required-message="Por favor introduzca su D.N.I.">
              </span>
              <br >
              <label>Fecha de nacimiento:</label>
              <span id="alertBday" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                <input type="date" class="form-control" id="txtBday" placeholder="Introduzca su fecha de nacimiento" required data-validation-required-message="Por favor introduzca su fecha de nacimiento.">
              </span>
              <br >
              <label>Contraseña:</label>
              <span id="alertPassword" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                <input type="password" class="form-control" id="txtPassword" placeholder="Introduzca su contraseña" required data-validation-required-message="Por favor introduzca su contraseña.">
              </span>
              <br >
              <label>Trabajo Actual:</label>
              <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
               <input type="text" class="form-control" id="txtQualification" placeholder="Introduzca su título" required data-validation-required-message="Por favor introduzca su título.">
             </span>
             <br >

             <label>¿Egresado?</label>
             <section>
              <div class="checkbox-2">
                <input type="checkbox" id="ejemplo-2" value="1" name="" />
                <label for="ejemplo-2"></label>
              </div>
            </section>
            <br>


            <label>Facultad</label>
            <section>
              <div class="form-group">
                <select class="form-control" id="universidad_modify" placeholder="Universidad">
                  <option selected disabled>Facultad</option>
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
            </section>
            <br>


            <div class="contenedor-selecciones">
              <div class="padre-selecciones">
                <label>Carrera</label>

                <section class="selecciones-modify seleccion-1">
                  <div class="form-group">
                    <select class="form-control" id="carreras-1" placeholder="Universidad">
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
                  </div>
                </section>

                <section class="selecciones-modify seleccion-2">
                  <div class="form-group">
                    <select class="form-control" id="carreras-2" placeholder="Universidad">
                      <option selected disabled>Carrera</option>
                      <option value="25">Bromatología</option>
                      <option value="26">Ingeniería Agronómica</option>
                      <option value="27">Ingeniería en Recursos Naturales Renovables</option>
                      <option value="28">Licenciatura en Bromatología</option>
                      <option value="29">Tecnicatura Universitaria en Enología y Viticultura</option>
                      <option value="30">Tecnicatura Universitaria en Producción Animal de Zonas Áridas</option>
                    </select>
                  </div>
                </section>

                <section class="selecciones-modify seleccion-3">
                  <div class="form-group">
                    <select class="form-control" id="carreras-3" placeholder="Universidad">
                      <option selected disabled>Carrera</option>
                      <option value="31">Bromatología</option>
                      <option value="32">Ciclo de Lic. en Enología</option>
                      <option value="33">Ingeniería en Industrias de la Alimentación</option>
                      <option value="34">Ingeniería Química</option>
                      <option value="35">Profesorado de Grado Universitario en Química</option>
                      <option value="36">Técnico Universitario en Enología y Viticultura</option>
                    </select>
                  </div>
                </section>

                <section class="selecciones-modify seleccion-4">
                  <div class="form-group">
                    <select class="form-control" id="carreras-4" placeholder="Universidad">
                      <option selected disabled>Carrera</option>
                      <option value="37">Ciclo de Formación Básica en Ciencias Económicas</option>
                      <option value="38">Ciclo de Lic. en Gestión de Negocios Regionales</option>
                      <option value="39">Contador Público Nacional</option>
                      <option value="40">Licenciatura en Administración</option>
                      <option value="41">Licenciatura en Economía</option>
                      <option value="42">Licenciatura en Logística</option>
                    </select>
                  </div>
                </section>

                <section class="selecciones-modify seleccion-5">
                  <div class="form-group">
                    <select class="form-control" id="carreras-5" placeholder="Universidad">
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
                  </div>
                </section>

                <section class="selecciones-modify seleccion-6">
                  <div class="form-group">
                    <select class="form-control" id="carreras-6" placeholder="Universidad">
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
                  </div>
                </section>

                <section class="selecciones-modify seleccion-7">
                  <div class="form-group">
                    <select class="form-control" id="carreras-7" placeholder="Universidad">
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
                  </div>
                </section>

                <section class="selecciones-modify seleccion-8">
                  <div class="form-group">
                    <select class="form-control" id="carreras-8" placeholder="Universidad">
                      <option selected disabled>Carrera</option>
                      <option value="74">Abogacía</option>
                    </select>
                  </div>
                </section>

                <section class="selecciones-modify seleccion-9">
                  <div class="form-group">
                    <select class="form-control" id="carreras-9" placeholder="Universidad">
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
                  </div>
                </section>

                <section class="selecciones-modify seleccion-10">
                  <div class="form-group">
                    <select class="form-control" id="carreras-10" placeholder="Universidad">
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
                  </div>
                </section>

                <section class="selecciones-modify seleccion-11">
                  <div class="form-group">
                    <select class="form-control" id="carreras-11" placeholder="Universidad">
                      <option selected disabled>Carrera</option>
                      <option value="108">Arquitectura</option>
                      <option value="109">Ingeniería Civil</option>
                      <option value="110">Ingeniería de Petróleos</option>
                      <option value="111">Ingeniería en Mecatrónica</option>
                      <option value="112">Ingeniería Industrial</option>
                      <option value="113">Licenciatura en Ciencias de la Computación</option>
                    </select>
                  </div>
                </section>

                <section class="selecciones-modify seleccion-12">
                  <div class="form-group">
                    <select class="form-control" id="carreras-12" placeholder="Universidad">
                      <option selected disabled>Carrera</option>
                      <option value="114">Odontología</option>
                      <option value="115">Tecnicatura Universitaria en Asistencia Odontológica</option>
                      <option value="116">Tecnicatura Universitaria en Prótesis Dental</option>
                    </select>
                  </div>
                </section>

                <section class="selecciones-modify seleccion-13">
                  <div class="form-group">
                    <select class="form-control" id="carreras-13" placeholder="Universidad">
                      <option selected disabled>Carrera</option>
                      <option value="117">Ingeniería en Telecomunicaciones</option>
                      <option value="118">Ingeniería Mecánica</option>
                      <option value="119">Ingeniería Nuclear</option>
                      <option value="120">Licenciatura en Física</option>
                    </select>
                  </div>
                </section>

                <section class="selecciones-modify seleccion-14">
                  <div class="form-group">
                    <select class="form-control" id="carreras-14" placeholder="Universidad">
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
                  </div>
                </section>

                <section class="selecciones-modify seleccion-15">
                  <div class="form-group">
                    <select class="form-control" id="carreras-15" placeholder="Universidad">
                      <option selected disabled>Carrera</option>
                      <option value="129">Licenciatura en Seguridad Pública</option>
                      <option value="130">Tecnicatura Universitaria en Seguridad Penitenciaria</option>
                      <option value="131">Tecnicatura Universitaria en Seguridad Pública</option>
                    </select>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
        <div class="control-group form-group padre-biografia">
          <div class="controls">
            <label>Biografía:</label>
            <span id="alertBiography" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
             <textarea rows="6" cols="30" class="form-control" id="txtBiography" required maxlength="999" style="resize:none" 
             data-validation-required-message="Por favor introduzca su biografía deseada."></textarea>
           </span>
           <br >
           <br >
         </div>
       </div>
     </div>

     <div class="col-md-8 col-md-offset-2 allFormButtons">
      <div class="centrar-botones">
        <div class="form-group">
          <button type="button" id="btnClean" class="btn btn-warning">Limpiar</button>
          <button type="button" id="btnEnviar" class="btn btn-primary boton-modificar">Actualizar</button>
        </div>
      </div>
    </div>

  </div>
  <!-- Fin del div central parte de formulario información básica -->
  <!-- Botones formulario -->

  <!-- Fin botones formulario -->
</div>
<!-- Fin Parte central - enlaces -->
</form> 
<!-- Fin del form -->
</div>  
<!-- Fin del div de parte central -->
</div>
<!-- Fin Campos del formulario de contacto con validación de campos -->
</div>
</div> 
</div>   <!-- Fin del div profile-->
<?php







}
}
?>