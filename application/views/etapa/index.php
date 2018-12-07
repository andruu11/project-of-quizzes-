<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Etapas</h2>
			<p>Añada etapas para una resolver</p>
			<a href="<?php echo base_url('etapa/add') ?>" class="btn btn-primary"><span class="icon-plus"></span> Añadir</a>
			<table class="table">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Estado</th>
						<th>Acción</th>
					</tr>	
				</thead>
				<tbody>
					<?php foreach ($Etapas as $etapa): ?>
					<tr>
						<td><?php echo $etapa->nombre ?></td>
						<td><?php echo $etapa->descripcion ?></td>
						<td><?php echo $etapa->status ?></td>
						<td>
							<a href="<?php echo base_url('etapa/edit/').$etapa->idetapa ?>"><i class="menu-icon icon-pencil"></i></a>
							<a href="<?php echo base_url('etapa/delete/').$etapa->idetapa ?>"><i class="menu-icon icon-trash"></i></a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>	