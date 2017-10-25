<div id="menu-recaudado" class="background-opciones contenedor-tablas" >
	<div class="contenedor-titulo">
		<div class="col-lg-12"><h1>Recaudado</h1></div>
	</div>
	<div class="col-lg-12"><div class="separador"></div></div>
	<div class="col-lg-12">
		<table class="table table-condensed table-hover">
			<tr>
				<th style="text-align: center;">NOMBRE Y APELLIDO</th>
				<th style="text-align: center;">DNI</th>
				<th style="text-align: center;">CANTIDAD</th>
				<th style="text-align: center;">INICIO BECA</th>
				<th style="text-align: center;">ULTIMA ACTUALIZACION</th>
			</tr>

			<?php 


			for ($x=0; $x<$becas["cantidad"]; $x++) { 
			?>
			<tr>
				<td style='text-align: center;'><?php echo $becas[$x]["nombre"] . " " . $becas[$x]["apellido"] ?></td>
				<td style='text-align: center;'><?php echo $becas[$x]["dni"] ?></td>
				<td style='text-align: center;'><strong><?php echo $becas[$x]["monto_beca"] ?></strong></td>
				<td style='text-align: center;'><?php echo $becas[$x]["fecha_inicio"] ?></td>
				<td style='text-align: center;'><?php echo $becas[$x]["ultima_modificacion"] ?></td>
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
		<div class="cantidad-dinero">Cantidad dinero restante: <span>$</span><span class="cantidad-total-numero"><?php echo $becas["cantidad_dinero"]; ?></span></div>
	</div>
</div>
</div>
</div>