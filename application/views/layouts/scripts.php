<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script>
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
        
      }
    }
  } 
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#open').click(function(){
      $('#popup').fadeIn('slow');
      $('#black-cover').fadeIn('slow');
      $('.popup-overlay').fadeIn('slow');
      $('.popup-overlay').height($(window).height());
      return false;
    });
    
    $('#close').click(function(){
      $('#black-cover').fadeOut('slow');
      $('#popup').fadeOut('slow');
      $('.popup-overlay').fadeOut('slow');
      return false;
    });
  });
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdbzPyzRdoXfcf-G_IAlFXgukEWqdr5uI&callback=initMap">
</script>