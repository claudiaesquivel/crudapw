
<?php require_once 'Conexion.php';

class Productos
{
	//Atributos=Variables
	public $idproducto;
	public $nombre;
	public $des;	
	public $precioVenta;
	public $existencias;
	private $conexion;

	
    
	//Constructor
	public function __construct () 
	{
		$this->idproducto = 0;
		$this->nombre ='';
		$this->descripcion='';		
		$this->precioVenta = '';
		$this->existencias = '';
		$this->conexion = new Conexion();
	}

	//Metodos
	public static function listar () 
	{
		try
		{
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM catproductos');
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
		$listado = $conexion->consultar("SELECT * FROM catproductos WHERE idproducto = $id");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () 
	{		
		$s = "INSERT INTO catproductos (nombre,descripcion,precioVenta,existencias) VALUES ('$this->nombre'".",'$this->descripcion'".",'$this->precioVenta'".", '$this->existencias'".")";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () 
	{
		$s = "DELETE FROM catproductos WHERE idproducto = $this->idproducto";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () 
	{
		$s = "UPDATE catproductos SET nombre = '$this->nombre'".",descripcion= '$this->descripcion' ".", precioVenta = '$this->precioVenta'".", existencias= '$this->existencias'"."WHERE idproducto = $this->idproducto";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
    
    public function Agregar()
    {
      ingresar();
     
    }
}