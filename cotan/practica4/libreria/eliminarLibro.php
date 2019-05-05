<?php
	require_once('./controller/Libro.inc.php');
	
	if(! isset($_POST) || ! isset($_COOKIE['nombreCuenta']))
		echo "Se ha equivocado en el método introducido";
	else {
		$isbn = $_POST['isbn'];
		
		echo "isbn recibido: " . $isbn . "\n";
		
		if(Libro::removeLibro($isbn) === TRUE)
			echo "Se ha eliminado el libro con éxito";
		else
			echo "Ha ocurrido algún error inesperado";
	}
?>
