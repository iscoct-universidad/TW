<?php
	require_once './controller/Libro.inc.php';
	require_once './comun.php';
	
	$argumentos = [];
	$libros = Libro::getLibros();
	
	addAutoresMasVentas($argumentos);
	
	$formatoLibros = [];
	
	foreach($libros as $book)
		array_push($formatoLibros, ['rutaImagen' => $book -> rutaImagen,
			'titulo' => $book -> titulo, 'autor' => $book -> nombreAutor,
			'precio' => $book -> precio, 'isbn' => $book -> ISBN,
			'genero' => $book -> genero]);
	
	$argumentos['libros'] = $formatoLibros;
	
	addUsuarioRegistrado($argumentos);
	
	renderizarPlantilla('./view/templates/catalogo.html', $argumentos);
?>
