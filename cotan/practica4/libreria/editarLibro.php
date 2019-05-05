<?php
	require_once './comun.php';
	
	$argumentos = [];
	
	addAutoresMasVentas($argumentos);
	
	if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_COOKIE['nombreCuenta']))
		renderizarPlantilla('./view/templates/editarLibro.html', $argumentos);
	else if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_COOKIE['password'])){
		require_once './controller/Libro.inc.php';
		
		$isbn = isset($_POST['isbn']) ? $_POST['isbn'] : NULL;
		$rutaImagen = isset($_POST['rutaImagen']) ? $_POST['rutaImagen'] : NULL;
		$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : NULL;
		$nombreAutor = isset($_POST['nombreAutor']) ? $_POST['nombreAutor'] : NULL;
		$precio = isset($_POST['precio']) ? $_POST['precio'] : NULL;
		
		$resultado = Libro::setLibro($isbn, $rutaImagen, $titulo, $nombreAutor, $precio);
		$texto = "";
		
		if($resultado > 0)
			$texto = "Se ha modificado la tupla con éxito";
		else
			$texto = "Ha ocurrido algún error editando el libro";
			
		$argumentos['texto'] = $texto];
		
		renderizarPlantilla('./view/templates/exitoEdicionLibro.html', $argumentos);	
	} else
		echo "Se ha equivocado al utilizar el método http";
?>
