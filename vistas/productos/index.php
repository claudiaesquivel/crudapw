<?php require_once '../../modelos/Productos.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Productos</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<header>
		<h1 id="hroles">Productos</h1>
		<h2 id="hlistar">Lista de productos</h2>
	</header>

	<div id="divnuevo">
		<a id="anuevo" href="ingresar.php" >Ingresar nuevo</a>	
	</div>
	<br>
	
	<table id="roles" border="1" collapse>
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Precio Venta</th>
				<th>Existencias</th>


				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody>					

			<?php foreach (Productos::listar() as $fila) { ?>
				<tr>
					<td id="id"><?= $fila[0] ?></td>
					<td id="Nombre"><?= $fila[1] ?></td>
					<td id="Descripcion"><?= $fila[2] ?></td>
					<td id="Precio Venta"><?= $fila[3] ?></td>
					<td id="Existencias"><?= $fila[4] ?></td>

					<div id="opciones" width="50" height="50">
						<td>
							<a id="aeditar" href="editar.php?id=<?=base64_encode($fila [0])?>">Editar</a>
					    </td>
				   </div>

					<td>
						<a id="aeliminar" href="../../controladores/productosController.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>