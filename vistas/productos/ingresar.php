<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Catalogo De Productos</title>
</head>
<body>
	<header>
		<h1>Productos</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/productosController.php" method="post">
		<input name="nombre" placeholder="Nombre" required autofocus />
		<input name="descripcion" placeholder="Descripcion" required autofocus />
		<input name="precioVenta" placeholder="Precio Venta" required autofocus />
		<input name="existencias" placeholder="Existencias" required autofocus />
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>