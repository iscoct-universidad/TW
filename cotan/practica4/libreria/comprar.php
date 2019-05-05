<?php
	require_once './comun.php';
	require_once './controller/Libro.inc.php';
	
	$libro = $_GET['isbn'];
	$libro = Libro::getLibro($libro);
	
	$argumentos = [];
	
	addAutoresMasVentas($argumentos);
	addUsuarioRegistrado($argumentos);
	formatoLibro($libro, $argumentos);
	
	if($_SERVER['REQUEST_METHOD'] == 'GET')
		renderizarPlantilla('./view/templates/comprar.html', $argumentos);
	else if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
		$nombreApellidos = preg_match("/[\sa-zA-Z]+/", $_POST['nombreApellidos']);
		$direccionEnvio = preg_match("/.+/", $_POST['direccionEnvio']);
		$cvc = preg_match("/^[0-9]{3}$/",  $_POST['cvc']);
		$yearMonthAndDay = str_split($_POST['fechaCaducidad']);
		
		$fechaValida = checkdate($yearMonthAndDay[0], $yearMonthAndDay[1], 
			$yearMonthAndDay[2]);
			
		$odd = true;
		$sum = 0;
		
	  	foreach ( array_reverse(str_split($_POST['numTarjeta'])) as $num)
		  $sum += array_sum( str_split(($odd = !$odd) ? $num*2 : $num) );
		 
		$tarjetaCreditoValida = (($sum % 10 == 0) && ($sum != 0));
		
		$argumentos['comprador'] = ['nombreApellidos' => $_POST['nombreApellidos'],
				'direccionEnvio' => $_POST['direccionEnvio'], 'email' =>
				$_POST['email'], 'numTarjeta' => $_POST['numTarjeta'],
				'fechaCaducidad' => $_POST['fechaCaducidad'], 'cvc' => $_POST['cvc'] ];
				
		if($email != "" && $nombreApellidos == 1 && $cvc == 1 && $direccionEnvio == 1
				&& $tarjetaCreditoValida == true && $fechaValida == true)
			renderizarPlantilla('./view/templates/exitoComprar.html', $argumentos);
		else {
			$argumentos['text'] = "Ha introducido alguno de los valores de manera
				incorrecta";
			
			renderizarPlantilla('./view/templates/comprar.html', $argumentos);
		}
	}
?>
