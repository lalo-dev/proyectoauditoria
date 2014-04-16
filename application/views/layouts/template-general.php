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
	          		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            		<span class="sr-only">Toggle navigation</span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	          		</button>
	          		<a class="navbar-brand" href="#">Proyecto Auditoria</a>
	        	</div>
	        	<div class="navbar-collapse collapse">
	          		<ul class="nav navbar-nav">
	            		<li class="active"><a href="<?php echo base_url()?>dashboard/administrador">Home</a></li>
	            		<li><a href="#">Menu 1</a></li>
	            		<li><a href="#">Menu 2</a></li>
	            		<li><a href="#">Menu 2</a></li>
	          		</ul>
	          		<ul class="nav navbar-nav navbar-right">
	          			<li class="dropdown">
	              			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('nombre'); ?> <b class="caret"></b></a>
	              			<ul class="dropdown-menu">
	                			<li><a href="#"><span class="icon-user"></span> Editar perfil</a></li>
	                			<li><a href="#"><span class="icon-bubbles"></span> Mensajes</a></li>
	                			<li class="divider"></li>
	                			<li><a href="<?php echo base_url()?>acceso/salir"><span class="icon-powercord"></span> Cerrar sesión</a></li>
	              			</ul>
	            		</li>
	          		</ul>
	        	</div><!--/.nav-collapse -->
	      	</div>
	    </div>

	    <div class="container theme-showcase" role="main">

		    <?php echo $content_for_layout; ?>

	    </div> <!-- /container -->

	    <!-- JS General ************************************************************ -->
		<script src="<?php echo base_url()?>public/js/jquery-2.1.0.min.js"></script>
		<script src="<?php echo base_url()?>public/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>public/js/jsEditarUsuario.js"></script>
		<!-- JS Independiente ****************************************************** -->
		<?php echo $this->layout->js; ?>
		<!-- *********************************************************************** -->
  	</body>
</html>
