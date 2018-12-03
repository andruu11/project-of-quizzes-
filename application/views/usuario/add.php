<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="module module-login span4 offset4">
				<form class="form-vertical" action="<?= base_url('usuario/add/');?>" method="POST">
					<div class="module-head">
						<h3>Nuevo Usuario</h3>
					</div>
					<div class="module-body">
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" name="nombre" value="<?= set_value('nombre')?>" placeholder="Nombre">
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" name="apellido" value="<?= set_value('apellido')?>" placeholder="Apellido">
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="email" name="email" value="<?= set_value('email')?>" placeholder="Correo Electronico">
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="password" name="password" value="" placeholder="Contraseña">
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="password" name="rpassword" value="" placeholder="Repetir Contraseña">
							</div>
						</div>
					</div>
					<div class="module-foot">
						<?php if ($login_failed): ?>						
							<strong>Error:</strong> Las contraseñas no coinciden
						<?php endif ?>
						<div class="control-group">
							<div class="controls clearfix">
								<button type="submit" class="btn btn-primary pull-right">Registrar</button>
							</div>
						</div>
					</div>
					<?php echo validation_errors('<div class="error">', '</div>'); ?>			
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		//variables
		var pass1 = $('[name=password]');
		var pass2 = $('[name=rpassword]');
		var confirmacion = "Las contraseñas si coinciden";
		var longitud = "La contraseña debe estar formada entre 6-10 carácteres (ambos inclusive)";
		var negacion = "No coinciden las contraseñas";
		var vacio = "La contraseña no puede estar vacía";
		//oculto por defecto el elemento span
		var span = $('<span></span>').insertAfter(pass2);
		span.hide();
		//función que comprueba las dos contraseñas
		function coincidePassword(){
			var valor1 = pass1.val();
			var valor2 = pass2.val();
			//muestro el span
			span.show().removeClass();
			//condiciones dentro de la función
			if(valor1 != valor2){
				span.text(negacion).addClass('negacion');	
			}
			if(valor1.length==0 || valor1==""){
				span.text(vacio).addClass('negacion');	
			}
			if(valor1.length<6 || valor1.length>10){
				span.text(longitud).addClass('negacion');
			}
			if(valor1.length!=0 && valor1==valor2){
				span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
			}
		}
		//ejecuto la función al soltar la tecla
		pass2.keyup(function(){
			coincidePassword();
		});
	});
</script>
