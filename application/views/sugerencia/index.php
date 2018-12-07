<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Sugerencias</h2>
			<p>Añada sugerencias para escojer</p>
			<a href="<?php echo base_url('sugerencia/add') ?>" class="btn btn-primary"><span class="icon-plus"></span> Añadir</a>
			<table class="table">
				<thead>
					<tr>							
						<th>Nombre</th>
						<th>Imagen</th>							
						<th>Acción</th>
					</tr>	
				</thead>
				<tbody>
					<?php foreach ($Sugerencias as $sugerencia): ?>
					<tr>
						<td><?php echo $sugerencia->nombre ?></td>
						<td>
							<img src="<?php echo base_url().'uploads/images/'.$sugerencia->imagen ?>" class="img-polaroid" width="75">
						</td>							
						<td>
							<a href="<?php echo base_url('sugerencia/edit/').$sugerencia->idsugerencia ?>"><i class="menu-icon icon-pencil"></i></a>
							<a href="<?php echo base_url('sugerencia/delete/').$sugerencia->idsugerencia ?>"><i class="menu-icon icon-trash"></i></a>
						</td>							
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>	
	</div>
</div>