<?php

class suite{
	
	protected $conexion;
	public $elementos,$query,$generaQuery, $resultado, $cantUsuarios;
	const DB='suite';
	const SERVER='54.208.83.183';
	private $db;
	function conectar() 
	{
		$this->conexion   = new MongoClient(self::SERVER);
		$this->db = $this->conexion->selectDB(self::DB);
	}

	function getUsuarios ($cantidad=1,$orden=-1)
	{
	   $col = $this->db->usuarios;
	   $res = $col->find(array(),array('nombre'=>1))
	   							   ->sort(array('fechaRegistro'=>$orden))
	   							   ->limit($cantidad);	
	   foreach ($res as $usuario)
	   {
		echo "<li>".$usuario['nombre']."</li>";
	   }
	   $this->conexion->close();		
	}

	function getCantidadDescargas(){
		$col = $this->db->usuarios;
		$res = $col->find(array("eventos"=> array('$exists' => true)),
						  array('cantidadDescargas'=>1,'nombre'=>1))
				   ->sort(array("cantidadDescargas"=>-1))
				   ->limit(5);
		foreach ($res as $usuario)
	    {
			echo "<li>".$usuario['nombre']." descargo: ".$usuario['cantidadDescargas']."</li>";
		} 
	} 

	function getTotalUsuariosRegistrados(){
		$col = $this->db->usuarios;
        $res = $col->count();
        return $res;
	}

	function getUsuariosRegActSem(){
		/*$col = $this->db->usuarios;
		$res = $col->find(array())
				   ->sort(array("fechaRegistro"=>-1))
				   ->limit(5);

	    $fechaActual = time();
		$diaSeg = 86400;

		foreach ($res as $usuario)
	    {
	   		 $arrayFecha[] = $usuario["fechaRegistro"]->sec;	    	
		} 
		
*/

/*

		$col = $this->db->usuarios;
		$res = $col->find();
		$rangoFecha = date('Y-m-d',$usuario['fechaRegistro']->sec));

*/

/*
		foreach ($res as $usuario)
	    {
		} 
*/
	} 




/*
	function fechaActual(){
	    $diaSemana  = array ("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");  
        $meses      = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");  

        $anyoActual = date ("Y");  
        $mesActual  = date ("n");  
        $diaActual  = date ("j");   
        $fechaActual =     
		return $fechaActual;


	}
*/



/*
	function get(){
		$col = $this->db->usuarios;
     //   $this->getTotalUsuariosRegMes();
	}


	function fechaActual(){
       // echo date(Y-m-d);
		$col = $this->db->usuarios;
		$res = $col->find(array("eventos"=>0));
		foreach ($res as $usuario)
	    {
	    	var_dump($usuario);
		} 

	}







	function getTotalUsuariosRegMes($res,jswon=false){
		$col = $this->db->usuarios;


		
		listaAnual

		listaMes[12];
		listaMes = separadorpormes(listaAnual);
	
	}

	function separadorpormes(lista){
		//separar por mes
		array(enero=>23,marzo=>12)
		return array[12]
	}
*/
	
}

