<?php require_once 'Conexion.php';

class Usuarios
{
	//Atributos=Variables
	public $IdUsuario;
	public $Nombre;
	public $Usuario;	
	public $Contrasena;
	private $conexion;

	
    
	//Constructor
	public function __construct () 
	{
		$this->IdUsuario = 0;
		$this->Nombre ='';
		$this->Usuario='';		
		$this->Contrasena = '';
		$this->conexion = new Conexion();
	}

	//Metodos
	public static function listar () 
	{
		try
		{
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM catusuarios');
			$conexion->cerrar();
			return $listado;
	  }
	  catch(Exception $e)
		{
			echo "Error" . $e->getMessage(). "<br>";    
		}
	}

	public static function obtenerPorId ($id) 
	{
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM catusuarios WHERE IdUsuario = $id");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () 
	{		
		$s = "INSERT INTO catusuarios (Nombre,Usuario,Contrasena) VALUES ('$this->Nombre'".",'$this->Usuario'".",'$this->Contrasena')";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () 
	{
		$s = "DELETE FROM catusuarios WHERE IdUsuario = $this->IdUsuario";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () 
	{
     $s = "UPDATE catusuarios SET Nombre = '$this->Nombre'".",Usuario = '$this->Usuario'"."WHERE IdUsuario = $this->IdUsuario"; 		
		/*$s = "UPDATE catusuarios SET Nombre = '$this->Nombre'".",Usuario = '$this->Usuario'".",Contrasena = '$this->Contrasena'".",WHERE IdUsuario = $this->IdUsuario";*/
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
    
  public function Agregar()
  {
    ingresar();
     
  }

  public function Login ()
  {
  	try
  	{
  		$conexion = new Conexion ();
  		$listado = $conexion->consultar("SELECT * FROM catusuarios	WHERE usuario = '$this->Usuario' AND Contrasena= '$this->Contrasena'");
  		$conexion->cerrar();
  		if ($listado)
  		{
  			//return $listado;
  			return true;
  		}else
  		   {
  		   		return false;
  		   }


		}
		catch(Exception $e)
				{
					echo "Error" . $e->getMessage(). "<br>";
				}
  }

}