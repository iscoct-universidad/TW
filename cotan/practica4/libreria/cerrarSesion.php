<?php
	setCookie("nombreCuenta", "", time() - 3600);
	setCookie("password", "", time() - 1);
	
	echo "Se han eliminado las cookies con éxito";
?>
