<?php

	require_once './controller/BaseDeDatosLibreria.inc.php';
	
	class Autor
	{
		public static function getAutor($DNI) {
			return BaseDeDatosLibreria::consulta('select * from Usuarios where
				"DNI"=' . $DNI . ";");
		}
		
		public static function addAutor($DNI, $nombre, $numLibrosPublicados) {
			$sql = 'select * from Autor where "DNI"=' . $DNI . ";";
			
			$noExiste = BaseDeDatosLibreria::consulta($sql);
			
			if($noExiste[0] == NULL) {
				$sql = "insert into Autor values (\"$DNI\", \"$nombre\",
					\"numLibrosPublicados\");";
					
				if(BaseDeDatosLibreria::getConexion() -> query($sql) === TRUE)
					echo "Se ha insertado la tupla con éxito\n";
				else
					echo "Ha ocurrido un error al insertar la tupla\n";
			} else
				echo "El usuario ya tiene una cuenta con ese email en la BD";
		}
		
		public static function getAutoresOrdVentas() {
			return BaseDeDatosLibreria::consulta(
				'select * from Autor order by numLibrosPublicados desc;');
		}
		
	}
	
?>
