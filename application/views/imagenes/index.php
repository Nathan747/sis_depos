<body>
<form action="<?php echo base_url("") . "Cargar_Imagen/proceso"; ?>" method="POST" enctype="multipart/form-data">
		<table width="350" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000">
			<tr>
				<td height="85" align="center" valign="middle" bgcolor="#FFFFFF">
					<div align="center">
						<input name="imagen" type="file" maxlength="150">
						<br><br>                                     
						<input type="submit" value="Agregar" name="enviar" style="cursor: pointer">
					</div>
				</td>
			</tr>
		</table>
	</form>
</body>