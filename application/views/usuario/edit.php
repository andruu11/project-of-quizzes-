<div class="container">
	<div class="row">
		<div  class="col-sm-offset-4 col-sm-5">
			<form  action="<?= base_url('usuario/edit/').$Usuario->idusuario;?>" method="POST">
				<h3>Nueva Usuario</h3>
				<div class="form-group">					
					<input class="form-control" type="text" name="nombre" value="<?php echo $Usuario->nombre ?>" placeholder="Nombre">					
				</div>
				<div class="form-group">					
					<input class="form-control" type="text" name="apellido" value="<?php echo $Usuario->apellido ?>" placeholder="Apellido">					
				</div>
				<div class="form-group">					
					<input class="form-control" type="date" name="fecha_nacimiento" value="<?php echo $Usuario->fecha_nacimiento ?>">					
				</div>
				<div class="form-group">							
					<select class="form-control" name="status">
						<option value="1" <?php if ($Usuario->status == "1"): ?> selected <?php endif; ?> >Habilitado</option>
						<option value="0" <?php if ($Usuario->status == "0"): ?> selected <?php endif; ?> >Desabilitado</option>
					</select>
				</div>

				<div class="form-group">							
					<select class="form-control" name="rol">
						<option value="adm" <?php if ($Usuario->rol == "adm"): ?> selected="TRUE" <?php endif; ?> >Administrador</option>
						<option value="pac" <?php if ($Usuario->rol == "pac"): ?> selected="TRUE" <?php endif; ?> >Paciente</option>
						<option value="tut" <?php if ($Usuario->rol == "tut"): ?> selected="TRUE" <?php endif; ?> >Tutor</option>
					</select>
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
		</div>
	</div>
</div>
