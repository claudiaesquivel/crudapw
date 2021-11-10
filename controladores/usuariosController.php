<?php require_once '../modelos/Usuarios.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	/*Se crea el objeto de la clase Usuarios*/
	$objusuarios = new Usuarios();
    
	switch ($accion) 
	{
		case 'Ingresar':
		   
			$objusuarios->Nombre = $_POST['nombre'];
			$objusuarios->Usuario= $_POST['usuario'];
			$objusuarios->Contrasena= $_POST['Contrasena'];
			$objusuarios->ingresar();            
			break;
		case 'Editar':
			$objusuarios->IdUsuario= base64_decode($_POST['id']);
			$objusuarios->Nombre = $_POST['nombre'];
			$objusuarios->Usuario= $_POST['Usuario'];
			/*$objusuarios->Contrasena= $_POST['Contrasena'];*/
			$objusuarios->editar();
			break;
		case 'elim':
			$objusuarios->IdUsuario = base64_decode($_GET['id']);
			$objusuarios->eliminar();
			break;
		case 'Login':
				$objusuarios->Usuario=$_POST['usuario'];
				$objusuarios->Contrasena=$_POST['contrasena'];
				
				if ($objusuarios->Login()) 
				{
					header('Location: ../vistas/usuarios');	// code...
				}else
					{
						echo "USUARIOS Y/O CONTRASEÑA INCORRECTOS";
					}
				break;	
	}
}
header('Location: ../vistas/usuarios');