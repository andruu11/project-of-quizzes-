<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#user_menu" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= base_url('quizz'); ?>">Quizz-app</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="user_menu">			
			<ul class="nav navbar-nav navbar-right">				
				<?php if ($_acceso): ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Avanzado <span class="caret"></span></a>
					<ul class="dropdown-menu">						
						<li><a href="<?= base_url('etapa'); ?>"><span class="icon-inbox"></span> Etapas</a></li>
						<li><a href="<?= base_url('ejercicio'); ?>"><span class="icon-inbox"></span> Ejercicios</a></li>
						<li><a href="<?= base_url('respuesta'); ?>"><span class="icon-inbox"></span> Respuestas</a></li>
						<li><a href="<?= base_url('resultado'); ?>"><span class="icon-inbox"></span> Resultados</a></li>
						<li><a href="<?= base_url('sugerencia'); ?>"><span class="icon-inbox"></span> Sugerencias</a></li>
						<li><a href="<?= base_url('reporte'); ?>"><span class="icon-inbox"></span> Reportes</a></li>
						<li><a href="<?= base_url('usuario'); ?>"><span class="icon-inbox"></span> Usuarios</a></li>
					</ul>
				</li>
				<?php endif ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
					<ul class="dropdown-menu">						
						<?php if ($_acceso): ?>
							<li><a href="#">Your Profile</a></li>
							<li><a href="#">Edit Profile</a></li>
							<li><a href="#">Account Settings</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo base_url("sesion/logout") ?>"><i class="menu-icon icon-signout"></i>Logout </a></li>
						<?php else: ?>
							<li><a href="<?php echo base_url("sesion/login") ?>">Iniciar Sesion </a></li>
						<?php endif ?>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
			