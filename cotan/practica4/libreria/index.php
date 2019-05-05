<?php
	require_once './comun.php';
	require_once './controller/Evento.inc.php';
	
	$argumentos = [];
	
	addAutoresMasVentas($argumentos);
	
	$eventos = Evento::getEventos();
	
	$formatoEventos = [];
	
	foreach($eventos as $eventoActual)
		array_push($formatoEventos, ['titulo' => $eventoActual -> titulo,
			'fecha' => $eventoActual -> fecha, 
			'descripcion' => $eventoActual -> descripcion,
			'rutaImagen' => $eventoActual -> rutaImagen]);
	
	$argumentos['eventos'] = $formatoEventos;
	
	addUsuarioRegistrado($argumentos);
	
	renderizarPlantilla('./view/templates/index.html', $argumentos);
?>
