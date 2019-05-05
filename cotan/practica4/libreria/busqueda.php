<?php
	require_once './comun.php';
	require_once './controller/BaseDeDatosLibreria.inc.php';
	
	$argumentos = [];
	
	addAutoresMasVentas($argumentos);
	addUsuarioRegistrado($argumentos);
	
	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		$sql = "select genero from Libro";
		
		$generos = BaseDeDatosLibreria::consulta($sql);
		$argumentos['generos'] = [];
		
		foreach($generos as $genero)
			array_push($argumentos['generos'], $genero -> genero);
	
		renderizarPlantilla('./view/templates/busqueda.html', $argumentos);
	} else if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$sql = "select * from Libro where nombreAutor like '%" . $_POST['palabraBusqueda'] . "%' and titulo like '%" . $_POST['palabraBusqueda'] . "%'
		and genero=\"" . $_POST['genero'] . "\";";
		
		$resultados = BaseDeDatosLibreria::consulta($sql);
		$argumentos['coincidencias'] = [];
		
		foreach($resultados as $libro)
			array_push($argumentos['coincidencias'], ['titulo' => $libro -> titulo,
				'nombreAutor' => $libro -> nombreAutor, 'genero' => $libro -> genero]);
		
		renderizarPlantilla('./view/templates/mostrarResultadoBusqueda.html',
			$argumentos);
	} else
		echo "Se ha equivocado de método";
?>
