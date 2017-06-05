<div class="contenedor-registro">
  <div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="#" id="cerrar-registro"><img src="<?php echo base_url('assets/img/cruz.png') ?>" alt=""></a>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenedor-wizard">
      <div class="wizard">
        <a id="bloque-01" href="#"><div class="bloque-wizard bloq-1 active">
          01
        </div></a>
        <div class="separador-wizard sep-1">
          <div class="linea-separador active-sep"></div>
        </div>

        <a id="bloque-02" href="#"><div class="bloque-wizard bloq-2">
          02
        </div></a>
        <div class="separador-wizard sep-2">
          <div class="linea-separador"></div>
        </div>
        <a id="bloque-03" href="#"><div class="bloque-wizard bloq-3">
          03
        </div></a>
        <div class="separador-wizard sep-3">
          <div class="linea-separador"></div>
        </div>
        <a id="bloque-04" href="#"><div class="bloque-wizard bloq-4">
          04
        </div></a>
      </div>
      <div class="word">
        <div class="palabras word-carrera word-active">
          Carrera
        </div>
        <div class="palabras word-modo">
          Modo
        </div>
        <div class="palabras word-datos">
          Datos
        </div>
        <div class="palabras word-mapa">
          Mapa
        </div>
      </div>
    </div>



    <div class="contenedor-carreras">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <select class="form-control" id="universidad_login" placeholder="Universidad">
            <option selected disabled>Universidad</option>
            <option value="1">Carrera 1</option>
            <option value="2">Carrera 2</option>
            <option value="3">Carrera 3</option>
            <option value="4">Carrera 4</option>
          </select>
        </div>
      </div>


      <div class="siguiente-carrera">
        <button type="submit" class="btn btn-default" id="siguiente-run" disabled>Siguiente</button>
      </div>
    </div>




    <div class="contenedor-modo">
      <!-- facebook -->
      <div class="face col-lg-12 col-md-12 col-sm-12 col-xs-12">      
        <a id="registrate-facebook" href="#">Facebook</a>
      </div> 
      <!-- fin facebook -->

      <!-- registro -->
      <div class="no-face col-lg-12 col-md-12 col-sm-12 col-xs-12">      
        <a href="#" id="registrate-form">o Registrate</a>
      </div> 
      <!-- fin registro -->

    </div>



    <div class="formulario-padre">
      <div class="formulario-no-fb">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="nombre_login" type="text" class="form-control" id="nombre_login"
            placeholder="Nombre">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="apellido_login" type="text" class="form-control" id="apellido_login"
            placeholder="Apellido">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="email_login" type="email" class="form-control" id="email_login"
            placeholder="E-Mail">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="telefono_login" type="number" class="form-control" id="telefono_login"
            placeholder="Teléfono">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="password" type="password" class="form-control" id="password_login" 
            placeholder="Contraseña">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="password2" type="password" class="form-control" id="password2_login"
            placeholder="Repita la contraseña">
          </div>
        </div>

        <div class="siguiente-registro-basico">
          <button type="submit" class="btn btn-default" id="siguiente-basico" disabled>Siguiente</button>
        </div>

      </div>

      <div class="formulario-fb">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="telefono-fb" type="number" class="form-control" id="telefono_fb"
            placeholder="Teléfono">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="password-fb" type="password" class="form-control" id="password_fb" 
            placeholder="Contraseña">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="password2-fb" type="password" class="form-control" id="password2_fb"
            placeholder="Repita la contraseña">
          </div>
        </div>

        <div class="siguiente-facebook">
          <button type="submit" class="btn btn-default" id="siguiente-fb" disabled>Siguiente</button>
        </div>

      </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mapa-registro">
      <div class="form-group">
        <div id="mapa_registro"></div>
      </div>

      <div class="siguiente-finalizar">
          <button type="submit" class="btn btn-default" id="siguiente-fin" disabled>Finalizar</button>
        </div>
    </div>

    

  </div>

</div>