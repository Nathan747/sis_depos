<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
	<style>
		#map {
			height: calc(100vh - 120px);
			width: 100%;
		}
	</style>
</head>
<body>
	<?php if ($header) echo $header ?>
	
	<?php if ($content) echo $content ?>

	<?php if ($footer) echo $footer ?>
	
	<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
	 <script>
      function initMap() {
        var uluru = {lat: -34.9950075, lng: -67.5100458};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdbzPyzRdoXfcf-G_IAlFXgukEWqdr5uI&callback=initMap">
    </script>

</body>
</html>