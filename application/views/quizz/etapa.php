<div class="span9">
	<div class="content">
		<h2><?php echo $Etapa->nombre ?></h2>
		<form action="<?php echo base_url().'quizz/resultado/'.$Etapa->idetapa;?>"  method="post">
		<?php foreach ($Ejercicios as $ejercicio): ?>
			<audio controls>
				<source src="<?php echo base_url('ejercicio/audio/').$ejercicio->audio ?>">
			</audio>
			<div class="btn-box-row row-fluid">	
				<?php foreach (${$ejercicio->nombre} as $respuesta): ?>
					<div class="btn-box big span3">
						<img src="<?php echo base_url().'uploads/images/'.$respuesta->imagen ?>" class="img-polaroid" width="50%"><br>
						<input type="radio" name="<?php echo $ejercicio->idejercicio ?>" value="<?php echo $respuesta->idrespuesta ?>">
					</div>
				<?php endforeach ?>
			</div>		
		<?php endforeach ?>
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn">Enviar</button>
				</div>
			</div>
		</form>
	</div><!--/.content-->
</div><!--/.span9-->