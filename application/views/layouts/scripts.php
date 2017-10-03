<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/mapa.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/login_registro.js"); ?>"></script>
<script>
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
  var string5="";
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
  var profesion;
  var prev_infowindow = false; 
  var reg_fb_normal;
  var nombre_completo;
  var todos_los_mail;
  var email_existe="";
</script>

<script src="<?php echo base_url("assets/js/logic.js"); ?>"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdbzPyzRdoXfcf-G_IAlFXgukEWqdr5uI&callback=initMap">
</script>

<script src="<?php echo base_url("assets/js/facebook.js"); ?>"></script>

<!--facebook api-->
