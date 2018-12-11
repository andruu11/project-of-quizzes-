 <form method="POST" action="<?php echo base_url('quizz/resultado/').$Etapa->idetapa ?>">
	 <section class="contenedor-opciones">
	    <div class="opciones-titulo">
	        <h2><?php echo $Etapa->nombre ?></h2>
	    </div>
	    <?php $j=1; ?>
	    <?php foreach ($Ejercicios as $ejercicio): ?>
		    <div class="sonidos">
		    	<h3>Ejercicio <?php echo $j; $j++; ?></h3>
		        <audio controls><source src="<?php echo base_url('ejercicio/audio/').$ejercicio->audio ?>"></audio>		        
		    </div>
		    <?php $i=1; ?>
		    <?php foreach (${$ejercicio->nombre} as $respuesta): ?>
		    <div class="thumbnail opcion">
		        <img src="<?php echo base_url().'uploads/images/'.$respuesta->imagen ?>" >
		        <div class="inputGroup caption">
		        	<input id="<?php echo $respuesta->idrespuesta ?>"" type="radio" name="<?php echo $ejercicio->idejercicio ?>" value="<?php echo $respuesta->idrespuesta ?>">	        		
		        	<label for="<?php echo $respuesta->idrespuesta ?>"" class="col-sm-2">
		        		<audio controls class="col-sm-10"><source src="<?php echo base_url().'uploads/audio/'.$respuesta->audio ?>"></audio>
		        	</label>
		        </div>
		    </div>
		    <?php endforeach ?>   
	    <?php endforeach ?>
	    <div class="boton-opciones">
	        <button href="#" class="btn btn-block btn-success">Enviar</button>
	    </div>	    
	</section>
</form>