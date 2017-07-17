<?php 

	session_start();

	if ($_SESSION['usuario']) {
		
		require 'config.php';

		$connect = new mysqli('localhost', $bd_config['usuario'], $bd_config['pass'], $bd_config['basededatos']);

		$usuario = $_POST['usuario'];
		$contrasena = $_POST['contraseña'];
		$contrasena2 = $_POST['contraseña2'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$email = $_POST['email'];
		$dni = $_POST['dni'];
		$telefono = $_POST['telefono'];
		$direccion = $_POST['direccion'];

		if ($contrasena === $contrasena2) {
			$contrasena = hash('sha512', $contrasena);
			$up = $connect -> query("INSERT INTO usuario (id_usuario,usuario,contrasena,tipo_usuario,nombre,apellido,dni,direccion,telefono,email) VALUES (DEFAULT,'$usuario','$contrasena','alumno','$nombres','$apellidos','$dni','$direccion','$telefono','$email')");
			$response = array();

			if ($up) {
				$response['success'] = true;
				$response['message'] = 'Usuario registrado con exito';
				echo json_encode($response);
			} else {
				$response['success'] = false;
				$response['message'] = 'Ocurrio algo al momento de guardar el usuario';
				echo json_encode($response);
			}
		} else {
			$response = array();
			$response['success'] = false;
			$response['message'] = 'Las contraseñas ingresadas no coinciden';
			echo json_encode($response);
		}
		
	} else {
		header('Location: index');
	}

 ?>