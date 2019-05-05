<?php
	require_once './comun.php';
	
	$argumentos = [];
	
	addAutoresMasVentas($argumentos);
	addUsuarioRegistrado($argumentos);
	
	renderizarPlantilla('./view/templates/busqueda.html', $argumentos);
?>
