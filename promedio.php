<?php 
	session_start();
	
	header('Content-Type: application/json');

	$id_nota = $_POST['id_nota'];
	$pr1 = $_POST['pr1'];
	$pr2 = $_POST['pr2'];
	$pr3 = $_POST['pr3'];
	$pa1 = $_POST['pa1'];
	$pa2 = $_POST['pa2'];
	$per = $_POST['per'];
	$pro = $_POST['pro'];

	try {

		require 'config.php';
		require 'functions.php';

		$conexion = conexion($bd_config);

		$resultado = guardar_nota($pr1, $pr2, $pr3, $pa1, $pa2, $pe, $pro, $id_nota, $conexion);

		$retour = array();

		$retour['success'] = $resultado['access'];
		// $retour['results']['vols'] = array("paris", "tolouse");


		echo json_encode($retour);
	} catch (Excepcion $e) {

	}

 ?>