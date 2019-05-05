<?php

	require_once './controller/BaseDeDatosLibreria.inc.php';
	
	class Evento
	{
		public static function getEvento($id) {
			$sql = "select * from Evento where \"id\"=$id;";
			
			return BaseDeDatosLibreria::consulta($sql);
		}
		
		public static function getEventos() {
			$sql = "select * from Evento;";
			
			return BaseDeDatosLibreria::consulta($sql);
		}
		
	}
?>
