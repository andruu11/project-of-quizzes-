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
						<tr>
							<?php foreach ($Ejercicios as $ejercicio): ?>
								<td><?php echo $ejercicio->id_etapa ?></td>
								<td><?php echo $ejercicio->nombre ?></td>
								<td>									
									<audio controls="controls" autoplay="autoplay">
										<source src="<?php echo 'uploads/audio/'.$ejercicio->audio ?>" />
									</audio>										
								</td>
								<td></td>
							<?php endforeach ?>
						</tr>	
					</tbody>
				</table>
			</div>
		</div><!--/.module-->		
	</div><!--/.content-->
</div><!--/.span9-->