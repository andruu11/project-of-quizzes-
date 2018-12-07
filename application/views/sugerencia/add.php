<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Nueva sugerencia</h3>
			<form action="<?php echo base_url();?>sugerencia/add" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal">					
				<div class="form-group">
					<label class="col-sm-2 control-label" for="basicinput">Imagen</label>
					<div class="col-sm-10">
						<input type="file" name="imagen" size="20">
						<span class="help-inline">Archivos JPG < 1MB</span>
					</div>
				</div>		

				<div class="form-group">
					<label class="col-sm-2 control-label" for="nombre">Nombre alternativo</label>
					<div class="col-sm-10">
						<input type="text" id="nombre" name="nombre" class="form-control">
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

			<?php echo form_close(); ?>		
		</div>
	</div>
</div>