<?php

session_start();
require 'config.php';

if (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] === 'secretaria') {
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