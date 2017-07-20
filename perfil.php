<?php 
	session_start();
	require 'config.php';

	// Verificación de sesión usuario
	if (isset($_SESSION['usuario'])) {
	    require 'functions.php';

	    $conexion = conexion($bd_config);
	  	require 'views/head.view.php';
	  	require 'views/header.view.php';

	    require 'views/perfil.view.php';

	    require 'views/footer.view.php';
	} else {
		header('Location: '.RUTA);
	}
	
 ?>