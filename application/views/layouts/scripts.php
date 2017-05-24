<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script>
  var map;
  var map_register;
  var marker = null;
  var latitude;
  var longitude;

  function initMap() {
    var uluru = {lat: -34.9950075, lng: -67.5100458};
    var uluru2 = {lat: -35.9950075, lng: -68.5100458};
    if (window.location.pathname == "/UNC/"){
      var uluru = {lat: -34.9950075, lng: -67.5100458};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: uluru
      }); 
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });

      var marker = new google.maps.Marker({
        position: uluru2,
        map: map
      });
    }else{
      if (window.location.pathname == "/UNC/registro"){
        var uluru2 = {lat: -34.9950075, lng: -67.5100458};
        var map_register = new google.maps.Map(document.getElementById('mapa_registro'), {
          zoom: 8,
          center: {lat: -34.9950075, lng: -67.5100458}
        });
        var click_registro;
        google.maps.event.addListener(map_register, "click", function (event) {
          if(marker!=null) {
            console.log("entro");
            marker.setMap(null);
          }
          latitude = event.latLng.lat();
          longitude = event.latLng.lng();
          console.log( latitude + ', ' + longitude );
          click_registro = {lat: latitude, lng: longitude}
          console.log(click_registro);
          marker = new google.maps.Marker({
            position: click_registro,
            map: map_register,
            title: 'Ubicación'
          });
        });
      }
    }
  } 

  $(document).ready(function(){
    $('#open').click(function(e){
      e.preventDefault();
      $('body').animate({
        left: "75%"
      });
      $('.mapa-popup').animate({
        left: "-75%"
      });
    });
    
    $('.close').click(function(){
      $('.mapa-popup').animate({
        left: "-100%"
      });
      $('body').animate({
        left: "0"
      });
      console.log(latitude+" "+longitude);
    });


    // REGISTRO 

    function control_campos(nombre,apellido,email,user,password,password2,latitud,longitud){
      var retorno = 0;
      if ( (nombre!="") && (apellido!="") && (email!="") && (user!="") && (password!="") && (password2!="") && (latitud!=null) && (longitud!=null) ){
        if(password!=password2){retorno=9;}else{
          retorno=0;
        }
      }else{
        if(nombre=="") {retorno=1;}else{
          if(apellido=="") {retorno=2;}else{
            if(email=="") {retorno=3;}else{
              if(user=="") {retorno=4;}else{
                if(password=="") {retorno=5;}else{
                  if(password2=="") {retorno=6;}else{
                    if(latitud==null) {retorno=7;}else{
                      if(longitud==null) {retorno=8;}
                    }
                  }
                }
              }
            } 
          }
        }
      }
      return retorno;
    }

    $("#enviar-registro").click(function(e){
      $("#nombre_login").parent().removeClass("has-error");
      $("#apellido_login").parent().removeClass("has-error");
      $("#email_login").parent().removeClass("has-error");
      $("#usuario_login").parent().removeClass("has-error");
      $("#password_login").parent().removeClass("has-error");
      $("#password2_login").parent().removeClass("has-error");
      color=$("#open").removeClass("btn-danger");
      var nombre = $("#nombre_login").val();
      var apellido = $("#apellido_login").val();
      var email = $("#email_login").val();
      var user = $("#usuario_login").val();
      var password = $("#password_login").val();
      var password2 = $("#password2_login").val();

      var control = control_campos(nombre,apellido,email,user,password,password2,latitude,longitude);
      console.log(control);
      var color;
      switch(control){
        case 0:{
          $.ajax({
            type: "POST",
            url: "control_registro/load_user_info/",
            data:{
              nombre: nombre,
              apellido: apellido,
              email: email,
              usuario: user,
              password: password,
              latitud: latitude,
              longitud: longitude          
            }
          }).done(function(json){
            var objeto = $.parseJSON(json);
            console.log(objeto);
            window.location = "control_registro/index";
          });
          break;
        }
        case 1:{
          $("#nombre_login").parent().addClass("has-error");
          break;
        }
        case 2:{
          $("#apellido_login").parent().addClass("has-error");
          break;
        }
        case 3:{
          $("#email_login").parent().addClass("has-error");
          break;
        }
        case 4:{
          $("#usuario_login").parent().addClass("has-error");
          break;
        }
        case 5:{
          $("#password_login").parent().addClass("has-error");
          break;
        }
        case 6:{
          $("#password2_login").parent().addClass("has-error");
          break;
        }
        case 7:{
          $("#open").addClass("btn-danger");
          break;
        }
        case 8:{
          $("#open").addClass("btn-danger");
          break;
        }
        case 9:{
          $("#password_login").parent().addClass("has-error");
          $("#password2_login").parent().addClass("has-error");
          break;
        }
      }
      
    });
  });

  
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdbzPyzRdoXfcf-G_IAlFXgukEWqdr5uI&callback=initMap">
</script>