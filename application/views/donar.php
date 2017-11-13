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
                  <form name="precios" >
                    <select name="mp_select" id="mp_select" class="form-control">
                      <option value="boton-8">$1</option>
                      <option value="boton-1">$2</option>
                      <option value="boton-2">$3</option>
                      <option value="boton-3">$100</option>
                      <option value="boton-4">$200</option>
                      <option value="boton-5">$500</option>
                      <option value="boton-6">$750</option>
                      <option value="boton-7">Suscribirse</option>
                    </select>
                  </div>
                  <div class="boton-mp">
                    <button type="button" onclick="javascript:abreSitio()" >Donar por Mercado Pago</button>
                  </div>
                </form>
              </div>

              <a id="boton-1" mp-mode="dftl" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=150678392-48943d1f-3ba1-4f42-a4a0-711ac32534ab" name="MP-payButton" class='blue-ar-l-rn-none' target="_blank">$2</a>
              <a id="boton-2" mp-mode="dftl" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=150678392-c970e19b-176f-460a-a61b-c12dacbcd12a" name="MP-payButton" target="_blank">$3</a>
              <a id="boton-3" mp-mode="dftl" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=277501295-10f3abc2-c15b-49dd-8a15-9d86d34b2653" name="MP-payButton" target="_blank">$100</a>


              <a id="boton-4" mp-mode="dftl" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=2857954-8cbfce52-3e9b-42d4-b102-909e7da71126" name="MP-payButton" class='blue-ar-l-rn-none' target="_blank">$200</a>
              <a id="boton-5" mp-mode="dftl" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=2857954-d66f4a4d-2463-4104-ad61-8c38f7099103" name="MP-payButton" class='blue-ar-l-rn-none' target="_blank">$500</a>
              <a id="boton-6" mp-mode="dftl" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=2857954-c2616622-630b-48ae-b3f9-bdaccb97feb1" name="MP-payButton" class='blue-ar-l-rn-none' target="_blank">$750</a>
              <a id="boton-7" mp-mode="dftl" style="display: none" href="http://mpago.la/vFlp" name="MP-payButton" target="_blank">Suscribirme</a>
              <!--a id="boton-8" name="MP-Checkout" mp-mode="modal" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=150678392-121ad1b1-06e4-4471-be28-1aaf58465e27" onreturn="execute_my_onreturn" target="modal">$1</a-->
              <a id="boton-8" name="MP-Checkout" mp-mode="modal" href="<?php echo $preference['response']['sandbox_init_point'] ?>" onreturn="execute_my_onreturn" target="modal">$1</a>
              
              
            </div>
          </div>
          <div class="contenedor-medio-donacion contenedor-paypal">
            <div class="paypal">
              <a href="#" id="paypal"><img src="<?php echo base_url('assets/img/logo-pp.png') ?>" alt=""></a>
            </div>
            <div class="menu-paypal">
              <div class="contenedor-lista-pp">
                <!--input type="number" class="form-control" placeholder="Ingresa el monto a donar"-->
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="6UBCFYMG3RZH6">
                  <button alt="PayPal - La manera más fácil y segura de pagar online!" type="submit" name="submit">Donar por Paypal</button>
                </form>
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

<script type="text/javascript">
(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
</script>