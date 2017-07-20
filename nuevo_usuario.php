<?php

session_start();

if (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] === 'secretaria') {
	require 'config.php';
	require 'functions.php';

	$conexion = conexion($bd_config);
  	require 'views/head.view.php';
  	require 'views/header.view.php';

	require 'views/nuevo_usuario.view.php';

  require 'views/footer.view.php';
} else {
  header('Location: '.RUTA);
}


 ?>