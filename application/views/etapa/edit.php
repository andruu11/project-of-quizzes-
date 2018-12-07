<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Editar Etapa</h3>
			<form class="form-horizontal" method="POST" action="<?php echo base_url("etapa/edit/").$Etapa->idetapa ?>">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="nombre">Nombre</label>
					<div class="col-sm-10">
						<input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $Etapa->nombre ?>">
						<span class="help-inline">Mínimo 5 caracteres</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="descripcion">Descripción</label>
					<div class="col-sm-10">
						<textarea  name="descripcion" class="form-control"><?php echo $Etapa->descripcion ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="status">Status</label>
					<div class="col-sm-10">							
						<select class="form-control" name="status">
							<option value="1" <?php if ($Etapa->status == "1"): ?> selected <?php endif; ?> >Habilitado</option>
							<option value="0" <?php if ($Etapa->status == "0"): ?> selected <?php endif; ?> >Desabilitado</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="icono">Icono</label>
					<div class="col-sm-10">
						<input type="text" id="icono" name="icono" class="form-control" value="<?php echo $Etapa->icono ?>">
						<span class="help-inline">Puedes obtener el nombre de un icono aqui <a href="https://fontawesome.com/icons?d=gallery&m=free">Font Awesome</a></span>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit"class="btn btn-default">Guardar</button>							
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