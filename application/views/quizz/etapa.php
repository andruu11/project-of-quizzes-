 <section class="contenedor-opciones">
    <div class="opciones-titulo">
        <h2><?php echo $Etapa->nombre ?></h2>
    </div>
    
	    <?php foreach ($Ejercicios as $ejercicio): ?>
		    <div class="sonidos">
		        <audio controls>
					<source src="<?php echo base_url('ejercicio/audio/').$ejercicio->audio ?>">
				</audio>
		    </div>
		    <?php foreach (${$ejercicio->nombre} as $respuesta): ?>
		    <div class="opcion">
		        <img src="<?php echo base_url().'uploads/images/'.$respuesta->imagen ?>" alt="">
		        <div class="inputGroup">
		        	<input id="radio1" type="radio" name="<?php echo $ejercicio->idejercicio ?>" value="<?php echo $respuesta->idrespuesta ?>">
		        	<label for="radio1">Opción 1</label>
		        </div>
		    </div>
		    <?php endforeach ?>   
	    <?php endforeach ?>
	    <div class="boton-opciones">
	        <a href="#" class="btn btn-block btn-success">Enviar</a>
	    </div>
    
</section>
<div class="span9">
	<div class="content">
	
		
		
		
			<div class="btn-box-row	 row-fluid">	
				
					<div class="btn-box big span3">
						<img " class="img-polaroid" wid	th="50%"><br>
						
					</div>
				
			</div>		
		
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn">Enviar</button>
				</div>
			</div>
		
	</div><!--/.content-->
</div><!--/.span9-->