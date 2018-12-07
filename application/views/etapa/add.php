<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Nueva etapa</h3>
			<?php echo validation_errors('<p class="text-error">','</p>');?>
			<form class="form-horizontal" method="POST" action="<?php echo base_url("etapa/add") ?>">

				<div class="form-group">
					<label class="col-sm-2 control-label" for="nombre">Nombre</label>
					<div class="col-sm-10">
						<input type="text" id="nombre" name="nombre" class="form-control">
						<span class="help-inline">Mínimo 5 caracteres</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="descripcion">Descripción</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="descripcion"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Enviar</button>							
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