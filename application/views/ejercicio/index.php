<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Ejercicios</h3>
			</div>
			<div class="module-body">
				<table class="table">
					<thead>
						<tr>
							<td>Etapa</td>
							<td>Nombre</td>
							<td>Audio</td>
							<td>Acción</td>
						</tr>	
					</thead>
					<tbody>
						<?php foreach ($Ejercicios as $ejercicio): ?>
						<tr>							
							<td><?php echo $ejercicio->id_etapa ?></td>
							<td><?php echo $ejercicio->nombre ?></td>
							<td><a href="<?php echo base_url('ejercicio/audio/').$ejercicio->audio ?>"><?php echo $ejercicio->audio ?></a>	
							</td>
							<td></td>							
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div><!--/.module-->		
	</div><!--/.content-->
</div><!--/.span9-->