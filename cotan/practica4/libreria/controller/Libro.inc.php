<?php

	require_once './controller/BaseDeDatosLibreria.inc.php';
	
	class Libro
	{
		public static function getLibro($isbn) {
			$sql = "select * from Libro where ISBN=\"$isbn\";";
			
			return BaseDeDatosLibreria::consulta($sql)[0];
		}
		
		public static function getLibros() {
			$sql = "select * from Libro;";
			
			return BaseDeDatosLibreria::consulta($sql);
		}
		
		public static function setLibro($isbn, $rutaImagen, $titulo,
					$nombreAutor, $precio) {
			if(isset($isbn)) {
				$sql = "update Libro set ";
				$alMenosUnaVez = false;
				
				if($rutaImagen != null) {
					$sql .= (($alMenosUnaVez) ? "," : "") . "rutaImagen=\"$rutaImagen\"";
					$alMenosUnaVez = true;
				}
				
				if($titulo != null) {
					$sql .= (($alMenosUnaVez) ? "," : "") . "titulo=\"$titulo\"";
					$alMenosUnaVez = true;
				}
				
				if($nombreAutor != null) {
					$sql .= (($alMenosUnaVez) ? "," : "") . "nombreAutor=\"$nombreAutor\"";
					$alMenosUnaVez = true;
				}
				
				if($precio != null) {
					$sql .= (($alMenosUnaVez) ? "," : "") . "precio=\"$precio\"";
					$alMenosUnaVez = true;
				}
				
				$sql .= " where ISBN=\"$isbn\"";
				
				return BaseDeDatosLibreria::getConexion() -> query($sql);
			}
		}
		
		public static function addLibro($isbn, $rutaImagen, $titulo, $nombreAutor,
						$precio)
		{
			if(isset($isbn) && $precio > 0) {
				$campos = "";
				$valores = "";
				
				$campos .= "isbn";
				$valores .= "\"$isbn\"";
				
				if($rutaImagen != null) {
					$campos .= ",rutaImagen";
					$valores .= ",$rutaImagen";
				}
				
				if($titulo != null) {
					$campos .= ",titulo";
					$valores .= ",\"$titulo\"";
				}
				
				if($nombreAutor != null) {
					$campos .= ",nombreAutor";
					$valores .= ",\"$nombreAutor\"";
				}
				
				if($precio != null) {
					$campos .= ",precio";
					$valores .= ",\"$precio\"";
				}
				
				$sql = "insert into Libro($campos) values ($valores);";
				
				return BaseDeDatosLibreria::getConexion() -> query($sql);
			}
		}
		
		public static function removeLibro($isbn) {
			$sql = "delete from Libro where ISBN=\"$isbn\";";
			
			return BaseDeDatosLibreria::getConexion() -> query($sql);
		}
	}
?>
