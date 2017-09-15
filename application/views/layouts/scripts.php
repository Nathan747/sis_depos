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

  /*login*/
  $(document).ready(function(){
    $.ajax({
      type: "post",
      url: "Control_Registro/bring_mails"
    }).done(function(json){
      var objeto = $.parseJSON(json);
      todos_los_mail = objeto;
      console.log(todos_los_mail);
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
      nombre=$("#nombre_login").val();
      apellido=$("#apellido_login").val();
      email=$("#email_login").val();
      telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      profesion = $("#lugar_login").val();
      es_egresado = $("#egresado_login").is(':checked');
      e.preventDefault();
      for(var j=0;j<todos_los_mail.length;j++){
        console.log(j);
        console.log(email + " == " + todos_los_mail[j].email_user);
        if(email==todos_los_mail[j].email_user){
          email_existe="existe";
        }
        console.log("EXISTE: "+email_existe);
      }
      console.log("EXISTE: "+email_existe);
      if(!(email_existe=="existe")){
        $("#email_login").parent().removeClass("has-error");
        $(".error-email").text("");

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
      }else{
       $("#email_login").parent().addClass("has-error");
       $(".error-email").text("E-mail ya en uso");
       email_existe="";
     }

   });

    // INPUTS PASSWORD REGISTRO

    $("input[name=nombre_login]").keydown(function(event){
      apellido=$("#apellido_login").val();
      email=$("#email_login").val();
      telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      pass2=$("#password2_login").val();
      dni = $("#dni_login").val();
      profesion = $("#lugar_login").val();
      fecha_egresado = $("#fecha_login").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error"); 
      if ( (apellido!="") && (email!="") && (dni!="") && (telefono!="") && (fecha_egresado!=="") && (pass1!=="") && (pass2!=="") && (profesion!=="") ){
        $("#siguiente-basico").removeAttr("disabled");
      }  
    });

    $("input[name=apellido_login]").keydown(function(event){
      nombre=$("#nombre_login").val();
      email=$("#email_login").val();
      telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      pass2=$("#password2_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      profesion = $("#lugar_login").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error"); 

      if ( (nombre!="") && (email!="") && (dni!="") && (telefono!="") && (fecha_egresado!=="") && (pass1!=="") && (pass2!=="") && (profesion!=="") ){
        $("#siguiente-basico").removeAttr("disabled");
      }    
    });

    $("input[name=email_login]").keydown(function(event){
      nombre=$("#nombre_login").val();
      apellido=$("#apellido_login").val();
      telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      pass2=$("#password2_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      profesion = $("#lugar_login").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error"); 
      if ( (nombre!="") && (apellido!="") && (dni!="") && (telefono!="") && (fecha_egresado!=="") && (pass1!=="") && (pass2!=="") && (profesion!=="") ){
        $("#siguiente-basico").removeAttr("disabled");
      }

      if ( ( event.which > 31 ) && (event.which < 166) ) {
        if ( (event.which!=35) && (event.which!=36) && (event.which!=45) && (event.which!=46) && (event.which!=93) && (event.which!=113) && (event.which!=115) && (event.which!=116) && (event.which!=118) && (event.which!=119) && (event.which!=120) && (event.which!=122) && (event.which!=123) && (event.which!=144) && (event.which!=44) && (event.which!=145) ){
          string5 += event.key;
        }
      }else{
        if ( event.which == 192 ) {
          string5 += event.key;
        }
        if (event.which==190) {
          string5 += event.key;
        }
        if (event.which==189) {
          string5 += event.key;
        }
        if (event.which==219) {
          string5 += event.key;
        }
        if (event.which==186) {
          string5 += event.key;
        }
        if ( event.which == 8 ) {
          string5 = string5.substr(0,(string5.length - 1));
        }
      }
      
    });

    $("input[name=telefono_login]").keydown(function(event){
      nombre=$("#nombre_login").val();
      apellido=$("#apellido_login").val();
      email=$("#email_login").val();
      pass1=$("#password_login").val();
      pass2=$("#password2_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      profesion = $("#lugar_login").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");  
      if ( (nombre!="") && (apellido!="") && (dni!="") && (email!="") && (fecha_egresado!=="") && (pass1!=="") && (pass2!=="") && (profesion!=="") ){
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
      profesion = $("#lugar_login").val();
      fecha_egresado = $("#fecha_login").val();
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");   
      if ( (nombre!="") && (apellido!="") && (telefono!="") && (email!="") && (fecha_egresado!=="") && (pass1!=="") && (pass2!=="") && (profesion!=="") ){
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
      profesion = $("#lugar_login").val();
      //var fecha_egresado = $("#fecha_login").val();
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error"); 
      if ( (nombre!="") && (apellido!="") && (telefono!="") && (email!="") && (dni!=="") && (pass1!=="") && (pass2!=="") && (profesion!=="")){
        $("#siguiente-basico").removeAttr("disabled");
      }    
    });

    $("input[name=lugar_login]").change(function(event){
      nombre=$("#nombre_login").val();
      apellido=$("#apellido_login").val();
      email=$("#email_login").val();
      telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      pass2=$("#password2_login").val();
      dni = $("#dni_login").val();
      //profesion = $("#lugar_login").val();
      var fecha_egresado = $("#fecha_login").val();
      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error"); 
      if ( (nombre!="") && (apellido!="") && (telefono!="") && (email!="") && (dni!=="") && (pass1!=="") && (pass2!=="") && (fecha_egresado!=="")){
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
      profesion = $("#lugar_login").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }

      if ( ( event.which > 31 ) && (event.which < 166) ) {
        if ( (event.which!=35) && (event.which!=36) && (event.which!=45) && (event.which!=46) && (event.which!=93) && (event.which!=113) && (event.which!=115) && (event.which!=116) && (event.which!=118) && (event.which!=119) && (event.which!=120) && (event.which!=122) && (event.which!=123) && (event.which!=144) && (event.which!=44) && (event.which!=145) ){
          string2 += event.key;
        }
      }else{
        if ( event.which == 192 ) {
          string2 += event.key;
        }
        if ( event.which == 8 ) {
          string2 = string2.substr(0,(string2.length - 1));
        }
      }
      
      var password2 = $("#password2_login").val();
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

    $("input[name=password2]").keydown(function(event){
      console.log(event.which);
      if ( event.which == 13 ) {
        event.preventDefault();
      }

      nombre=$("#nombre_login").val();
      apellido=$("#apellido_login").val();
      email=$("#email_login").val();
      telefono=$("#telefono_login").val();
      pass1=$("#password_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      profesion = $("#lugar_login").val();
      es_egresado = $("#egresado_login").is(':checked');

      if ( ( event.which > 31 ) && (event.which < 166) ) {
        if ( (event.which!=35) && (event.which!=36) && (event.which!=45) && (event.which!=46) && (event.which!=93) && (event.which!=113) && (event.which!=115) && (event.which!=116) && (event.which!=118) && (event.which!=119) && (event.which!=120) && (event.which!=122) && (event.which!=123) && (event.which!=144) && (event.which!=44) && (event.which!=145) ){
          string += event.key;
        }
      }else{
        if ( event.which == 192 ) {
          string += event.key;
        }
        if ( event.which == 8 ) {
          string = string.substr(0,(string.length - 1));
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

      if(profesion===""){
        $("#lugar_login").parent().addClass("has-error");
      }else{
        $("#lugar_login").parent().removeClass("has-error");
      }
      
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


    // INPUTS PASSWORD FACEBOOK
    
    $("input[name=password2-fb]").keydown(function(event){
      telefono=$("#telefono_fb").val();
      dni = $("#dni_fb").val();
      fecha_egresado = $("#fecha_login_fb").val();
      profesion = $("#lugar_fb").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }

      if ( event.which == 9 ) {
        event.preventDefault();
      }

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

      if(dni==""){
        $("#dni_fb").parent().addClass("has-error");
      }else{
        $("#dni_fb").parent().removeClass("has-error");
      }

      if(fecha_egresado==""){
        $("#fecha_login_fb").parent().addClass("has-error");
      }else{
        $("#fecha_login_fb").parent().removeClass("has-error");
      }

      if(profesion==""){
        $("#lugar_fb").parent().addClass("has-error");
      }else{
        $("#lugar_fb").parent().removeClass("has-error");
      }

      if(pass1==""){
        $("#password_fb").parent().addClass("has-error");
      }else{
        $("#password_fb").parent().removeClass("has-error");
      }
      

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
      telefono=$("#telefono_fb").val();
      dni = $("#dni_fb").val();
      fecha_egresado = $("#fecha_login_fb").val();
      profesion = $("#lugar_fb").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }

      if ( event.which == 8 ) {
        console.log(string4.length);
        string4 = string4.substr(0,(string4.length - 1));
      }else{
        string4 += event.key;
      }

      if(telefono==""){
        $("#telefono_fb").parent().addClass("has-error");
      }else{
        $("#telefono_fb").parent().removeClass("has-error");
      }

      if(dni==""){
        $("#dni_fb").parent().addClass("has-error");
      }else{
        $("#dni_fb").parent().removeClass("has-error");
      }

      if(fecha_egresado==""){
        $("#fecha_login_fb").parent().addClass("has-error");
      }else{
        $("#fecha_login_fb").parent().removeClass("has-error");
      }

      if(profesion==""){
        $("#lugar_fb").parent().addClass("has-error");
      }else{
        $("#lugar_fb").parent().removeClass("has-error");
      }
      
      var password2 = $("#password2_fb").val();
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
      //telefono=$("#telefono_fb").val();
      dni = $("#dni_fb").val();
      fecha_egresado = $("#fecha_login_fb").val();
      profesion = $("#lugar_fb").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");   

      if ( (dni!="") && (fecha_egresado!="") && (profesion!="") ){
        $("#siguiente-fb").removeAttr("disabled");
      }    
    });

    $("input[name=dni_fb]").keydown(function(event){
      telefono=$("#telefono_fb").val();
      //dni = $("#dni_fb").val();
      fecha_egresado = $("#fecha_login_fb").val();
      profesion = $("#lugar_fb").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");   

      if ( (telefono!="") && (fecha_egresado!="") && (profesion!="") ){
        $("#siguiente-fb").removeAttr("disabled");
      }    
    });

    $("#fecha_login_fb").keydown(function(event){
      telefono=$("#telefono_fb").val();
      dni = $("#dni_fb").val();
      //fecha_egresado = $("#fecha_login_fb").val();
      profesion = $("#lugar_fb").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");   

      if ( (telefono!="") && (dni!="") && (profesion!="") ){
        $("#siguiente-fb").removeAttr("disabled");
      }    
    });

    $("input[name=lugar_fb]").keydown(function(event){
      telefono=$("#telefono_fb").val();
      dni = $("#dni_fb").val();
      fecha_egresado = $("#fecha_login_fb").val();
      //profesion = $("#lugar_fb").val();

      if ( event.which == 13 ) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");   

      if ( (telefono!="") && (dni!="") && (fecha_egresado!="") ){
        $("#siguiente-fb").removeAttr("disabled");
      }    
    });
    

    //BOTON SIGUIENTE FORMULARIO FACEBOOK
    $("#siguiente-fb").click(function(e){
      telefono=$("#telefono_fb").val();
      pass1=$("#password_fb").val();
      dni = $("#dni_fb").val();
      fecha_egresado = $("#fecha_login_fb").val();
      profesion = $("#lugar_fb").val();
      es_egresado = $("#egresado_fb").is(':checked');
      console.log(nombre);
      console.log(apellido);
      console.log(email);
      console.log(telefono);
      console.log(pass1);
      console.log(dni);
      console.log(fecha_egresado);
      console.log(profesion);
      console.log(es_egresado);

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
          profesion: profesion,
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
        console.log(json);
        if(objeto.entro==1){
          localStorage.setItem("ingreso_normal", "si");
          localStorage.setItem("registro_facebook", "no");
          window.location = direccion;
        }else{
          console.log("ELSE");
          $(".error-login").text("Email o Contraseña erronea");
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
              console.log(response);
              console.log("LOGOUT FB");
              if (objeto.eliminado){
                window.location = direccion;
              }
            });
          }else{
            console.log(response);
            console.log("LOGOUT NO FB");
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

    $(".btn-recup-pass").click(function(){
      var email_recup = $("#email_recupera").val();
      $(".texto-recupera").animate({
        top: "-25px"
      });
      if(email_recup==""){
        $("#email_recupera").parent().addClass("has-error");
      }else{
        $("#email_recupera").parent().removeClass("has-error");
        $.ajax({
          type: "post",
          url: "Login/validar_mail/",
          data:{
            email: email_recup
          }
        }).done(function(json){
          var objeto = $.parseJSON(json);
          console.log(objeto);
          if(objeto.encontro==1){
            $(".texto-recupera").text("En breves te llegará un mail con tu contraseña");
            $(".texto-recupera").css("color","green");
            $(".texto-recupera").animate({
              top: "0px"
            });
          }else{
            $(".texto-recupera").text("E-Mail incorrecto");
            $(".texto-recupera").css("color","red");
            $(".texto-recupera").animate({
              top: "0px"
            });
          }
        });
      }
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
      window.location = "Perfil";
    });


  });

</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdbzPyzRdoXfcf-G_IAlFXgukEWqdr5uI&callback=initMap">
</script>


<script>

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
      var valor;
      if (registro_fb=="si") {
        console.log("entro si FB"); 
        valor = 1;
      }else{
        if (registro_normal=="si") {
          console.log("entro si NORMAL");
          valor = 1;
        }else{
          console.log("entro no");
          valor = 0;
        }
      }
      //statusChangeCallback(response);
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



 function checkLoginState() {
  console.log("checkLoginState");
  facebook_count=2;
  FB.getLoginStatus(function(response) {
    console.log(response);
    statusChangeCallback(response);
  });
}

function statusChangeCallback(response) {
  console.log(response);
  console.log(facebook_count);
  console.log("statusChangeCallback");
  if (response.status === 'connected') {
    FB.api('/me?locale=en_US&fields=id,name,email,work,website,first_name,birthday,last_name,location,picture', function(response) {
      nombre = response.first_name;
      apellido = response.last_name;
      email = response.email;
      nombre_completo = nombre+" "+apellido;
      console.log(response);
      $.ajax({
        type: "POST",
        url: "Login/control/",
        data:{
          email: email,
          nombre_completo: nombre_completo
        }
      }).done(function(json){
        var objeto = $.parseJSON(json);
        console.log("Valor de si existe o no - 1 EXISTE - 2 NO EXISTE");
        console.log(objeto);
        facebook_count=2;
        localStorage.setItem("ingreso_normal", "no");
        localStorage.setItem("registro_facebook", "si");
        if(objeto==1){
          window.location = direccion;
        }else{
          FB.logout(function(response) {
            console.log(response);
            console.log("LOGOUT FB");
            $(".login").animate({
              right: "-100%"
            },function(){
              $("#registrate").click();
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
            });
          });
        }
        
      });
      
    });  
  }else{
    var registro_fb = localStorage.getItem("registro_facebook");
    var registro_normal = localStorage.getItem("ingreso_normal");
    var valor;
    if (registro_fb=="si") {
      console.log("entro si FB");
      valor = 1;  
    }else{
      if (registro_normal=="si") {
        console.log("entro si NORMAL");
        valor = 1;
      }else{
        console.log("entro no");
        valor = 0;
      }
    }

  }
}

function handleSessionResponse(response) {
  console.log(response);
  console.log("handleSessionResponse");
    //if(response.status!="unknown"){
      FB.logout(handleSessionResponse);
    //}
  }

  // FB REGISTRATE

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

</script>

<!--facebook api-->
