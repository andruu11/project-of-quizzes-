<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Etapas</h2>			
			<a href="<?php echo base_url('etapa/add') ?>" class="btn btn-primary"><span class="icon-plus"></span> Añadir</a>
			<table class="table">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Estado</th>
						<th>Icono</th>
						<th>Acción</th>
					</tr>	
				</thead>
				<tbody>
					<?php foreach ($Etapas as $etapa): ?>
					<tr>
						<td><?php echo $etapa->nombre ?></td>
						<td><?php echo $etapa->descripcion ?></td>
						<td>
							<?php if ($etapa->status == '1'): ?>
								Habilitado
							<?php endif ?>
							<?php if ($etapa->status == '0'): ?>
								Deshabilitado
							<?php endif ?>
						<td>
							<span>
								<i class="fas fa-<?php echo $etapa->icono ?>"></i>
							</span>
						</td>
						<td>
							<a href="<?php echo base_url('etapa/edit/').$etapa->idetapa ?>"><i class="menu-icon icon-pencil"></i></a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>	