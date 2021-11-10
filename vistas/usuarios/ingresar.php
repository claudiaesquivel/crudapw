<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Catalogo De Usuarios</title>
</head>
<body>
	<header>
		<h1>Usuarios</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/usuariosController.php" method="post">
		<input name="nombre" placeholder="Nombre" required autofocus />
		<input name="usuario" placeholder="Usuario" required autofocus />
		<input name="Contrasena" placeholder="contrasena" required autofocus />
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>