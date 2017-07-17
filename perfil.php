<?php 

	require 'config.php';
	require 'functions.php';

	session_start();

	// Verificación de sesión usuario
	if (isset($_SESSION['usuario'])) {
	  	require 'views/header.view.php';

	    require 'views/perfil.view.php';

	    require 'views/footer.view.php';
	} else {
		header('Location: index.php');
	}
	
 ?>