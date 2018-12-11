<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Responzabilizado</h2>
			<div class="form-group">	
				<label class="col-sm-2 control-label" for="basicinput">Nombre</label>
				<div class="col-sm-10">
					<p><?php echo $Responsabilizado->nombre ?></p>					
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="basicinput">Apellido</label>
				<div class="col-sm-10">
					<p><?php echo $Responsabilizado->apellido ?></p>				
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="basicinput">Fecha de nacimiento</label>
				<div class="col-sm-10">
					<p><?php echo $Responsabilizado->fecha_nacimiento ?></p>					
				</div>
			</div>
		</div>		
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Resultados</h2>
			<?php if (empty($Resultados)): ?>
				<p>No tiene resultados actualmente</p>
			<?php else: ?>
				<table class="table">
					<thead>
						<tr>
							<td>#</td>
							<td>Etapa</td>
							<td>Puntaje final</td>
							<td>Fecha</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($Resultados as $resultado): ?>
						<tr>						
							<td><?php echo $resultado->idresultado ?></td>
							<td><?php echo $resultado->etapa ?></td>
							<td><?php echo $resultado->resultado ?></td>							
							<td><?php echo $resultado->fecha?></td>					
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
			
		</div>
	</div>
</div>