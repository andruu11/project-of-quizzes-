<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Etapa:</h3>
			</div>
			<div class="module-body">
				<audio controls="controls" autoplay="autoplay">
					<source src="<?php echo 'uploads/audio/'.$ejercicio->audio ?>" />
				</audio>
				<form>
					<span><?php echo $audio ?></span>
					<input type="radio" name="<?php echo $ejercicio->sugerencia ?>" value="<?php echo $ejercicio->estado ?>">
					<input type="radio" name="<?php echo $ejercicio->sugerencia ?>">
					<input type="radio" name="pez">
					<input type="radio" name="pajaro">
				</form>
			</div>
		</div><!--/.module-->		
	</div><!--/.content-->
</div><!--/.span9-->