var objeto_total;
var contentString2;
var email2;
var email;

function initMap() {
  var uluru = {lat: -34.9950075, lng: -67.5100458};
  var uluru2 = {lat: -35.9950075, lng: -68.5100458};
  var styledMapType = new google.maps.StyledMapType(
    [
    {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
    {elementType: 'labels.text.fill', stylers: [{color: '#929292'}]},
    {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
    {
      featureType: 'administrative',
      elementType: 'geometry.stroke',
      stylers: [{color: '#ffffff'}]
    },
    {
      featureType: 'administrative.land_parcel',
      elementType: 'geometry.stroke',
      stylers: [{color: '#FFFFFF'}]
    },
    {
      featureType: 'administrative.land_parcel',
      elementType: 'labels.text.fill',
      stylers: [{color: '#929292'}]
    },
    {/*terreno*/
      featureType: 'landscape.natural',
      elementType: 'geometry',
      stylers: [{color: '#F7F7F7'}]
    },
    {
      featureType: 'poi',
      elementType: 'geometry',
      stylers: [{color: '#cccccc'}]
    },
    {
      featureType: 'poi',
      elementType: 'labels.text.fill',
      stylers: [{color: '#929292'}]
    },
    {
      featureType: 'poi.park',
      elementType: 'geometry.fill',
      stylers: [{color: '#cccccc'}]
    },
    {
      featureType: 'poi.park',
      elementType: 'labels.text.fill',
      stylers: [{color: '#cccccc'}]
    },
    {/*carretera*/
      featureType: 'road',
      elementType: 'geometry',
      stylers: [{color: '#f5f1e6'}]
    },
    {
      featureType: 'road.arterial',
      elementType: 'geometry',
      stylers: [{color: '#fdfcf8'}]
    },
    {
      featureType: 'road.highway',
      elementType: 'geometry',
      stylers: [{color: '#667D98'}]
    },
    {
      featureType: 'road.highway',
      elementType: 'geometry.stroke',
      stylers: [{color: '#667D98'}]
    },
    {
      featureType: 'road.highway.controlled_access',
      elementType: 'geometry',
      stylers: [{color: '#667D98'}]
    },
    {
      featureType: 'road.highway.controlled_access',
      elementType: 'geometry.stroke',
      stylers: [{color: '#667D98'}]
    },
    {
      featureType: 'road.local',
      elementType: 'labels.text.fill',
      stylers: [{color: '#806b63'}]
    },
    {
      featureType: 'transit.line',
      elementType: 'geometry',
      stylers: [{color: '#dfd2ae'}]
    },
    {
      featureType: 'transit.line',
      elementType: 'labels.text.fill',
      stylers: [{color: '#8f7d77'}]
    },
    {
      featureType: 'transit.line',
      elementType: 'labels.text.stroke',
      stylers: [{color: '#ebe3cd'}]
    },
    {
      featureType: 'transit.station',
      elementType: 'geometry',
      stylers: [{color: '#dfd2ae'}]
    },
    {
      featureType: 'water',
      elementType: 'geometry.fill',
      stylers: [{color: '#EDEDED'}]
    },
    {
      featureType: 'water',
      elementType: 'labels.text.fill',
      stylers: [{color: '#929292'}]
    }
    ],
    {name: 'Styled Map'});

var uluru = {lat: 16.2591717, lng: -5.5345314};
var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 2,
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

map.mapTypes.set('styled_map', styledMapType);
map.setMapTypeId('styled_map');

$.ajax({
  type: "POST",
  url: "Markers/load/",
}).done(function(json){
  var objeto = $.parseJSON(json);
  objeto_total=objeto;
  for(var x=0;x<objeto.length;x++){
    var posicion = "{lat: "+objeto[x].lat_user+", lng: "+objeto[x].long_user+"}";
    var nombre=objeto[x].nombre_user;
    var email=objeto[x].email_user;
    var nombre=objeto[x].nombre_user;
    var apellido=objeto[x].apellido_user;
    var profesion=objeto[x].profesion_user;

    var biografia=objeto[x].biografia_user;
    var longitud=50;
    /***********/
    if(biografia.length > longitud){
      var texto=(biografia.substring(0,longitud));
    }
    /***********/
    objeto[x].lat_user = parseFloat(objeto[x].lat_user);
    objeto[x].long_user = parseFloat(objeto[x].long_user);
    if(objeto[x].img==""){
      var test_img = "assets/img/pics/1.png";
    }else{
      var test_img = objeto[x].img;
    }
//<input type="button" value="Pinchame y verás" onclick="muestraMensaje()" />
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
        '<h3>'+texto+'...</h3>'+
        '<div id="contenedor-leer"><div><a class="moreless" href="#" onclick=\'muestraModal('+x+')\' style="text-decoration: none;">Leer Más</a></div></div>'+
        '</div></div>'+ // Cierre contenedor-texto y padre-texto
        '</div></div>'; // Cierre contenedor-marcador y content
        add_marker_delay(objeto[x].lat_user, objeto[x].long_user, x*300, map, contentString);
      }

    });



uluru2 = {lat: -34.9950075, lng: -67.5100458};
var map_register = new google.maps.Map(document.getElementById('mapa_registro'), {
  zoom: 8,
  center: {lat: -34.9950075, lng: -67.5100458},
  mapTypeControl: 0,
  scaleControl: 10,
  streetViewControl: 0,
  rotateControl: 0,
  fullscreenControl: 0,
  mapTypeControlOptions: {
    mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
    'styled_map']
  }
});

map_register.mapTypes.set('styled_map', styledMapType);
map_register.setMapTypeId('styled_map');

var click_registro;
google.maps.event.addListener(map_register, "click", function (event) {
  if(marker!=null) {
    marker.setMap(null);
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

function muestraModal(parametro) {
  $("#boxes #dialog").css("display","block");
  /***************/
  var nombre=objeto_total[parametro].nombre_user;
  var email=objeto_total[parametro].email_user;
  var apellido=objeto_total[parametro].apellido_user;
  var profesion=objeto_total[parametro].profesion_user;
  var biografia=objeto_total[parametro].biografia_user;
  if(objeto_total[parametro].img==""){
    var test_img = "assets/img/pics/1.png";
  }else{
    var test_img = objeto_total[parametro].img;
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
      '<div class="container">'+
        '<div class="col-md-12">'+
         '<h1 class="page-header">Perfil de usuario'+
          '</h1>'+
        '</div>'+
      '</div>'+
      '<!-- Fin Encabezado de página / Breadcrumb -->'+
      '<!-- Contact Form -->'+
      '<!-- Campos del formulario de contacto con validación de campos-->'+
      '<div class="row">'+
        '<!-- Columna de la izquierda -->'+
        '<div class="col-md-3">'+
          '<div class="col-md-12 first" align="left">'+
            '<img class="photo img-responsive img-portfolio img-hover" src="'+test_img+'">'+
          '</div>'+
          '<div class="contenedor-informacion-perfil">'+
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
            '<div class="col-md-12 second">'+
              '<p class="name text-left"><strong>'+nombre+' '+apellido+'</strong></p>'+
              '<p class="job text-left"><strong>'+profesion+'</strong></p>'+
            '</div>'+

           '<div class="col-md-10 third">'+
              '<!-- Barra vertical de opciones del perfil de usuairo -->'+
              '<br >'+

            '</div>'+
          '</div>'+
          '<!-- Fin Barra vertical de opciones del perfil de usuario -->'+
        '</div>'+
        '<!-- Fin de Columna de la izquierda -->'+
        '<!-- Parte central -->'+
        '<div class="col-md-9 bio">'+
          '<div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">'+
            '<h3 style="text-align: center">BIOGRAFÍA<p><small></small></p></h3>'+
          '</div>'+
          '<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgrey;background: #f1f3f6;">'+
            '<p style="text-align: left; padding-top:10px">'+biografia+'</p>'+
          '</div>'+
        '</div>';

      
/********/        


        var close =$("#boxes #dialog .close").clone();
        $("#boxes #dialog").empty();
        $("#boxes #dialog").append(contentString3);
        $("#boxes #dialog").prepend(close);

        //Get the A tag  
        var id = $(this).attr("href");  
        //Get the screen height and width  
        var maskHeight = $(document).height();  
        var maskWidth = $(window).width();  
        //Set height and width to mask to fill up the whole screen  
        $("#mask").css({"width":maskWidth,"height":maskHeight});  
        //transition effect      
        $("#mask").fadeIn(1000);      
        $("#mask").fadeTo("slow",0.8);    
        //Get the window height and width  
        var winH = $(window).height();  
        var winW = $(window).width();  
        //Set the popup window to center  
        $(id).css("top",  winH/2-$(id).height()/2);  
        $(id).css("left", winW/2-$(id).width()/2);  
        //transition effect  
        $(id).fadeIn(2000);

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

  function moveToLocation(lat, lng, map){
    var center = new google.maps.LatLng(lat, lng);
    map.panTo(center);
  }

  function add_marker_delay(valor1, valor2, timeout, maps, contenido){
    var infowindow = new google.maps.InfoWindow({
      content: contenido,
      position: {lat: valor1, lng: valor2}
    });
    window.setTimeout(function() {
      var image = "assets/img/pics/marcador.png";
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