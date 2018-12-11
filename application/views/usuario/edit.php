<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php if ($this->session->userdata('rol') == 'adm'): ?>
				<form  action="<?= base_url('usuario/edit/').$Usuario->idusuario;?>" method="POST" class="form-horizontal">
					<h3>Nueva Usuario</h3>
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="basicinput">Nombre</label>
						<div class="col-sm-10">				
							<input class="form-control" type="text" name="nombre" value="<?php echo $Usuario->nombre ?>" placeholder="Nombre">					
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="basicinput">Apellido</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="apellido" value="<?php echo $Usuario->apellido ?>" placeholder="Apellido">					
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="basicinput">Fecha de nacimiento</label>
						<div class="col-sm-10">
							<input class="form-control" type="date" name="fecha_nacimiento" value="<?php echo $Usuario->fecha_nacimiento ?>">					
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="basicinput">Estado</label>
						<div class="col-sm-10">
							<select class="form-control" name="status">
								<option value="1" <?php if ($Usuario->status == "1"): ?> selected <?php endif; ?> >Habilitado</option>
								<option value="0" <?php if ($Usuario->status == "0"): ?> selected <?php endif; ?> >Desabilitado</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="basicinput">Rol</label>
						<div class="col-sm-10">
							<select class="form-control" name="rol">
								<option value="adm" <?php if ($Usuario->rol == "adm"): ?> selected="TRUE" <?php endif; ?> >Administrador</option>
								<option value="pac" <?php if ($Usuario->rol == "pac"): ?> selected="TRUE" <?php endif; ?> >Paciente</option>
								<option value="tut" <?php if ($Usuario->rol == "tut"): ?> selected="TRUE" <?php endif; ?> >Tutor</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="basicinput">Responsable</label>
						<div class="col-sm-10">
							<select class="form-control" name="id_usuario_responsable">						
								<?php foreach ($Responsables as $responsable): ?>
									<option value="<?php echo $responsable->idusuario ?>" <?php if ($responsable->idusuario == $Usuario->id_usuario_responsable): ?> selected <?php endif; ?> > <?php echo $responsable->nombre ?> <?php echo $responsable->apellido ?></option>	
								<?php endforeach ?>						
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<div class="controls clearfix">
							<button type="submit" class="btn btn-primary pull-right">Guardar</button>
						</div>
					</div>
					<?php echo validation_errors('<p class="bg-danger">','</p>');?>
					<?php if (isset($failed_message)): ?>
						<div class="alert alert-success" role="alert"><?php echo $failed_message ?></div>					
					<?php endif ?>		
				</form>	
			<?php endif ?>

			<?php if ($this->session->userdata('rol') == 'tut'): ?>
				<form  action="<?= base_url('usuario/edit/').$Usuario->idusuario;?>" method="POST" class="form-horizontal">
					<h3>Nueva Usuario</h3>
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="basicinput">Nombre</label>
						<div class="col-sm-10">				
							<input class="form-control" type="text" name="nombre" value="<?php echo $Usuario->nombre ?>" placeholder="Nombre">					
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="basicinput">Apellido</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="apellido" value="<?php echo $Usuario->apellido ?>" placeholder="Apellido">					
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="basicinput">Fecha de nacimiento</label>
						<div class="col-sm-10">
							<input class="form-control" type="date" name="fecha_nacimiento" value="<?php echo $Usuario->fecha_nacimiento ?>">					
						</div>
					</div>
					
					<div class="form-group">
						<div class="controls clearfix">
							<button type="submit" class="btn btn-primary pull-right">Guardar</button>
						</div>
					</div>
					<?php echo validation_errors('<p class="bg-danger">','</p>');?>
					<?php if (isset($failed_message)): ?>
						<div class="alert alert-success" role="alert"><?php echo $failed_message ?></div>					
					<?php endif ?>		
				</form>
			<?php endif ?>

			<?php if ($this->session->userdata('rol') == 'pac'): ?>
				<form  action="<?= base_url('usuario/edit/').$Usuario->idusuario;?>" method="POST" class="form-horizontal">
					<h3>Nueva Usuario</h3>
					<div class="form-group">	
						<label class="col-sm-2 control-label" for="basicinput">Nombre</label>
						<div class="col-sm-10">				
							<input class="form-control" type="text" name="nombre" value="<?php echo $Usuario->nombre ?>" placeholder="Nombre">					
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="basicinput">Apellido</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="apellido" value="<?php echo $Usuario->apellido ?>" placeholder="Apellido">					
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="basicinput">Fecha de nacimiento</label>
						<div class="col-sm-10">
							<input class="form-control" type="date" name="fecha_nacimiento" value="<?php echo $Usuario->fecha_nacimiento ?>">					
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="basicinput">Estado</label>
						<div class="col-sm-10">
							<select class="form-control" name="status">
								<option value="1" <?php if ($Usuario->status == "1"): ?> selected <?php endif; ?> >Habilitado</option>
								<option value="0" <?php if ($Usuario->status == "0"): ?> selected <?php endif; ?> >Desabilitado</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="basicinput">Rol</label>
						<div class="col-sm-10">
							<select class="form-control" name="rol">
								<option value="adm" <?php if ($Usuario->rol == "adm"): ?> selected="TRUE" <?php endif; ?> >Administrador</option>
								<option value="pac" <?php if ($Usuario->rol == "pac"): ?> selected="TRUE" <?php endif; ?> >Paciente</option>
								<option value="tut" <?php if ($Usuario->rol == "tut"): ?> selected="TRUE" <?php endif; ?> >Tutor</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<div class="controls clearfix">
							<button type="submit" class="btn btn-primary pull-right">Guardar</button>
						</div>
					</div>
					<?php echo validation_errors('<p class="bg-danger">','</p>');?>
					<?php if (isset($failed_message)): ?>
						<div class="alert alert-success" role="alert"><?php echo $failed_message ?></div>					
					<?php endif ?>		
				</form>
			<?php endif ?>
		</div>
		<?php if ($this->session->userdata('rol') == 'tut'): ?>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Usuarios</h2>
			<a href="<?php echo base_url('usuario/add') ?>" class="btn btn-primary"><span class="icon-plus"></span> Añadir</a>
			<table class="table">
				<thead>
					<tr>							
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Email</th>
						<th>Fecha Nacimiento</th>
						<th>Rol</th>
						<th>Status</th>
						<th>Accion</th>
					</tr>	
				</thead>
				<tbody>
					<?php foreach ($Usuarios as $usuario): ?>
					<tr>
						<td><?php echo $usuario->nombre ?></td>
						<td><?php echo $usuario->apellido ?></td>
						<td><?php echo $usuario->email ?></td>
						<td><?php echo $usuario->fecha_nacimiento ?></td>
						<td><?php echo $usuario->rol ?></td>
						<td><?php echo $usuario->status ?></td>
						<td><a href="<?php echo base_url('usuario/edit/').$usuario->idusuario ?>"><i class="menu-icon icon-pencil"></i></a></td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		<?php endif ?>			
	</div>
</div>
