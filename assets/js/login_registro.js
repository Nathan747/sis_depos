/*nav bar */

var target=$(".navbar-collapse");
var clicks;

var clickeado=1;
$(".navbar-toggle").click(function(e){
  e.preventDefault();
  if (clickeado){

    $(".navbar-collapse").css("display","block");
    $(".navbar-right").animate({
      top:"0px"
    });
    clickeado=0;
//$(".navbar-collapse").css("display","inline-block");

}else{
  $(".navbar-right").animate({
    top:"-200px"
  },function(){
    $(".navbar-collapse").css("display","none");
  });
  clickeado=1;
     //$(".navbar-collapse").css("display","inline-block");
   }
 });
/*nav bar */
var Closed;

/*menu hamburguesa */
$('document').ready(function () {
  $("#contenedor-loader").animate({
    opacity: "1"
  },2000);
  Closed = false;

  $('.hamburger').click(function (e) {

    if (Closed == true) {

      $(".navbar-toggle").click();
      $(this).removeClass('open');
      $(this).addClass('closed');
      Closed = false;
    } else {     
      $(".navbar-toggle").click();          
      $(this).removeClass('closed');
      $(this).addClass('open');
      Closed = true;

    }
  });
});

/*menu hamburguesa*/ 




$('#cerrar-login').click(function(e){
  e.preventDefault();
  $('.login').animate({
    right: "-100%"
  },1000,function(){
    $(".contenedor-olvide-pass").animate({
      left: "105%"
    });
    $(".contenedor-inicio-sesion").animate({
      left: "0px"
    });

    $(".face").animate({
      left: "0px"
    });

    $(".face + div").animate({
      left: "0px"
    });
    $(".login").css("display","none");
  });

});

$('#ingresar').click(function(e){
  e.preventDefault();
  Closed = true;
  $(".login").css("display","block");
  $('.hamburger').click();
  $('.login').animate({
    right: "0"
  },1000);
  $('.contenedor-registro').animate({
    right: "-300%"
  },1000,function(){
    $('.contenedor-registro').css("display","none");
  });

});


//BOTON CERRAR
$('#cerrar-registro').click(function(e){
  e.preventDefault();
  $('.contenedor-registro').animate({
    right: "-300%"
  }, 1000, function(){
    $(".contenedor-registro").css("display","none");
    $(".contenedor-modo").css("display","none");
    $(".contenedor-carreras").css("display","none");
    $(".formulario-padre").css("display","none");
    $(".mapa-registro").css("display","none");
    $(".siguiente-carrera").css("display","none");
    $("#siguiente-run").css("display","none");
    $(".siguiente-carrera").css("left","0");
  });

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

  $(".contenedor-carreras").css("left","0");
  $(".contenedor-modo").css("right","-100%");
  $(".contenedor-modo").css("left","100%");
  $(".formulario-padre").css("left","100%");
  $(".formulario-padre").css("right","-100%");
  $(".mapa-registro").css("right","-100%");
  $(".mapa-registro").css("left","100%");

  $(".contenedor-registro").css("overflow","hidden");

});

//BOTON CERRAR DONACIÓN

$("#cerrar-donacion").click(function(e){
  e.preventDefault();
  $("#afterloader").fadeIn(1000, function(){
    window.location = direccion;
  });
  $(".contenedor-donar").animate({
    right: "-250%"
  });
  $(".contenedor-mercado-pago").css("left","0");
  $(".contenedor-paypal").css("right","0");
  $(".contenedor-paypal").css("padding","38px 40px 0px 0px");

  $(".contenedor-mercado-pago").css("width","50%");
  $(".contenedor-paypal").css("width","50%");

  $(".contenedor-lista-pp").css("top","-300%");
  $(".contenedor-lista-mp").css("top","-300%");

  $(".contenedor-modo-donar").css("display","inline-block");
  $(".contenedor-mensaje-confirmacion").css("display","none");
  $(".wizard-gracias").css("display","none");
  $(".wizard-donar").css("display","inline-block");

});

