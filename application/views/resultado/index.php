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
						<td>Acción</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($Resultados as $resultado): ?>
					<tr>						
						<td><?php echo $resultado->idresultado ?></td>
						<td><?php echo $resultado->id_usuario ?></td>
						<td><?php echo $resultado->resultado ?></td>
						<td><?php echo $resultado->fecha?></td>
						<td>
							<a href="<?php echo base_url('resultado/edit/').$resultado->idresultado ?>"><i class="menu-icon icon-pencil"></i></a>
							<a href="<?php echo base_url('resultado/delete/').$resultado->idresultado ?>"><i class="menu-icon icon-trash"></i></a>
						</td>							
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>	
	</div>
</div><