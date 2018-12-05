<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Etapas</h3>
			</div>
			<div class="module-body">
				<table class="table">
					<thead>
						<tr>
							<td>Nombre</td>
							<td>Descripcion</td>
							<td>Estado</td>
							<td>Acción</td>
						</tr>	
					</thead>
					<tbody>
						<?php foreach ($Etapas as $etapa): ?>
						<tr>							
							<td><?php echo $etapa->nombre ?></td>
							<td><?php echo $etapa->descripcion ?></td>
							<td><?php echo $etapa->status ?></td>
							<td></td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div><!--/.module-->		
	</div><!--/.content-->
</div><!--/.span9-->