//BOTON REGISTRATE HEADER
$('#registrate').click(function(e){
  e.preventDefault();

  $(".contenedor-registro").css("display","flex");

  Closed = true;
  $('.hamburger').click();

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

  $(".contenedor-registro").css("overflow","hidden");
  $('.contenedor-registro').animate({
    right: "0"
  }, 1000);
  $('.login').animate({
    right: "-100%"
  },1000,function(){
    $(".login").css("display","none");
  });
});

var mostrar = function(etiqueta){
  etiqueta.addClass("puntito-add");
}

//BOTON SIGUIENTE CARRERA
$("#siguiente-run").click(function(e){
  e.preventDefault();
  $('.contenedor-carreras').animate({
    left: "-100%"
  });
  $(".siguiente-carrera").animate({
    left: "-100%"
  });
  $('.contenedor-carreras').css("display","none");
  $('.siguiente-carrera').css("display","none");
  $(".mapa-registro").css("display","inline-block");
  google.maps.event.trigger(map_register, 'resize') 
  $(".mapa-registro").animate({
    right: "0",
    left: "0"
  });
  $(".bloq-4").addClass("active");
  //$(".sep-4").find(".linea-separador").addClass("active-sep");
  $(".sep-3").find(".linea-separador").find(".puntito").each(function(){
    setTimeout(mostrar($(this)),16000);
  });
  $(".word-mapa").addClass("word-active");
});

var remover = function(etiqueta){
  etiqueta.removeClass("puntito-add");
}

//BOTONES CLICKEABLES

$("#bloque-01").click(function(e){
  e.preventDefault();
  $("#bloque-02").find(".bloque-wizard").removeClass("active");
  $("#bloque-03").find(".bloque-wizard").removeClass("active");
  $("#bloque-04").find(".bloque-wizard").removeClass("active");
  //$(".sep-2").find(".linea-separador").removeClass("active-sep");
  //$(".sep-3").find(".linea-separador").removeClass("active-sep");
  $(".sep-3").find(".linea-separador").find(".puntito").each(function(){
    setTimeout(remover($(this)),16000);
  });
  $(".sep-2").find(".linea-separador").find(".puntito").each(function(){
    setTimeout(remover($(this)),16000);
  });
  $(".sep-1").find(".linea-separador").find(".puntito").each(function(){
    setTimeout(remover($(this)),16000);
  });
  
  $(".word-carrera").removeClass("word-active");
  $(".word-datos").removeClass("word-active");
  $(".word-mapa").removeClass("word-active");

  $(".contenedor-modo").css("display","flex");
  $(".contenedor-modo").animate({
    left: "0"
  });


  $(".contenedor-registro").css("overflow","hidden");

  $(".contenedor-carreras").css("display","none");
  $(".formulario-padre").css("display","none");
  $(".mapa-registro").css("display","none");
  $(".siguiente-carrera").css("display","none");
  $("#siguiente-run").css("display","none");
  $(".siguiente-carrera").css("left","0");

  $(".formulario-padre").css("left","100%");
  $(".formulario-padre").css("right","-100%");
  $(".contenedor-carreras").css("right","-100%");
  $(".contenedor-carreras").css("left","100%");
  $(".mapa-registro").css("right","-100%");
  $(".mapa-registro").css("left","100%");

});

$("#bloque-02").mouseover(function(){
  if(is_facebook){
    $("#bloque-02").css("cursor","default");
  }
});


