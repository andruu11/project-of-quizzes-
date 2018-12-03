<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="module module-login span4 offset4">
				<form class="form-vertical" action="<?= base_url('sesion/login/');?>" method="POST">
					<div class="module-head">
						<h3>Ingresar</h3>
					</div>
					<div class="module-body">
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" name="email" placeholder="Correo Electronico">
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="password" name="password" placeholder="Password">
							</div>
						</div>
					</div>
					<div class="module-foot">
						<div class="control-group">
							<div class="controls clearfix">
								<button type="submit" class="btn btn-primary pull-right">Login</button>
								<label class="checkbox">
									<input type="checkbox"> Remember me
								</label>
							</div>
						</div>
					</div>
					<?php echo validation_errors('<div class="error">', '</div>'); ?>
				</form>
			</div>
		</div>
	</div>
</div><!--/.wrapper-->