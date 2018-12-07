<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Respuesta</h2>			
			<a href="<?php echo base_url('respuesta/add') ?>" class="btn btn-primary"><span class="icon-plus"></span> Añadir</a>
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
							<a href="<?php echo base_url('respuesta/delete/').$respuesta->idrespuesta ?>"><i class="menu-icon icon-trash"></i></a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>	
	</div>
</div>