$("#bloque-02").click(function(e){
  e.preventDefault();
  if(is_facebook==0){
    if($(this).find(".bloque-wizard").hasClass("active")){
      $("#bloque-03").find(".bloque-wizard").removeClass("active");
      $("#bloque-04").find(".bloque-wizard").removeClass("active");
      $(".sep-3").find(".linea-separador").find(".puntito").each(function(){
        setTimeout(remover($(this)),16000);
      });
      $(".sep-2").find(".linea-separador").find(".puntito").each(function(){
        setTimeout(remover($(this)),16000);
      });
      $(".word-carrera").removeClass("word-active");
      $(".word-mapa").removeClass("word-active");

      $(".mapa-registro").animate({
        left: "100%"
      });

      $(".mapa-registro").css("display","none");

      $(".contenedor-carreras").animate({
        right: "-150%",
        left: "150%"
      },function(){
        $(".contenedor-carreras").css("display","none");
      });

      $(".siguiente-carrera").animate({
        right: "0",
        left: "0"
      },function(){
        $(".siguiente-carrera").css("display","none");
      });

      $(".formulario-padre").css("display","inline-block");
      $(".formulario-padre").animate({
        left: "0"
      });


      $(".contenedor-carreras").css("right","-100%");
      $(".contenedor-carreras").css("left","100%");
      $(".mapa-registro").css("right","-100%");
      $(".mapa-registro").css("left","100%");

      $(".contenedor-registro").css("overflow","hidden");
    }
  }
});

$("#bloque-03").click(function(e){
  e.preventDefault();
  if($(this).find(".bloque-wizard").hasClass("active")){
    $("#bloque-04").find(".bloque-wizard").removeClass("active");
    $(".word-mapa").removeClass("word-active");
    $(".sep-3").find(".linea-separador").find(".puntito").each(function(){
      setTimeout(remover($(this)),16000);
    });

    $(".contenedor-carreras").css("display","block");
    $(".contenedor-carreras").animate({
      left: "0"
    });
    
    /*$(".mapa-registro").css("right","-100%");
    $(".mapa-registro").css("left","100%");
    $(".mapa-registro").css("display","block");*/

    $(".mapa-registro").animate({
      left: "100%"
    },function(){
      $(".mapa-registro").css("display","none");
    });


    /*if(modo_log==0){
      $(".formulario-fb").css("display","none");
      $(".formulario-no-fb").css("display","flex");  
    }else{
      $(".formulario-fb").css("display","block");
      $(".formulario-no-fb").css("display","none");
    }*/

    /*$(".face").css("display","block");
    $(".no-face").css("display","block");

    $(".no-face").css("display","block");

    $(".contenedor-registro").css("overflow","hidden");*/
    $(".siguiente-carrera").css("display","inline-block");

    $(".siguiente-carrera").animate({
      left: 0
    });

    $(".contenedor-carreras").animate({
      left: 0
    });


  }
});



$("#universidad_modify").change(function(){
  if(clase!=0){
    $(clase).animate({
      top: "-780px"
    });
    $(clase).css("display","none");
  }

  var seleccionada = $("#universidad_modify").val();

  $(".selecciones-modify").each(function(){
    $(this).css("display","none");
  });

  clase = ".seleccion-"+seleccionada;
  $(clase).css("display","inline-block");

  $(".allFormButtons").animate({
    top: "0px"
  });

  $(".padre-biografia").animate({
    top: "0px"
  });

  $(".padre-selecciones").animate({
    top: "0px"
  });

  $(".profile").find(".container").find(".row").css("max-height","1700px");
  
});

$("#universidad_login").change(function(){

  if(clase!=0){
    $(clase).animate({
      top: "-780px"
    });
    $(clase).css("display","none");
  }

  var seleccionada = $("#universidad_login").val();
  $(".contenedor-carreras").css("overflow","auto");
  
  clase = ".carreras-"+seleccionada;

  $(clase).css("display","inline-block");
  $(clase).animate({
    top: "0px"
  });

  /*$(".siguiente-carrera").animate({
    top: "0px"
  });*/

});

//DONAR

$("#donar").click(function(){

  $(".navbar-right").animate({
    top:"-200px"
  });

  $("#cerrar-perfil").click();

  $(".contenedor-donar").animate({
    right: "0px"
  })
});



