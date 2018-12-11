<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Ejercicios</h2>
			<a href="<?php echo base_url('ejercicio/add') ?>" class="btn btn-primary"><span class="icon-plus"></span> Añadir</a>
			<table class="table">
				<thead>
					<tr>
						<th>Etapa</th>
						<th>Nombre</th>
						<th>Audio</th>
						<th>Acción</th>
					</tr>	
				</thead>
				<tbody>
					<?php foreach ($Ejercicios as $ejercicio): ?>
					<tr>
						<td><?php echo $ejercicio->etapa ?></td>
						<td><?php echo $ejercicio->nombre ?></td>
						<td><a href="<?php echo base_url('ejercicio/audio/').$ejercicio->audio ?>"><?php echo $ejercicio->audio ?></a></td>
						<td>
							<a href="<?php echo base_url('ejercicio/delete/').$ejercicio->idejercicio ?>"><i class="menu-icon icon-trash"></i></a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>	