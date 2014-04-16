<div class="page-header">
	<h1>Usuario <small>Editar</small></h1>
</div>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<?php 
		if ( $this->session->flashdata('ControllerMessage') != '' ) 
		    {
		?>
			<div class="alert alert-success">
      			<strong>¡ </strong><?php echo $this->session->flashdata('ControllerMessage'); ?><strong> !</strong>
    		</div>
		<?php 
		} 
		?>

		<?php
		$atributos = array( 'id'=>'form','name'=>'form','class'=>'form-horizontal','role'=>'form');

		echo form_open_multipart(null,$atributos);
		?>
			<div class="form-group">
	    		<label for="slcTipo" class="col-sm-4 control-label">Tipo de usuario</label>
	    		<div class="col-sm-8">
	      			<select class="form-control" id="slcTipo" name="slcTipo">
	      				<option value="0">Seleccione un tipo</option>
					<?php
	      			$tipo = $this->session->userdata('tipo');

	      			if ($tipo == 1) {
	      			?>
						<option value="1"<?php if ($datos->tipo == 1) {echo ' selected="selected"';}?>>Administrador</option>
						<option value="2"<?php if ($datos->tipo == 2) {echo ' selected="selected"';}?>>Gerente</option>
					<?php
	      			}
	      			?>
					  	<option value="3"<?php if ($datos->tipo == 3) {echo ' selected="selected"';}?>>Auditor</option>
					  	<option value="4"<?php if ($datos->tipo == 4) {echo 'selected="selected"';}?>>Cliente</option>
					  	<option value="5"<?php if ($datos->tipo == 5) {echo 'selected="selected"';}?>>Proveedor</option>
					</select>
	    		</div>
	  		</div>
			<div class="form-group">
	    		<label for="txtNombre" class="col-sm-4 control-label">Nombre</label>
	    		<div class="col-sm-8">
	      			<input type="text" class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $datos->nombre ?>">
	    		</div>
	  		</div>
		  	<div class="form-group">
		    	<label for="txtAp" class="col-sm-4 control-label">Apellido Paterno</label>
		    	<div class="col-sm-8">
		      		<input type="text" class="form-control" id="txtAp" name="txtAp" value="<?php echo $datos->ap ?>">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="txtAm" class="col-sm-4 control-label">Apellido Materno</label>
		    	<div class="col-sm-8">
		      		<input type="text" class="form-control" id="txtAm" name="txtAm" value="<?php echo $datos->am ?>">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<div class="col-sm-offset-4 col-sm-8">
		    	<?php
		    	if ($tipo == 1) {
		    	?>
		    		<a href="<?php echo base_url()?>usuarios/administrador" class="btn btn-default">
			    		<span class="icon-arrow-left2"></span> Regresar
			    	</a>
			    <?php
		    	} else {
		    	?>
			    	<a href="<?php echo base_url()?>usuarios/gerente" class="btn btn-default">
			    		<span class="icon-arrow-left2"></span> Regresar
			    	</a>
			    <?php
				}
			    ?>
			    	<button type="reset" class="btn btn-default">
			      		<span class="icon-blocked"></span> Cancelar
			      	</button>
			      	<button type="submit" class="btn btn-primary">
			      		<span class="icon-disk"></span> Guardar
			      	</button>
		    	</div>
		  	</div>
		<?php
		echo form_close();
		?>
	</div>
</div>