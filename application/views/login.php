    <div class="container login">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <a href="#" id="cerrar-login"><img src="<?php echo base_url('assets/img/cruz.png') ?>" alt=""></a>
        </div>

        <!-- facebook -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 face">      
          <div class="fb-login-button" data-max-rows="1"   data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true" scope="public_profile,email" onlogin="checkLoginState();"></div>
        </div> 

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
          <div>O</div>
        </div>

        <div class="contenedor-inicio-sesion">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form role="form">
              <div class="form-group">
                <label for="email_ingresar2">E-Mail</label>
                <input type="nombre" class="form-control" id="email_ingresar2"
                placeholder="Usuario" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="password_ingresar2">Contraseña</label>
                <input type="password" class="form-control" id="password_ingresar2" 
                placeholder="Contraseña">
              </div>
              <div class="mensaje-no-user">
                <div class="texto-no-user">
                  Email o Contraseña erronea
                </div>
              </div>
              <div class="ini_ses">
                <button type="submit" class="btn btn-default col-lg-12 col-md-12 col-sm-12 col-xs-12 iniciar-sesion">Iniciar Sesión</button>
              </div>
            </form>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="#" id="olvidaste_contrasenia">¿Olvidaste la contraseña?</a>
          </div>    

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="loader11"></div>
          </div>

        </div>

        <div class="contenedor-olvide-pass">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form role="form">
              <div class="form-group">
                <label for="usuario_ingresar">Recupera tu contraseña</label>
                <input type="nombre" class="form-control" id="email_recupera"
                placeholder="Ingresa tu E-Mail" autocomplete="off">
                <div class="texto-recupera">En breves te llegará un mail con tu contraseña</div>
              </div>
              <div class="ini_ses2">
                <button type="submit" class="btn btn-default col-lg-12 col-md-12 col-sm-12 col-xs-12 btn-recup-pass">ENVIAR</button>
              </div>
            </form>
          </div>
        </div>


      </div>  <!-- fin row -->
    </div>

    