<div class="container">
    <div class="row">
    	<?php foreach ($Etapas as $etapa): ?>
        <div class="col-sm-6 col-md-4">
            <center>
				<div class="cont-nivel popover__wrapper">
					<div class="wrapper">
						<span href="#" class="curso">
							<div class="center">
								<span>
									<i class="fas fa-<?php echo $etapa->icono ?>"></i>
								</span>
							</div>
							<div class="progress"></div>
							<h1 class="name"><?php echo $etapa->nombre ?></h1>
							<div class="number">
								<div class="highlight"></div><span>1</span>
							</div>
							<div class="push popover__content">
								<div class="item">
									<span class="item__title">Nivel</span>
									<span class="item__content">1</span>
								</div>
								<div class="item">
									<span class="item__title">Estado</span>
									<span class="item__content">--</span>
								</div>
								<div class="content__button">
									<a class="btn btn-block btn-info" href="<?php echo base_url('quizz/etapa/').$etapa->idetapa ?>">COMENZAR</a>
								</div>
							</div>
						</span>
					</div>
				</div>
            </center>
        </div>
        <?php endforeach ?>
    </div>
</div>