<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<title><?php echo $this->layout->getTitle(); ?></title>
		<!-- CSS General *********************************************************** -->
		<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap.css" />
		<!-- CSS Independiente ***************************************************** -->
		<?php echo $this->layout->css; ?>
		<!-- *********************************************************************** -->
	</head>
	<body>

		<?php echo $content_for_layout; ?>

		<!-- JS General ************************************************************ -->
		<script src="<?php echo base_url()?>public/js/jquery-2.1.0.min.js"></script>
		<script src="<?php echo base_url()?>public/js/bootstrap.min.js"></script>
		<!-- JS Independiente ****************************************************** -->
		<?php echo $this->layout->js; ?>
		<!-- *********************************************************************** -->

	</body>
</html>