<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script>
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

    var uluru = {lat: -34.9950075, lng: -67.5100458};
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

    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });

    var marker = new google.maps.Marker({
      position: uluru2,
      map: map
    });

    var marker = new google.maps.Marker({
      position: {lat: 18.183385, lng: 28.122062},
      map: map
    });

    var marker = new google.maps.Marker({
      position: {lat: 33.429336, lng: 116.2445567},
      map: map
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
      $(".word-carrera").addClass("word-active");
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
      $(".mapa-registro").css("display","block");

      $(".formulario-no-fb").css("display","block");
      $(".formulario-fb").css("display","block");

      $(".face").css("display","block");
      $(".no-face").css("display","block");

      $(".formulario-fb").css("display","block");

      $(".contenedor-registro").css("overflow","hidden");

    });


    //BOTON DONAR
    $('#dnr').click(function(e){
      e.preventDefault();
      $('.contenedor-registro').animate({
        right: "0"
      });
      $('.login').animate({
        right: "-100%"
      });

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
      $(".word-carrera").addClass("word-active");
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
      $(".mapa-registro").css("display","block");

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
      $(".contenedor-modo").animate({
        left: "0",
        right: "0"
      });

      //CAMBIO DE COLOR
      

      $(".bloq-2").addClass("active");
      $(".sep-2").find(".linea-separador").addClass("active-sep");
      $(".word-modo").addClass("word-active");
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

      $(".bloq-3").addClass("active");
      $(".sep-3").find(".linea-separador").addClass("active-sep");
      $(".word-datos").addClass("word-active");

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
      $(".mapa-registro").animate({
        right: "0",
        left: "0"
      });

      $(".bloq-4").addClass("active");
      $(".word-mapa").addClass("word-active");
    });




    // INPUTS PASSWORD REGISTRO

    $("input[name=password2]").keydown(function(event){
      console.log(event.keyCode);
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      if ( event.which == 9 ) {
        event.preventDefault();
      }
      var nombre=$("#nombre_login").val();
      var apellido=$("#apellido_login").val();
      var email=$("#email_login").val();
      var telefono=$("#telefono_login").val();
      var pass1=$("#password_login").val();

      if ( event.which == 8 ) {
        console.log(string.length);
        string = string.substr(0,(string.length - 1));
      }else{
        if ( event.which != 9 )  {
          string += event.key;
        }
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
      
      console.log("STRING PASSWORD2: "+string);
      console.log("PASSWORD2: "+pass1);

      if(pass1==string){
        $("#siguiente-basico").removeAttr("disabled");
        $("#password_login").parent().removeClass("has-error");
        $(this).parent().removeClass("has-error");
      }else{
        $("#password_login").parent().addClass("has-error");
        $(this).parent().addClass("has-error");
        $("#siguiente-basico").attr("disabled");
      }
    });

    $("input[name=nombre_login]").keydown(function(event){
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");   
    });

    $("input[name=apellido_login]").keydown(function(event){
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");   
    });

    $("input[name=email_login]").keydown(function(event){
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");   
    });

    $("input[name=telefono_login]").keydown(function(event){
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");   
    });

    $("input[name=password]").keydown(function(event){
      if ( event.which == 13 ) {
        event.preventDefault();
      }

      if ( event.which == 8 ) {
        console.log(string2.length);
        string2 = string2.substr(0,(string2.length - 1));
      }else{
        string2 += event.key;
      }
      
      var password2 = $("#password2_login").val();
      console.log("STRING PASSWORD: "+string2);
      console.log("PASSWORD: "+password2);
      if(password2==string2){
        $(this).parent().removeClass("has-error");
        $("#password2_login").parent().removeClass("has-error");
      }else{
        $(this).parent().removeClass("has-error");
        $("#password2_login").parent().addClass("has-error");
      }
    });

    


    // INPUTS PASSWORD FACEBOOK
    
    $("input[name=password2-fb]").keydown(function(event){
      console.log(event.keyCode);
      if ( event.which == 13 ) {
        event.preventDefault();
      }

      if ( event.which == 9 ) {
        event.preventDefault();
      }

      var telefono=$("#telefono_fb").val();
      var pass1=$("#password_fb").val();

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
      $(".mapa-registro").animate({
        right: "0",
        left: "0"
      });

      $(".bloq-4").addClass("active");
      $(".word-mapa").addClass("word-active");
    });


    $("#siguiente-fin").click(function(){
      console.log(response.first_name);
    });


    //BOTONES CLICKEABLES



    $("#bloque-01").click(function(e){
      e.preventDefault();
      $(".bloq-2").removeClass("active");
      $(".bloq-3").removeClass("active");
      $(".bloq-4").removeClass("active");
      $(".sep-2").find(".linea-separador").removeClass("active-sep");
      $(".sep-3").find(".linea-separador").removeClass("active-sep");
      $(".word-modo").removeClass("word-active");
      $(".word-datos").removeClass("word-active");
      $(".word-mapa").removeClass("word-active");

      $(".contenedor-carreras").css("display","block");
      $(".contenedor-carreras").animate({
        left: "0"
      });

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

      $(".no-face").css("display","block");
      $(".formulario-fb").css("display","block");

      $(".contenedor-registro").css("overflow","hidden");

    });

    $("#bloque-02").click(function(e){
      e.preventDefault();
      if($(this).find(".bloque-wizard").hasClass("active")){
        $(".bloq-3").removeClass("active");
        $(".bloq-4").removeClass("active");
        $(".sep-3").find(".linea-separador").removeClass("active-sep");
        $(".word-datos").removeClass("word-active");
        $(".word-mapa").removeClass("word-active");

        $(".contenedor-modo").css("display","block");
        $(".contenedor-modo").animate({
          left: "0"
        });
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
      }
    });

    $("#bloque-03").click(function(e){
      e.preventDefault();
      if($(this).find(".bloque-wizard").hasClass("active")){
        $(".bloq-4").removeClass("active");
        $(".sep-3").find(".linea-separador").removeClass("active-sep");
        $(".word-mapa").removeClass("word-active");

        $(".formulario-padre").css("display","block");
        $(".formulario-padre").animate({
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

  });


</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdbzPyzRdoXfcf-G_IAlFXgukEWqdr5uI&callback=initMap">
</script>

<!--facebook api-->
<script>
  function statusChangeCallback(response) {
    //console.log('statusChangeCallback');
    //console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().

    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      //testAPI();
      $("#registrate").css("display","none");
      $("#ingresar").css("display","none");
      $('.login').animate({right: "-100%"});
      $("#salir").css("display","block");
      $("#dnr").css("display","none");
        }

  else {
      $("#registrate").css("display","block");
      $("#ingresar").css("display","block");
      $('.login').animate({right: "-100%"});
      $("#salir").css("display","none");
      $("#dnr").css("display","block");
    }

    $("#salir").click(function(e){
      FB.logout(function(response) {
      // Person is now logged out
    });

      $("#registrate").css("display","block");
      $("#ingresar").css("display","block");
      $("#salir").css("display","none");
      $("#dnr").css("display","block");
      $('.contenedor-registro').animate({right: "-100%"});
    });

 }


function statusChangeCallback2(response2) {
    if (response2.status === 'connected') {

 /*registro facebook wizart*/
      $(".contenedor-modo").animate({
        left: "-100%"
      });
      $(".contenedor-modo").css("display","none");
      $(".formulario-no-fb").css("display","none");
      $(".formulario-padre").animate({
        right: "0",
        left: "0"
      });

      $(".bloq-3").addClass("active");
      $(".sep-3").find(".linea-separador").addClass("active-sep");
      $(".word-datos").addClass("word-active");

     modo_log = 1;
     }
   }
     /*fin registro facebook wizart*/



 // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);

    });
  }

    function checkLoginState2() {
    FB.getLoginStatus(function(response2) {
      statusChangeCallback2(response2);

    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1364398453638874',
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

 // Now that we've initialized the JavaScript SDK, we call
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
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

 // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Bienvenido! Cargando tu informacion... ');
    FB.api('/me?locale=en_US&fields=id,name,email,work,website,first_name,birthday,last_name,location,picture', function(response) {
      console.log('Successful login for: ' + response.first_name);
      console.log('Successful login for: ' + response.last_name);
     // document.getElementById('status').innerHTML =
      //  'Gracias por loguearte, ' + response.name + '!';
    });
  }
</script>
<!--facebook api-->