<?php
	require_once '../../modelos/Usuarios.php';
	$Us = Usuarios::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Editar Usuario</title>
</head>
<body>
	<header>
		<h1>Usus</h1>
		<h2>Editar catologo de usuarios</h2>
	</header>
	<form action="../../controladores/usuariosController.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="Nombre" value="<?= $Us[1] ?>" 
		required autofocus/>
		<input name="Usuario" placeholder="Usuario" value="<?= $Us[2] ?>" 
		required autofocus/>
		
		<input name="a" type="submit" value="Editar" />
	</form>

</body>
</html>
