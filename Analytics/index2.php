<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class Padre{
	public $piel = "blanca";
	protected $herencia = 333;
	public $conexion,$db,$coleccion="suite";
	public function __construct()
	{
		echo "Entro constructor";
	}

	public function conectar()
	{
		$this->conexion  = new MongoClient("54.208.83.183");
		$this->db        = $this->conexion->suite;
		$this->coleccion = $this->db->usuarios;
		echo "conexion realizada";
	}

	public function getUnUsuario()
	{
		var_dump($this->coleccion->findOne());
	}
}

class Hijos extends Padre {
		public function __construct($nombre)
	{
		echo $nombre." al nacer tiene la piel como su padre: ". $this->piel."<br>";
	}

	public function jugarEnElSol(){
		$this->piel="morena";
	}

}
class HijosPobres extends Padre {

	public function heredan(){
		return $this->herencia+=500;
	}

}
class HijosRicos extends Padre {

	public function heredan(){
		return $this->herencia+=100000;
	}

}

class Nietos1 extends HijosRicos{
	public function __construct()
	{
		echo "<br>".$this->heredan();
	}

}
class Nietos2 extends HijosPobres{
	public function __construct()
	{
		echo "<br>".$this->heredan();
	}

}


// INSTANCIA
$hermano = new Hijos("hermano");
$hermano->jugarEnElSol();
echo "Hermano a los 15 anios tiene la piel ".$hermano->piel."<br>";

$hermana = new Hijos("hermana");
echo "Hermana a los 15 anios tiene la piel ".$hermana->piel."<br>";

new Nietos1();
new Nietos2();

/**
* 
*/


?>
<table>
	<tr>
	</tr>
</table>

</body>
</html>

