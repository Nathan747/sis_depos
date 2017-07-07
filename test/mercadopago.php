<form name="precios" >
	<select name="precio" id="precio">
		<option value="boton-8">$1</option>
		<option value="boton-1">$30</option>
		<option value="boton-2">$50</option>
		<option value="boton-3">$100</option>
		<option value="boton-4">$200</option>
		<option value="boton-5">$500</option>
		<option value="boton-6">$750</option>
		<option value="boton-7">Suscribirse</option>
	</select>

	<button type="button" onclick="javascript:abreSitio()">ENVIAR</button>
</form>


<a id="boton-1" mp-mode="dftl" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=2857954-d9285243-ef2b-480f-b601-ed76b79e75ef" name="MP-payButton" class='blue-ar-l-rn-none'>$30</a>
<a id="boton-2" mp-mode="dftl" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=2857954-7d0c5a47-90f0-4e2e-bf55-b8c5f342b785" name="MP-payButton" >$50</a>
<a id="boton-3" mp-mode="dftl" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=2857954-bfb500d6-8407-4192-9999-cda6f1ee7f18" name="MP-payButton" >$100</a>
<a id="boton-4" mp-mode="dftl" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=2857954-8cbfce52-3e9b-42d4-b102-909e7da71126" name="MP-payButton" class='blue-ar-l-rn-none'>$200</a>
<a id="boton-5" mp-mode="dftl" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=2857954-d66f4a4d-2463-4104-ad61-8c38f7099103" name="MP-payButton" class='blue-ar-l-rn-none'>$500</a>
<a id="boton-6" mp-mode="dftl" style="display: none" href="https://www.mercadopago.com/mla/checkout/start?pref_id=2857954-c2616622-630b-48ae-b3f9-bdaccb97feb1" name="MP-payButton" class='blue-ar-l-rn-none'>$750</a>
<a id="boton-7" mp-mode="dftl" style="display: none" href="http://mpago.la/vFlp" name="MP-payButton">Suscribirme</a>
<a id="boton-8" mp-mode="dftl" style="display: none" href="http://mpago.la/vFlp" name="MP-payButton">$1</a>

<script LANGUAGE="JavaScript">
	function abreSitio(){
		var clase = document.precios.precio.options[document.precios.precio.selectedIndex].value;
		console.log("click");
		console.log(clase);
		var test = document.getElementById(clase).click();
		console.log(test);
	}
</script>


<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="6UBCFYMG3RZH6">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>

<script type="text/javascript">
	(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
</script>
