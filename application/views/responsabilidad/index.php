<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Responsabilidades</h2>			
			<a href="<?php echo base_url('responsabilidades/add') ?>" class="btn btn-primary"><span class="icon-plus"></span> Añadir</a>
			<table class="table">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Ver estado</th>
					</tr>	
				</thead>
				<tbody>
					<?php foreach ($Responsabilidades as $responsabilidad): ?>
					<tr>
						<td><?php echo $responsabilidad->nombre ?> <?php echo $responsabilidad->apellido ?></td>
						<td>
							<a href="<?php echo base_url('responsabilidad/view/').$responsabilidad->idusuario ?>"><i class="menu-icon icon-eye-open"></i></a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>	