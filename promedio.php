<?php 

	session_start();

	if ($_SESSION['usuario']) {
		
		require 'config.php';

		$connect = new mysqli('localhost', $bd_config['usuario'], $bd_config['pass'], $bd_config['basededatos']);

		$id = $_POST['id_nota'];
		$pr1 = $_POST['pr1'];
		$pr2 = $_POST['pr2'];
		$pr3 = $_POST['pr3'];
		$pa1 = $_POST['pa1'];
		$pa2 = $_POST['pa2'];
		$per = $_POST['per'];
		$pro = $_POST['pro'];

		$up = $connect -> query("UPDATE nota SET primer_practica='$pr1', segunda_practica='$pr2', tercer_practica= '$pr3', Primer_Parcial='$pa1', Segundo_Parcial='$pa2', nota_permanente='$per', promedio='$pro' WHERE id_nota='$id' ");

		$response = array();

		if ($up) {
			$response['success'] = true;
			echo json_encode($response);
		} else {
			$response['success'] = false;
			echo json_encode($response);
		}
	} else {
		header('Location: '.RUTA);
		$response = array();
		$response['success'] = false;
	}

 ?>