$("#cerrar-donar").click(function(){
  $(".contenedor-donar").animate({
    right: "-250%"
  });
  $(".contenedor-mercado-pago").css("left","0");
  $(".contenedor-paypal").css("right","0");
  $(".contenedor-paypal").css("padding","38px 40px 0px 0px");

  $(".contenedor-mercado-pago").css("width","50%");
  $(".contenedor-paypal").css("width","50%");

  $(".contenedor-lista-pp").css("top","-300%");
  $(".contenedor-lista-mp").css("top","-300%");
});

$("#paypal").click(function(e){
  e.preventDefault();

  $("#bloque-06").find(".bloque-wizard").addClass("active");
  $(".word-cantidad").addClass("word-active");  
  $(".sep-d2").find(".linea-separador").addClass("active-sep");          

  $(".contenedor-mercado-pago").animate({
    left: "-100%"
  });
  $(".contenedor-paypal").animate({
    padding: "38px 0px 0px 0px",
    width: "100%"
  });

  $(".contenedor-lista-pp").animate({
    top: "0"
  },1000);
});

$("#mercado-pago").click(function(e){
  e.preventDefault();

  $("#bloque-06").find(".bloque-wizard").addClass("active");
  $(".word-cantidad").addClass("word-active");
  $(".sep-d2").find(".linea-separador").addClass("active-sep");

  $(".contenedor-paypal").animate({
    right: "-100%"
  });
  $(".contenedor-mercado-pago").animate({
    width: "100%"
  });

  $(".contenedor-lista-mp").animate({
    top: "0"
  },1000);
});

$("#dnr").click(function(){
  $("#registrate").click();
});

$("#olvidaste_contrasenia").click(function(){
  $(".contenedor-inicio-sesion").animate({
    left: "-105%"
  },function(){
    $(".contenedor-olvide-pass").animate({
      left: "0px" 
    });
  });

  $(".face").animate({
    left: "-105%"
  });

  $(".face + div").animate({
    left: "-105%"
  });
});

function abreSitio(){
  var clase = document.precios.mp_select.options[document.precios.mp_select.selectedIndex].value;
  var test = document.getElementById(clase).click();
  $("#bloque-07").find(".bloque-wizard").addClass("active");
  $(".word-confirmacion").addClass("word-active");
}

/*Perfil*/

$('#cerrar-perfil').click(function(e){


  e.preventDefault();

  
  
  $('.profile').animate({
    right: "-350%"
  },1000);

  $(".profile-options").animate({
    left: "0px"
  },1000);

  $(".perfil-animation").animate({
    left: "0px"
  },1000);

  $(".username-change").animate({
    left: "0px"
  },1000);

  $(".profile-options").animate({
    left: "100px"
  },1000);

  $(".profile-options").css("display","none");
  

});

$('#prof').click(function(e){
  e.preventDefault();
  $("#cerrar-donar").click();
  $('.profile').css("overflow","hidden");0

  $('.profile').animate({
    right: "0"
  },1000);

  $(".test-profile").css("left","180px");
  
  $(".username-change").css("left","180px");

  $(".perfil-animation").css("left","180px");

  $(".profile-options").css("display","inline-block");


  $(".test-profile").animate({
    left: "0px"
  });

  $(".username-change").animate({
    left: "0px"
  });

  $(".perfil-animation").animate({
    left: "0px"
  });

  $(".profile-options").animate({
    left: "0px"
  });

  if(datos_perfil==0){

    datos_perfil=1;
    $("#txtName").val(info_perfil.nombre);
    $("#txtSurname").val(info_perfil.apellido);
    $("#txtEmail").val(info_perfil.email);
    $("#txtPhone").val(info_perfil.telefono);
    $("#txtDni").val(info_perfil.dni);
    $("#txtBday").val(info_perfil.fecha);
    $("#txtPassword").val(info_perfil.password);
    $("#txtQualification").val(info_perfil.profesion);
    $("#txtBiography").val(info_perfil.biografia);
    $("#universidad_modify").val(info_perfil.facultad);

    $(".selecciones-modify").each(function(){
      $(this).css("display","none");
    });

    var clase3 = ".seleccion-"+info_perfil.facultad;
    $(clase3).css("display","inline-block");
    $(".profile").find(".container").find(".row").css("max-height","1700px");

    var info_perfil_facultad = parseInt(info_perfil.facultad);
    var clase2 = "#carreras-"+info_perfil_facultad;
    var info_perfil_carrera = parseInt(info_perfil.carrera);
    $(clase2).val(info_perfil_carrera);
    if(info_perfil.es_egresado==1){
      $("#ejemplo-2").prop("checked",true);
    }else{
      $("#ejemplo-2").prop("checked",false);
    }
  }
});

