<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Nueva Respuesta</h3>
			</div>
			<div class="module-body">
				<form action="<?php echo base_url();?>respuesta/add"method="post" accept-charset="utf-8" class="form-horizontal row-fluid">
					<div class="control-group">
						<label class="control-label" for="basicinput">Ejercicio</label>
						<div class="controls">
							<select name="ejercicio" class="span8">
								<option value="">Selecciona un ejercicio</option>
								<?php foreach ($Ejercicios as $ejercicio): ?>
									<option value="<?php echo $ejercicio->idejercicio ?>"><?php echo $ejercicio->nombre ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Sugerencia</label>
						<div class="controls">
							<select name="sugerencia" class="span8">
								<option value="">Selecciona una sugerencia</option>
								<?php foreach ($Sugerencias as $sugerencia): ?>
									<option value="<?php echo $sugerencia->idsugerencia ?>"><?php echo $sugerencia->nombre ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="nombre">Respuesta Correcta?</label>
						<div class="controls">
							<label class="radio inline">
								<input type="radio" name="respuesta" id="respueta1" value="1">
								Si
							</label> 
							<label class="radio inline">
								<input type="radio" name="respuesta" id="respueta2" value="0">
								NO
							</label> 
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