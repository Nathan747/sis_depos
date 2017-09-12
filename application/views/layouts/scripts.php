<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

<script>
  console.log("<?php echo $this->session->newsession; ?>");
  var direccion = "<?php echo base_url(""); ?>";
  var facebook_count = 0;
  var map;
  var map_register;
  var marker = null;
  var latitude;
  var longitude;
  var modo_log=0;
  var string="";
  var string2="";
  var string3="";
  var string4="";
  var marker;

  var nombre;
  var apellido;
  var email;
  var telefono;
  var pass1;
  var pass2;
  var dni;
  var fecha_egresado;
  var es_egresado;
  var prev_infowindow = false; 
  var reg_fb_normal;


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
      for(var x=0;x<objeto.length;x++){
        var posicion = "{lat: "+objeto[x].lat_user+", lng: "+objeto[x].long_user+"}";

        var nombre=objeto[x].nombre_user;
        var apellido=objeto[x].apellido_user;
        var profesion=objeto[x].profesion_user;

        objeto[x].lat_user = parseFloat(objeto[x].lat_user);
        objeto[x].long_user = parseFloat(objeto[x].long_user);
        if(objeto[x].img==""){
          var test_img = "assets/img/pics/1.png";
        }else{
          var test_img = objeto[x].img;
        }
        var contentString = '<div id="content">'+
        '<div id="contenedor-marcador">'+
        '<div id="padre-imagen">'+
        '<div id="contenedor-imagen">'+
       //'<img src="<?php echo base_url("assets/img/pics/1.png"); ?>" />'+
       '<img src="'+test_img+'" />'+
       '</div></div>'+ // Cierre contenedor-imagen y padre-imagen
       '<div id="padre-texto">'+
       '<div id="contenedor-texto">'+
       '<h1>'+nombre+' '+apellido+'</h1>'+
       '<h2>'+profesion+'</h2>'+
       '<h3>Mi nombre es Esteban. Nací un jueves 30 de octubre de 1986 en Mayaguez, Puerto Rico. </h3>'+
       '<div id="contenedor-leer"><div>Leer Más </div></div>'+
       '</div></div>'+ // Cierre contenedor-texto y padre-texto
       '</div></div>'; // Cierre contenedor-marcador y content


       add_marker_delay(objeto[x].lat_user, objeto[x].long_user, x*300, map, contentString);

        /*var marker = new google.maps.Marker({
          position: {lat: objeto[x].lat_user, lng: objeto[x].long_user},
          map: map
        });*/
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
      var image = "<?php echo base_url("assets/img/pics/marcador.png"); ?>"
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

  /*login*/
  $(document).ready(function(){
    $('#cerrar-login').click(function(e){
      e.preventDefault();
      $('.login').animate({
        right: "-100%"
      });
    });

    $('#ingresar').click(function(e){
      e.preventDefault();
      $('.login').animate({
        right: "0"
      });
      $('.contenedor-registro').animate({
        right: "-100%"
      });

    });


    //BOTON CERRAR
    $('#cerrar-registro').click(function(e){
      e.preventDefault();
      $('.contenedor-registro').animate({
        right: "-100%"
      });

      $(".bloque-wizard").each(function(){
        $(this).removeClass("active");
      });

      $(".palabras").each(function(){
        $(this).removeClass("word-active");
      });

      $(".separador-wizard").each(function(){
        $(this).find(".linea-separador").removeClass("active-sep");
      });

      $(".bloq-1").addClass("active");
      $(".word-modo").addClass("word-active");
      $(".sep-1").find(".linea-separador").addClass("active-sep");

      $(".contenedor-carreras").css("left","0");
      $(".contenedor-carreras").css("display","block");
      $(".contenedor-modo").css("right","-100%");
      $(".contenedor-modo").css("left","100%");
      $(".contenedor-modo").css("display","block");
      $(".formulario-padre").css("left","100%");
      $(".formulario-padre").css("right","-100%");
      $(".formulario-padre").css("display","block");
      $(".mapa-registro").css("right","-100%");
      $(".mapa-registro").css("left","100%");
      $(".mapa-registro").css("display","block");

      $(".formulario-no-fb").css("display","block");
      $(".formulario-fb").css("display","block");

      $(".face").css("display","block");
      $(".no-face").css("display","block");

      $(".formulario-fb").css("display","block");

      $(".contenedor-registro").css("overflow","hidden");

    });

    //BOTON CERRAR DONACIÓN

    $("#cerrar-donacion").click(function(e){
      e.preventDefault();
      window.location=direccion;
      $(".contenedor-donar").animate({
        right: "-100%"
      });
      $(".contenedor-mercado-pago").css("left","0");
      $(".contenedor-paypal").css("right","0");
      $(".contenedor-paypal").css("padding","38px 40px 0px 0px");

      $(".contenedor-mercado-pago").css("width","50%");
      $(".contenedor-paypal").css("width","50%");

      $(".contenedor-lista-pp").css("top","-300%");
      $(".contenedor-lista-mp").css("top","-300%");

      $(".contenedor-modo-donar").css("display","inline-block");
      $(".contenedor-mensaje-confirmacion").css("display","none");
      $(".wizard-gracias").css("display","none");
      $(".wizard-donar").css("display","inline-block");
      

    });

    //BOTON REGISTRATE HEADER
    $('#registrate').click(function(e){
      e.preventDefault();

      $(".bloque-wizard").each(function(){
        $(this).removeClass("active");
      });

      $(".palabras").each(function(){
        $(this).removeClass("word-active");
      });

      $(".separador-wizard").each(function(){
        $(this).find(".linea-separador").removeClass("active-sep");
      });

      $(".bloq-1").addClass("active");
      $(".word-modo").addClass("word-active");
      $(".sep-1").find(".linea-separador").addClass("active-sep");
      $(".contenedor-modo").css("right","0");
      $(".contenedor-modo").css("left","0");
      $(".contenedor-modo").css("display","block");

      $(".contenedor-carreras").css("left","100%");
      $(".contenedor-carreras").css("display","block");
      $(".formulario-padre").css("left","100%");
      $(".formulario-padre").css("right","-100%");
      $(".formulario-padre").css("display","block");
      $(".mapa-registro").css("right","-100%");
      $(".mapa-registro").css("display","block");
      $(".mapa-registro").css("left","100%");

      $(".formulario-no-fb").css("display","block");
      $(".formulario-fb").css("display","block");

      $(".face").css("display","block");
      $(".no-face").css("display","block");

      $(".formulario-fb").css("display","block");

      $(".contenedor-registro").css("overflow","hidden");
      $('.contenedor-registro').animate({
        right: "0"
      });
      $('.login').animate({right: "-100%"});
    });


    //BOTON SIGUIENTE CARRERA
    $("#siguiente-run").click(function(e){
      e.preventDefault();
      $('.contenedor-carreras').animate({
        left: "-100%"
      });
      $('.contenedor-carreras').css("display","none");
      $(".mapa-registro").animate({
        right: "0",
        left: "0"
      });

      //CAMBIO DE COLOR
      

      $(".bloq-4").addClass("active");
      $(".sep-4").find(".linea-separador").addClass("active-sep");
      $(".word-mapa").addClass("word-active");
    });


    //BOTON SIGUIENTE REGISTRATE
    $("#registrate-form").click(function(e){
      e.preventDefault();
      $(".contenedor-modo").animate({
        left: "-100%"
      });
      $(".contenedor-modo").css("display","none");
      $(".formulario-padre").animate({
        right: "0",
        left: "0"
      });
      
      $(".formulario-fb").css("display","none");

      $(".bloq-2").addClass("active");
      $(".sep-2").find(".linea-separador").addClass("active-sep");
      $(".word-datos").addClass("word-active");
      reg_fb_normal=0;
      modo_log = 0;
    });


    //BOTON SIGUIENTE FORMULARIO REGISTRO
    $("#siguiente-basico").click(function(e){
      e.preventDefault();
      $(".contenedor-modo").css("display","none");
      $(".formulario-padre").animate({
        left: "-100%"
      });
      $(".formulario-padre").css("display","none");
      $(".contenedor-carreras").animate({
        right: "0",
        left: "0"
      });


      $(".bloq-3").addClass("active");
      $(".sep-3").find(".linea-separador").addClass("active-sep");
      $(".word-carrera").addClass("word-active");
    });

    // INPUTS PASSWORD REGISTRO

    $("input[name=password2]").keydown(function(event){
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      if ( event.which == 9 ) {
        event.preventDefault();
      }

      nombre=$("#nombre_login").val();
      apellido=$("#apellido_login").val();
      email=$("#email_login").val();
      telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      es_egresado = $("#egresado_login").is(':checked');

      if ( ( event.which > 31 ) && (event.which < 166) ) {
        if ( (event.which!=35) && (event.which!=36) && (event.which!=45) && (event.which!=46) && (event.which!=93) && (event.which!=113) && (event.which!=115) && (event.which!=116) && (event.which!=118) && (event.which!=119) && (event.which!=120) && (event.which!=122) && (event.which!=123) && (event.which!=144) && (event.which!=44) && (event.which!=145) ){
          string += event.key;
          console.log(string);
        }
      }else{
        if ( event.which == 192 ) {
          string += event.key;
          console.log(string);
        }
        if ( event.which == 8 ) {
          string = string.substr(0,(string.length - 1));
        }
        console.log(string);
      }

      
      if(nombre==""){
        $("#nombre_login").parent().addClass("has-error");
      }else{
        $("#nombre_login").parent().removeClass("has-error");
      }

      if(apellido==""){
        $("#apellido_login").parent().addClass("has-error");
      }else{
        $("#apellido_login").parent().removeClass("has-error");
      }

      if(email==""){
        $("#email_login").parent().addClass("has-error");
      }else{
        $("#email_login").parent().removeClass("has-error");
      }

      if(telefono==""){
        $("#telefono_login").parent().addClass("has-error");
      }else{
        $("#telefono_login").parent().removeClass("has-error");
      }

      if(pass1==""){
        $("#password_login").parent().addClass("has-error");
      }else{
        $("#password_login").parent().removeClass("has-error");
      }

      if(dni==""){
        $("#dni_login").parent().addClass("has-error");
      }else{
        $("#dni_login").parent().removeClass("has-error");
      }

      if(fecha_egresado===""){
        $("#fecha_login").parent().addClass("has-error");
      }else{
        $("#fecha_login").parent().removeClass("has-error");
      }
      
      console.log("STRING PASSWORD2: "+string);
      console.log("PASSWORD2: "+pass1);

      if(pass1==string){
        if ( (nombre!="") && (apellido!="") && (email!="") && (dni!="") && (telefono!=="") && (fecha_egresado!=="") ){
          $("#siguiente-basico").removeAttr("disabled");
        }
        $("#password_login").parent().removeClass("has-error");
        $(this).parent().removeClass("has-error");
      }else{
        $("#password_login").parent().addClass("has-error");
        $(this).parent().addClass("has-error");
        $("#siguiente-basico").attr("disabled");
      }
    });

    $("input[name=nombre_login]").keydown(function(event){
      //var nombre=$("#nombre_login").val();
      apellido=$("#apellido_login").val();
      email=$("#email_login").val();
      telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      pass2=$("#password2_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error"); 
      if ( (apellido!="") && (email!="") && (dni!="") && (telefono!="") && (fecha_egresado!=="") && (pass1!=="") && (pass2!=="") ){
        $("#siguiente-basico").removeAttr("disabled");
      }  
    });

    $("input[name=apellido_login]").keydown(function(event){
      nombre=$("#nombre_login").val();
      //var apellido=$("#apellido_login").val();
      email=$("#email_login").val();
      telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      pass2=$("#password2_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error"); 

      if ( (nombre!="") && (email!="") && (dni!="") && (telefono!="") && (fecha_egresado!=="") && (pass1!=="") && (pass2!=="") ){
        $("#siguiente-basico").removeAttr("disabled");
      }    
    });

    $("input[name=email_login]").keydown(function(event){
      nombre=$("#nombre_login").val();
      apellido=$("#apellido_login").val();
      //var email=$("#email_login").val();
      telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      pass2=$("#password2_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error"); 
      if ( (nombre!="") && (apellido!="") && (dni!="") && (telefono!="") && (fecha_egresado!=="") && (pass1!=="") && (pass2!=="") ){
        $("#siguiente-basico").removeAttr("disabled");
      }   
    });

    $("input[name=telefono_login]").keydown(function(event){
      nombre=$("#nombre_login").val();
      apellido=$("#apellido_login").val();
      email=$("#email_login").val();
      //var telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      pass2=$("#password2_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");  
      if ( (nombre!="") && (apellido!="") && (dni!="") && (email!="") && (fecha_egresado!=="") && (pass1!=="") && (pass2!=="") ){
        $("#siguiente-basico").removeAttr("disabled");
      }    
    });

    $("input[name=dni_login]").keydown(function(event){
      nombre=$("#nombre_login").val();
      apellido=$("#apellido_login").val();
      email=$("#email_login").val();
      telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      pass2=$("#password2_login").val();
      //var dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");   
      if ( (nombre!="") && (apellido!="") && (telefono!="") && (email!="") && (fecha_egresado!=="") && (pass1!=="") && (pass2!=="") ){
        $("#siguiente-basico").removeAttr("disabled");
      }  
    });

    $("input[name=date_login]").change(function(event){
      nombre=$("#nombre_login").val();
      apellido=$("#apellido_login").val();
      email=$("#email_login").val();
      telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      pass2=$("#password2_login").val();
      dni = $("#dni_login").val();
      //var fecha_egresado = $("#fecha_login").val();
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error"); 
      if ( (nombre!="") && (apellido!="") && (telefono!="") && (email!="") && (dni!=="") && (pass1!=="") && (pass2!=="") ){
        $("#siguiente-basico").removeAttr("disabled");
      }    
    });

    $("input[name=password]").keyup(function(event){
      nombre=$("#nombre_login").val();
      apellido=$("#apellido_login").val();
      email=$("#email_login").val();
      telefono=$("#telefono_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      console.log(event.which);

      if ( event.which == 13 ) {
        event.preventDefault();
      }

      if ( ( event.which > 31 ) && (event.which < 166) ) {
        if ( (event.which!=35) && (event.which!=36) && (event.which!=45) && (event.which!=46) && (event.which!=93) && (event.which!=113) && (event.which!=115) && (event.which!=116) && (event.which!=118) && (event.which!=119) && (event.which!=120) && (event.which!=122) && (event.which!=123) && (event.which!=144) && (event.which!=44) && (event.which!=145) ){
          string2 += event.key;
          console.log(string2);
        }
      }else{
        if ( event.which == 192 ) {
          string2 += event.key;
          console.log(string2);
        }
        if ( event.which == 8 ) {
          string2 = string2.substr(0,(string2.length - 1));
        }
        console.log(string2);
      }
      
      var password2 = $("#password2_login").val();
      console.log("STRING PASSWORD: "+string2);
      console.log("PASSWORD: "+password2);
      if(password2==string2){
        $(this).parent().removeClass("has-error");
        $("#password2_login").parent().removeClass("has-error");
        if ( (nombre!="") && (apellido!="") && (telefono!="") && (email!="") && (dni!=="") && (fecha_egresado!=="") ){
          $("#siguiente-basico").removeAttr("disabled");
        }   
      }else{
        $(this).parent().removeClass("has-error");
        $("#password2_login").parent().addClass("has-error");
      }
    });

    


    // INPUTS PASSWORD FACEBOOK
    
    $("input[name=password2-fb]").keydown(function(event){
      telefono=$("#telefono_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      console.log(event.keyCode);
      if ( event.which == 13 ) {
        event.preventDefault();
      }

      if ( event.which == 9 ) {
        event.preventDefault();
      }

      telefono=$("#telefono_fb").val();
      pass1=$("#password_fb").val();

      if ( event.which == 8 )  {
        string3 = string.substr(0,(string.length - 1));
      }else{
        if ( event.which != 9 )  {
          string3 += event.key;
        }
      }
      if(telefono==""){
        $("#telefono_fb").parent().addClass("has-error");
      }else{
        $("#telefono_fb").parent().removeClass("has-error");
      }

      if(pass1==""){
        $("#password_fb").parent().addClass("has-error");
      }else{
        $("#password_fb").parent().removeClass("has-error");
      }
      
      console.log("STRING PASSWORD2: "+string3);
      console.log("PASSWORD2: "+pass1);

      if(pass1==string3){
        $("#siguiente-fb").removeAttr("disabled");
        $("#password_fb").parent().removeClass("has-error");
        $(this).parent().removeClass("has-error");
      }else{
        $("#password_fb").parent().addClass("has-error");
        $(this).parent().addClass("has-error");
        $("#siguiente-fb").attr("disabled");
      }
    });

    $("input[name=password-fb]").keydown(function(event){
      telefono=$("#telefono_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      if ( event.which == 13 ) {
        event.preventDefault();
      }

      if ( event.which == 8 ) {
        console.log(string4.length);
        string4 = string4.substr(0,(string4.length - 1));
      }else{
        string4 += event.key;
      }
      
      var password2 = $("#password2_fb").val();
      console.log("STRING PASSWORD: "+string4);
      console.log("PASSWORD: "+password2);
      if(password2==string4){
        $(this).parent().removeClass("has-error");
        $("#password2_fb").parent().removeClass("has-error");
        $("#siguiente-fb").removeAttr("disabled");
      }else{
        $(this).parent().removeClass("has-error");
        $("#password2_fb").parent().addClass("has-error");
        $("#siguiente-fb").attr("disabled");
      }
    });

    $("input[name=telefono-fb]").keydown(function(event){
      telefono=$("#telefono_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");   
    });
    

    //BOTON SIGUIENTE FORMULARIO FACEBOOK
    $("#siguiente-fb").click(function(e){
      e.preventDefault();
      $(".contenedor-modo").css("display","none");
      $(".formulario-padre").animate({
        left: "-100%"
      });
      $(".formulario-padre").css("display","none");
      $(".contenedor-carreras").animate({
        right: "0",
        left: "0"
      });

      $(".bloq-3").addClass("active");
      $(".word-carrera").addClass("word-active");
      $(".sep-3").find(".linea-separador").addClass("active-sep");
    });


    $("#siguiente-fin").click(function(){
      if (es_egresado){
        var egresado=1 
      }else{
        var egresado=0;
      } 
      console.log(fecha_egresado);

      $.ajax({
        type: "POST",
        url: "Control_Registro/load_user_info/",
        data:{
          nombre: nombre,
          apellido: apellido,
          email: email,
          telefono: telefono,
          egresado: egresado,
          fecha_egresado: fecha_egresado,
          password: pass1,
          latitud: latitude,
          longitud: longitude          
        }
      }).done(function(json){
        //var objeto = $.parseJSON(json);
        console.log(json);
        if(reg_fb_normal==0){
          localStorage.setItem("ingreso_normal", "si");
          localStorage.setItem("registro_facebook", "no");
        }else{
          localStorage.setItem("ingreso_normal", "no");
          localStorage.setItem("registro_facebook", "si");
        }
        window.location = direccion;
      }).fail(function(xhr, status, error){
        console.log(xhr);
        console.log(status);
        console.log(error);
        console.log("FAIL");
      });
    });


    //BOTONES CLICKEABLES

    $("#bloque-01").click(function(e){
      e.preventDefault();
      $("#bloque-02").find(".bloque-wizard").removeClass("active");
      $("#bloque-03").find(".bloque-wizard").removeClass("active");
      $("#bloque-04").find(".bloque-wizard").removeClass("active");
      $(".sep-2").find(".linea-separador").removeClass("active-sep");
      $(".sep-3").find(".linea-separador").removeClass("active-sep");
      $(".word-carrera").removeClass("word-active");
      $(".word-datos").removeClass("word-active");
      $(".word-mapa").removeClass("word-active");

      $(".contenedor-modo").css("display","block");
      $(".contenedor-modo").animate({
        left: "0"
      });

      $(".contenedor-carreras").css("right","-100%");
      $(".contenedor-carreras").css("left","100%");
      $(".contenedor-carreras").css("display","block");
      $(".formulario-padre").css("left","100%");
      $(".formulario-padre").css("right","-100%");
      $(".formulario-padre").css("display","block");
      $(".mapa-registro").css("right","-100%");
      $(".mapa-registro").css("left","100%");
      $(".mapa-registro").css("display","block");

      $(".formulario-no-fb").css("display","block");
      $(".formulario-fb").css("display","block");

      $(".face").css("display","block");
      $(".no-face").css("display","block");

      $(".no-face").css("display","block");
      $(".formulario-fb").css("display","block");

      $(".contenedor-registro").css("overflow","hidden");

    });

    $("#bloque-02").click(function(e){
      e.preventDefault();
      if($(this).find(".bloque-wizard").hasClass("active")){
        $("#bloque-03").find(".bloque-wizard").removeClass("active");
        $("#bloque-04").find(".bloque-wizard").removeClass("active");
        $(".sep-3").find(".linea-separador").removeClass("active-sep");
        $(".word-carrera").removeClass("word-active");
        $(".word-mapa").removeClass("word-active");

        $(".formulario-padre").css("display","block");
        $(".formulario-padre").animate({
          left: "0"
        });
        $(".contenedor-carreras").css("right","-100%");
        $(".contenedor-carreras").css("left","100%");
        $(".contenedor-carreras").css("display","block");

        $(".mapa-registro").css("right","-100%");
        $(".mapa-registro").css("left","100%");
        $(".mapa-registro").css("display","block");

        $(".contenedor-registro").css("overflow","hidden");
      }
    });

    $("#bloque-03").click(function(e){
      e.preventDefault();
      if($(this).find(".bloque-wizard").hasClass("active")){
        $("#bloque-04").find(".bloque-wizard").removeClass("active");
        $(".word-mapa").removeClass("word-active");

        $(".contenedor-carreras").css("display","block");
        $(".contenedor-carreras").animate({
          left: "0"
        });
        $(".mapa-registro").css("right","-100%");
        $(".mapa-registro").css("left","100%");
        $(".mapa-registro").css("display","block");

        if(modo_log==0){
          $(".formulario-fb").css("display","none");
          $(".formulario-no-fb").css("display","block");  
        }else{
          $(".formulario-fb").css("display","block");
          $(".formulario-no-fb").css("display","none");
        }

        $(".face").css("display","block");
        $(".no-face").css("display","block");
        
        $(".no-face").css("display","block");

        $(".contenedor-registro").css("overflow","hidden");
      }
    });


    $("#universidad_login").change(function(){
      $("#siguiente-run").removeAttr("disabled");
    })


    // INICIAR SESION

    $(".iniciar-sesion").click(function(e){
      e.preventDefault();
      var email_ingresar = $("#email_ingresar2").val();
      var password_ingresar = $("#password_ingresar2").val();
      console.log(email_ingresar);
      console.log(password_ingresar);
      $.ajax({
        type: "POST",
        url: "Control_Login/enviar_datos/",
        data:{  
          email: email_ingresar,
          password: password_ingresar        
        }
      }).done(function(json){
        var objeto = $.parseJSON(json);
        console.log(objeto);
        if(objeto.entro==1){
          <?php $this->session->set_userdata("newsession","yes"); ?>
          localStorage.setItem("ingreso_normal", "si");
          localStorage.setItem("registro_facebook", "no");
          window.location = direccion;
        }else{
          alert("USUARIO O PASSWORD INCORRECTO");
        }
      }).fail(function(xhr, status, error){
        console.log(xhr);
        console.log(status);
        console.log(error);
        console.log("FAIL");
      });
    });


    //SALIR

    $("#salir").click(function(e){
      e.preventDefault();
      localStorage.setItem("ingreso_normal", "no");
      localStorage.setItem("registro_facebook", "no");
      $.ajax({
        type: "POST",
        url: "inicio/logout/"
      }).done(function(json){
        var objeto = $.parseJSON(json);
        //FB.getLoginStatus(handleSessionResponse);
        FB.getLoginStatus(function(response) {
          if (response && response.status === 'connected') {
            FB.logout(function(response) {
              if (objeto.eliminado){
                window.location = direccion;
              }
            });
          }else{
            if (objeto.eliminado){
              window.location = direccion;
            }
          }
        });
        facebook_count = 0;
        console.log(objeto);
      }).fail(function(xhr, status, error){
        console.log(xhr);
        console.log(status);
        console.log(error);
        console.log("FAIL");
      });
    });


    //DONAR

    $("#donar").click(function(){
      $(".contenedor-donar").animate({
        right: "0px"
      })
    });

    $("#cerrar-donar").click(function(){
      $(".contenedor-donar").animate({
        right: "-100%"
      });
      $(".contenedor-mercado-pago").css("left","0");
      $(".contenedor-paypal").css("right","0");
      $(".contenedor-paypal").css("padding","38px 40px 0px 0px");

      $(".contenedor-mercado-pago").css("width","50%");
      $(".contenedor-paypal").css("width","50%");

      $(".contenedor-lista-pp").css("top","-300%");
      $(".contenedor-lista-mp").css("top","-300%");
    });

    $("#paypal").click(function(e){
      e.preventDefault();

      $("#bloque-06").find(".bloque-wizard").addClass("active");
      $(".word-cantidad").addClass("word-active");  
      $(".sep-d2").find(".linea-separador").addClass("active-sep");          

      $(".contenedor-mercado-pago").animate({
        left: "-100%"
      });
      $(".contenedor-paypal").animate({
        padding: "38px 0px 0px 0px",
        width: "100%"
      });

      $(".contenedor-lista-pp").animate({
        top: "0"
      },1000);
    });

    $("#mercado-pago").click(function(e){
      e.preventDefault();

      $("#bloque-06").find(".bloque-wizard").addClass("active");
      $(".word-cantidad").addClass("word-active");
      $(".sep-d2").find(".linea-separador").addClass("active-sep");

      $(".contenedor-paypal").animate({
        right: "-100%"
      });
      $(".contenedor-mercado-pago").animate({
        width: "100%"
      });

      $(".contenedor-lista-mp").animate({
        top: "0"
      },1000);
    });

    $("#asd").click(function(){
      <?php if ($this->session->has_userdata('email')){
        echo "console.log('EMAIL: ".$this->session->email."');";
        ?>
        var confirmacion = 1;
        var email_session = "<?php echo $this->session->email; ?>";
        <?php
      }else{
        ?>
        var confirmacion = 0;  
        <?php
      } ?>
      console.log(confirmacion);
      window.location = "Cargar_Imagen";
    });
  });

$("#dnr").click(function(){
  $("#ingresar").click();
});


function abreSitio(){
  var clase = document.precios.mp_select.options[document.precios.mp_select.selectedIndex].value;
  console.log(clase);
  var test = document.getElementById(clase).click();
  console.log(test);
  $("#bloque-07").find(".bloque-wizard").addClass("active");
  $(".word-confirmacion").addClass("word-active");
}


</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdbzPyzRdoXfcf-G_IAlFXgukEWqdr5uI&callback=initMap">
</script>

<!--facebook api-->
<script>

  function handleSessionResponse(response) {
    console.log(response);
    console.log("handleSessionResponse");
    //if(response.status!="unknown"){
      FB.logout(handleSessionResponse);
    //}
  }

  function checkLoginState2() {
    console.log("checkLoginState2");
    reg_fb_normal=1;
    FB.getLoginStatus(function(response2) {
      statusChangeCallback2(response2);
    });
  }

  function statusChangeCallback2(response2) {
    console.log("statusChangeCallback2");
    console.log(response2);
    if (response2.status === 'connected') {
      FB.api('/me?locale=en_US&fields=id,name,email,work,website,first_name,birthday,last_name,location,picture', function(response) {
        nombre = response.first_name;
        apellido = response.last_name;
        email = response.email;
        console.log(response);
        console.log(nombre);
        console.log(apellido);
        console.log(email);
      });

      $(".contenedor-modo").animate({
        left: "-100%"
      });
      $(".contenedor-modo").css("display","none");
      $(".formulario-no-fb").css("display","none");
      $(".formulario-padre").animate({
        right: "0",
        left: "0"
      });

      $(".bloq-2").addClass("active");
      $(".sep-2").find(".linea-separador").addClass("active-sep");
      $(".word-datos").addClass("word-active");

      modo_log = 1;
      FB.getLoginStatus(handleSessionResponse);
      FB.logout(handleSessionResponse);
      // REVISAR QUE ESTO DA PROBLEMAS CON F5 
    }
  }



  function checkLoginState() {
    console.log("checkLoginState");
    facebook_count=2;
    FB.getLoginStatus(function(response) {
      console.log(response);
      statusChangeCallback(response);
    });
  }

  

  //CUANDO SE APRETA EL INGRESO POR FB
  function statusChangeCallback(response) {
    console.log(response);
    console.log(facebook_count);
    console.log("statusChangeCallback");
    if (response.status === 'connected') {
      FB.api('/me?locale=en_US&fields=id,name,email,work,website,first_name,birthday,last_name,location,picture', function(response) {
        nombre = response.first_name;
        apellido = response.last_name;
        email = response.email;
        console.log(response);
        $.ajax({
          type: "POST",
          url: "Login/control/",
          data:{
            email: email
          }
        }).done(function(json){
          var objeto = $.parseJSON(json);
          console.log(objeto);
          facebook_count=2;
          localStorage.setItem("ingreso_normal", "no");
          localStorage.setItem("registro_facebook", "si");
          //window.location = direccion; 
        });
      });  
    }else{
      var registro_fb = localStorage.getItem("registro_facebook");
      var registro_normal = localStorage.getItem("ingreso_normal");
      if (registro_fb=="si") {
        console.log("entro si FB");
        <?php $this->session->set_userdata("newsession","yes"); ?>
      }else{
        if (registro_normal=="si") {
          console.log("entro si NORMAL");
          <?php $this->session->set_userdata("newsession","yes"); ?>
        }else{
          console.log("entro no");
          <?php $this->session->set_userdata("newsession","no"); ?>
        }
      }
    }
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1364398453638874',
      cookie     : true,  // enable cookies to allow the server to access
                        // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });

    FB.getLoginStatus(function(response) {
      console.log(response);
      var registro_fb = localStorage.getItem("registro_facebook");
      var registro_normal = localStorage.getItem("ingreso_normal");
      if (registro_fb=="si") {
        console.log("entro si FB"); 
        <?php $this->session->set_userdata("newsession","yes"); ?>
      }else{
        if (registro_normal=="si") {
          console.log("entro si NORMAL");
          <?php $this->session->set_userdata("newsession","yes"); ?>
        }else{
          console.log("entro no");
          <?php $this->session->set_userdata("newsession","no"); ?>
        }
      }
      statusChangeCallback(response);
    });
  };

 // Load the SDK asynchronously
 (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
<!--facebook api-->