var objeto_total;
var contentString2;
var email2;
var email;

function initMap() {

  var latitud5 = info_perfil.latitud;
  var longitud5 = info_perfil.longitud;
  var uluru = {lat: -34.9950075, lng: -67.5100458};
  var uluru2 = {lat: -35.9950075, lng: -68.5100458};

  var uluru = {lat: -23.582723, lng: -23.5132007};
  
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 3,
    center: uluru,
    mapTypeControl: 0,
    scaleControl: 1,
    streetViewControl: 0,
    rotateControl: 0,
    fullscreenControl: 0,
    mapTypeControlOptions: {
      mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
      'styled_map']
    }
  }); 

  map.setMapTypeId('roadmap');
  map.setOptions({
    'styles': [
    {
      featureType: "all",
      stylers: [
      {  }
      ]
    },{
      featureType: "landscape.natural",
      stylers: [
      { saturation: 100 }
      ]
    },{
      featureType: "landscape",
      stylers: [
      { hue: "#D8B384" },
      { gamma: 0.60 }
      ]
    },{
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [
      { hue: "#00ffee" },
      { saturation: 100 }
      ]
    },{
      featureType: "poi.business",
      elementType: "labels",
      stylers: [
      { visibility: "off" }
      ]
    },{
      featureType: 'water',
      elementType: 'geometry.fill',
      stylers: [{color: '#92CAE7'}]
    },
    {
      featureType: 'administrative',
      elementType: "geometry.fill",
      stylers: [{visibility: "off"}]
    }
    ]
  });

  for(var x=0;x<marcadores.length;x++){
    var posicion = "{lat: "+marcadores[x].lat_user+", lng: "+marcadores[x].long_user+"}";
    var nombre=marcadores[x].nombre;
    var apellido=marcadores[x].apellido;
    var email=marcadores[x].email;
    var profesion=marcadores[x].profesion;
    var facultad=marcadores[x].facultad;
    var carrera=marcadores[x].carrera;
    var es_egresado=marcadores[x].fecha;
    var fecha_egreso=marcadores[x].es_egresado;

    var biografia=marcadores[x].biografia;
    var longitud=50;

    if(marcadores[x].biografia==""){
      var texto = "";
    }else{
      if(biografia.length > longitud){
        var texto=(biografia.substring(0,longitud));
        texto=texto+"...";
      }
    }

    var latitud_marcador = parseFloat(marcadores[x].latitud);
    var longitud_marcador = parseFloat(marcadores[x].longitud);
    if(marcadores[x].foto==""){
      var test_foto = "uploads/perfiles/uncuyo-perfil-default.gif";
    }else{
      var test_img = marcadores[x].foto;
    }
    var contentString = '<div id="content">'+
    '<div id="contenedor-marcador">'+
    '<div id="padre-imagen">'+
    '<div id="contenedor-imagen">'+
    '<img src="'+test_img+'" />'+
    '</div></div>'+ // Cierre contenedor-imagen y padre-imagen
    '<div id="padre-texto">'+
    '<div id="contenedor-texto">'+
    '<h1>'+nombre+' '+apellido+'</h1>'+
    '<h2>'+profesion+'</h2>'+
    '<h3>'+texto+'</h3>'+
    '<div id="contenedor-leer"><div><a class="moreless" href="#" onclick=\'muestraModal('+x+')\' style="text-decoration: none;">Ver Más</a></div></div>'+
    '</div></div>'+ // Cierre contenedor-texto y padre-texto
    '</div></div>'; // Cierre contenedor-marcador y content
    add_marker_delay(latitud_marcador, longitud_marcador, x*300, map, contentString);
  }

  var uluru4 = {lat: latitud5, lng: longitud5};
  if(document.getElementById('mapa_modificar')){
    var map5 = new google.maps.Map(document.getElementById('mapa_modificar'), {
      zoom: 2,
      center: {lat: 16.2591717, lng: -5.5345314},
      mapTypeControl: 0,
      scaleControl: 1,
      streetViewControl: 0,
      rotateControl: 0,
      fullscreenControl: 0,
      mapTypeControlOptions: {
        mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
        'styled_map']
      }
    }); 

    map5.setMapTypeId('roadmap');
    map5.setOptions({
      'styles': [
      {
        featureType: "all",
        stylers: [
        {  }
        ]
      },{
        featureType: "landscape.natural",
        stylers: [
        { saturation: 100 }
        ]
      },{
        featureType: "landscape",
        stylers: [
        { hue: "#D8B384" },
        { gamma: 0.60 }
        ]
      },{
        featureType: "road.arterial",
        elementType: "geometry",
        stylers: [
        { hue: "#00ffee" },
        { saturation: 100 }
        ]
      },{
        featureType: "poi.business",
        elementType: "labels",
        stylers: [
        { visibility: "off" }
        ]
      },{
        featureType: 'water',
        elementType: 'geometry.fill',
        stylers: [{color: '#92CAE7'}]
      },
      {
        featureType: 'administrative',
        elementType: "geometry.fill",
        stylers: [{visibility: "off"}]
      }
      ]
    });


    latitud5 = parseFloat(latitud5);
    longitud5 = parseFloat(longitud5);
    var uluru4 = {lat: latitud5, lng: longitud5};
    marker = new google.maps.Marker({
      position: uluru4,
      title:"Marcador",
      map: map5
    });
    var aux = marker;
    marker.setMap(map5);

    var click_registro2;
    google.maps.event.addListener(map5, "click", function (event) {
      if(marker!=null) {
        marker.setMap(null);
        aux.setMap(null);
      }
      latitude = event.latLng.lat();
      longitude = event.latLng.lng();
      click_registro2 = {lat: latitude, lng: longitude}
      marker = new google.maps.Marker({
        position: click_registro2,
        map: map5,
        title: 'Ubicación'
      });
    });
  }  

  // GEOPOSICION

  var latitud_geoposicion="";
  var longitud_geoposicion="";

  if (navigator.geolocation){
    navigator.geolocation.getCurrentPosition(function(posicion){
      console.log("FUNCIÓN ÉXITO");
      latitud_geoposicion = posicion.coords.latitude;
      longitud_geoposicion = posicion.coords.longitude;

      console.log("LATITUD: "+latitud_geoposicion);
      console.log("LONGITUD: "+longitud_geoposicion);

      console.log("ENTRO MARKER");
      click_registro = {lat: latitud_geoposicion, lng: longitud_geoposicion}
      marker = new google.maps.Marker({
        position: click_registro,
        map: map_register,
        title: 'Ubicación'
      });
      $("#siguiente-fin").removeAttr("disabled");
    }, function(){
      console.log("FUNCIÓN ERROR");
    }, function(posicion){
      console.log("OPCIONES");
      console.log(posicion.coords.latitude);
      console.log(posicion.coords.longitude);
    });
  }
  else
  {
    console.log("NO SOPORTA");
  }

  /* Mapa Registro */
  uluru2 = {lat: -32.5758512, lng: -69.590762};
  if(document.getElementById('mapa_registro')){
    map_register = new google.maps.Map(document.getElementById('mapa_registro'), {
      zoom: 5,
      center: uluru2,
      mapTypeControl: 0,
      scaleControl: 0,
      streetViewControl: 0,
      rotateControl: 0,
      fullscreenControl: 1,
      mapTypeControlOptions: {
        mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
        'styled_map']
      }
    });

    console.log(map_register);

    
    map_register.setMapTypeId('roadmap');
    map_register.setOptions({
      'styles': [
      {
        featureType: "all",
        stylers: [
        {  }
        ]
      },{
        featureType: "landscape.natural",
        stylers: [
        { saturation: 100 }
        ]
      },{
        featureType: "landscape",
        stylers: [
        { hue: "#D8B384" },
        { gamma: 0.60 }
        ]
      },{
        featureType: "road.arterial",
        elementType: "geometry",
        stylers: [
        { hue: "#00ffee" },
        { saturation: 100 }
        ]
      },{
        featureType: "poi.business",
        elementType: "labels",
        stylers: [
        { visibility: "off" }
        ]
      },{
        featureType: 'water',
        elementType: 'geometry.fill',
        stylers: [{color: '#92CAE7'}]
      },
      {
        featureType: 'administrative',
        elementType: "geometry.fill",
        stylers: [{visibility: "off"}]
      }
      ]
    });
    var click_registro;


    google.maps.event.addListener(map_register, "click", function (event) {
      if ( (latitud_geoposicion!="") && (longitud_geoposicion!="") ){
        console.log("ELIMINA MARKER");
        if(marker!=null) {
          marker.setMap(null);
        }
      }
      latitude = event.latLng.lat();
      longitude = event.latLng.lng();
      click_registro = {lat: latitude, lng: longitude}
      marker = new google.maps.Marker({
        position: click_registro,
        map: map_register,
        title: 'Ubicación'
      });
      $("#siguiente-fin").removeAttr("disabled");
    });
  }

} 

