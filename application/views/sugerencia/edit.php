<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Editar sugerencia</h3>
			<form action="<?php echo base_url();?>sugerencia/add" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal">					
				<div class="form-group">
					<label class="col-sm-2 control-label" for="basicinput">Imagen</label>
					<img src="<?php echo base_url().'uploads/images/'.$Sugerencia->imagen ?>" alt="..." class="col-sm-2" width="75">
					<div class="col-sm-8">
						<input type="file" name="imagen">
						<span class="help-inline">Archivos JPG < 1MB</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="audio">Audio</label>
					<audio controls class="col-sm-4"><source src="<?php echo base_url().'uploads/audio/'.$Sugerencia->audio ?>"></audio>
					<div class="col-sm-6">
						<input type="file" name="audio">
						<span class="help-inline">Archivos WAV, MP3 < 1MB</span>
					</div>
				</div>	

				<div class="form-group">
					<label class="col-sm-2 control-label" for="nombre">Nombre alternativo</label>
					<div class="col-sm-10">
						<input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $Sugerencia->nombre ?>">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Enviar</button>
					</div>
				</div>

				
				<?php if (isset($imagen_error)): ?>
					<div class="alert alert-danger" role="alert"><?php echo $imagen_error ?></div>					
				<?php endif ?>
				<?php if (isset($audio_error)): ?>
					<div class="alert alert-danger" role="alert"><?php echo $audio_error ?></div>					
				<?php endif ?>
				<?php if (isset($file_error)): ?>
					<div class="alert alert-danger" role="alert"><?php echo $file_error ?></div>					
				<?php endif ?>

			</form>	
		</div>
	</div>
</div>