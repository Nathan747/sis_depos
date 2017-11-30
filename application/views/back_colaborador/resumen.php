<div id="resumen-colaborador" class="background-opciones contenedor-tablas" >
    <div class="contenedor-colaborador">

    
	<div class="contenedor-titulo">
		<div class="col-lg-12"><h1>Resumen</h1></div>
	</div>
	<div class="col-lg-12"><div class="separador"></div></div>
	<div class="col-lg-12">
		<table class="table table-condensed table-hover">
			<tr>
				<th style="text-align: center;">NOMBRE Y APELLIDO</th>
				<th style="text-align: center;">DNI</th>
                <th style="text-align: center;">CANTIDAD TOTAL</th>
                <th style="text-align: center;">RECIBIDO</th>
				<th style="text-align: center;">FECHA DE DONACIÓN</th>
			</tr>

            <?php
            for ($x = 0; $x < $objeto["cantidad"]; $x++) {
                ?>
			<tr>
				<td style='text-align: center;'><?php echo $objeto[$x]["nombre"] . " " . $objeto[$x]["apellido"] ?></td>
				<td style='text-align: center;'><?php echo $objeto[$x]["dni"] ?></td>
                <td style='text-align: center;'><strong><?php echo $objeto[$x]["cantidad_dinero"] ?></strong></td>
                <td style='text-align: center;'><strong><?php echo $objeto[$x]["recibido"] ?></strong></td>
				<td style='text-align: center;'><?php echo $objeto[$x]["fecha_creacion"] ?></td>
			</tr>
			<?php

}

?>
		
	</table>
</div>
<div class="col-lg-12"><div class="cuadro-busqueda">
	<div class="col-lg-2">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Buscar">
		</div>
	</div>
	<div class="col-lg-10">
		<div class="cantidad-dinero">Cantidad dinero restante: <span>$</span><span class="cantidad-total-numero"><?php /*echo $becas["cantidad_dinero"]; */ ?></span></div>
	</div>
</div>
</div>
</div>
</div>