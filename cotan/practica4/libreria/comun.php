<?php
	function addAutoresMasVentas(&$argumentos) {
		require_once './controller/Autor.inc.php';
		
		$autores = Autor::getAutoresOrdVentas();
		$tresMasVentas = [];
		
		for($i = 0; $i < 3; ++$i)
			array_push($tresMasVentas, $autores[$i] -> nombre);
			
		$argumentos['autoresMasVentas'] = $tresMasVentas;
	}
	
	function renderizarPlantilla($fichero, &$argumentos) {
		require_once './vendor/autoload.php';
		
		$loader = new \Twig\Loader\FilesystemLoader('.');
		
		$twig = new \Twig\Environment($loader);
	
		$template = $twig -> load($fichero);
		
		echo $template -> render($argumentos);
	}
	
	function addUsuarioRegistrado(&$argumentos) {
		if(isset($_COOKIE['nombreCuenta']) && isset($_COOKIE['password']))
			$argumentos['usuarioRegistrado'] = [ 'nombreCuenta' => $_COOKIE['nombreCuenta'] ];
	}
	
	function formatoLibro(&$libro, &$argumentos) {
		$argumentos['libro'] = ['rutaImagen' => $libro -> rutaImagen,
			'titulo' => $libro -> titulo, 'autor' => $libro -> nombreAutor,
			'precio' => $libro -> precio, 'isbn' => $libro -> ISBN,
			'editorial' => $libro -> editorial ];
	}
?>