$('.editprof').click(function(e){
  e.preventDefault();

  $("#d").addClass("active-perfil");
  $("#b").removeClass("active-perfil");

  $('.bio').animate({
    right: "-100%"
  },function(){
    $('.bio').css("display","none");

    $('.formul').animate({
      right: "0",
      top:"0"
    });
  });

  $('.bio2').animate({
    right: "-100%"
  },function(){
    $('.bio2').css("display","none");
  });

 //$('.camimg').css("display","block");  
 $(".third").animate({
  top: "10px"
});

 $(".second").animate({
  top: "0px"
});

 $(".camimg").animate({
  top: "0px"
});

 $('.profile').css("overflow","scroll");  
});

$('.myprof').click(function(e){
  e.preventDefault();
  $('.profile').animate({scrollTop : 0}, 300, function(){
    $("#b").addClass("active-perfil");
    $("#d").removeClass("active-perfil");
    $('.bio').css("display","block");
    $('.bio2').css("display","block");

    $('.bio').animate({
      right: "0"
    });
    $('.formul').animate({
      right: "-100%"
    });
    $('.bio2').animate({
      right: "0"
    });
    $(".camimg").animate({
      top: "-80px"
    });

    $(".third").animate({
      top: "-50px"
    });

    $(".second").animate({
      top: "-60px"
    });

    $('.profile').css("overflow","hidden");
  });
});


$(".all-careers").find("a").click(function(){
  $(".all-careers").find("a").each(function(){
    $(this).find(".padre-icono-carrera").css("border","1px solid #3d3d3d");
    $(this).find(".padre-icono-carrera").find(".icon-book").css("color","#3d3d3d");
    $(this).find(".padre-texto-carrera").css("color","#3d3d3d");
  });
  $(this).find(".padre-icono-carrera").css("border","1px solid #3F9FFF");
  $(this).find(".padre-icono-carrera").find(".icon-book").css("color","#3F9FFF");
  $(this).find(".padre-texto-carrera").css("color","#3F9FFF");
  var carrera_seleccionada = $(this).attr("id");
  carrera_seleccionada = carrera_seleccionada.replace("carrera-", "");

  var clase_padre = $(this).parent().attr("class");
  clase_padre = clase_padre.replace("all-careers carreras-","");

  var carrera_decodificada = decodificar_carrera(parseInt(carrera_seleccionada));
  var facultad_decodificada = decodificar_facultad(parseInt(clase_padre));

  facultad_number = parseInt(clase_padre);
  carrera_number = parseInt(carrera_seleccionada);
  $("#siguiente-run").removeAttr("disabled");
});

/*Perfil*/

/*seccion responsive*/

