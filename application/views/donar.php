<?php 
if (isset($_SESSION['newsession'])) {
  if ($_SESSION['newsession'] == "yes"){
    ?>
    <div class="contenedor-donar">
      <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <a href="#" id="cerrar-donar"><img src="<?php echo base_url('assets/img/cruz.png') ?>" alt=""></a>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenedor-wizard">
          <div class="wizard">
            <a id="bloque-05" href="#"><div class="bloque-wizard bloq-1 active">
              01
            </div></a>
            <div class="separador-wizard sep-d1">
              <div class="linea-separador active-sep"></div>
            </div>

            <a id="bloque-06" href="#"><div class="bloque-wizard bloq-2">
              02
            </div></a>
            <div class="separador-wizard sep-d2">
              <div class="linea-separador"></div>
            </div>
            <a id="bloque-07" href="#"><div class="bloque-wizard bloq-3">
              03
            </div></a>
          </div>
          <div class="word">
            <div class="palabras word-modo-donar word-active">
              Modo
            </div>
            <div class="palabras word-cantidad">
              Cantidad
            </div>
            <div class="palabras word-confirmacion">
              Confirmación
            </div>
          </div>
        </div>

        <div class="contenedor-modo-donar">
          <div class="contenedor-medio-donacion contenedor-mercado-pago">
            <div class="mercado-pago">
              <a href="#" id="mercado-pago"><img src="<?php echo base_url('assets/img/logo-mp.png') ?>" alt=""></a>
            </div>
            <div class="menu-mercado-pago">
              <div class="contenedor-lista-mp">
                <div class="opciones-mp">
                <select name="mercado" id="mp-select" class="form-control">
                    <option value="boton-1">$30</option>
                    <option value="boton-2">$50</option>
                    <option value="boton-3">$100</option>
                    <option value="boton-4">$200</option>
                    <option value="boton-5">$500</option>
                    <option value="boton-6">$750</option>
                    <option value="boton-7">Suscribirse</option>
                  </select>
                </div>
                <div class="boton-mp">
                  <input type="button" value="Donar por Mercado Pago">
                </div>
              </div>
              
            </div>
          </div>
          <div class="contenedor-medio-donacion contenedor-paypal">
            <div class="paypal">
              <a href="#" id="paypal"><img src="<?php echo base_url('assets/img/logo-pp.png') ?>" alt=""></a>
            </div>
            <div class="menu-paypal">
              <div class="contenedor-lista-pp">
                <input type="number" class="form-control" placeholder="Ingresa el monto a donar">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <?php 
  }
}
?>