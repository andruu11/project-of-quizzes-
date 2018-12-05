<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Sugerencia</h3>
			</div>
			<div class="module-body">
				<table class="table">
					<thead>
						<tr>
							<td>#</td>
							<td>Nombre de usuario</td>
							<td>Puntaje final</td>
							<td>Fecha</td>
							<td>Acción</td>
						</tr>	
					</thead>
					<tbody>
						<tr>
							<?php foreach ($Resultados as $resultado): ?>
								<td><?php echo $resultado->idresultado ?></td>
								<td><?php echo $resultado->nombre ?></td>
								<td><?php echo $resultado->fecha?></td>
								<td></td>
							<?php endforeach ?>
						</tr>	
					</tbody>
				</table>
			</div>
		</div><!--/.module-->		
	</div><!--/.content-->
</div><!--/.span9-->