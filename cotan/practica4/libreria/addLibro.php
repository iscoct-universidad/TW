<?php
	require_once('./comun.php');
	
	$argumentos = [];
	
	addAutoresMasVentas($argumentos);
	
	if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_COOKIE['nombreCuenta']))
		renderizarPlantilla('./view/templates/addLibro.html', $argumentos);
	else if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_COOKIE['password'])){
		require_once './controller/Libro.inc.php';
		
		$isbn = isset($_POST['isbn']) ? $_POST['isbn'] : NULL;
		$rutaImagen = isset($_POST['rutaImagen']) ? $_POST['rutaImagen'] : NULL;
		$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : NULL;
		$nombreAutor = isset($_POST['nombreAutor']) ? $_POST['nombreAutor'] : NULL;
		$precio = isset($_POST['precio']) ? $_POST['precio'] : NULL;
		
		$resultado = Libro::addLibro($isbn, $rutaImagen, $titulo, $nombreAutor, $precio);
		$texto = "";
		
		if($resultado > 0)
			$texto = "Se ha añadido la tupla con éxito";
		else
			$texto = "Ha ocurrido algún error editando el libro";
			
		$argumentos['texto'] = $texto;
		
		renderizarPlantilla('./view/templates/exitoAddLibro.html', $argumentos);
	} else
		echo "O se ha equivocado de método o no tiene privilegios para acceder al recurso";
?>
