<?php  
if ($this->session->has_userdata('newsession')){
  if ($this->session->newsession==="yes"){
    ?>
    <!-- Contenido de la página -->
    <div class="profile">
      <div class="container">
        <!-- Encabezado de página / Breadcrumb -->
        <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <a href="#" id="cerrar-perfil"><img src="<?php echo base_url('assets/img/cruz.png') ?>" alt=""></a>
        </div>
        <div class="col-md-12">
          <h1 class="page-header">Perfil de usuario
            <small>editando datos</small>
          </h1>
        </div>
      </div>
      <!-- Fin Encabezado de página / Breadcrumb -->
      <!-- Contact Form -->
      <!-- Campos del formulario de contacto con validación de campos-->
      <div class="row">
        <!-- Columna de la izquierda -->
        <div class="col-md-3">
          <div class="col-md-12 first" align="left">
            <img class="photo img-responsive img-portfolio img-hover" src="<?php echo base_url($foto);?>">
          </div>
          <form action="<?php echo base_url("") . "Cargar_Imagen/proceso"; ?>" method="POST" enctype="multipart/form-data">



            <input name="imagen" type="file" maxlength="150">
            <br>
            <input type="submit" value="Cambiar imagen" name="enviar" style="cursor: pointer">


          </form>
          <div class="col-md-12 second">
            <p class="name text-left"><strong><?php echo $nombre_completo ?></strong></p>
            <p class="job text-left"><strong><?php echo $profesion; ?></strong></p>
          </div>

          <div class="col-md-10 third">
            <!-- Barra vertical de opciones del perfil de usuairo -->
            <br >
            <ul class="list-group list-primary">
              <a href="#" class="list-group-item myprof">Mi perfil</a>
              <a href="#" class="list-group-item editprof">Editar Perfil</a>
            </ul>
          </div>
          <!-- Fin Barra vertical de opciones del perfil de usuario -->
        </div>
        <!-- Fin de Columna de la izquierda -->
        <!-- Parte central -->
        <div class="col-md-9 bio">
          <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
            <h3 style="text-align: center">BIOGRAFÍA<p><small></small></p></h3>
          </div>
          <div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgrey;background: #f1f3f6;">
            <p style="text-align: left; padding-top:10px"><?php echo $biografia; ?></p>
          </div>
        </div>  
        <!-- Fin del div de parte central -->
        <!-- Parte central -->
        <div class="col-md-9 formul">
          <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
            <h3 style="text-align: center">Mi perfil <p><small>Añade información personal para compartir tu perfil</small></p></h3>
          </div>
          <!-- Se inicia el form (ojo todos los elementos de formulario deben ir dentro de esta etiqueta-->
          <form name="modifyProfile" id="profileForm" novalidate>
            <!-- Inicio del div central parte de formulario información básica -->
            <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #f1f3f6;">
              <div class="col-md-8 col-md-offset-2">
               <div class="control-group form-group">
                <div class="controls">
                 <br >
                 <label>Nombre:</label>
                 <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                  <input type="text" class="form-control" id="txtName" placeholder="Introduzca su nombre" required data-validation-required-message="Por favor introduzca su nomnbre.">
                </span>
                <br >
                <label>Apellido:</label>
                <span id="alertSurname" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                  <input type="text" class="form-control" id="txtSurname" placeholder="Introduzca sus apellidos" required data-validation-required-message="Por favor introduzca sus apellidos.">
                </span>
                <br >
                <label>E-Mail:</label>
                <span id="alertEmail" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                  <input type="email" class="form-control" id="txtEmail" placeholder="Introduzca su email" required data-validation-required-message="Por favor introduzca su email.">
                </span>
                <p class="help-block"></p>
                <br >
                <label>Teléfono:</label>
                <span id="alertPhone" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                  <input type="number" class="form-control" id="txtPhone" placeholder="Introduzca su teléfono" required data-validation-required-message="Por favor introduzca su teléfono.">
                </span>
                <br >
                <label>D.N.I:</label>
                <span id="alertDni" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                  <input type="number" class="form-control" id="txtDni" placeholder="Introduzca su D.N.I." required data-validation-required-message="Por favor introduzca su D.N.I.">
                </span>
                <br >
                <label>Fecha de nacimiento:</label>
                <span id="alertBday" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                  <input type="date" class="form-control" id="txtBday" placeholder="Introduzca su fecha de nacimiento" required data-validation-required-message="Por favor introduzca su fecha de nacimiento.">
                </span>
                <br >
                <label>Contraseña:</label>
                <span id="alertPassword" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                  <input type="password" class="form-control" id="txtPassword" placeholder="Introduzca su contraseña" required data-validation-required-message="Por favor introduzca su contraseña.">
                </span>
                <br >
                <label>Trabajo Actual:</label>
                <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                 <input type="text" class="form-control" id="txtQualification" placeholder="Introduzca su título" required data-validation-required-message="Por favor introduzca su título.">
               </span>
               <br >
             </div>
           </div>
           <div class="control-group form-group">
            <div class="controls">
              <label>Biografía:</label>
              <span id="alertBiography" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
               <textarea rows="6" cols="30" class="form-control" id="txtBiography" required maxlength="999" style="resize:none" 
               data-validation-required-message="Por favor introduzca su biografía deseada."></textarea>
             </span>
             <br >
             <br >
           </div>
         </div>
       </div>

       <div class="col-md-8 col-md-offset-2 allFormButtons">
        <div class="centrar-botones">
          <div class="form-group">
            <button type="button" id="btnClean" class="btn btn-warning">Limpiar</button>
            <button type="submit" id="btnEnviar" class="btn btn-primary">Actualizar</button>
          </div>
        </div>
      </div>

    </div>
    <!-- Fin del div central parte de formulario información básica -->
    <!-- Botones formulario -->

    <!-- Fin botones formulario -->
  </div>
  <!-- Fin Parte central - enlaces -->
</form> 
<!-- Fin del form -->
</div>  
<!-- Fin del div de parte central -->
</div>
<!-- Fin Campos del formulario de contacto con validación de campos -->
</div>
</div> 
</div>   <!-- Fin del div profile-->
<?php
}
}
?>