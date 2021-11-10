<?php require_once '../modelos/Productos.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	/*Se crea el objeto de la clase productos*/
	$objproductos = new Productos();
    
	switch ($accion) 
	{
		case 'Ingresar':
		   
			$objproductos->nombre = $_POST['nombre'];
			$objproductos->descripcion= $_POST['descripcion'];
			$objproductos->precioVenta= $_POST['precioVenta'];
			$objproductos->existencias= $_POST['existencias'];
			$objproductos->ingresar();            
			break;
		case 'Editar':
			$objproductos->idproducto= base64_decode($_POST['id']);
			$objproductos->nombre = $_POST['nombre'];
			$objproductos->descripcion= $_POST['descripcion'];
			$objproductos->precioVenta= $_POST['precioVenta'];
			$objproductos->existencias= $_POST['existencias'];
		    $objproductos->editar();
			break;
		case 'elim':
			$objproductos->idproducto = base64_decode($_GET['id']);
			$objproductos->eliminar();
			break;
	}
}
header('Location: ../vistas/productos');