$(window).resize(function(){
  var windowWidth = $(window).width(); //retrieve current window width

  //console.log(windowWidth);
  var windowHeight = $(window).height(); //retrieve current window height

  /*resize*/
  if(windowWidth < 768){

    $('.prof').click(function(e){
      e.preventDefault();
      $("#cerrar-donar").click();

      Closed = true;
      $('.hamburger').click();


      $(".home .profile .container .expand").css("height","834px");
      $(".contenedor-informacion-perfil").css("height","225px");

      $('.profile').animate({
        right: "0"
      });

      $(".test-profile").css("left","180px");
      
      $(".username-change").css("left","180px");

      $(".perfil-animation").css("left","180px");

      $(".profile-options").css("display","inline-block");


      $(".test-profile").animate({
        left: "0px"
      });

      $(".username-change").animate({
        left: "0px"
      });

      $(".perfil-animation").animate({
        left: "0px"
      });

      $(".profile-options").animate({
        left: "0px"
      });

      if(datos_perfil==0){
        $.ajax({
          url: "Perfil/obtener_datos_json",
          type: "POST"
        }).done(function(json){
          datos_perfil=1;
          var objeto = $.parseJSON(json);
          $("#txtName").val(objeto.nombre);
          $("#txtSurname").val(objeto.apellido);
          $("#txtEmail").val(objeto.email);
          $("#txtPhone").val(objeto.telefono);
          $("#txtDni").val(objeto.dni);
          $("#txtBday").val(objeto.fecha);
          $("#txtPassword").val(objeto.password);
          $("#txtQualification").val(objeto.profesion);
          $("#txtBiography").val(objeto.biografia);
          $("#universidad_modify").val(objeto.facultad);

          $(".selecciones-modify").each(function(){
            $(this).css("display","none");
          });

          var clase3 = ".seleccion-"+objeto.facultad;
          $(clase3).css("display","inline-block");
          $(".profile").find(".container").find(".row").css("max-height","1700px");

          objeto.facultad = parseInt(objeto.facultad);
          var clase2 = "#carreras-"+objeto.facultad;
          objeto.carrera = parseInt(objeto.carrera);
          $(clase2).val(objeto.carrera);
          if(objeto.es_egresado==1){
            $("#ejemplo-2").prop("checked",true);
          }else{
            $("#ejemplo-2").prop("checked",false);
          }
          
        });
      }

    });

    $(".donar").click(function(){

      $(".navbar-toggle").click();
      $("#cerrar-perfil").click();
      $(".contenedor-donar").animate({
        right: "0px"
      })
    });



    $('.myprof').click(function(e){
      e.preventDefault();
      
      $('.profile').animate({scrollTop : 0}, 300, function(){
        $("#b").addClass("active-perfil");
        $("#d").removeClass("active-perfil");
        $('.bio').css("display","block");
        $('.bio2').css("display","block");

        $(".home .profile .container .expand").css("height","834px");
        $(".contenedor-informacion-perfil").css("height","225px");

        $('.bio').animate({
          right: "0"
        });
        $('.formul').animate({
          right: "-100%"
        });
        $('.bio2').animate({
          right: "0"
        });
        $(".camimg").animate({
          top: "-80px"
        });

        $(".third").animate({
          top: "-80px"
        });

        $(".second").animate({
          top: "-80px"
        });

        $('.profile').css("overflow","hidden");
      });


    });

    $('.editprof').click(function(e){
      e.preventDefault();

      $(".home .profile .container .expand").css("height","2300px");
      $(".contenedor-informacion-perfil").css("height","328px");

      $("#d").addClass("active-perfil");
      $("#b").removeClass("active-perfil");

      $('.bio').animate({
        right: "-100%"
      },function(){
        $('.bio').css("display","none");

        $('.formul').animate({
          right: "0",
          top:"0"
        });
      });

      $('.bio2').animate({
        right: "-100%"
      },function(){
        $('.bio2').css("display","none");
      });

     //$('.camimg').css("display","block");  
     $(".third").animate({
      top: "0px"
    });

     $(".second").animate({
      top: "0px"
    });

     $(".camimg").animate({
      top: "0px"
    });

     $('.profile').css("overflow","scroll");  
   });

  }
  });//fin if


  var windowWidth = $(window).width(); //retrieve current window width
  //console.log(windowWidth);
  
  var windowHeight = $(window).height(); //retrieve current window height
  //console.log(windowHeight);


  if(windowWidth < 768){

    $('.prof').click(function(e){
      e.preventDefault();
      $("#cerrar-donar").click();
      /*$(".navbar-toggle").click();*/
      Closed = true;
      $('.hamburger').click();


      $(".home .profile .container .expand").css("height","834px");
      $(".contenedor-informacion-perfil").css("height","225px");

      $('.profile').animate({
        right: "0"
      });

      $(".test-profile").css("left","180px");

      $(".username-change").css("left","180px");

      $(".perfil-animation").css("left","180px");

      $(".profile-options").css("display","inline-block");


      $(".test-profile").animate({
        left: "0px"
      });

      $(".username-change").animate({
        left: "0px"
      });

      $(".perfil-animation").animate({
        left: "0px"
      });

      $(".profile-options").animate({
        left: "0px"
      });

      if(datos_perfil==0){
        $.ajax({
          url: "Perfil/obtener_datos_json",
          type: "POST"
        }).done(function(json){
          datos_perfil=1;
          var objeto = $.parseJSON(json);
          $("#txtName").val(objeto.nombre);
          $("#txtSurname").val(objeto.apellido);
          $("#txtEmail").val(objeto.email);
          $("#txtPhone").val(objeto.telefono);
          $("#txtDni").val(objeto.dni);
          $("#txtBday").val(objeto.fecha);
          $("#txtPassword").val(objeto.password);
          $("#txtQualification").val(objeto.profesion);
          $("#txtBiography").val(objeto.biografia);
          $("#universidad_modify").val(objeto.facultad);

          $(".selecciones-modify").each(function(){
            $(this).css("display","none");
          });

          var clase3 = ".seleccion-"+objeto.facultad;
          $(clase3).css("display","inline-block");
          $(".profile").find(".container").find(".row").css("max-height","1700px");

          objeto.facultad = parseInt(objeto.facultad);
          var clase2 = "#carreras-"+objeto.facultad;
          objeto.carrera = parseInt(objeto.carrera);
        //console.log(objeto.carrera);
        //console.log($(clase2));
        $(clase2).val(objeto.carrera);
        if(objeto.es_egresado==1){
          $("#ejemplo-2").prop("checked",true);
        }else{
          $("#ejemplo-2").prop("checked",false);
        }
        
        //console.log(objeto);
      });
      }

    });

    $(".donar").click(function(){

      $(".navbar-toggle").click();
      $("#cerrar-perfil").click();
      $(".contenedor-donar").animate({
        right: "0px"
      })
    });

    $('.myprof').click(function(e){
      e.preventDefault();

      $('.profile').animate({scrollTop : 0}, 300, function(){
        $("#b").addClass("active-perfil");
        $("#d").removeClass("active-perfil");
        $('.bio').css("display","block");
        $('.bio2').css("display","block");

        $(".home .profile .container .expand").css("height","834px");
        $(".contenedor-informacion-perfil").css("height","225px");

        $('.bio').animate({
          right: "0"
        });
        $('.formul').animate({
          right: "-100%"
        });
        $('.bio2').animate({
          right: "0"
        });
        $(".camimg").animate({
          top: "-80px"
        });

        $(".third").animate({
          top: "-80px"
        });

        $(".second").animate({
          top: "-80px"
        });

        $('.profile').css("overflow","hidden");
      });


    });

    $('.editprof').click(function(e){
      e.preventDefault();

      $(".home .profile .container .expand").css("height","2300px");
      $(".contenedor-informacion-perfil").css("height","328px");

      $("#d").addClass("active-perfil");
      $("#b").removeClass("active-perfil");

      $('.bio').animate({
        right: "-100%"
      },function(){
        $('.bio').css("display","none");

        $('.formul').animate({
          right: "0",
          top:"0"
        });
      });

      $('.bio2').animate({
        right: "-100%"
      },function(){
        $('.bio2').css("display","none");
      });

   //$('.camimg').css("display","block");  
   $(".third").animate({
    top: "0px"
  });

   $(".second").animate({
    top: "0px"
  });

   $(".camimg").animate({
    top: "0px"
  });

   $('.profile').css("overflow","scroll");  
 });

  }
