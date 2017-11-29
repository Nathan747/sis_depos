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
          <div class="linea-separador active-sep">
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
          </div>
        </div>

        <a id="bloque-02" href="#"><div class="bloque-wizard bloq-2">
          02
        </div></a>
        <div class="separador-wizard sep-2">
          <div class="linea-separador">
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
          </div>
        </div>
        <a id="bloque-03" href="#"><div class="bloque-wizard bloq-3">
          03
        </div></a>
        <div class="separador-wizard sep-3">
          <div class="linea-separador">
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
            <div class="puntito"></div>
          </div>
        </div>
        <a id="bloque-04" href="#"><div class="bloque-wizard bloq-4">
          04
        </div></a>
      </div>
      <div class="word">
        <div class="palabras word-modo word-active">
          Modo
        </div>
        <div class="palabras word-datos">
          Datos
        </div>
        <div class="palabras word-carrera">
          Carrera
        </div>
        <div class="palabras word-mapa">
          Mapa
        </div>
      </div>
    </div>

    <div class="contenedor-modo">

      <!-- facebook -->
      <div class="face col-lg-12 col-md-12 col-sm-12 col-xs-12">      
        <div id="registrate-facebook" class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true" scope="public_profile,email" onlogin="checkLoginState2();"></div>
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

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padre-email">
          <div class="form-group">
            <input name="email_login" type="email" class="form-control" id="email_login"
            placeholder="E-Mail" data-toggle="tooltip-mail" title="E-Mail ya en uso">
          </div>
          <div class="error-email"></div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="telefono_login" type="number" class="form-control" id="telefono_login" placeholder="Teléfono">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="dni_login" type="number" class="form-control" id="dni_login" placeholder="DNI">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="date_login" class="form-control" placeholder="Fecha de nacimiento" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="fecha_login" step="1" max="2020-12-31">
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

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="lugar_login" type="text" class="form-control" id="lugar_login" placeholder="Trabajo actual">
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-checkbox">
          <div class="form-group">
            <div class="checkbox">
              <label><input id="egresado_login" type="checkbox" value="">Soy egresado</label>
            </div>
          </div>
        </div>

        <div class="siguiente-registro-basico">
          <button type="submit" class="btn btn-default" id="siguiente-basico" disabled>Siguiente</button>
        </div>

        <!--div class="siguiente-registro-basico">
          <button type="submit" class="btn btn-default" id="siguiente-basico" >Siguiente</button>
        </div-->

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
            <input name="dni_fb" type="number" class="form-control" id="dni_fb" placeholder="DNI">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input placeholder="Fecha de nacimiento" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="fecha_login_fb" step="1" max="2020-12-31">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input name="lugar_fb" type="text" class="form-control" id="lugar_fb" placeholder="Trabajo actual">
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

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-checkbox">
          <div class="form-group">
            <div class="checkbox">
              <label><input id="egresado_fb" type="checkbox" value="">Soy egresado</label>
            </div>
          </div>
        </div>

        <div class="siguiente-facebook">
          <button type="submit" class="btn btn-default" id="siguiente-fb" disabled>Siguiente</button>
        </div>

      </div>
    </div>


    <div class="contenedor-carreras">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <select class="form-control" id="universidad_login" placeholder="Universidad">
            <option selected disabled>Facultad</option>
            <option value="1">Facultad de Artes y Diseño</option>
            <option value="2">Facultad de Ciencias Agrarias</option>
            <option value="3">Facultad de Ciencias Aplicadas a la Industria</option>
            <option value="4">Facultad de Ciencias Económicas</option>
            <option value="5">Facultad de Ciencias Exactas y Naturales</option>
            <option value="6">Facultad de Ciencias Médicas</option>
            <option value="7">Facultad de Ciencias Políticas y Sociales</option>
            <option value="8">Facultad de Derecho</option>
            <option value="9">Facultad de Educación</option>
            <option value="10">Facultad de Filosofía y Letras</option>
            <option value="11">Facultad de Ingeniería</option>
            <option value="12">Facultad de Odontología</option>
            <option value="13">Instituto Balseiro</option>
            <option value="14">Instituto Tecnológico Universitario</option>
            <option value="15">Instituto Universitario de Seguridad Pública</option>
          </select>
        </div>
      </div>

      <div class="contenedor-carreras2">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="all-careers carreras-1">
            <a href="#" id="carrera-1">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Formación Básica en Artes Visuales
                </div>
              </div>
            </a>

            <a href="#" id="carrera-2">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Prof. de Grado Univ. de Diseño
                </div>
              </div>
            </a>

            <a href="#" id="carrera-3">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Prof. de Grado Univ. en Música
                </div>
              </div>
            </a>

            <a href="#" id="carrera-4">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Diseño Escenográfico
                </div>
              </div>
            </a>

            <a href="#" id="carrera-5">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Diseño Gráfico
                </div>
              </div>
            </a>

            <a href="#" id="carrera-6">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Diseño Industrial
                </div>
              </div>
            </a>

            <a href="#" id="carrera-7">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Arte Dramático
                </div>
              </div>
            </a>

            <a href="#" id="carrera-8">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Artes Plásticas
                </div>
              </div>
            </a>

            <a href="#" id="carrera-9">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Canto
                </div>
              </div>
            </a>

            <a href="#" id="carrera-10">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Cerámica Artística
                </div>
              </div>
            </a>

            <a href="#" id="carrera-11">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Cerámica Industrial
                </div>
              </div>
            </a>

            <a href="#" id="carrera-12">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Composición Musical
                </div>
              </div>
            </a>

            <a href="#" id="carrera-13">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Dirección Coral
                </div>
              </div>
            </a>

            <a href="#" id="carrera-14">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Historia de las Artes Plásticas
                </div>
              </div>
            </a>

            <a href="#" id="carrera-15">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Instrumento
                </div>
              </div>
            </a>

            <a href="#" id="carrera-16">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Música Popular
                </div>
              </div>
            </a>

            <a href="#" id="carrera-17">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Órgano
                </div>
              </div>
            </a>

            <a href="#" id="carrera-18">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Piano o Guitarra
                </div>
              </div>
            </a>

            <a href="#" id="carrera-19">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario de Teorías Musicales
                </div>
              </div>
            </a>

            <a href="#" id="carrera-20">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Artes Visuales
                </div>
              </div>
            </a>

            <a href="#" id="carrera-21">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Cerámica Artística
                </div>
              </div>
            </a>

            <a href="#" id="carrera-22">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Historia del Arte
                </div>
              </div>
            </a>

            <a href="#" id="carrera-23">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Música
                </div>
              </div>
            </a>

            <a href="#" id="carrera-24">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Teatro
                </div>
              </div>
            </a>
          </div>

          <div class="all-careers carreras-2">
            <a href="#" id="carrera-25">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Bromatología
                </div>
              </div>
            </a>

            <a href="#" id="carrera-26">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ingeniería Agronómica
                </div>
              </div>
            </a>

            <a href="#" id="carrera-27">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ingeniería en Recursos Naturales Renovables
                </div>
              </div>
            </a>

            <a href="#" id="carrera-28">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Bromatología
                </div>
              </div>
            </a>

            <a href="#" id="carrera-29">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria  en Enología y Viticultura
                </div>
              </div>
            </a>

            <a href="#" id="carrera-30">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Producción Animal de Zonas Áridas
                </div>
              </div>
            </a>
          </div>

          <div class="all-careers carreras-3">
            <a href="#" id="carrera-31">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Bromatología
                </div>
              </div>
            </a>

            <a href="#" id="carrera-32">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Lic. en Enología
                </div>
              </div>
            </a>

            <a href="#" id="carrera-33">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ingeniería en Industrias de la Alimentación
                </div>
              </div>
            </a>

            <a href="#" id="carrera-34">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ingeniería Química
                </div>
              </div>
            </a>

            <a href="#" id="carrera-35">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Química
                </div>
              </div>
            </a>

            <a href="#" id="carrera-36">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Técnico Universitario en Enología y Viticultura
                </div>
              </div>
            </a>
          </div>


          <div class="all-careers carreras-4">
            <a href="#" id="carrera-37">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Formación Básica en Ciencias Económicas
                </div>
              </div>
            </a>

            <a href="#" id="carrera-38">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Lic. en Gestión de Negocios Regionales
                </div>
              </div>
            </a>

            <a href="#" id="carrera-39">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Contador Público Nacional
                </div>
              </div>
            </a>

            <a href="#" id="carrera-40">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Administración
                </div>
              </div>
            </a>

            <a href="#" id="carrera-41">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Economía
                </div>
              </div>
            </a>

            <a href="#" id="carrera-42">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Logística
                </div>
              </div>
            </a>
          </div>

          <div class="all-careers carreras-5">
            <a href="#" id="carrera-43">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo General de Conocimientos Básicos en Ciencias Exactas y Naturales
                </div>
              </div>
            </a>

            <a href="#" id="carrera-44">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Ciencias Básicas con Orientación en Biología
                </div>
              </div>
            </a>

            <a href="#" id="carrera-45">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Ciencias Básicas con Orientación en Física
                </div>
              </div>
            </a>

            <a href="#" id="carrera-46">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Ciencias Básicas con Orientación en Geología
                </div>
              </div>
            </a>

            <a href="#" id="carrera-47">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Ciencias Básicas con Orientación en Matemática
                </div>
              </div>
            </a>

            <a href="#" id="carrera-48">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Ciencias Básicas con Orientación en Química
                </div>
              </div>
            </a>

            <a href="#" id="carrera-49">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Ciencias Básicas Orientación en Biología
                </div>
              </div>
            </a>

            <a href="#" id="carrera-50">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Ciencias Básicas Orientación en Física
                </div>
              </div>
            </a>

            <a href="#" id="carrera-51">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Ciencias Básicas Orientación en Matemática
                </div>
              </div>
            </a>

            <a href="#" id="carrera-52">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Ciencias Básicas Orientación en Química
                </div>
              </div>
            </a>
          </div>

          <div class="all-careers carreras-6">
            <a href="#" id="carrera-53">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Lic. en Enfermería
                </div>
              </div>
            </a>

            <a href="#" id="carrera-54">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Licenciatura en Higiene y Seguridad en el Trabajo
                </div>
              </div>
            </a>

            <a href="#" id="carrera-55">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Enfermería Universitaria
                </div>
              </div>
            </a>

            <a href="#" id="carrera-56">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Medicina
                </div>
              </div>
            </a>

            <a href="#" id="carrera-57">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Anestesia
                </div>
              </div>
            </a>

            <a href="#" id="carrera-58">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Diagnóstico por Imágenes
                </div>
              </div>
            </a>

            <a href="#" id="carrera-59">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Esterilización
                </div>
              </div>
            </a>

            <a href="#" id="carrera-60">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Hemoterapia
                </div>
              </div>
            </a>

            <a href="#" id="carrera-61">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Laboratorio
                </div>
              </div>
            </a>

            <a href="#" id="carrera-62">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Promoción de la Salud
                </div>
              </div>
            </a>

            <a href="#" id="carrera-63">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Quirófano
                </div>
              </div>
            </a>
          </div>


          <div class="all-careers carreras-7">
            <a href="#" id="carrera-64">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Profesorado para Graduados de la carrera de Ciencia Política y Administración Pública
                </div>
              </div>
            </a>

            <a href="#" id="carrera-65">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Profesorado para Graduados de la carrera de Comunicación Social
                </div>
              </div>
            </a>

            <a href="#" id="carrera-66">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Profesorado para Graduados de la carrera de Sociología
                </div>
              </div>
            </a>

            <a href="#" id="carrera-67">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Profesorado para Graduados de la carrera de Trabajo Social
                </div>
              </div>
            </a>

            <a href="#" id="carrera-68">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Ciencia Política y Administración Pública
                </div>
              </div>
            </a>

            <a href="#" id="carrera-69">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Comunicación Social
                </div>
              </div>
            </a>

            <a href="#" id="carrera-70">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Sociología
                </div>
              </div>
            </a>

            <a href="#" id="carrera-71">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Trabajo Social
                </div>
              </div>
            </a>

            <a href="#" id="carrera-72">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura en Gestión de Políticas Públicas
                </div>
              </div>
            </a>

            <a href="#" id="carrera-73">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Producción Audiovisual
                </div>
              </div>
            </a>
          </div>


          <div class="all-careers carreras-8">
            <a href="#" id="carrera-74">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Abogacía
                </div>
              </div>
            </a>

          </div>


          <div class="all-careers carreras-9">
            <a href="#" id="carrera-75">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Licenciatura en Psicomotricidad Educativa
                </div>
              </div>
            </a>

            <a href="#" id="carrera-76">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Prof. de Grado Univ. en Informática
                </div>
              </div>
            </a>

            <a href="#" id="carrera-77">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Terapia del Lenguaje
                </div>
              </div>
            </a>

            <a href="#" id="carrera-78">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado Universitario de Educación Inicial
                </div>
              </div>
            </a>

            <a href="#" id="carrera-79">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado Universitario de Educación para Personas Sordas
                </div>
              </div>
            </a>

            <a href="#" id="carrera-80">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado Universitario de Educación Primaria
                </div>
              </div>
            </a>

            <a href="#" id="carrera-81">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado Universitario de Pedagogía Terapéutica en Discapacidad Intelectual con Orientación en Discapacidad Motora
                </div>
              </div>
            </a>

            <a href="#" id="carrera-82">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado Universitario de Pedagogía Terapéutica en Discapacidad Visual
                </div>
              </div>
            </a>

            <a href="#" id="carrera-83">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura en Cuidados Infantiles
                </div>
              </div>
            </a>

            <a href="#" id="carrera-84">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura en Interpretación de Lengua de Señas
                </div>
              </div>
            </a>

            <a href="#" id="carrera-85">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Educación Social
                </div>
              </div>
            </a>

          </div>


          <div class="all-careers carreras-10">

            <a href="#" id="carrera-86">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Licenciatura en Literatura Infantil
                </div>
              </div>
            </a>

            <a href="#" id="carrera-87">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ciclo de Profesorado para Profesionales Universitarios
                </div>
              </div>
            </a>

            <a href="#" id="carrera-88">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Geógrafo Profesional
                </div>
              </div>
            </a>

            <a href="#" id="carrera-89">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Ciencias de la Educación
                </div>
              </div>
            </a>

            <a href="#" id="carrera-90">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Filología Inglesa
                </div>
              </div>
            </a>

            <a href="#" id="carrera-91">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Filosofía
                </div>
              </div>
            </a>

            <a href="#" id="carrera-92">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Francés
                </div>
              </div>
            </a>

            <a href="#" id="carrera-93">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Geografía
                </div>
              </div>
            </a>

            <a href="#" id="carrera-94">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Historia
                </div>
              </div>
            </a>

            <a href="#" id="carrera-95">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Letras
                </div>
              </div>
            </a>

            <a href="#" id="carrera-96">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Turismo
                </div>
              </div>
            </a>

            <a href="#" id="carrera-97">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Ciencias de la Educación
                </div>
              </div>
            </a>

            <a href="#" id="carrera-98">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Filosofía
                </div>
              </div>
            </a>

            <a href="#" id="carrera-99">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Geografía
                </div>
              </div>
            </a>

            <a href="#" id="carrera-100">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Historia
                </div>
              </div>
            </a>

            <a href="#" id="carrera-101">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Lengua y Cultura Inglesas
                </div>
              </div>
            </a>

            <a href="#" id="carrera-102">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Lengua y Literatura
                </div>
              </div>
            </a>

            <a href="#" id="carrera-103">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Lengua y Literatura Francesas
                </div>
              </div>
            </a>

            <a href="#" id="carrera-104">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Profesorado de Grado Universitario en Portugués
                </div>
              </div>
            </a>

            <a href="#" id="carrera-105">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria de Francés
                </div>
              </div>
            </a>

            <a href="#" id="carrera-106">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Cartografía, Sistemas de Información Geográfica y Teledetección
                </div>
              </div>
            </a>

            <a href="#" id="carrera-107">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Traductorado Público Inglés - Español
                </div>
              </div>
            </a>

          </div>


          <div class="all-careers carreras-11">
            <a href="#" id="carrera-108">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Arquitectura
                </div>
              </div>
            </a>

            <a href="#" id="carrera-109">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ingeniería Civil
                </div>
              </div>
            </a>


            <a href="#" id="carrera-110">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ingeniería de Petróleos
                </div>
              </div>
            </a>


            <a href="#" id="carrera-111">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ingeniería en Mecatrónica
                </div>
              </div>
            </a>


            <a href="#" id="carrera-112">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ingeniería Industrial
                </div>
              </div>
            </a>


            <a href="#" id="carrera-113">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Ciencias de la Computación
                </div>
              </div>
            </a>


          </div>


          <div class="all-careers carreras-12">

            <a href="#" id="carrera-114">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Odontología
                </div>
              </div>
            </a>

            <a href="#" id="carrera-115">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Asistencia Odontológica
                </div>
              </div>
            </a>

            <a href="#" id="carrera-116">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Prótesis Dental
                </div>
              </div>
            </a>

          </div>


          <div class="all-careers carreras-13">

            <a href="#" id="carrera-117">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ingeniería en Telecomunicaciones
                </div>
              </div>
            </a>

            <a href="#" id="carrera-118">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ingeniería Mecánica
                </div>
              </div>
            </a>

            <a href="#" id="carrera-119">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Ingeniería Nuclear
                </div>
              </div>
            </a>

            <a href="#" id="carrera-120">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Física
                </div>
              </div>
            </a>

          </div>

          <div class="all-careers carreras-14">

            <a href="#" id="carrera-121">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura en Higiene y Seguridad en el Trabajo
                </div>
              </div>
            </a>

            <a href="#" id="carrera-122">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Electricidad y Sistemas de Control Industriales
                </div>
              </div>
            </a>


            <a href="#" id="carrera-123">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Gestión de Empresas
                </div>
              </div>
            </a>

            <a href="#" id="carrera-124">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Instalaciones Industriales y Mantenimiento
                </div>
              </div>
            </a>

            <a href="#" id="carrera-125">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Logística y Transporte
                </div>
              </div>
            </a>

            <a href="#" id="carrera-126">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Marketing
                </div>
              </div>
            </a>

            <a href="#" id="carrera-127">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Producción Industrial Automatizada
                </div>
              </div>
            </a>

            <a href="#" id="carrera-128">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Redes y Telecomunicaciones
                </div>
              </div>
            </a>

          </div>

          <div class="all-careers carreras-15">

            <a href="#" id="carrera-129">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Licenciatura en Seguridad Pública
                </div>
              </div>
            </a>

            <a href="#" id="carrera-130">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Seguridad Penitenciaria
                </div>
              </div>
            </a>

            <a href="#" id="carrera-131">
              <div class="contenedor-carrera">
                <div class="padre-icono-carrera">
                  <span class="icon-book"></span>
                </div>

                <div class="padre-texto-carrera">
                  Tecnicatura Universitaria en Seguridad Pública
                </div>
              </div>
            </a>

          </div>


        </div>
      </div>


      <div class="siguiente-carrera">
        <button type="submit" class="btn btn-default" id="siguiente-run" disabled>Siguiente</button>
      </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mapa-registro">
      <div class="form-group">
        <div id="mapa_registro"></div>
        <div style="display:none" class="fb-share-button" data-href="https://koiron.com/proyectos/2017/unc/" data-layout="button" data-size="large"><a class="class" href="javascript:void(0);" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkoiron.com%2Fproyectos%2F2017%2Func%2F&amp;src=sdkpreparse', 'popup', 'left=390, top=200, width=600, height=350, toolbar=0, resizable=1')" style="text-decoration: none;">Compartir</a></div>
      </div>

      <div class="siguiente-finalizar">
        <button type="submit" class="btn btn-default" id="siguiente-fin" disabled>Finalizar</button>
      </div>
    </div>
  </div>

</div>