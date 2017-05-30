<div class="contenedor-registro">
    <div class="row">

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <a href="#" id="cerrar-registro"><img src="<?php echo base_url('assets/img/cruz.png') ?>" alt=""></a>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenedor-wizard">
        <div class="wizard">
          <div class="bloque-wizard">
            1
          </div>
          <div class="separador-wizard">
            <div class="linea-separador"></div>
          </div>

          <div class="bloque-wizard">
            2
          </div>
          <div class="separador-wizard">
            <div class="linea-separador"></div>
          </div>
          <div class="bloque-wizard">
            3
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <label for="nombre_login">Nombre</label>
          <input type="text" class="form-control" id="nombre_login"
          placeholder="Nombre">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <label for="apellido_login">Apellido</label>
          <input type="text" class="form-control" id="apellido_login"
          placeholder="Apellido">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <label for="usuario_login">E-Mail</label>
          <input type="email" class="form-control" id="email_login"
          placeholder="E-Mail">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <label for="usuario_login">Usuario</label>
          <input type="text" class="form-control" id="usuario_login"
          placeholder="Usuario">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <label for="password_login">Contraseña</label>
          <input type="password" class="form-control" id="password_login" 
          placeholder="Contraseña">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <label for="password2_login">Repetir contraseña</label>
          <input type="password" class="form-control" id="password2_login"
          placeholder="Repita la contraseña">
        </div>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div id="mapa_registro" style="height:450px"></div>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <button type="submit" class="btn btn-default" id="open">Localizate</button>
      </div>


      <!--div class="clearfix"></div-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <button type="submit" class="btn btn-default" id="enviar-registro">Enviar</button>
      </div>
      
    </div>
</div>