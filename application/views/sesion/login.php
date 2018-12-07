<div class="container">
	<div class="row">
		<div class="col-sm-offset-4 col-sm-5">
			<form class="form-vertical" action="<?= base_url('sesion/login/');?>" method="POST">
					<h2>Ingresar</h2>
					<div class="form-group">
						<div class="controls row-fluid">
							<input class="form-control" type="text" name="email" value="<?= set_value('email')?>" placeholder="Correo Electronico">
						</div>
					</div>
					<div class="form-group">
						<div class="controls row-fluid">
							<input class="form-control" type="password" name="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<div class="controls clearfix">
							<button type="submit" class="btn btn-primary pull-right">Guardar</button>
						</div>
					</div>
				<?php echo validation_errors('<div class="error">', '</div>'); ?>
				<?php if ($login_failed): ?>						
					<strong>Error:</strong> <?php echo $failed_message ?>
				<?php endif ?>
			</form>
		</div>
	</div>
</div><!--/.wrapper-->