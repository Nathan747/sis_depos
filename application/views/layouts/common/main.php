<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>
	<?php if ($header) echo $header ?>
	
	<?php if ($content) echo $content ?>

	<?php if ($footer) echo $footer ?>
	
	<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
</body>
</html>