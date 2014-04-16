<div class="page-header">
	<h1>Configuración - Usuarios <small>Administrador</small></h1>
</div>

<div class="row">
	<div class="col-md-12">
		<?php 
		if ( $this->session->flashdata('ControllerMessage') != '' ) 
		    {
		?>
			<div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      			<strong>¡ </strong><?php echo $this->session->flashdata('ControllerMessage'); ?><strong> !</strong>
    		</div>
		<?php 
		} 
		?>
		
		<div class="alert alert-info">
			<a href="<?php echo base_url()?>usuarios/agregar" class="alert-link">
				<span class="icon-plus"></span> Agregar usuario
			</a>
		</div>
		
		<br />

		<div class="panel-group" id="accordion">
		  	<div class="panel panel-primary">
		    	<div class="panel-heading">
		      		<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
		          			<strong class="colorBlanco">Administradores</strong>
		        		</a>
		      		</h4>
		    	</div>
		    	<div id="collapseOne" class="panel-collapse collapse">
		      		<div class="panel-body">
		        		<div class="table-responsive">
		        			<table class="table">
		        				<thead>
		        					<tr>
		        						<th>#</th>
		        						<th>Nombre</th>
		        						<th>Apellido Paterno</th>
		        						<th>Apellido Materno</th>
		        						<th>Usuario</th>
		        						<th>Estatus</th>
		        						<th>Editar</th>
		        						<th>Eliminar</th>
		        					</tr>
		        				</thead>
		        				<tbody>
		        				<?php
		        				$iUsuario = 1;

								foreach($administradores as $administrador) {
								?>
									<tr>
										<td><?php echo $iUsuario?></td>
										<td><?php echo $administrador->nombre?></td>
										<td><?php echo $administrador->apellido_paterno?></td>
										<td><?php echo $administrador->apellido_materno?></td>
										<td><?php echo $administrador->usuario?></td>
										<td>
										<?php
										if ($administrador->estado == 1) {
										?>
											<a href="" class="btn btn-primary">
								    			<span class="icon-checkmark-circle"></span>
								    		</a>
										<?php
										} else {
										?>
											<a href="" class="btn btn-primary">
								    			<span class="icon-cancel-circle"></span>
								    		</a>
										<?php
										}
										?>
										</td>
										<td>
								    		<a href="<?php echo base_url()?>usuarios/editar/<?php echo $administrador->id?>" class="btn btn-primary">
								    			<span class="icon-pencil colorBlanco"></span>
								    		</a>
										</td>
										<td>
											<a href="javascript:void(0);" onclick="eliminar('<?php echo base_url()?>usuarios/eliminar/<?php echo $administrador->id?>')" class="btn btn-primary">
												<span class="icon-remove colorBlanco"></span>
											</a>
										</td>
									</tr>
								<?php
									$iUsuario++;
								}
								?>
		        				</tbody>
		        			</table>
		        		</div>
		      		</div>
		    	</div>
		  	</div>
		  	<div class="panel panel-primary">
		    	<div class="panel-heading">
		      		<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
		          			<strong class="colorBlanco">Gerentes</strong>
		        		</a>
		      		</h4>
		    	</div>
		    	<div id="collapseTwo" class="panel-collapse collapse">
		      		<div class="panel-body">
		        		<div class="table-responsive">
		        			<table class="table">
		        				<thead>
		        					<tr>
		        						<th>#</th>
		        						<th>Nombre</th>
		        						<th>Apellido Paterno</th>
		        						<th>Apellido Materno</th>
		        						<th>Usuario</th>
		        						<th>Estatus</th>
		        						<th>Editar</th>
		        						<th>Eliminar</th>
		        					</tr>
		        				</thead>
		        				<tbody>
		        				<?php
		        				$iUsuario = 1;

								foreach($gerentes as $gerente) {
								?>
									<tr>
										<td><?php echo $iUsuario?></td>
										<td><?php echo $gerente->nombre?></td>
										<td><?php echo $gerente->apellido_paterno?></td>
										<td><?php echo $gerente->apellido_materno?></td>
										<td><?php echo $gerente->usuario?></td>
										<td>
										<?php
										if ($gerente->estado == 1) {
										?>
											<a href="" class="btn btn-primary">
								    			<span class="icon-checkmark-circle"></span>
								    		</a>
										<?php
										} else {
										?>
											<a href="" class="btn btn-primary">
								    			<span class="icon-cancel-circle"></span>
								    		</a>
										<?php
										}
										?>
										</td>
										<td>
								    		<a href="<?php echo base_url()?>usuarios/editar/<?php echo $gerente->id?>" class="btn btn-primary">
								    			<span class="icon-pencil colorBlanco"></span>
								    		</a>
										</td>
										<td>
											<a href="javascript:void(0);" onclick="eliminar('<?php echo base_url()?>usuarios/eliminar/<?php echo $gerente->id?>')" class="btn btn-primary">
												<span class="icon-remove colorBlanco"></span>
											</a>
										</td>
									</tr>
								<?php
									$iUsuario++;
								}
								?>
		        				</tbody>
		        			</table>
		        		</div>
		      		</div>
		    	</div>
		  	</div>
		  	<div class="panel panel-primary">
		    	<div class="panel-heading">
		      		<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		          			<strong class="colorBlanco">Auditores</strong>
		        		</a>
		      		</h4>
		    	</div>
		    	<div id="collapseThree" class="panel-collapse collapse">
		      		<div class="panel-body">
		        		<div class="table-responsive">
		        			<table class="table">
		        				<thead>
		        					<tr>
		        						<th>#</th>
		        						<th>Nombre</th>
		        						<th>Apellido Paterno</th>
		        						<th>Apellido Materno</th>
		        						<th>Usuario</th>
		        						<th>Estatus</th>
		        						<th>Editar</th>
		        						<th>Eliminar</th>
		        					</tr>
		        				</thead>
		        				<tbody>
		        				<?php
		        				$iUsuario = 1;

								foreach($auditores as $auditor) {
								?>
									<tr>
										<td><?php echo $iUsuario?></td>
										<td><?php echo $auditor->nombre?></td>
										<td><?php echo $auditor->apellido_paterno?></td>
										<td><?php echo $auditor->apellido_materno?></td>
										<td><?php echo $auditor->usuario?></td>
										<td>
										<?php
										if ($auditor->estado == 1) {
										?>
											<a href="" class="btn btn-primary">
								    			<span class="icon-checkmark-circle"></span>
								    		</a>
										<?php
										} else {
										?>
											<a href="" class="btn btn-primary">
								    			<span class="icon-cancel-circle"></span>
								    		</a>
										<?php
										}
										?>
										</td>
										<td>
								    		<a href="<?php echo base_url()?>usuarios/editar/<?php echo $auditor->id?>" class="btn btn-primary">
								    			<span class="icon-pencil colorBlanco"></span>
								    		</a>
										</td>
										<td>
											<a href="javascript:void(0);" onclick="eliminar('<?php echo base_url()?>usuarios/eliminar/<?php echo $auditor->id?>')" class="btn btn-primary">
												<span class="icon-remove colorBlanco"></span>
											</a>
										</td>
									</tr>
								<?php
									$iUsuario++;
								}
								?>
		        				</tbody>
		        			</table>
		        		</div>
		      		</div>
		    	</div>
		  	</div>
		  	<div class="panel panel-primary">
		    	<div class="panel-heading">
		      		<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
		          			<strong class="colorBlanco">Clientes</strong>
		        		</a>
		      		</h4>
		    	</div>
		    	<div id="collapseFour" class="panel-collapse collapse">
		      		<div class="panel-body">
		        		<div class="table-responsive">
		        			<table class="table">
		        				<thead>
		        					<tr>
		        						<th>#</th>
		        						<th>Nombre</th>
		        						<th>Apellido Paterno</th>
		        						<th>Apellido Materno</th>
		        						<th>Usuario</th>
		        						<th>Estatus</th>
		        						<th>Editar</th>
		        						<th>Eliminar</th>
		        					</tr>
		        				</thead>
		        				<tbody>
		        				<?php
		        				$iUsuario = 1;

								foreach($clientes as $cliente) {
								?>
									<tr>
										<td><?php echo $iUsuario?></td>
										<td><?php echo $cliente->nombre?></td>
										<td><?php echo $cliente->apellido_paterno?></td>
										<td><?php echo $cliente->apellido_materno?></td>
										<td><?php echo $cliente->usuario?></td>
										<td>
										<?php
										if ($cliente->estado == 1) {
										?>
											<a href="" class="btn btn-primary">
								    			<span class="icon-checkmark-circle"></span>
								    		</a>
										<?php
										} else {
										?>
											<a href="" class="btn btn-primary">
								    			<span class="icon-cancel-circle"></span>
								    		</a>
										<?php
										}
										?>
										</td>
										<td>
								    		<a href="<?php echo base_url()?>usuarios/editar/<?php echo $cliente->id?>" class="btn btn-primary">
								    			<span class="icon-pencil colorBlanco"></span>
								    		</a>
										</td>
										<td>
											<a href="javascript:void(0);" onclick="eliminar('<?php echo base_url()?>usuarios/eliminar/<?php echo $cliente->id?>')" class="btn btn-primary">
												<span class="icon-remove colorBlanco"></span>
											</a>
										</td>
									</tr>
								<?php
									$iUsuario++;
								}
								?>
		        				</tbody>
		        			</table>
		        		</div>
		      		</div>
		    	</div>
		  	</div>
		  	<div class="panel panel-primary">
		    	<div class="panel-heading">
		      		<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
		          			<strong class="colorBlanco">Proveedores</strong>
		        		</a>
		      		</h4>
		    	</div>
		    	<div id="collapseFive" class="panel-collapse collapse">
		      		<div class="panel-body">
		        		<div class="table-responsive">
		        			<table class="table">
		        				<thead>
		        					<tr>
		        						<th>#</th>
		        						<th>Nombre</th>
		        						<th>Apellido Paterno</th>
		        						<th>Apellido Materno</th>
		        						<th>Usuario</th>
		        						<th>Estatus</th>
		        						<th>Editar</th>
		        						<th>Eliminar</th>
		        					</tr>
		        				</thead>
		        				<tbody>
		        				<?php
		        				$iUsuario = 1;

								foreach($proveedores as $proveedor) {
								?>
									<tr>
										<td><?php echo $iUsuario?></td>
										<td><?php echo $proveedor->nombre?></td>
										<td><?php echo $proveedor->apellido_paterno?></td>
										<td><?php echo $proveedor->apellido_materno?></td>
										<td><?php echo $proveedor->usuario?></td>
										<td>
										<?php
										if ($proveedor->estado == 1) {
										?>
											<a href="" class="btn btn-primary">
								    			<span class="icon-checkmark-circle"></span>
								    		</a>
										<?php
										} else {
										?>
											<a href="" class="btn btn-primary">
								    			<span class="icon-cancel-circle"></span>
								    		</a>
										<?php
										}
										?>
										</td>
										<td>
								    		<a href="<?php echo base_url()?>usuarios/editar/<?php echo $proveedor->id?>" class="btn btn-primary">
								    			<span class="icon-pencil colorBlanco"></span>
								    		</a>
										</td>
										<td>
											<a href="javascript:void(0);" onclick="eliminar('<?php echo base_url()?>usuarios/eliminar/<?php echo $proveedor->id?>')" class="btn btn-primary">
												<span class="icon-remove colorBlanco"></span>
											</a>
										</td>
									</tr>
								<?php
									$iUsuario++;
								}
								?>
		        				</tbody>
		        			</table>
		        		</div>
		      		</div>
		    	</div>
		  	</div>
		</div>
	</div>
</div>