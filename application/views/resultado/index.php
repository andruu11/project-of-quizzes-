<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Resultados</h2>
			<table class="table">
				<thead>
					<tr>
						<td>#</td>
						<td>Nombre de usuario</td>
						<td>Puntaje final</td>
						<td>Fecha</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($Resultados as $resultado): ?>
					<tr>						
						<td><?php echo $resultado->idresultado ?></td>
						<td><?php echo $resultado->nombre ?> <?php echo $resultado->apellido ?></td>
						<td><?php echo $resultado->resultado ?></td>
						<td><?php echo $resultado->fecha?></td>					
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>	
	</div>
</div><