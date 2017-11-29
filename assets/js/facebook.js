window.fbAsyncInit = function() {
  FB.init({
    appId      : '151910012095751',
      cookie     : true,  // enable cookies to allow the server to access
                        // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });

  FB.getLoginStatus(function(response) {
    var registro_fb = localStorage.getItem("registro_facebook");
    var registro_normal = localStorage.getItem("ingreso_normal");
    var valor;
    if (registro_fb=="si") {
      valor = 1;
    }else{
      if (registro_normal=="si") {
        valor = 1;
      }else{
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
  facebook_count=2;
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}

function statusChangeCallback(response) {
  if (response.status === 'connected') {
    FB.api('/me?locale=en_US&fields=id,name,email,work,website,first_name,birthday,last_name,location,picture', function(response) {
      nombre = response.first_name;
      apellido = response.last_name;
      email = response.email;
      nombre_completo = nombre+" "+apellido;
      birthday=response.birthday;
      $.ajax({
        type: "POST",
        url: "Login/control/",
        data:{
          email: email,
          nombre_completo: nombre_completo
        }
      }).done(function(json){
        var objeto = $.parseJSON(json);
        facebook_count=2;
        localStorage.setItem("ingreso_normal", "no");
        localStorage.setItem("registro_facebook", "si");
        console.log(objeto);
        if(objeto==1){
          window.location = direccion;
        }else{
          FB.logout(function(response) {
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
      valor = 1;  
    }else{
      if (registro_normal=="si") {
        valor = 1;
      }else{
        valor = 0;
      }
    }

  }
}

function handleSessionResponse(response) {
    //if(response.status!="unknown"){
      FB.logout(handleSessionResponse);
    //}
  }

  // FB REGISTRATE

  function checkLoginState2() {
    reg_fb_normal=1;
    FB.getLoginStatus(function(response2) {
      statusChangeCallback2(response2);
    });
  }

  function statusChangeCallback2(response2) {
    if (response2.status === 'connected') {
      FB.api('/me?locale=en_US&fields=id,name,email,work,website,first_name,birthday,last_name,locale,picture.height(400),age_range', function(response) {
        nombre = response.first_name;
        apellido = response.last_name;
        email = response.email;
        birthday = response.age_range;
        work = response.work;
        locale = response.locale;
        acercade = response.bio;
        picture2 = response.picture;
        picture = picture2["data"].url;

        nombre_completo = nombre+" "+apellido;

        $.ajax({
          type: "POST",
          url: "Login/control/",
          data:{
            email: email,
            nombre_completo: nombre_completo
          }
        }).done(function(json){
          var objeto = $.parseJSON(json);
          facebook_count=2;
          localStorage.setItem("ingreso_normal", "no");
          localStorage.setItem("registro_facebook", "si");
          console.log(objeto);
          if(objeto==1){
            window.location = direccion;
          }else{
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
          }
        });
      });
    }
  }