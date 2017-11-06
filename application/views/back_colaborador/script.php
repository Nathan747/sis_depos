<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/backend/mapa.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/login_registro.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/AjaxUpload.2.0.min.js"); ?>"></script>

<script>  

    var objetos;

    $("#boton-invitado").click(function(){
        var email_invitado = $("#email-invitado").val();
        $.ajax({
            type: "POST",
            url: "generar_link",
            data: {
                email: email_invitado
            }
        }).done(function(json){
            var objeto = $.parseJSON(json);
			      console.log(objeto);
            $(".padre-mensaje-admin").animate({
                top: "-200px"
            },function(){
                $(".padre-mensaje-admin").animate({
                    top: "0px"
                });
            });
            //window.location = objeto.link;
        });
        
        
    });

    function administrar_movimientos(seleccionado, anterior){
      switch(seleccionado){
        case 1:
          switch(anterior){
            case 2: 
              $(".contenedor-formulario").animate({
                top: "-965px"
              },function(){
                $(".contenedor-editar-colaborador").animate({
                  left: "0px"
                });
              });
              
              break;
            case 3: 
              $("#resumen-colaborador").animate({
                top: "500px"
              },function(){
                $(".contenedor-editar-colaborador").animate({
                  left: "0px"
                });
              });
              break;
          } 

          break;
        case 2: 
          switch(anterior){
            case 1: 
                $(".contenedor-editar-colaborador").animate({
                  left: "-100%"
                },function(){
                  $(".contenedor-formulario").animate({
                    top: "-506px"
                  });
                });                
              break;
            case 3: 
            $(".contenedor-formulario").animate({
                top: "-506px"
              });
              $("#resumen-colaborador").animate({
                top: "0px"
              });
              break;
          }
          break;
        
        case 3: 
          switch(anterior){
            case 1: 
            $(".contenedor-editar-colaborador").animate({
                  left: "-100%"
                },function(){
                  $("#resumen-colaborador").animate({
                    top: "-873px"
                  });
                });   
            break;
            case 2: 
            $(".contenedor-formulario").animate({
              top: "-965px"
            });
            $("#resumen-colaborador").animate({
              top: "-873px"
            });
            break;
          }
          break;
      }
    }

    $("#editar-perfil-colaborador").click(function(){
      var indice = 1;
      var selected;
      $(this).parent().find("a").each(function(){
        if($(this).hasClass("li-active")){
          selected = indice;
          console.log(indice);
          $(this).removeClass("li-active");
        }
        if(indice==1){
          $(this).addClass("li-active");
        }
        indice++;
      });
      administrar_movimientos(1,selected);
    });

    $("#enviar-invitación-colaborador").click(function(){
      var indice = 1;
      var selected;
      $(this).parent().find("a").each(function(){
        if($(this).hasClass("li-active")){
          selected = indice;
          console.log(indice);
          $(this).removeClass("li-active");
        }
        if(indice==2){
          $(this).addClass("li-active");
        }
        indice++;
      });
      administrar_movimientos(2,selected);
    });

    $("#resumen-colaborador2").click(function(){
      var indice = 1;
      var selected;
      $(this).parent().find("a").each(function(){
        if($(this).hasClass("li-active")){
          selected = indice;
          console.log(indice);
          $(this).removeClass("li-active");
        }
        if(indice==3){
          $(this).addClass("li-active");
        }
        indice++;
      });
      administrar_movimientos(3,selected);
    });

    $("#editar-boton-invitado").click(function(){
      var name = $("#nombre-perfil-colaborador").val();
      var lastname = $("#apellido-perfil-colaborador").val();
      var email = $("#email-perfil-colaborador").val();
      var phone = $("#telefono-perfil-colaborador").val();
      var pass = $("#pass-perfil-colaborador").val();
     
      
        $.ajax({
          type: "POST",
          url: "modificar_colaborador",
          data: {
            nombre: name,
            apellido: lastname,
            email: email,
            telefono: phone,
            pass: pass
          }
        }).done(function(json){
<<<<<<< HEAD
          console.log("changed");
=======
          $(".padre-mensaje-editar-colaborador").animate({
            
          });
>>>>>>> b45e9a3e86663953a1d81590ed80f10a4bc4865c
        });
    });
    

  var datos_perfil=0;
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
  var clase = 0;
  var facultad_number;
  var carrera_number;
  var picture="";

  function decodificar_facultad(indice){
    var string_facultad;
    switch(indice){
      case 1:{
        string_facultad = "Facultad de Artes y Diseño";
        break;
      }

      case 2:{
        string_facultad = "Facultad de Ciencias Agrarias";
        break;
      }

      case 3:{
        string_facultad = "Facultad de Ciencias Aplicadas a la Industria";
        break;
      }

      case 4:{
        string_facultad = "Facultad de Ciencias Económicas";
        break;
      }

      case 5:{
        string_facultad = "Facultad de Ciencias Exactas y Naturales";
        break;
      }

      case 6:{
        string_facultad = "Facultad de Ciencias Médicas";
        break;
      }

      case 7:{
        string_facultad = "Facultad de Ciencias Políticas y Sociales";
        break;
      }

      case 8:{
        string_facultad = "Facultad de Derecho";
        break;
      }

      case 9:{
        string_facultad = "Facultad de Educación";
        break;
      }

      case 10:{
        string_facultad = "Facultad de Filosofía y Letras";
        break;
      }

      case 11:{
        string_facultad = "Facultad de Ingeniería";
        break;
      }

      case 12:{
        string_facultad = "Facultad de Odontología";
        break;
      }

      case 13:{
        string_facultad = "Instituto Balseiro";
        break;
      }

      case 14:{
        string_facultad = "Instituto Tecnológico Universitario";
        break;
      }

      case 15:{
        string_facultad = "Instituto Universitario de Seguridad Pública";
        break;
      }
    }

    return string_facultad;
  }


  function decodificar_carrera(indice){
    var string_carrera;
    switch(indice){
      case 1:{
        string_carrera = "Ciclo de Formación Básica en Artes Visuales";
        break;
      }

      case 2:{
        string_carrera = "Ciclo de Prof. de Grado Univ. de Diseño";
        break;
      }

      case 3:{
        string_carrera = "Ciclo de Prof. de Grado Univ. en Música";
        break;
      }

      case 4:{
        string_carrera = "Diseño Escenográfico";
        break;
      }

      case 5:{
        string_carrera = "Diseño Gráfico";
        break;
      }

      case 6:{
        string_carrera = "Diseño Industrial";
        break;
      }

      case 7:{
        string_carrera = "Licenciatura en Arte Dramático";
        break;
      }

      case 8:{
        string_carrera = "Licenciatura en Artes Plásticas";
        break;
      }

      case 9:{
        string_carrera = "Licenciatura en Canto";
        break;
      }

      case 10:{
        string_carrera = "Licenciatura en Cerámica Artística";
        break;
      }

      case 11:{
        string_carrera = "Licenciatura en Cerámica Industrial";
        break;
      }

      case 12:{
        string_carrera = "Licenciatura en Composición Musical";
        break;
      }

      case 13:{
        string_carrera = "Licenciatura en Dirección Coral";
        break;
      }

      case 14:{
        string_carrera = "Licenciatura en Historia de las Artes Plásticas";
        break;
      }

      case 15:{
        string_carrera = "Licenciatura en Instrumento";
        break;
      }

      case 16:{
        string_carrera = "Licenciatura en Música Popular";
        break;
      }

      case 17:{
        string_carrera = "Licenciatura en Órgano";
        break;
      }

      case 18:{
        string_carrera = "Licenciatura en Piano o Guitarra";
        break;
      }
      
      case 19:{
        string_carrera = "Profesorado de Grado Universitario de Teorías Musicales";
        break;
      }
      
      case 20:{
        string_carrera = "Profesorado de Grado Universitario en Artes Visuales";
        break;
      }
      
      case 21:{
        string_carrera = "Profesorado de Grado Universitario en Cerámica Artística";
        break;
      }
      
      case 22:{
        string_carrera = "Profesorado de Grado Universitario en Historia del Arte";
        break;
      }
      
      case 23:{
        string_carrera = "Profesorado de Grado Universitario en Música";
        break;
      }
      
      case 24:{
        string_carrera = "Profesorado de Grado Universitario en Teatro";
        break;
      }
      
      case 25:{
        string_carrera = "Bromatología";
        break;
      }
      
      case 26:{
        string_carrera = "Ingeniería Agronómica";
        break;
      }
      
      case 27:{
        string_carrera = "Ingeniería en Recursos Naturales Renovables";
        break;
      }
      
      case 28:{
        string_carrera = "Licenciatura en Bromatología";
        break;
      }
      
      case 29:{
        string_carrera = "Tecnicatura Universitaria en Enología y Viticultura";
        break;
      }
      
      case 30:{
        string_carrera = "Tecnicatura Universitaria en Producción Animal de Zonas Áridas";
        break;
      }
      
      case 31:{
        string_carrera = "Bromatología";
        break;
      }
      
      case 32:{
        string_carrera = "Ciclo de Lic. en Enología";
        break;
      }
      
      case 33:{
        string_carrera = "Ingeniería en Industrias de la Alimentación";
        break;
      }
      
      case 34:{
        string_carrera = "Ingeniería Química ";
        break;
      }
      
      case 35:{
        string_carrera = "Profesorado de Grado Universitario en Química";
        break;
      }
      
      case 36:{
        string_carrera = "Técnico Universitario en Enología y Viticultura";
        break;
      }
      
      case 37:{
        string_carrera = "Ciclo de Formación Básica en Ciencias Económicas";
        break;
      }
      
      case 38:{
        string_carrera = "Ciclo de Lic. en Gestión de Negocios Regionales";
        break;
      }
      
      case 39:{
        string_carrera = "Contador Público Nacional";
        break;
      }
      
      case 40:{
        string_carrera = "Licenciatura en Administración";
        break;
      }
      
      case 41:{
        string_carrera = "Licenciatura en Economía";
        break;
      }
      
      case 42:{
        string_carrera = "Licenciatura en Logística";
        break;
      }
      
      case 43:{
        string_carrera = "Ciclo General de Conocimientos Básicos en Ciencias Exactas y Naturales";
        break;
      }
      
      case 44:{
        string_carrera = "Licenciatura en Ciencias Básicas con Orientación en Biología";
        break;
      }
      
      case 45:{
        string_carrera = "Licenciatura en Ciencias Básicas con Orientación en Física";
        break;
      }
      
      case 46:{
        string_carrera = "Licenciatura en Ciencias Básicas con Orientación en Geología";
        break;
      }
      
      case 47:{
        string_carrera = "Licenciatura en Ciencias Básicas con Orientación en Matemática";
        break;
      }
      
      case 48:{
        string_carrera = "Licenciatura en Ciencias Básicas con Orientación en Química";
        break;
      }
      
      case 49:{
        string_carrera = "Profesorado de Grado Universitario en Ciencias Básicas Orientación en Biología";
        break;
      }
      
      case 50:{
        string_carrera = "Profesorado de Grado Universitario en Ciencias Básicas Orientación en Física";
        break;
      }
      
      case 51:{
        string_carrera = "Profesorado de Grado Universitario en Ciencias Básicas Orientación en Matemática";
        break;
      }
      
      case 52:{
        string_carrera = "Profesorado de Grado Universitario en Ciencias Básicas Orientación en Química";
        break;
      }
      
      case 53:{
        string_carrera = "Ciclo de Lic. en Enfermería";
        break;
      }
      
      case 54:{
        string_carrera = "Ciclo de Licenciatura en Higiene y Seguridad en el Trabajo";
        break;
      }
      
      case 55:{
        string_carrera = "Enfermería Universitaria";
        break;
      }
      
      case 56:{
        string_carrera = "Medicina";
        break;
      }
      
      case 57:{
        string_carrera = "Tecnicatura Universitaria en Anestesia";
        break;
      }
      
      case 58:{
        string_carrera = "Tecnicatura Universitaria en Diagnóstico por Imágenes";
        break;
      }
      
      case 59:{
        string_carrera = "Tecnicatura Universitaria en Esterilización";
        break;
      }
      
      case 60:{
        string_carrera = "Tecnicatura Universitaria en Hemoterapia";
        break;
      }
      
      case 61:{
        string_carrera = "Tecnicatura Universitaria en Laboratorio";
        break;
      }

      case 62:{
        string_carrera = "Tecnicatura Universitaria en Promoción de la Salud";
        break;
      }

      case 63:{
        string_carrera = "Tecnicatura Universitaria en Quirófano";
        break;
      }

      case 64:{
        string_carrera = "Ciclo de Profesorado para Graduados de la carrera de Ciencia Política y Administración Pública";
        break;
      }

      case 65:{
        string_carrera = "Ciclo de Profesorado para Graduados de la carrera de Comunicación Social";
        break;
      }

      case 66:{
        string_carrera = "Ciclo de Profesorado para Graduados de la carrera de Sociología";
        break;
      }

      case 67:{
        string_carrera = "Ciclo de Profesorado para Graduados de la carrera de Trabajo Social";
        break;
      }

      case 68:{
        string_carrera = "Licenciatura en Ciencia Política y Administración Pública";
        break;
      }

      case 69:{
        string_carrera = "Licenciatura en Comunicación Social";
        break;
      }

      case 70:{
        string_carrera = "Licenciatura en Sociología";
        break;
      }

      case 71:{
        string_carrera = "Licenciatura en Trabajo Social";
        break;
      }

      case 72:{
        string_carrera = "Tecnicatura en Gestión de Políticas Públicas";
        break;
      }

      case 73:{
        string_carrera = "Tecnicatura Universitaria en Producción Audiovisual";
        break;
      }

      case 74:{
        string_carrera = "Abogacía";
        break;
      }

      case 75:{
        string_carrera = "Ciclo de Licenciatura en Psicomotricidad Educativa";
        break;
      }

      case 76:{
        string_carrera = "Ciclo de Prof. de Grado Univ. en Informática";
        break;
      }

      case 77:{
        string_carrera = "Licenciatura en Terapia del Lenguaje";
        break;
      }

      case 78:{
        string_carrera = "Profesorado Universitario de Educación Inicial";
        break;
      }

      case 79:{
        string_carrera = "Profesorado Universitario de Educación para Personas Sordas";
        break;
      }

      case 80:{
        string_carrera = "Profesorado Universitario de Educación Primaria";
        break;
      }

      case 81:{
        string_carrera = "Profesorado Universitario de Pedagogía Terapéutica en Discapacidad Intelectual con Orientación en Discapacidad Motora";
        break;
      }

      case 82:{
        string_carrera = "Profesorado Universitario de Pedagogía Terapéutica en Discapacidad Visual";
        break;
      }

      case 83:{
        string_carrera = "Tecnicatura en Cuidados Infantiles";
        break;
      }

      case 84:{
        string_carrera = "Tecnicatura en Interpretación de Lengua de Señas";
        break;
      }

      case 85:{
        string_carrera = "Tecnicatura Universitaria en Educación Social";
        break;
      }

      case 86:{
        string_carrera = "Ciclo de Licenciatura en Literatura Infantil";
        break;
      }

      case 87:{
        string_carrera = "Ciclo de Profesorado para Profesionales Universitarios";
        break;
      }

      case 88:{
        string_carrera = "Geógrafo Profesional";
        break;
      }

      case 89:{
        string_carrera = "Licenciatura en Ciencias de la Educación";
        break;
      }

      case 90:{
        string_carrera = "Licenciatura en Filología Inglesa";
        break;
      }

      case 91:{
        string_carrera = "Licenciatura en Filosofía";
        break;
      }

      case 92:{
        string_carrera = "Licenciatura en Francés";
        break;
      }

      case 93:{
        string_carrera = "Licenciatura en Geografía";
        break;
      }

      case 94:{
        string_carrera = "Licenciatura en Historia";
        break;
      }

      case 95:{
        string_carrera = "Licenciatura en Letras";
        break;
      }

      case 96:{
        string_carrera = "Licenciatura en Turismo";
        break;
      }

      case 97:{
        string_carrera = "Profesorado de Grado Universitario en Ciencias de la Educación";
        break;
      }

      case 98:{
        string_carrera = "Profesorado de Grado Universitario en Filosofía";
        break;
      }

      case 99:{
        string_carrera = "Profesorado de Grado Universitario en Geografía";
        break;
      }

      case 100:{
        string_carrera = "Profesorado de Grado Universitario en Historia";
        break;
      }

      case 101:{
        string_carrera = "Profesorado de Grado Universitario en Lengua y Cultura Inglesas";
        break;
      }

      case 102:{
        string_carrera = "Profesorado de Grado Universitario en Lengua y Literatura";
        break;
      }

      case 103:{
        string_carrera = "Profesorado de Grado Universitario en Lengua y Literatura Francesas";
        break;
      }

      case 104:{
        string_carrera = "Profesorado de Grado Universitario en Portugués";
        break;
      }

      case 105:{
        string_carrera = "Tecnicatura Universitaria de Francés";
        break;
      }

      case 106:{
        string_carrera = "Tecnicatura Universitaria en Cartografía, Sistemas de Información Geográfica y Teledetección";
        break;
      }

      case 107:{
        string_carrera = "Traductorado Público Inglés - Español";
        break;
      }

      case 108:{
        string_carrera = "Arquitectura";
        break;
      }

      case 109:{
        string_carrera = "Ingeniería Civil";
        break;
      }

      case 110:{
        string_carrera = "Ingeniería de Petróleos";
        break;
      }

      case 111:{
        string_carrera = "Ingeniería en Mecatrónica";
        break;
      }

      case 112:{
        string_carrera = "Ingeniería Industrial";
        break;
      }

      case 113:{
        string_carrera = "Licenciatura en Ciencias de la Computación";
        break;
      }

      case 114:{
        string_carrera = "Odontología";
        break;
      }

      case 115:{
        string_carrera = "Tecnicatura Universitaria en Asistencia Odontológica";
        break;
      }

      case 116:{
        string_carrera = "Tecnicatura Universitaria en Prótesis Dental";
        break;
      }

      case 117:{
        string_carrera = "Ingeniería en Telecomunicaciones";
        break;
      }

      case 118:{
        string_carrera = "Ingeniería Mecánica";
        break;
      }

      case 119:{
        string_carrera = "Ingeniería Nuclear";
        break;
      }

      case 120:{
        string_carrera = "Licenciatura en Física";
        break;
      }

      case 121:{
        string_carrera = "Tecnicatura en Higiene y Seguridad en el Trabajo";
        break;
      }

      case 122:{
        string_carrera = "Tecnicatura Universitaria en Electricidad y Sistemas de Control Industriales";
        break;
      }

      case 123:{
        string_carrera = "Tecnicatura Universitaria en Electricidad y Sistemas de Control Industriales";
        break;
      }

      case 124:{
        string_carrera = "Tecnicatura Universitaria en Gestión de Empresas";
        break;
      }

      case 125:{
        string_carrera = "Tecnicatura Universitaria en Instalaciones Industriales y Mantenimiento";
        break;
      }

      case 126:{
        string_carrera = "Tecnicatura Universitaria en Logística y Transporte";
        break;
      }

      case 127:{
        string_carrera = "Tecnicatura Universitaria en Marketing";
        break;
      }

      case 128:{
        string_carrera = "Tecnicatura Universitaria en Producción Industrial Automatizada";
        break;
      }

      case 129:{
        string_carrera = "Tecnicatura Universitaria en Redes y Telecomunicaciones";
        break;
      }

      case 130:{
        string_carrera = "Licenciatura en Seguridad Pública";
        break;
      }

      case 131:{
        string_carrera = "Tecnicatura Universitaria en Seguridad Penitenciaria";
        break;
      }

      case 132:{
        string_carrera = "Tecnicatura Universitaria en Seguridad Pública";
        break;
      }
    }

    return string_carrera;
  }


</script>

<script src="<?php echo base_url("assets/js/backend/logic.js"); ?>"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdbzPyzRdoXfcf-G_IAlFXgukEWqdr5uI&callback=initMap">
</script>

<script src="<?php echo base_url("assets/js/facebook.js"); ?>"></script>

<!--facebook api-->