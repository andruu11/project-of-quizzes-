<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Nueva ejercicio</h3>
			<form action="<?php echo base_url();?>ejercicio/add" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal">

				<div class="form-group">
					<label class="col-sm-2 control-label" for="etapa">Etapa</label>
					<div class="col-sm-10">
						<select name="etapa" data-placeholder="Selecciona una etapa"  class="form-control">
							<option value="">Selecciona una etapa</option>
							<?php foreach ($Etapas as $etapa): ?>
								<option value="<?php echo $etapa->idetapa ?>"><?php echo $etapa->nombre ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="audio">Audio</label>
					<div class="col-sm-10">
						<input type="file" name="audio" size="20">
						<span class="help-inline">Archivos WAV, MP3 < 1MB</span>
					</div>
				</div>			

				<div class="form-group">
					<label class="col-sm-2 control-label" for="nombre">Nombre del audio</label>
					<div class="col-sm-10">
						<input type="text" id="nombre" name="nombre" class="form-control">
						<span class="help-inline">Mínimo 5 caracteres</span>
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
	</div><!--/.content-->
</div><!--/.span9-->