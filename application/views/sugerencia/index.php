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
							<td>Nombre</td>
							<td>Imagen</td>							
							<td>Acción</td>
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
		</div><!--/.module-->		
	</div><!--/.content-->
</div><!--/.span9-->