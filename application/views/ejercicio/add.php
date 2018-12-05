<div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				<h3>Nueva ejercicio</h3>
			</div>
			<div class="module-body">
				<form action="<?php echo base_url();?>ejercicio/add" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal row-fluid">
					<div class="control-group">
						<label class="control-label" for="basicinput">Etapa</label>
						<div class="controls">
							<select name="etapa" data-placeholder="Selecciona una etapa" class="span8">
								<option value="">Selecciona una etapa</option>
								<?php foreach ($Etapas as $etapa): ?>
									<option value="<?php echo $etapa->idetapa ?>"><?php echo $etapa->nombre ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Audio</label>
						<div class="controls">
							<input type="file" name="audio" size="20" class="span8">
							<span class="help-inline">Archivos WAV, MP3 < 1MB</span>
						</div>
					</div>					
					<div class="control-group">
						<label class="control-label" for="nombre">Nombre del audio</label>
						<div class="controls">
							<input type="text" id="nombre" name="nombre" class="span8">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn">Enviar</button>
						</div>
					</div>
					<?php echo validation_errors('<div class="error">', '</div>'); ?>
					<?php if (isset($failed_message)): ?>
						<?php echo $failed_message ?>
					<?php endif ?>
				<?php echo form_close(); ?>				
			</div>
		</div>

	</div><!--/.content-->
</div><!--/.span9-->