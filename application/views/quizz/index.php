<div class="span9">
	<div class="content">
		<div class="row-fluid">
			<div class="span6">
				<?php foreach ($Etapas as $etapa): ?>
					<div class="btn-box-row">						
							<a href="#" class="btn-box big ">
								<i class="icon-adjust"></i>
								<b><?php echo $etapa->nombre ?></b>
							</a>
						</div>			
					</div>
				<?php endforeach ?>
			</div>
		</div>		
	</div><!--/.content-->
</div><!--/.span9-->