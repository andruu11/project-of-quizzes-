<div class="span9">
	<div class="content">		
			<div class="btn-box-row row-fluid">
				<?php foreach ($Etapas as $etapa): ?>
					<a href="<?php echo base_url('quizz/etapa/').$etapa->idetapa ?>" class="btn-box big span3">
						<i class="icon-th-list"></i>
						<b><?php echo $etapa->nombre ?></b>
					</a>
				<?php endforeach ?>
			</div>
		</div>
	</div><!--/.content-->
</div><!--/.span9-->