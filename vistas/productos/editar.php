<?php
	require_once '../../modelos/Productos.php';
	$pro = Productos::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>PRODUCTOS</title>
</head>
<body>
	<header>
		<h1>Productos</h1>
		<h2>Editar catalogo de productos</h2>
	</header>
	<form action="../../controladores/productosController.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="Nombre" value="<?= $pro[1] ?>" 
		required autofocus/>
		<input name="descripcion" placeholder="Descripcion" value="<?= $pro[2] ?>" 
		required autofocus/>
		<input name="precioVenta" placeholder="precioVenta" value="<?= $pro[3] ?>" 
		required autofocus/>		
		<input name="existencias" placeholder="Existencias" value="<?= $pro[4] ?>" 
		required autofocus/>				
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>