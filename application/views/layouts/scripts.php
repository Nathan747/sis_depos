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

    $("#enviar-registro").click(function(){
      console.log("ENTRO");
      console.log("<?php echo base_url(); ?>" + "Control_Registro");
      $.ajax({
        type: "POST",
        url: "UNC/Control_Registro/load_user_info",
        data:{
          nombre: $("#nombre_login").val(),
          apellido: $("#apellido_login").val(),
          email: $("#email_login").val(),
          usuario: $("#usuario_login").val(),
          password: $("#password_login").val(),
          latitud: latitude,
          longitud: longitude          
        }
      });
    });
  });

  
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdbzPyzRdoXfcf-G_IAlFXgukEWqdr5uI&callback=initMap">
</script>