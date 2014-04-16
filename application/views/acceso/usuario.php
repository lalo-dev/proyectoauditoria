<div class="row">
	<div class="col-lg-4 col-lg-offset-4">
		<div class="page-header">
        	<h1><strong>Bienvenido !</strong></h1>
        	<br />
      	</div>

      	<?php
      		if ( $this->session->flashdata('ControllerMessage') != '' ) {
      	?>

		<div class="alert alert-danger text-center">
			<strong><?php echo $this->session->flashdata('ControllerMessage'); ?></strong>
		</div>

      	<?php
      		}
      	?>

      	<?php
      		$atributos = array('id'=>'form','name'=>'form','class'=>'form-horizontal','role'=>'form');
      		echo form_open(null,$atributos)
      	?>
		  	<div class="form-group">
		    	<label for="inputEmail1" class="col-lg-4 control-label">Usuario</label>
		    	<div class="col-lg-8">
		      		<input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="inputPassword1" class="col-lg-4 control-label">Contraseña</label>
		    	<div class="col-lg-8">
		      		<input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="contraseña">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<div class="col-lg-offset-4 col-lg-8">
		      		<button type="submit" class="btn btn-default">Aceptar</button>
		    	</div>
		  	</div>
		<?php
			echo form_close();
		?>
	</div>
</div>