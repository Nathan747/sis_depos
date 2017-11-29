  /*login*/
  $(document).ready(function() {
    $.ajax({
      type: "post",
      url: "Control_Registro/bring_mails"
    }).done(function(json) {
      var objeto = $.parseJSON(json);
      todos_los_mail = objeto;
    });

    var mostrar = function(etiqueta){
      etiqueta.addClass("puntito-add");
    }

    //BOTON SIGUIENTE REGISTRATE
    $("#registrate-form").click(function(e) {
      e.preventDefault();
      $(".contenedor-modo").animate({
        left: "-100%"
      });
      $(".contenedor-modo").css("display", "none");
      $(".formulario-padre").animate({
        right: "0",
        left: "0"
      });

      $(".formulario-fb").css("display", "none");

      $(".bloq-2").addClass("active");
        //$(".sep-2").find(".linea-separador").addClass("active-sep");
        $(".sep-1").find(".linea-separador").find(".puntito").each(function(){
          setTimeout(mostrar($(this)),16000);
        });

        $(".word-datos").addClass("word-active");
        reg_fb_normal = 0;
        modo_log = 0;
      });

    //BOTON SIGUIENTE FORMULARIO REGISTRO
    $("#siguiente-basico").click(function(e) {
      nombre = $("#nombre_login").val();
      apellido = $("#apellido_login").val();
      email = $("#email_login").val();
      telefono = $("#telefono_login").val();
      pass1 = $("#password_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      profesion = $("#lugar_login").val();
      es_egresado = $("#egresado_login").is(':checked');
      e.preventDefault();
      for (var j = 0; j < todos_los_mail.length; j++) {
        if (email == todos_los_mail[j].email_user) {
          email_existe = "existe";
        }
      }
      if (!(email_existe == "existe")) {
        $("#email_login").parent().removeClass("has-error");
        $(".error-email").text("");

        $(".contenedor-modo").css("display", "none");
        $(".formulario-padre").animate({
          left: "-100%"
        });
        $(".formulario-padre").css("display", "none");
        $(".contenedor-carreras").animate({
          right: "0",
          left: "0"
        });
        $(".bloq-3").addClass("active");
        //$(".sep-3").find(".linea-separador").addClass("active-sep");
        $(".sep-2").find(".linea-separador").find(".puntito").each(function(){
          setTimeout(mostrar($(this)),16000);
        });
        $(".word-carrera").addClass("word-active");
      } else {
        $("#email_login").parent().addClass("has-error");
        $(".error-email").text("E-mail ya en uso");
        email_existe = "";
      }

    });

    // INPUTS PASSWORD REGISTRO

    $("input[name=nombre_login]").keydown(function(event) {
      apellido = $("#apellido_login").val();
      email = $("#email_login").val();
      telefono = $("#telefono_login").val();
      pass1 = $("#password_login").val();
      pass2 = $("#password2_login").val();
      dni = $("#dni_login").val();
      profesion = $("#lugar_login").val();
      fecha_egresado = $("#fecha_login").val();

      if (event.which == 13) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");
      if ((apellido != "") && (email != "") && (dni != "") && (telefono != "") && (fecha_egresado !== "") && (pass1 !== "") && (pass2 !== "") && (profesion !== "")) {
        $("#siguiente-basico").removeAttr("disabled");
      }
    });

    $("input[name=apellido_login]").keydown(function(event) {
      nombre = $("#nombre_login").val();
      email = $("#email_login").val();
      telefono = $("#telefono_login").val();
      pass1 = $("#password_login").val();
      pass2 = $("#password2_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      profesion = $("#lugar_login").val();

      if (event.which == 13) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");

      if ((nombre != "") && (email != "") && (dni != "") && (telefono != "") && (fecha_egresado !== "") && (pass1 !== "") && (pass2 !== "") && (profesion !== "")) {
        $("#siguiente-basico").removeAttr("disabled");
      }
    });

    $("input[name=email_login]").keydown(function(event) {
      nombre = $("#nombre_login").val();
      apellido = $("#apellido_login").val();
      telefono = $("#telefono_login").val();
      pass1 = $("#password_login").val();
      pass2 = $("#password2_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      profesion = $("#lugar_login").val();

      if (event.which == 13) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");
      if ((nombre != "") && (apellido != "") && (dni != "") && (telefono != "") && (fecha_egresado !== "") && (pass1 !== "") && (pass2 !== "") && (profesion !== "")) {
        $("#siguiente-basico").removeAttr("disabled");
      }

      if ((event.which > 31) && (event.which < 166)) {
        if ((event.which != 35) && (event.which != 36) && (event.which != 45) && (event.which != 46) && (event.which != 93) && (event.which != 113) && (event.which != 115) && (event.which != 116) && (event.which != 118) && (event.which != 119) && (event.which != 120) && (event.which != 122) && (event.which != 123) && (event.which != 144) && (event.which != 44) && (event.which != 145)) {
          string5 += event.key;
        }
      } else {
        if (event.which == 192) {
          string5 += event.key;
        }
        if (event.which == 190) {
          string5 += event.key;
        }
        if (event.which == 189) {
          string5 += event.key;
        }
        if (event.which == 219) {
          string5 += event.key;
        }
        if (event.which == 186) {
          string5 += event.key;
        }
        if (event.which == 8) {
          string5 = string5.substr(0, (string5.length - 1));
        }
      }

    });

    $("input[name=telefono_login]").keydown(function(event) {
      nombre = $("#nombre_login").val();
      apellido = $("#apellido_login").val();
      email = $("#email_login").val();
      pass1 = $("#password_login").val();
      pass2 = $("#password2_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      profesion = $("#lugar_login").val();

      if (event.which == 13) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");
      if ((nombre != "") && (apellido != "") && (dni != "") && (email != "") && (fecha_egresado !== "") && (pass1 !== "") && (pass2 !== "") && (profesion !== "")) {
        $("#siguiente-basico").removeAttr("disabled");
      }
    });

    $("input[name=dni_login]").keydown(function(event) {
      nombre = $("#nombre_login").val();
      apellido = $("#apellido_login").val();
      email = $("#email_login").val();
      telefono = $("#telefono_login").val();
      pass1 = $("#password_login").val();
      pass2 = $("#password2_login").val();
      profesion = $("#lugar_login").val();
      fecha_egresado = $("#fecha_login").val();
      if (event.which == 13) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");
      if ((nombre != "") && (apellido != "") && (telefono != "") && (email != "") && (fecha_egresado !== "") && (pass1 !== "") && (pass2 !== "") && (profesion !== "")) {
        $("#siguiente-basico").removeAttr("disabled");
      }
    });

    $("input[name=date_login]").change(function(event) {
      nombre = $("#nombre_login").val();
      apellido = $("#apellido_login").val();
      email = $("#email_login").val();
      telefono = $("#telefono_login").val();
      pass1 = $("#password_login").val();
      pass2 = $("#password2_login").val();
      dni = $("#dni_login").val();
      profesion = $("#lugar_login").val();
          //var fecha_egresado = $("#fecha_login").val();
          if (event.which == 13) {
            event.preventDefault();
          }
          $(this).parent().removeClass("has-error");
          if ((nombre != "") && (apellido != "") && (telefono != "") && (email != "") && (dni !== "") && (pass1 !== "") && (pass2 !== "") && (profesion !== "")) {
            $("#siguiente-basico").removeAttr("disabled");
          }
        });

    $("input[name=lugar_login]").change(function(event) {
      nombre = $("#nombre_login").val();
      apellido = $("#apellido_login").val();
      email = $("#email_login").val();
      telefono = $("#telefono_login").val();
      pass1 = $("#password_login").val();
      pass2 = $("#password2_login").val();
      dni = $("#dni_login").val();
          //profesion = $("#lugar_login").val();
          var fecha_egresado = $("#fecha_login").val();
          if (event.which == 13) {
            event.preventDefault();
          }
          $(this).parent().removeClass("has-error");
          if ((nombre != "") && (apellido != "") && (telefono != "") && (email != "") && (dni !== "") && (pass1 !== "") && (pass2 !== "") && (fecha_egresado !== "")) {
            $("#siguiente-basico").removeAttr("disabled");
          }
        });

    $("input[name=password]").keyup(function(event) {
      nombre = $("#nombre_login").val();
      apellido = $("#apellido_login").val();
      email = $("#email_login").val();
      telefono = $("#telefono_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      profesion = $("#lugar_login").val();

      if (event.which == 13) {
        event.preventDefault();
      }

      if ((event.which > 31) && (event.which < 166)) {
        if ((event.which != 35) && (event.which != 36) && (event.which != 45) && (event.which != 46) && (event.which != 93) && (event.which != 113) && (event.which != 115) && (event.which != 116) && (event.which != 118) && (event.which != 119) && (event.which != 120) && (event.which != 122) && (event.which != 123) && (event.which != 144) && (event.which != 44) && (event.which != 145)) {
          string2 += event.key;
        }
      } else {
        if (event.which == 192) {
          string2 += event.key;
        }
        if (event.which == 8) {
          string2 = string2.substr(0, (string2.length - 1));
        }
      }

      var password2 = $("#password2_login").val();
      if (password2 == string2) {
        $(this).parent().removeClass("has-error");
        $("#password2_login").parent().removeClass("has-error");
        if ((nombre != "") && (apellido != "") && (telefono != "") && (email != "") && (dni !== "") && (fecha_egresado !== "")) {
          $("#siguiente-basico").removeAttr("disabled");
        }
      } else {
        $(this).parent().removeClass("has-error");
        $("#password2_login").parent().addClass("has-error");
      }
    });

    $("input[name=password2]").keydown(function(event) {
      if (event.which == 13) {
        event.preventDefault();
      }

      nombre = $("#nombre_login").val();
      apellido = $("#apellido_login").val();
      email = $("#email_login").val();
      telefono = $("#telefono_login").val();
      pass1 = $("#password_login").val();
      dni = $("#dni_login").val();
      fecha_egresado = $("#fecha_login").val();
      profesion = $("#lugar_login").val();
      es_egresado = $("#egresado_login").is(':checked');

      if ((event.which > 31) && (event.which < 166)) {
        if ((event.which != 35) && (event.which != 36) && (event.which != 45) && (event.which != 46) && (event.which != 93) && (event.which != 113) && (event.which != 115) && (event.which != 116) && (event.which != 118) && (event.which != 119) && (event.which != 120) && (event.which != 122) && (event.which != 123) && (event.which != 144) && (event.which != 44) && (event.which != 145)) {
          string += event.key;
        }
      } else {
        if (event.which == 192) {
          string += event.key;
        }
        if (event.which == 8) {
          string = string.substr(0, (string.length - 1));
        }
      }

      if (nombre == "") {
        $("#nombre_login").parent().addClass("has-error");
      } else {
        $("#nombre_login").parent().removeClass("has-error");
      }

      if (apellido == "") {
        $("#apellido_login").parent().addClass("has-error");
      } else {
        $("#apellido_login").parent().removeClass("has-error");
      }

      if (email == "") {
        $("#email_login").parent().addClass("has-error");
      } else {
        $("#email_login").parent().removeClass("has-error");
      }

      if (telefono == "") {
        $("#telefono_login").parent().addClass("has-error");
      } else {
        $("#telefono_login").parent().removeClass("has-error");
      }

      if (pass1 == "") {
        $("#password_login").parent().addClass("has-error");
      } else {
        $("#password_login").parent().removeClass("has-error");
      }

      if (dni == "") {
        $("#dni_login").parent().addClass("has-error");
      } else {
        $("#dni_login").parent().removeClass("has-error");
      }

      if (fecha_egresado === "") {
        $("#fecha_login").parent().addClass("has-error");
      } else {
        $("#fecha_login").parent().removeClass("has-error");
      }

      if (profesion === "") {
        $("#lugar_login").parent().addClass("has-error");
      } else {
        $("#lugar_login").parent().removeClass("has-error");
      }

      if (pass1 == string) {
        if ((nombre != "") && (apellido != "") && (email != "") && (dni != "") && (telefono !== "") && (fecha_egresado !== "")) {
          $("#siguiente-basico").removeAttr("disabled");
        }
        $("#password_login").parent().removeClass("has-error");
        $(this).parent().removeClass("has-error");
      } else {
        $("#password_login").parent().addClass("has-error");
        $(this).parent().addClass("has-error");
        $("#siguiente-basico").attr("disabled");
      }
    });


    // INPUTS PASSWORD FACEBOOK

    $("input[name=password2-fb]").keydown(function(event) {
      telefono = $("#telefono_fb").val();
      dni = $("#dni_fb").val();
      fecha_egresado = $("#fecha_login_fb").val();
      profesion = $("#lugar_fb").val();

      if (event.which == 13) {
        event.preventDefault();
      }

      if ((event.which > 31) && (event.which < 166)) {
        if ((event.which != 35) && (event.which != 36) && (event.which != 45) && (event.which != 46) && (event.which != 93) && (event.which != 113) && (event.which != 115) && (event.which != 116) && (event.which != 118) && (event.which != 119) && (event.which != 120) && (event.which != 122) && (event.which != 123) && (event.which != 144) && (event.which != 44) && (event.which != 145)) {
          string3 += event.key;
        }
      } else {
        if (event.which == 192) {
          string3 += event.key;
        }
        if (event.which == 8) {
          string3 = string3.substr(0, (string3.length - 1));
        }
      }

      pass1 = $("#password_fb").val();

      if (telefono == "") {
        $("#telefono_fb").parent().addClass("has-error");
      } else {
        $("#telefono_fb").parent().removeClass("has-error");
      }

      if (dni == "") {
        $("#dni_fb").parent().addClass("has-error");
      } else {
        $("#dni_fb").parent().removeClass("has-error");
      }

      if (fecha_egresado == "") {
        $("#fecha_login_fb").parent().addClass("has-error");
      } else {
        $("#fecha_login_fb").parent().removeClass("has-error");
      }

      if (profesion == "") {
        $("#lugar_fb").parent().addClass("has-error");
      } else {
        $("#lugar_fb").parent().removeClass("has-error");
      }

      if (pass1 == "") {
        $("#password_fb").parent().addClass("has-error");
      } else {
        $("#password_fb").parent().removeClass("has-error");
      }


      if (pass1 == string3) {
        $("#siguiente-fb").removeAttr("disabled");
        $("#password_fb").parent().removeClass("has-error");
        $(this).parent().removeClass("has-error");
      } else {
        $("#password_fb").parent().addClass("has-error");
        $(this).parent().addClass("has-error");
        $("#siguiente-fb").attr("disabled");
      }
    });

    $("input[name=password-fb]").keydown(function(event) {
      telefono = $("#telefono_fb").val();
      dni = $("#dni_fb").val();
      fecha_egresado = $("#fecha_login_fb").val();
      profesion = $("#lugar_fb").val();

      if (event.which == 13) {
        event.preventDefault();
      }

      if ((event.which > 31) && (event.which < 166)) {
        if ((event.which != 35) && (event.which != 36) && (event.which != 45) && (event.which != 46) && (event.which != 93) && (event.which != 113) && (event.which != 115) && (event.which != 116) && (event.which != 118) && (event.which != 119) && (event.which != 120) && (event.which != 122) && (event.which != 123) && (event.which != 144) && (event.which != 44) && (event.which != 145)) {
          string4 += event.key;
        }
      } else {
        if (event.which == 192) {
          string4 += event.key;
        }
        if (event.which == 8) {
          string4 = string4.substr(0, (string4.length - 1));
        }
      }

      if (telefono == "") {
        $("#telefono_fb").parent().addClass("has-error");
      } else {
        $("#telefono_fb").parent().removeClass("has-error");
      }

      if (dni == "") {
        $("#dni_fb").parent().addClass("has-error");
      } else {
        $("#dni_fb").parent().removeClass("has-error");
      }

      if (fecha_egresado == "") {
        $("#fecha_login_fb").parent().addClass("has-error");
      } else {
        $("#fecha_login_fb").parent().removeClass("has-error");
      }

      if (profesion == "") {
        $("#lugar_fb").parent().addClass("has-error");
      } else {
        $("#lugar_fb").parent().removeClass("has-error");
      }

      var password2 = $("#password2_fb").val();
      if (password2 == string4) {
        $(this).parent().removeClass("has-error");
        $("#password2_fb").parent().removeClass("has-error");
        $("#siguiente-fb").removeAttr("disabled");
      } else {
        $(this).parent().removeClass("has-error");
        $("#password2_fb").parent().addClass("has-error");
        $("#siguiente-fb").attr("disabled");
      }
    });

    $("input[name=telefono-fb]").keydown(function(event) {
      //telefono=$("#telefono_fb").val();
      dni = $("#dni_fb").val();
      fecha_egresado = $("#fecha_login_fb").val();
      profesion = $("#lugar_fb").val();

      if (event.which == 13) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");

      if ((dni != "") && (fecha_egresado != "") && (profesion != "")) {
        $("#siguiente-fb").removeAttr("disabled");
      }
    });

    $("input[name=dni_fb]").keydown(function(event) {
      telefono = $("#telefono_fb").val();
      //dni = $("#dni_fb").val();
      fecha_egresado = $("#fecha_login_fb").val();
      profesion = $("#lugar_fb").val();

      if (event.which == 13) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");

      if ((telefono != "") && (fecha_egresado != "") && (profesion != "")) {
        $("#siguiente-fb").removeAttr("disabled");
      }
    });

    $("#fecha_login_fb").keydown(function(event) {
      telefono = $("#telefono_fb").val();
      dni = $("#dni_fb").val();
      //fecha_egresado = $("#fecha_login_fb").val();
      profesion = $("#lugar_fb").val();

      if (event.which == 13) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");

      if ((telefono != "") && (dni != "") && (profesion != "")) {
        $("#siguiente-fb").removeAttr("disabled");
      }
    });

    $("input[name=lugar_fb]").keydown(function(event) {
      telefono = $("#telefono_fb").val();
      dni = $("#dni_fb").val();
      fecha_egresado = $("#fecha_login_fb").val();
      //profesion = $("#lugar_fb").val();

      if (event.which == 13) {
        event.preventDefault();
      }
      $(this).parent().removeClass("has-error");

      if ((telefono != "") && (dni != "") && (fecha_egresado != "")) {
        $("#siguiente-fb").removeAttr("disabled");
      }
    });


    //BOTON SIGUIENTE FORMULARIO FACEBOOK
    $("#siguiente-fb").click(function(e) {
      telefono = $("#telefono_fb").val();
      pass1 = $("#password_fb").val();
      dni = $("#dni_fb").val();
      fecha_egresado = $("#fecha_login_fb").val();
      profesion = $("#lugar_fb").val();
      es_egresado = $("#egresado_fb").is(':checked');

      e.preventDefault();
      $(".contenedor-modo").css("display", "none");
      $(".formulario-padre").animate({
        left: "-100%"
      });
      $(".formulario-padre").css("display", "none");
      $(".contenedor-carreras").animate({
        right: "0",
        left: "0"
      });

      $(".bloq-3").addClass("active");
      $(".word-carrera").addClass("word-active");
      //$(".sep-3").find(".linea-separador").addClass("active-sep");
<<<<<<< HEAD
      $(".sep-3").find(".linea-separador").find(".puntito").each(function(){
=======
      $(".sep-2").find(".linea-separador").find(".puntito").each(function(){
>>>>>>> adba878916692d9f2f57c748b7c1872bd313b2e9
        setTimeout(mostrar($(this)),16000);
      });
    });


    $("#siguiente-fin").click(function() {
      if (es_egresado) {
        var egresado = 1
      } else {
        var egresado = 0;
      }
      $(".class").click();
      console.log($(".fb-xfbml-parse-ignore"));

      $.ajax({
        type: "POST",
        url: "Control_Registro/load_user_info/",
        data: {
          nombre: nombre,
          apellido: apellido,
          email: email,
          telefono: telefono,
          egresado: egresado,
          dni: dni,
          fecha_egresado: fecha_egresado,
          profesion: profesion,
          password: pass1,
          latitud: latitude,
          longitud: longitude,
          facultad: facultad_number,
          carrera: carrera_number,
          picture: picture,
          id_colaborador: id_colaborador
        }
      }).done(function(json) {
        if (reg_fb_normal == 0) {
          localStorage.setItem("ingreso_normal", "si");
          localStorage.setItem("registro_facebook", "no");
        } else {
          localStorage.setItem("ingreso_normal", "no");
          localStorage.setItem("registro_facebook", "si");
        }
        window.location = direccion;
      }).fail(function(xhr, status, error) {
        console.log(xhr);
        console.log(status);
        console.log(error);
        console.log("FAIL");
      });
    });


    // INICIAR SESION

    $(".iniciar-sesion").click(function(e) {
      e.preventDefault();
      $(".texto-no-user").animate({
        top: "-30px"
      });
      var email_ingresar = $("#email_ingresar2").val();
      var password_ingresar = $("#password_ingresar2").val();
      console.log(email_ingresar);
      console.log(password_ingresar);
      $.ajax({
        type: "POST",
        url: "Control_Login/enviar_datos/",
        data: {
          email: email_ingresar,
          password: password_ingresar
        }
      }).done(function(json) {
        var objeto = $.parseJSON(json);
        console.log(objeto);
        if (objeto.entro == 1) {
          window.location = direccion;
        } else {
          $(".texto-no-user").animate({
            top: "0px"
          });
        }
      }).fail(function(xhr, status, error) {
        console.log(xhr);
        console.log(status);
        console.log(error);
        console.log("FAIL");
      });
    });


    //SALIR

    $("#salir").click(function(e) {
      console.log("CLICK");
      e.preventDefault();
      localStorage.setItem("ingreso_normal", "no");
      localStorage.setItem("registro_facebook", "no");
      $.ajax({
        type: "POST",
        url: "inicio/logout/"
      }).done(function(json) {
        var objeto = $.parseJSON(json);
        console.log(objeto);
        FB.getLoginStatus(function(response) {
          console.log("FB");
          if (response && response.status === 'connected') {
            console.log("FB CONNECTED");
            FB.logout(function(response) {
              if (objeto.eliminado) {
                window.location = direccion;
              }
            });
          } else {
            console.log("FB NOT CONNECTED");
            if (objeto.eliminado) {
              window.location = direccion;
            }
          }
        });
        if (objeto.eliminado) {
          window.location = direccion;
        }
        facebook_count = 0;
      }).fail(function(xhr, status, error) {
        console.log(xhr);
        console.log(status);
        console.log(error);
        console.log("FAIL");
      });
    });

    $(".salir").click(function(e) {
      e.preventDefault();
      localStorage.setItem("ingreso_normal", "no");
      localStorage.setItem("registro_facebook", "no");
      $.ajax({
        type: "POST",
        url: "inicio/logout/"
      }).done(function(json) {
        var objeto = $.parseJSON(json);
        //FB.getLoginStatus(handleSessionResponse);
        FB.getLoginStatus(function(response) {
          if (response && response.status === 'connected') {
            FB.logout(function(response) {
              if (objeto.eliminado) {
                window.location = direccion;
              }
            });
          } else {
            if (objeto.eliminado) {
              window.location = direccion;
            }
          }
        });
        facebook_count = 0;
      }).fail(function(xhr, status, error) {
        console.log(xhr);
        console.log(status);
        console.log(error);
        console.log("FAIL");
      });
    });

    $(".btn-recup-pass").click(function() {
      var email_recup = $("#email_recupera").val();
      $(".texto-recupera").animate({
        top: "-25px"
      });
      if (email_recup == "") {
        $("#email_recupera").parent().addClass("has-error");
      } else {
        $("#email_recupera").parent().removeClass("has-error");
        $.ajax({
          type: "post",
          url: "Login/validar_mail/",
          data: {
            email: email_recup
          }
        }).done(function(json) {
          var objeto = $.parseJSON(json);
          if (objeto.encontro == 1) {
            $(".texto-recupera").text("En breves te llegará un mail con tu contraseña");
            $(".texto-recupera").css("color", "green");
            $(".texto-recupera").animate({
              top: "0px"
            });
          } else {
            $(".texto-recupera").text("E-Mail incorrecto");
            $(".texto-recupera").css("color", "red");
            $(".texto-recupera").animate({
              top: "0px"
            });
          }
        });
      }
    });


    // LIMPIAR LOS CAMPOS DEL PERFIL

    $("#btnClean").click(function() {
      $("#txtName").val("");
      $("#txtSurname").val("");
      $("#txtEmail").val("");
      $("#txtPhone").val("");
      $("#txtDni").val("");
      $("#txtBday").val("");
      $("#txtPassword").val("");
      $("#txtQualification").val("");
      $("#txtBiography").val("");
    });

    // MODIFICAR LA INFORMACION DEL PERFIL

    $(".boton-modificar").click(function() {
      console.log("click");
      var nombre_usuario = $("#txtName").val();
      var apellido_usuario = $("#txtSurname").val();
      var telefono_usuario = $("#txtPhone").val();
      var dni_usuario = $("#txtDni").val();
      var fecha_usuario = $("#txtBday").val();
      //var email_usuario = $("#txtEmail").val();
      var pass_usuario = $("#txtPassword").val();
      var profesion_usuario = $("#txtQualification").val();
      var biografia_usuario = $("#txtBiography").val();
      var es_egresado_usuario = $("#ejemplo-2").prop("checked");
      var facultad_usuario = $("#universidad_modify").val();
      var carrera_usuario = 1;

      var v = 1;
      $(".selecciones-modify").each(function() {
        if ($(this).find("select").val() != null) {
          console.log("FACULTAD: " + facultad_usuario);
          console.log("CARRERA: " + $(this).find("select").val());
          carrera_usuario = $(this).find("select").val();
        }
        v++;
      });

      if (es_egresado_usuario == true) {
        es_egresado_usuario = 1;
      } else {
        es_egresado_usuario = 0;
      }

      $.ajax({
        url: "Perfil/actualizar_perfil",
        type: "post",
        data: {
          nombre: nombre_usuario,
          apellido: apellido_usuario,
          telefono: telefono_usuario,
          dni: dni_usuario,
          profesion: profesion_usuario,
          biografia: biografia_usuario,
          fecha: fecha_usuario,
          pass: pass_usuario,
          egresado: es_egresado_usuario,
          facultad: facultad_usuario,
          carrera: carrera_usuario,
          latitud: latitude,
          longitud: longitude
        }
      }).done(function(json) {
        var objeto = $.parseJSON(json);

        $(".username-change").find("div").text(objeto.username);
        $(".second").find(".name").find("strong").text(objeto.username);
        $(".second").find(".job").find("strong").text(objeto.profesion);
        $(".profile").animate({
          scrollTop: 0
        }, 2000);
      });
    });

    $(".examinar").click(function() {
      $("#archivo_oculto1").click();
    });


    $("#archivo_oculto1").change(function() {
      var imagen = $("#archivo_oculto1").val();
      console.log("")
      $(".changeimg").click();
    });

  });

  $(window).on('load', function() {
    $("#preloader").fadeOut(1000);
  });