window.fbAsyncInit = function() {
  FB.init({
    appId      : '2089149237765483',
      cookie     : true,  // enable cookies to allow the server to access
                        // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.11' // use graph api version 2.8
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
  facebook_count=2;
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}

function statusChangeCallback(response) {
  console.log("CHANGE 2");
  $(".loader11").fadeIn(1000);
  if (response.status === 'connected') {
    FB.api('/me?locale=en_US&fields=email,first_name,last_name,picture.height(400)', function(response) {
      nombre = response.first_name;
      apellido = response.last_name;
      email = response.email;
      picture2 = response.picture;
      picture = picture2["data"].url;
      nombre_completo = nombre+" "+apellido;
      var existe=0;

      for(var x=0; x<todos_los_mail.length; x++){
        if(todos_los_mail[x].email_user==email){
          existe=1;
          x = todos_los_mail.length;
        }
      }
      if(existe){
        $.ajax({
          type: "POST",
          url: "Login/control/",
          data:{
            email: email,
            nombre_completo: nombre_completo
          }
        }).done(function(){
          $(".loader11").fadeOut(1000);
          facebook_count=2;
          localStorage.setItem("ingreso_normal", "no");
          localStorage.setItem("registro_facebook", "si");
          $("#afterloader").fadeIn(1000, function(){
            window.location = direccion;
          });
        });
      }else{
        FB.logout(function(response) {
          $(".loader11").fadeOut(1000);
          $(".login").animate({
            right: "-100%"
          },function(){
            if($(window).width() > 767){
              $("#registrate").click();
            }else{
              $(".contenedor-registro").css("display","flex");
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
              $(".contenedor-modo").css("display","flex");
              //$(".contenedor-modo").css("display","absolute");

              $(".contenedor-registro").css("overflow","hidden");
              $('.contenedor-registro').animate({
                right: "0"
              }, 1000);
              $('.login').animate({
                right: "-100%"
              },1000,function(){
                $(".login").css("display","none");
              });
            }

            $(".contenedor-modo").css("right","0");
            $(".contenedor-modo").css("left","0");
            $(".contenedor-modo").css("display","flex");

            $(".contenedor-registro").css("overflow","hidden");

            $(".contenedor-modo").animate({
              left: "-100%"
            });
            $(".contenedor-modo").css("display","none");
            $(".formulario-no-fb").css("display","none");
            $(".formulario-padre").css("display","none");
            $(".formulario-padre").animate({
              right: "0",
              left: "0"
            });

            $(".contenedor-carreras").css("display","inline-block");
            $(".siguiente-carrera").css("display","inline-block");
            $("#siguiente-run").css("display","inline-block");

            $(".contenedor-carreras").animate({
              left: "0"
            });

            $(".bloq-2").addClass("active");
            $(".bloq-3").addClass("active");
            $(".sep-1").find(".linea-separador").find(".puntito").each(function(){
              setTimeout(mostrar($(this)),16000);
            });
            $(".sep-2").find(".linea-separador").find(".puntito").each(function(){
              setTimeout(mostrar($(this)),16000);
            });
            $(".word-datos").addClass("word-active");
            $(".word-carrera").addClass("word-active");

            modo_log = 1;
            FB.getLoginStatus(handleSessionResponse);
            FB.logout(handleSessionResponse);
          });

        });
      }

    });
}
}

function handleSessionResponse(response) {
  FB.logout(handleSessionResponse);
}

// FB REGISTRATE

function checkLoginState2() {
  reg_fb_normal=1;
  FB.getLoginStatus(function(response2) {
    statusChangeCallback2(response2);
  });
}

function statusChangeCallback2(response2) {
  console.log("CHANGE");
  $(".loader11").fadeIn(1000);
  if (response2.status === 'connected') {
    FB.api('/me?locale=en_US&fields=id,name,email,work,website,first_name,birthday,last_name,locale,picture.height(400),age_range', function(response) {
      nombre = response.first_name;
      apellido = response.last_name;
      email = response.email;
      picture2 = response.picture;
      picture = picture2["data"].url;
      nombre_completo = nombre+" "+apellido;
      var existe=0;

      for(var x=0; x<todos_los_mail.length; x++){
        if(todos_los_mail[x].email_user==email){
          existe=1;
          x = todos_los_mail.length;
        }
      }

      if(existe){
        $.ajax({
          type: "POST",
          url: "Login/control/",
          data:{
            email: email,
            nombre_completo: nombre_completo
          }
        }).done(function(){
          is_facebook=1;
          facebook_count=2;
          localStorage.setItem("ingreso_normal", "no");
          localStorage.setItem("registro_facebook", "si");
          $("#afterloader").fadeIn(1000, function(){
            window.location = direccion;
          });
        });
      }else{
        FB.logout(function(response) {

          $(".contenedor-modo").css("right","0");
          $(".contenedor-modo").css("left","0");
          $(".contenedor-modo").css("display","flex");

          $(".contenedor-registro").css("overflow","hidden");

          $(".contenedor-modo").animate({
            left: "-100%"
          });
          $(".contenedor-modo").css("display","none");
          $(".formulario-no-fb").css("display","none");
          $(".formulario-padre").css("display","none");
          $(".formulario-padre").animate({
            right: "0",
            left: "0"
          });

          $(".contenedor-carreras").css("display","inline-block");
          $(".siguiente-carrera").css("display","inline-block");
          $("#siguiente-run").css("display","inline-block");

          $(".contenedor-carreras").animate({
            left: "0"
          });

          $(".bloq-2").addClass("active");
          $(".bloq-3").addClass("active");
          $(".sep-1").find(".linea-separador").find(".puntito").each(function(){
            setTimeout(mostrar($(this)),16000);
          });
          $(".sep-2").find(".linea-separador").find(".puntito").each(function(){
            setTimeout(mostrar($(this)),16000);
          });
          $(".word-datos").addClass("word-active");
          $(".word-carrera").addClass("word-active");

          modo_log = 1;
          FB.getLoginStatus(handleSessionResponse);
          FB.logout(handleSessionResponse);
          $(".loader11").fadeOut(1000);

        });
      }
    });
  }
}