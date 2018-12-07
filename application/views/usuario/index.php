<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Usuarios</h2>
			<a href="<?php echo base_url('usuario/add') ?>" class="btn btn-primary"><span class="icon-plus"></span> Añadir</a>
			<table class="table">
				<thead>
					<tr>							
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Email</th>
						<th>Fecha Nacimiento</th>
						<th>Rol</th>
						<th>Status</th>
						<th>Accion</th>
					</tr>	
				</thead>
				<tbody>
					<?php foreach ($Usuarios as $usuario): ?>
					<tr>
						<td><?php echo $usuario->nombre ?></td>
						<td><?php echo $usuario->apellido ?></td>
						<td><?php echo $usuario->email ?></td>
						<td><?php echo $usuario->fecha_nacimiento ?></td>
						<td><?php echo $usuario->rol ?></td>
						<td><?php echo $usuario->status ?></td>
						<td><a href="<?php echo base_url('usuario/edit/').$usuario->idusuario ?>"><i class="menu-icon icon-pencil"></i></a></td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>	
	</div>
</div>