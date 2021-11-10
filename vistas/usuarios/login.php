<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<header>
		<h1>Login</h1>

	</header>
	<form action="../../controladores/usuariosController.php" method="post">
			<input type="text" name="usuario" placeholder="Usuario" required autofocus />
			<input type="text" name="contrasena" placeholder="contrasena" required autofocus />
			<input type="submit" name="a" value="Login" />
	</form>
</body>
</html>