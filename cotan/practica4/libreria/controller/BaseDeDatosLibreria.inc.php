<?php

require_once './controller/BaseDeDatos.inc.php';


class BaseDeDatosLibreria
{
	
	private static $baseDeDatos;
	private static $conexion;

	function __destrct()
	{
		unset(self::$conexion);
		unset(self::$baseDeDatos);
	}

	public static function getConexion() {

		if(! self::$baseDeDatos){
			self::$baseDeDatos = new BaseDeDatos("localhost", "sibw", "_aprobandoSIBWconUn10", "libreria");
			self::$conexion = self::$baseDeDatos -> getConexion();

			if(! self::$conexion)
				die("Conexión fallida: ");
		}
		
		return self::$conexion; 

	}

	public static function consulta($sql) {
		$resultado = [];

		if($consulta = self::getConexion() -> query($sql)) {
			while($obj = $consulta -> fetch_object()) {
				array_push($resultado, $obj);
			}
		}
		
		return $resultado;
	}

}
?>
