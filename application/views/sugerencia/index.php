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
							<td>Ejercicio</td>
							<td>Nombre</td>
							<td>Imagen</td>
							<td>Respuesta</td>
							<td>Acción</td>
						</tr>	
					</thead>
					<tbody>
						<tr>
							<?php foreach ($Sugerencias as $Sugerencias): ?>
								<td><?php echo $Sugerencias->id_ejercicio ?></td>
								<td><?php echo $Sugerencias->nombre ?></td>
								<td>
									<img src="<?php echo base_url().'uploads/images/'.$Sugerencias->imagen ?>" class="img-polaroid" width="75">
								</td>
								<td><?php echo $Sugerencias->respuesta ?></td>
								<td></td>
							<?php endforeach ?>
						</tr>	
					</tbody>
				</table>
			</div>
		</div><!--/.module-->		
	</div><!--/.content-->
</div><!--/.span9-->