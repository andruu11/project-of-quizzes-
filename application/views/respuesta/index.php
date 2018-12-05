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
							<th>Ejercicio</th>
							<th>Sugerencia</th>
							<th>Respuesta</th>
							<th>Acción</th>
						</tr>	
					</thead>
					<tbody>
						<?php foreach ($Respuestas as $respuesta): ?>
						<tr>						
							<td><?php echo $respuesta->ejercicio ?></td>
							<td><?php echo $respuesta->sugerencia?></td>
							<td><?php echo $respuesta->respuesta?></td>
							<td>
								<a href="<?php echo base_url('respuesta/edit/').$respuesta->idrespuesta ?>"><i class="menu-icon icon-pencil"></i></a>
								<a href="<?php echo base_url('respuesta/delete/').$respuesta->idrespuesta ?>"><i class="menu-icon icon-trash"></i></a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div><!--/.module-->		
	</div><!--/.content-->
</div><!--/.span9-->