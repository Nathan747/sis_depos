<<<<<<< HEAD
$('#cerrar-login').click(function(e){
  e.preventDefault();
  $('.login').animate({
    right: "-100%"
  },function(){
    $(".contenedor-olvide-pass").animate({
      left: "105%"
    });
    $(".contenedor-inicio-sesion").animate({
      left: "0px"
    });
  });

});

$('#ingresar').click(function(e){
  e.preventDefault();
  $('.login').animate({
    right: "0"
  });
  $('.contenedor-registro').animate({
    right: "-100%"
  });

});

/*Perfil*/
$('#cerrar-perfil').click(function(e){
  e.preventDefault();
  $('.profile').animate({
    right: "-100%"
  });

});

$('#prof').click(function(e){
  e.preventDefault();
  $('.profile').animate({
    right: "0"
  });
});

$('.editprof').click(function(e){
  e.preventDefault();
  $('.bio').animate({
    right: "-100%"
  });
    $('.formul').animate({
    right: "0"
  });

  $('.profile').css("overflow","scroll");  

});



$('.myprof').click(function(e){
  e.preventDefault();
  $('.bio').animate({
    right: "0"
  });
    $('.formul').animate({
    right: "-100%"
  });
    
$('.profile').css("overflow","hidden");  

});
/*Perfil*/


