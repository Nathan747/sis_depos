<?php 
if (isset($_SESSION['newsession'])) {
  if ($_SESSION['newsession'] != "yes"){

?>

<div class="container login">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="#" id="cerrar-login"><img src="<?php echo base_url('assets/img/cruz.png') ?>" alt=""></a>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <form role="form">
        <div class="form-group">
          <label for="usuario_ingresar">E-Mail</label>
          <input type="text" class="form-control" id="email_ingresar2"
          placeholder="Usuario">
        </div>
        <div class="form-group">
          <label for="password_ingresar">Contraseña</label>
          <input type="password" class="form-control" id="password_ingresar2" 
          placeholder="Contraseña">
        </div>
        <div class="ini_ses">
          <button type="submit" class="btn btn-default col-lg-12 col-md-12 col-sm-12 col-xs-12 iniciar-sesion">Iniciar Sesión</button>
        </div>
      </form>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="#" id="">¿Olvidaste la contraseña?</a>
    </div>    





    <!-- facebook -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">      
      <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true" scope="public_profile,email" onlogin="checkLoginState();"></div>
    </div> 




  </div>  <!-- fin row -->
</div>

<?php

  }
} else{
?>

<div class="container login">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="#" id="cerrar-login"><img src="<?php echo base_url('assets/img/cruz.png') ?>" alt=""></a>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <form role="form">
        <div class="form-group">
          <label for="usuario_ingresar">E-Mail</label>
          <input type="text" class="form-control" id="email_ingresar2"
          placeholder="Usuario">
        </div>
        <div class="form-group">
          <label for="password_ingresar">Contraseña</label>
          <input type="password" class="form-control" id="password_ingresar2" 
          placeholder="Contraseña">
        </div>
        <div class="ini_ses">
          <button type="submit" class="btn btn-default col-lg-12 col-md-12 col-sm-12 col-xs-12 iniciar-sesion">Iniciar Sesión</button>
        </div>
      </form>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="#" id="">¿Olvidaste la contraseña?</a>
    </div>    





    <!-- facebook -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">      
      <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true" scope="public_profile,email" onlogin="checkLoginState();"></div>
    </div> 




  </div>  <!-- fin row -->
</div>

<?php
}        
?>




