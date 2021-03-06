<?php  
if ($this->session->has_userdata('newsession')){
    if ($this->session->newsession==="yes"){
        ?>
        <!-- Contenido de la página -->
        <div class="editprofile">
            <div class="container">
                <!-- Encabezado de página / Breadcrumb -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Editando datos
                            <small>Perfil de usuario</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url('perfil');?>">Perfil de usuario</a></li>
                            <li class="active">Editando datos</li>
                        </ol>
                    </div>
                </div>
                <!-- Fin Encabezado de página / Breadcrumb -->
                <!-- Contact Form -->
                <!-- Campos del formulario de contacto con validación de campos-->
                <div class="row">
                    <!-- Columna de la izquierda -->
                    <div class="col-md-3">
                      <div class="col-md-12" align="center">


                        <img class="img-responsive img-portfolio img-hover" src="<?php echo base_url($foto);?>">

                        
                    </div>
                    <div class="col-md-12 name">
                        <p class="text-center"><strong><?php echo $nombre_completo ?></strong></p>
                        <p class="text-center"><strong><?php echo $profesion; ?></strong></p>

                    </div>

                    <div class="col-md-12 text-center">
                     <!-- Redes sociales-->
                     <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="#"><i class="editIcons icon-facebook-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-linkedin-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-twitter-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-google-plus-square editSizeIcons"></i></a>
                        </li>
                    </ul>
                    <!-- Fin redes sociales -->
                </div>

                <div class="col-md-12">
                  <!-- Barra vertical de opciones del perfil de usuairo -->
                  <br >
                  <ul class="list-group list-primary">
                    <a href="<?php echo base_url('perfil');?>" class="list-group-item">Mi perfil</a>
                    <a href="<?php echo base_url('perfil');?>" class="list-group-item">Guardar</a>
                

<form action="<?php echo base_url("") . "Cargar_Imagen/proceso"; ?>" method="POST" enctype="multipart/form-data">
        <table width="350" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000">
            <tr>
                <td height="85" align="center" valign="middle" bgcolor="#FFFFFF">
                    <div align="center">
                        <input name="imagen" type="file" maxlength="150">
                        <br><br>                                     
                        <input type="submit" value="Cambiar imagen" name="enviar" style="cursor: pointer">
                    </div>
                </td>
            </tr>
        </table>
    </form>

</ul>




            </div>
            <!-- Fin Barra vertical de opciones del perfil de usuario -->
        </div>
        <!-- Fin de Columna de la izquierda -->

        <!-- Parte central -->
        <div class="col-md-9">
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
                          <label>Información básica</label>
                          <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                              <input type="text" class="form-control" id="txtName" placeholder="Introduzca su nombre" required data-validation-required-message="Por favor introduzca su nomnbre.">
                          </span>
                          <br >
                          <span id="alertSurname" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                              <input type="text" class="form-control" id="txtSurname" placeholder="Introduzca sus apellidos" required data-validation-required-message="Por favor introduzca sus apellidos.">
                          </span>
                          <br >
                          <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                              <input type="text" class="form-control" id="txtQualification" placeholder="Introduzca su título" required data-validation-required-message="Por favor introduzca su título.">
                          </span>
                          <br >
                          <span id="alertEmail" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                              <input type="email" class="form-control" id="txtEmail" placeholder="Introduzca su email" required data-validation-required-message="Por favor introduzca su email.">
                          </span>
                          <p class="help-block"></p>
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
                      <span id="alertSelectLanguage" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
                          <select class="form-control" id="selectLanguage" title="Seleccione su idioma">
                           <option class="bs-title-option" value="" disabled selected>Elija un idioma</option>
                           <option>Alemán</option>
                           <option>Castellano</option>
                           <option>Catalán</option>
                           <option>Francés</option>
                           <option>Inglés</option>
                           <option>Portugués</option>
                       </select>
                   </span>
                   <br >
               </div>
           </div>
       </div>
   </div>
   <!-- Fin del div central parte de formulario información básica -->

   <!-- Parte central - enlaces -->
   <div class="col-md-12" style="border: 1px solid lightgrey; background: #e5eaf2;">
    <!-- Parte de redes sociales en el alta de perfil -->
    <div class="col-md-8 col-md-offset-2">
      <div class="control-group form-group">
        <div class="controls">
         <br >
         <label>Enlaces:</label>
         <input type="text" class="form-control" id="txtMyWeb" placeholder="Introduzca su web personal o profesional">
         <br>
         <div class="input-group">
             <span class="input-group-addon">https://plus.google.com</span><input type="text" class="form-control" id="txtPlus" placeholder="Introduzca su usuario de Google+">
         </div>
         <br>
         <div class="input-group">
             <span class="input-group-addon">http://twitter.com</span><input type="text" class="form-control" id="txtTwitter" placeholder="Introduzca su usuario de Twitter">
         </div>
         <br>
         <div class="input-group">
             <span class="input-group-addon">https://www.facebook.com</span><input type="text" class="form-control" id="txtFacebook" placeholder="Introduzca su usuario de Facebook">
         </div>
         <br>
         <div class="input-group">
             <span class="input-group-addon">https://www.linkedin.com</span><input type="text" class="form-control" id="txtLinkedin" placeholder="Introduzca su usuario de Linkedin">
         </div>
         <br >
     </div>
 </div>
</div>
<!-- Fin Parte de redes sociales en el alta de perfil -->

<!-- Botones formulario -->
<div class="col-md-12 container allFormButtons">
  <br >
  <div class="col-md-2 col-md-offset-2">
    <div class="form-group">
        <button type="button" id="btnCancel" class="btn btn-danger">Cancelar</button>
    </div>
</div>
<div class="col-md-5 col-md-offset-3">
    <div class="form-group">
      <button type="button" id="btnClean" class="btn btn-warning">Limpiar</button>
      <button type="submit" id="btnEnviar" class="btn btn-primary">Actualizar</button>
  </div>
</div>
&nbsp;
</div>
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
&nbsp;
<hr>


<?php
}else{
    if ($this->session->newsession==="no"){
        header("Location: ". base_url());
        ?>

        <?php
    }
}
}else{
   header("Location: ". base_url());
   ?>

   <?php
}
?>