//BOTON CERRAR
$('#cerrar-registro').click(function(e){
  e.preventDefault();
  $('.contenedor-registro').animate({
    right: "-100%"
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
  $(".contenedor-carreras").css("display","block");
  $(".contenedor-modo").css("right","-100%");
  $(".contenedor-modo").css("left","100%");
  $(".contenedor-modo").css("display","block");
  $(".formulario-padre").css("left","100%");
  $(".formulario-padre").css("right","-100%");
  $(".formulario-padre").css("display","block");
  $(".mapa-registro").css("right","-100%");
  $(".mapa-registro").css("left","100%");
  $(".mapa-registro").css("display","block");

  $(".formulario-no-fb").css("display","block");
  $(".formulario-fb").css("display","block");

  $(".face").css("display","block");
  $(".no-face").css("display","block");

  $(".formulario-fb").css("display","block");

  $(".contenedor-registro").css("overflow","hidden");

});

//BOTON CERRAR DONACIÓN

$("#cerrar-donacion").click(function(e){
  e.preventDefault();
  window.location=direccion;
  $(".contenedor-donar").animate({
    right: "-100%"
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
  $(".contenedor-modo").css("display","block");

  $(".contenedor-carreras").css("left","100%");
  $(".contenedor-carreras").css("display","block");
  $(".formulario-padre").css("left","100%");
  $(".formulario-padre").css("right","-100%");
  $(".formulario-padre").css("display","block");
  $(".mapa-registro").css("right","-100%");
  $(".mapa-registro").css("display","block");
  $(".mapa-registro").css("left","100%");

  $(".formulario-no-fb").css("display","block");
  $(".formulario-fb").css("display","block");

  $(".face").css("display","block");
  $(".no-face").css("display","block");

  $(".formulario-fb").css("display","block");

  $(".contenedor-registro").css("overflow","hidden");
  $('.contenedor-registro').animate({
    right: "0"
  });
  $('.login').animate({right: "-100%"});
});


//BOTON SIGUIENTE CARRERA
$("#siguiente-run").click(function(e){
  e.preventDefault();
  $('.contenedor-carreras').animate({
    left: "-100%"
  });
  $('.contenedor-carreras').css("display","none");
  $(".mapa-registro").animate({
    right: "0",
    left: "0"
  });
  $(".bloq-4").addClass("active");
  $(".sep-4").find(".linea-separador").addClass("active-sep");
  $(".word-mapa").addClass("word-active");
});


//BOTONES CLICKEABLES

$("#bloque-01").click(function(e){
  e.preventDefault();
  $("#bloque-02").find(".bloque-wizard").removeClass("active");
  $("#bloque-03").find(".bloque-wizard").removeClass("active");
  $("#bloque-04").find(".bloque-wizard").removeClass("active");
  $(".sep-2").find(".linea-separador").removeClass("active-sep");
  $(".sep-3").find(".linea-separador").removeClass("active-sep");
  $(".word-carrera").removeClass("word-active");
  $(".word-datos").removeClass("word-active");
  $(".word-mapa").removeClass("word-active");

  $(".contenedor-modo").css("display","block");
  $(".contenedor-modo").animate({
    left: "0"
  });

  $(".contenedor-carreras").css("right","-100%");
  $(".contenedor-carreras").css("left","100%");
  $(".contenedor-carreras").css("display","block");
  $(".formulario-padre").css("left","100%");
  $(".formulario-padre").css("right","-100%");
  $(".formulario-padre").css("display","block");
  $(".mapa-registro").css("right","-100%");
  $(".mapa-registro").css("left","100%");
  $(".mapa-registro").css("display","block");

  $(".formulario-no-fb").css("display","block");
  $(".formulario-fb").css("display","block");

  $(".face").css("display","block");
  $(".no-face").css("display","block");

  $(".no-face").css("display","block");
  $(".formulario-fb").css("display","block");

  $(".contenedor-registro").css("overflow","hidden");

});

$("#bloque-02").click(function(e){
  e.preventDefault();
  if($(this).find(".bloque-wizard").hasClass("active")){
    $("#bloque-03").find(".bloque-wizard").removeClass("active");
    $("#bloque-04").find(".bloque-wizard").removeClass("active");
    $(".sep-3").find(".linea-separador").removeClass("active-sep");
    $(".word-carrera").removeClass("word-active");
    $(".word-mapa").removeClass("word-active");

    $(".formulario-padre").css("display","block");
    $(".formulario-padre").animate({
      left: "0"
    });
    $(".contenedor-carreras").css("right","-100%");
    $(".contenedor-carreras").css("left","100%");
    $(".contenedor-carreras").css("display","block");

    $(".mapa-registro").css("right","-100%");
    $(".mapa-registro").css("left","100%");
    $(".mapa-registro").css("display","block");

    $(".contenedor-registro").css("overflow","hidden");
  }
});

$("#bloque-03").click(function(e){
  e.preventDefault();
  if($(this).find(".bloque-wizard").hasClass("active")){
    $("#bloque-04").find(".bloque-wizard").removeClass("active");
    $(".word-mapa").removeClass("word-active");

    $(".contenedor-carreras").css("display","block");
    $(".contenedor-carreras").animate({
      left: "0"
    });
    $(".mapa-registro").css("right","-100%");
    $(".mapa-registro").css("left","100%");
    $(".mapa-registro").css("display","block");

    if(modo_log==0){
      $(".formulario-fb").css("display","none");
      $(".formulario-no-fb").css("display","block");  
    }else{
      $(".formulario-fb").css("display","block");
      $(".formulario-no-fb").css("display","none");
    }

    $(".face").css("display","block");
    $(".no-face").css("display","block");

    $(".no-face").css("display","block");

    $(".contenedor-registro").css("overflow","hidden");
  }
});


$("#universidad_login").change(function(){
  $("#siguiente-run").removeAttr("disabled");
});

//DONAR

$("#donar").click(function(){
  $(".contenedor-donar").animate({
    right: "0px"
  })
});

$("#cerrar-donar").click(function(){
  $(".contenedor-donar").animate({
    right: "-100%"
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
  $("#ingresar").click();
});

$("#olvidaste_contrasenia").click(function(){
  $(".contenedor-inicio-sesion").animate({
    left: "-105%"
  },function(){
    $(".contenedor-olvide-pass").animate({
      left: "0px" 
    });
  });
});

function abreSitio(){
  var clase = document.precios.mp_select.options[document.precios.mp_select.selectedIndex].value;
  console.log(clase);
  var test = document.getElementById(clase).click();
  console.log(test);
  $("#bloque-07").find(".bloque-wizard").addClass("active");
  $(".word-confirmacion").addClass("word-active");
}
=======
$('#cerrar-login').click(function(e){
  e.preventDefault();
  $('.login').animate({
    right: "-100%"
  },function(){
    $(".contenedor-olvide-pass").animate({
      left: "105%"
    });
    $(".contenedor-inicio-sesion").animate({
      left: "0px"
    });
  });

});

$('#ingresar').click(function(e){
  e.preventDefault();
  $('.login').animate({
    right: "0"
  });
  $('.contenedor-registro').animate({
    right: "-100%"
  });

});


//BOTON CERRAR
$('#cerrar-registro').click(function(e){
  e.preventDefault();
  $('.contenedor-registro').animate({
    right: "-100%"
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
  $(".contenedor-carreras").css("display","block");
  $(".contenedor-modo").css("right","-100%");
  $(".contenedor-modo").css("left","100%");
  $(".contenedor-modo").css("display","block");
  $(".formulario-padre").css("left","100%");
  $(".formulario-padre").css("right","-100%");
  $(".formulario-padre").css("display","block");
  $(".mapa-registro").css("right","-100%");
  $(".mapa-registro").css("left","100%");
  $(".mapa-registro").css("display","block");

  $(".formulario-no-fb").css("display","block");
  $(".formulario-fb").css("display","block");

  $(".face").css("display","block");
  $(".no-face").css("display","block");

  $(".formulario-fb").css("display","block");

  $(".contenedor-registro").css("overflow","hidden");

});

//BOTON CERRAR DONACIÓN

$("#cerrar-donacion").click(function(e){
  e.preventDefault();
  window.location=direccion;
  $(".contenedor-donar").animate({
    right: "-100%"
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
  $(".contenedor-modo").css("display","block");

  $(".contenedor-carreras").css("left","100%");
  $(".contenedor-carreras").css("display","block");
  $(".formulario-padre").css("left","100%");
  $(".formulario-padre").css("right","-100%");
  $(".formulario-padre").css("display","block");
  $(".mapa-registro").css("right","-100%");
  $(".mapa-registro").css("display","block");
  $(".mapa-registro").css("left","100%");

  $(".formulario-no-fb").css("display","block");
  $(".formulario-fb").css("display","block");

  $(".face").css("display","block");
  $(".no-face").css("display","block");

  $(".formulario-fb").css("display","block");

  $(".contenedor-registro").css("overflow","hidden");
  $('.contenedor-registro').animate({
    right: "0"
  });
  $('.login').animate({right: "-100%"});
});


//BOTON SIGUIENTE CARRERA
$("#siguiente-run").click(function(e){
  e.preventDefault();
  $('.contenedor-carreras').animate({
    left: "-100%"
  });
  $('.contenedor-carreras').css("display","none");
  $(".mapa-registro").animate({
    right: "0",
    left: "0"
  });
  $(".bloq-4").addClass("active");
  $(".sep-4").find(".linea-separador").addClass("active-sep");
  $(".word-mapa").addClass("word-active");
});


//BOTONES CLICKEABLES

$("#bloque-01").click(function(e){
  e.preventDefault();
  $("#bloque-02").find(".bloque-wizard").removeClass("active");
  $("#bloque-03").find(".bloque-wizard").removeClass("active");
  $("#bloque-04").find(".bloque-wizard").removeClass("active");
  $(".sep-2").find(".linea-separador").removeClass("active-sep");
  $(".sep-3").find(".linea-separador").removeClass("active-sep");
  $(".word-carrera").removeClass("word-active");
  $(".word-datos").removeClass("word-active");
  $(".word-mapa").removeClass("word-active");

  $(".contenedor-modo").css("display","block");
  $(".contenedor-modo").animate({
    left: "0"
  });

  $(".contenedor-carreras").css("right","-100%");
  $(".contenedor-carreras").css("left","100%");
  $(".contenedor-carreras").css("display","block");
  $(".formulario-padre").css("left","100%");
  $(".formulario-padre").css("right","-100%");
  $(".formulario-padre").css("display","block");
  $(".mapa-registro").css("right","-100%");
  $(".mapa-registro").css("left","100%");
  $(".mapa-registro").css("display","block");

  $(".formulario-no-fb").css("display","block");
  $(".formulario-fb").css("display","block");

  $(".face").css("display","block");
  $(".no-face").css("display","block");

  $(".no-face").css("display","block");
  $(".formulario-fb").css("display","block");

  $(".contenedor-registro").css("overflow","hidden");

});

$("#bloque-02").click(function(e){
  e.preventDefault();
  if($(this).find(".bloque-wizard").hasClass("active")){
    $("#bloque-03").find(".bloque-wizard").removeClass("active");
    $("#bloque-04").find(".bloque-wizard").removeClass("active");
    $(".sep-3").find(".linea-separador").removeClass("active-sep");
    $(".word-carrera").removeClass("word-active");
    $(".word-mapa").removeClass("word-active");

    $(".formulario-padre").css("display","block");
    $(".formulario-padre").animate({
      left: "0"
    });
    $(".contenedor-carreras").css("right","-100%");
    $(".contenedor-carreras").css("left","100%");
    $(".contenedor-carreras").css("display","block");

    $(".mapa-registro").css("right","-100%");
    $(".mapa-registro").css("left","100%");
    $(".mapa-registro").css("display","block");

    $(".contenedor-registro").css("overflow","hidden");
  }
});

$("#bloque-03").click(function(e){
  e.preventDefault();
  if($(this).find(".bloque-wizard").hasClass("active")){
    $("#bloque-04").find(".bloque-wizard").removeClass("active");
    $(".word-mapa").removeClass("word-active");

    $(".contenedor-carreras").css("display","block");
    $(".contenedor-carreras").animate({
      left: "0"
    });
    $(".mapa-registro").css("right","-100%");
    $(".mapa-registro").css("left","100%");
    $(".mapa-registro").css("display","block");

    if(modo_log==0){
      $(".formulario-fb").css("display","none");
      $(".formulario-no-fb").css("display","block");  
    }else{
      $(".formulario-fb").css("display","block");
      $(".formulario-no-fb").css("display","none");
    }

    $(".face").css("display","block");
    $(".no-face").css("display","block");

    $(".no-face").css("display","block");

    $(".contenedor-registro").css("overflow","hidden");
  }
});


$("#universidad_login").change(function(){
  $("#siguiente-run").removeAttr("disabled");
});

//DONAR

$("#donar").click(function(){
  $(".contenedor-donar").animate({
    right: "0px"
  })
});

$("#cerrar-donar").click(function(){
  $(".contenedor-donar").animate({
    right: "-100%"
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
  $("#ingresar").click();
});

$("#olvidaste_contrasenia").click(function(){
  $(".contenedor-inicio-sesion").animate({
    left: "-105%"
  },function(){
    $(".contenedor-olvide-pass").animate({
      left: "0px" 
    });
  });
});

function abreSitio(){
  var clase = document.precios.mp_select.options[document.precios.mp_select.selectedIndex].value;
  console.log(clase);
  var test = document.getElementById(clase).click();
  console.log(test);
  $("#bloque-07").find(".bloque-wizard").addClass("active");
  $(".word-confirmacion").addClass("word-active");
}

/*Perfil*/
$('#cerrar-perfil').click(function(e){
  e.preventDefault();
  $('.profile').animate({
    right: "-100%"
  });
});
$('#prof').click(function(e){
  e.preventDefault();
  $('.profile').animate({
    right: "0"
  });
});
$('.editprof').click(function(e){
  e.preventDefault();
  $('.bio').animate({
    right: "-100%"
  });
  $('.formul').animate({
    right: "0"
  });
  $('.profile').css("overflow","scroll");  
});
$('.myprof').click(function(e){
  e.preventDefault();
  $('.bio').animate({
    right: "0"
  });
  $('.formul').animate({
    right: "-100%"
  });
  
  $('.profile').css("overflow","hidden");  
});
/*Perfil*/
>>>>>>> 7bc95727216da094fc7f8c66528e76d610eccda0
