<!DOCTYPE html>
<html lang="es">
  	<head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="auditorias">
	    <meta name="author" content="MAALTO Systems">
	    <link rel="shortcut icon" href="">

	    <title><?php echo $this->layout->getTitle(); ?></title>

	    <!-- CSS General *********************************************************** -->
		<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>public/css/general.css" />
		<!-- CSS Independiente ***************************************************** -->
		<?php echo $this->layout->css; ?>
		<!-- *********************************************************************** -->
  	</head>

  	<body role="document">

	    <!-- Fixed navbar -->
	    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	      	<div class="container">
	        	<div class="navbar-header">
	          		<a class="navbar-brand" href="#">Proyecto Auditoria</a>
	        	</div>
	      	</div>
	    </div>

	    <div class="container theme-showcase" role="main">

		    <?php echo $content_for_layout; ?>

	    </div> <!-- /container -->

	    <!-- JS General ************************************************************ -->
		<script src="<?php echo base_url()?>public/js/jquery-2.1.0.min.js"></script>
		<script src="<?php echo base_url()?>public/js/bootstrap.min.js"></script>
		<!-- JS Independiente ****************************************************** -->
		<?php echo $this->layout->js; ?>
		<!-- *********************************************************************** -->
  	</body>
</html>
