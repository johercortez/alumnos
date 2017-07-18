<?php

session_start();

if (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] === 'secretaria') {
  require 'views/header.view.php';

  require 'config.php';
  require 'functions.php';

  $conexion = conexion($bd_config);

	$curso = $_SESSION['curso'];
	$ciclo = $_SESSION['ciclo'];

	$course = tipo_promedio($curso, $conexion);

	$search = limpiar_dato($_GET['alumno']);
	$stament = $conexion -> prepare('SELECT * FROM nota WHERE nombre_apellido LIKE :search AND id_ciclo = :cycle AND id_curso=:course');
	$stament->execute(array(
		':search' => "%$search%",
		':cycle' => $ciclo,
		':course' => $curso
	));

	$results = $stament->fetchAll();

	if (empty($results)) {
		$title = 'No se encontraron posts con el resultado: ' .$search;
	} else {
		$nota = $results[0];
		$title = 'Resultado de la busqueda: ' .$search;
	}

	require 'views/buscar.view.php';

  require 'views/footer.view.php';
} else {
  header('Location: index');
}


 ?>