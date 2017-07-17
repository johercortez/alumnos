<?php 

	session_start();

	if ($_SESSION['usuario']) {
		
		require 'config.php';

		$connect = new mysqli('localhost', $bd_config['usuario'], $bd_config['pass'], $bd_config['basededatos']);
		$id_usuario = $_SESSION['id_usuario'];

		if ($_POST['type_action'] === 'user') {
			$nombres = $_POST['nombres'];
			$apellidos = $_POST['apellidos'];
			$email = $_POST['email'];
			$dni = $_POST['dni'];
			$telefono = $_POST['telefono'];
			$direccion = $_POST['direccion'];

			$up = $connect -> query("UPDATE usuario SET nombre='$nombres',apellido='$apellidos',dni='$dni',direccion='$direccion',telefono='$telefono',email='$email' WHERE id_usuario='$id_usuario' ");

			$response = array();

			if ($up) {
				$response['success'] = true;
				$response['type_action'] = 'usuario';
				$response['message'] = 'Usuario actualizado con exito';
				echo json_encode($response);

				$_SESSION['nombre'] = $nombres;
				$_SESSION['apellido'] = $apellidos;
				$_SESSION['dni'] = $dni;
				$_SESSION['direccion'] = $direccion;
				$_SESSION['telefono'] = $telefono;
				$_SESSION['email'] = $email;

			} else {
				$response['success'] = false;
				$response['type_action'] = 'usuario';
				$response['message'] = 'Ocurrio algo al momento de actualizar el usuario';
				echo json_encode($response);
			}

		} else {
			$contrasena_actual = hash('sha512', $_POST['contraseña_actual']);
			$contrasena = $_POST['contraseña'];
			$contrasena2 = $_POST['contraseña2'];

			$sel = $connect -> query("SELECT contrasena, usuario, id_usuario FROM usuario WHERE id_usuario='$id_usuario' LIMIT 1");

			$user = $sel->fetch_assoc();

			$response = array();

			if ($contrasena_actual === $user['contrasena'] && $_SESSION['usuario'] === $user['usuario'] && $_SESSION['id_usuario'] === $user['id_usuario']) {
				
				if ($contrasena === $contrasena2) {
					$contrasena = hash('sha512', $contrasena);
					$up = $connect -> query("UPDATE usuario SET contrasena='$contrasena' WHERE id_usuario='$id_usuario' ");

					if ($up) {
						$response['success'] = true;
						$response['type_action'] = 'usuario';
						$response['message'] = 'Usuario actualizado con exito';
						echo json_encode($response);
					}

				} else {
					$response['success'] = false;
					$response['type_action'] = 'usuario';
					$response['message'] = "Las contraseñas ingresadas no coinciden";
					echo json_encode($response);
				}

			} else {
				$response['success'] = false;
				$response['type_action'] = 'usuario';
				$response['message'] = "Los datos del campo 'contrasenia actual' es incorrecto.";
				echo json_encode($response);
			}
		}
		
	} else {
		header('Location: index');
	}

 ?>