<div class="container">
	<div class="row">
		<div  class="col-sm-offset-4 col-sm-5">
			<form  action="<?= base_url('usuario/add/');?>" method="POST">
				<h3>Nueva Usuario</h3>
				<div class="form-group">					
					<input class="form-control" type="text" name="nombre" value="<?= set_value('nombre')?>" placeholder="Nombre">					
				</div>
				<div class="form-group">					
					<input class="form-control" type="text" name="apellido" value="<?= set_value('apellido')?>" placeholder="Apellido">					
				</div>
				<div class="form-group">					
					<input class="form-control" type="date" name="fecha_nacimiento">					
				</div>
				<div class="form-group">					
					<input class="form-control" type="email" name="email" value="<?= set_value('email')?>" placeholder="Correo Electronico">
				</div>
				<div class="form-group">					
					<input class="form-control" type="password" name="password" value="" placeholder="Contraseña">					
				</div>
				<div class="form-group">					
					<input class="form-control" type="password" name="rpassword" value="" placeholder="Repetir Contraseña">					
				</div>
				<div class="form-group">
					<div class="controls clearfix">
						<button type="submit" class="btn btn-primary pull-right">Registrar</button>
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
