<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Nueva Respuesta</h2>
			<form action="<?php echo base_url();?>respuesta/add"method="post" accept-charset="utf-8" class="form-horizontal">

				<div class="form-group">
					<label class="col-sm-2 control-label" for="ejercicio">Ejercicio</label>
					<div class="col-sm-10">
						<select name="ejercicio" class="form-control">
							<option value="">Selecciona un ejercicio</option>
							<?php foreach ($Ejercicios as $ejercicio): ?>
								<option value="<?php echo $ejercicio->idejercicio ?>"><?php echo $ejercicio->nombre ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="sugerencia">Sugerencia</label>
					<div class="col-sm-10">
						<select name="sugerencia" class="form-control">
							<option value="">Selecciona una sugerencia</option>
							<?php foreach ($Sugerencias as $sugerencia): ?>
								<option value="<?php echo $sugerencia->idsugerencia ?>"><?php echo $sugerencia->nombre ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="respuesta">Respuesta Correcta?</label>
					<div class="col-sm-10">
						<input type="radio" name="respuesta" id="respueta1" value="1"> SI <br>
						<input type="radio" name="respuesta" id="respueta2" value="0"> NO
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
	</div><!--/.content-->
</div><!--/.span9-->