function muestraModal(parametro) {
  $("#boxes #dialog").css("display","block");
  /***************/
  var nombre=marcadores[parametro].nombre;
  var email=marcadores[parametro].email;
  var apellido=marcadores[parametro].apellido;
  var profesion=marcadores[parametro].profesion;
  var biografia=marcadores[parametro].biografia;
  if(marcadores[parametro].foto==""){
    var test_img = "uploads/perfiles/uncuyo-perfil-default.gif";
  }else{
    var test_img = marcadores[parametro].foto;
  }
  var facultad=marcadores[parametro].facultad;
  var carrera=marcadores[parametro].carrera;
  var fecha_egreso=marcadores[parametro].fecha;
  var es_egresado=marcadores[parametro].es_egresado;




  if(es_egresado==""){

    es_egresados="";
  }
  else{
    es_esgresados=deco_egreso(parseInt(es_egresado));

  }

  if(facultad==""){

    facultades="";
  }
  else{
   var facultades=deco_facultad(parseInt(facultad));

 }


 if(carrera==""){
  carreras="";
}
else{
  var carreras=deco_carrera(parseInt(carrera));

}

if(fecha_egreso=="0000-00-00"){
  fecha="";
}else{
  var d = new Date(fecha_egreso);
  var dia = d.getUTCDate();
  var mes = d.getUTCMonth() + 1;
  var anio = d.getUTCFullYear();
  if (anio<1900){
    fecha=""
  }else{
    fecha = dia+"/"+mes+"/"+anio;
  }
}

var contentString2 = '<div id="content">'+
'<div id="contenedor-marcador">'+
'<div id="fat_img">'+
'<div id="cont-img">'+
'<img src="'+test_img+'" />'+
        '</div></div>'+ // Cierre contenedor-imagen y padre-imagen
        '<div id="fat_text">'+
        '<div id="cont_text">'+
        '<h1>'+nombre+' '+apellido+'</h1>'+
        '<h2>'+profesion+'</h2>'+
        '</div></div>'+ // Cierre contenedor-texto y padre-texto
        '<div id="bgf"><h3>'+biografia+'</h3></div>'+
        '</div></div>'; //
        /*********/

        var contentString3='<div class="profile2">'+
        '<div class="container2">'+
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'+
        '<h1 class="page-header titl">Perfil de  '+nombre+' '+apellido+''+
        '</h1>'+
        '</div>'+
        '</div>'+
        '<!-- Fin Encabezado de página / Breadcrumb -->'+
        '<!-- Contact Form -->'+
        '<!-- Campos del formulario de contacto con validación de campos-->'+
        '<div class="row">'+
        '<!-- Columna de la izquierda -->'+
        '<div class="col-md-3 col-md-3 col-sm-3 col-xs-3 " style="padding-top: 26px;">'+
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 first2" align="left">'+
        '<img class="photo img-responsive img-portfolio img-hover" src="'+test_img+'">'+
        '</div>'+
        '<div class="contenedor-informacion-perfil2">'+
        '<form class="camimg" action="<?php echo base_url("") . "Cargar_Imagen/proceso"; ?>" method="POST" enctype="multipart/form-data">'+
        '<!-- Mi código de agregado de imágenes -->'+
        '<div class="inputModificado">'+
        '<div class="botonInputFileModificado">'+
        '<input style="display: none" name="imagen" type="file" class="inputImagenOculto" id="archivo_oculto1" name="archivo_oculto1"/>'+
        '<div class="examinar"></div>'+ 
        '</div>'+
        '</div>'+

        '<!-- Fin de mi código -->'+  


        '<!--input class="testo2" name="imagen" type="file" maxlength="150"-->'+
        '<br>'+
        '<input class="changeimg" type="submit" value="Cambiar imagen" name="enviar" style="cursor: pointer">'+

        '</form>'+
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 second">'+
        '<p class="name2 text-left"><strong>'+nombre+' '+apellido+'</strong></p>'+
        '<p class="job2 text-left"><strong>Profesión: </strong>'+profesion+'</p>'+
        '</div>'+

        '<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 third">'+
        '<!-- Barra vertical de opciones del perfil de usuairo -->'+
        '<br >'+

        '</div>'+
        '</div>'+
        '<!-- Fin Barra vertical de opciones del perfil de usuario -->'+
        '</div>'+
        '<!-- Fin de Columna de la izquierda -->'+
        '<!-- Parte central -->'+
        '<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bio2">'+
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;padding-right:0px;">'+
        '<h3 style="text-align:left;padding-bottom: 10px;"><strong>Datos Académicos</strong></h3>'+
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#ecf0f1;">'+
        '<p style="text-align: left; padding-top:10px"><strong>Facultad: </strong>'+facultades+'</p>'+
        '<p style="text-align: left; padding-top:10px"><strong>Carrera: </strong>'+carreras+'</p>'+
        '<p style="text-align: left; padding-top:10px"><strong>Egreso: </strong>'+es_esgresados+'</p>'+
        '<p style="text-align: left; padding-top:10px"><strong>Fecha de Egreso: </strong>'+fecha+'</p>'+
        '</div>'+
        '</div>'+
        '</div>'+


        '<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bio2">'+
        '<div style="padding-left: 0px!important;padding-bottom: 10px;class="col-md-12">'+
        '<h3 style="text-align:left;"><strong>Biografía</strong></h3>'+
        '</div>'+
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#ecf0f1;">'+
        '<p style="text-align: left; padding-top:10px">'+biografia+'</p>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</div>';

        /********/        

        var close =$("#boxes #dialog .close").clone();
        $("#boxes #dialog").empty();

        //Get the screen height and width  
        var maskHeight = $(document).height();  
        var maskWidth = $(window).width();  
        //Set height and width to mask to fill up the whole screen  
        $("#mask").css({"width":maskWidth,"height":maskHeight});  
        //transition effect      
        $("#mask").fadeTo("slow",0.8,function(){

        });    
        $("#boxes #dialog").append(contentString3);
        $("#boxes #dialog").prepend(close);
        $("#boxes #dialog").fadeTo("slow");


        //if close button is clicked  
        $(".window .close").click(function (e) {  
          //Cancel the link behavior  
          e.preventDefault();  
          $("#mask, .window").hide(); 
          $("#boxes #dialog").css("display","none"); 
        });      

    //if mask is clicked  
    $("#mask").click(function () {  
      $(this).hide();  
      $(".window").hide();  
      $("#boxes #dialog").css("display","none");
    });    

  }


  function deco_egreso(es_egresado){
    switch(es_egresado){
      case 0: 
      es_egresado = "No";
      break;
      case 1: 
      es_egresado = "Si";
      break;
      case 2: 
      es_egresado = "";
      break;
    }
    return es_egresado;
  }


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

  function moveToLocation(lat, lng, map){

    // Dependiendo del zoom, es cuanta lat le tengo que restar
    console.log("ZOOM: "+map.zoom);
    switch(map.zoom){
      case 3: lat-=-14; break;
      case 4: lat-=-8; break;
      case 5: lat-=-3; break;
      case 6: lat-=-1; break;
      case 7: lat-=-0.6; break;
      case 8: lat-=-0.2; break;
      case 9: lat-=0; break;
    }
    console.log("LAT: "+lat);
    var center = new google.maps.LatLng(lat, lng);
    map.panTo(center);
  }

  function add_marker_delay(valor1, valor2, timeout, maps, contenido){
    var infowindow = new google.maps.InfoWindow({
      content: contenido,
      position: {lat: valor1, lng: valor2}
    });
    window.setTimeout(function() {
      var image = "assets/img/marcador.png";
      marker = new google.maps.Marker({
        position: {lat: valor1, lng: valor2},
        map: maps,
        icon: image,
        animation: google.maps.Animation.DROP
      });

      marker.addListener('click', function() {
        moveToLocation(valor1, valor2, maps);

        /* FUNCION PARA QUE SOLO HAYA 1 POPUP ABIERTO */
        if( prev_infowindow ) {
         prev_infowindow.close();
       }

       prev_infowindow = infowindow;

       infowindow.open(map, this);
     });
    }, timeout);
  }