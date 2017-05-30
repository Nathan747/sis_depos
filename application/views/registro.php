<div class="contenedor-registro">
  <div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="#" id="cerrar-registro"><img src="<?php echo base_url('assets/img/cruz.png') ?>" alt=""></a>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenedor-wizard">
      <div class="wizard">
        <div class="bloque-wizard active">
          01
        </div>
        <div class="separador-wizard">
          <div class="linea-separador"></div>
        </div>

        <div class="bloque-wizard">
          02
        </div>
        <div class="separador-wizard">
          <div class="linea-separador"></div>
        </div>
        <div class="bloque-wizard">
          03
        </div>
      </div>
      <div class="word">
        <div class="palabras word-register word-active">
          Registrate
        </div>
        <div class="palabras word-dona">
          Doná
        </div>
        <div class="palabras word-confirmacion">
          Confirmación
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="nombre_login"
        placeholder="Nombre">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="apellido_login"
        placeholder="Apellido">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="form-group">
        <input type="email" class="form-control" id="email_login"
        placeholder="E-Mail">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="usuario_login"
        placeholder="Usuario">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="form-group">
        <input type="password" class="form-control" id="password_login" 
        placeholder="Contraseña">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="form-group">
        <input type="password" class="form-control" id="password2_login"
        placeholder="Repita la contraseña">
      </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="form-group">
        <div id="mapa_registro"></div>
      </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button type="submit" class="btn btn-default" id="open">Localizate</button>
    </div>


    <!--div class="clearfix"></div-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button type="submit" class="btn btn-default" id="enviar-registro">Enviar</button>
    </div>



    <!-- facebook -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">      
      <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
    </div> 

  </div>

</div>