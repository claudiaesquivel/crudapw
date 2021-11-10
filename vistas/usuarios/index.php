<?php require_once '../../modelos/Usuarios.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Usuarios</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<header>
		<h1 id="hroles">Login</h1>
		<h2 id="hlistar">Usuarios</h2>
	</header>

	<div id="divnuevo">
		<a id="anuevo" href="ingresar.php" >Ingresar nuevo</a>	
	</div>
	<br>
	
	<table id="roles" border="1" collapse>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Usuario</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody>					

			<?php foreach (Usuarios::listar() as $fila) { ?>
				<tr>
					<td id="id"><?= $fila[0] ?></td>
					<td id="Nombre"><?= $fila[1] ?></td>
					<td id="Usuario"><?= $fila[2] ?></td>
					

					<div id="opciones" width="50" height="50">
						<td>
							<a id="aeditar" href="editar.php?id=<?=base64_encode($fila [0])?>">Editar</a>
					    </td>
				   </div>

					<td>
						<a id="aeliminar" href="../../controladores/usuariosController.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>