<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nombreCuenta = $_POST['nombreCuenta'];
		$password = $_POST['password'];
		
		setCookie('nombreCuenta', $nombreCuenta, time() + (86400 * 30));
		setCookie('password', $password, time() + (86400 * 30));
		
		echo "Se ha modificado la cookie para nombreCuenta y password";
	} else
		echo "Se ha equivocado de método";
?>
