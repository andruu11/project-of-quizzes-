<div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				<h3>Nueva etapa</h3>
			</div>
			<div class="module-body">
				<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url("etapa/add") ?>">
					<div class="control-group">
						<label class="control-label" for="nombre">Nombre</label>
						<div class="controls">
							<input type="text" id="nombre" name="nombre" class="span8">
							<span class="help-inline">mínimo 5 caracteres</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="descripcion">Descripción</label>
						<div class="controls">
							<textarea class="span8" name="descripcion"></textarea>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div><!--/.content-->
</div><!--/.span9-->