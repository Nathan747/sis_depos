<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script>
  function initMap() {
    var uluru = {lat: -34.9950075, lng: -67.5100458};
    var uluru2 = {lat: -35.9950075, lng: -68.5100458};
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
  } 
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdbzPyzRdoXfcf-G_IAlFXgukEWqdr5uI&callback=initMap">
</script>