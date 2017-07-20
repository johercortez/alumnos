<?php 
	
	// Conexion con base de datos
	function conexion($bd_config){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basededatos'], $bd_config['usuario'], $bd_config['pass']);
			return $conexion;
		} catch (PDOException $e) {
			return false;
		}		
	}

	// Obtener ciclos
	function obtener_ciclos($conexion){
		$ciclo = $conexion -> prepare('SELECT * FROM ciclo');
		$ciclo->execute();
		return $ciclo->fetchAll();
	}

	// Obtener notas
	function obtener_notas($ciclo, $curso, $conexion){

		$notas = $conexion -> prepare('SELECT * FROM nota WHERE id_curso = :course AND id_ciclo = :cycle');
		$notas->execute(array(
			':course' => $curso,
			':cycle' => $ciclo
		));
		return $notas->fetchAll();
	}

	// Obtener nota de alumno en especifico
	function obtener_nota($ciclo, $curso, $id_user, $conexion){
		$nota = $conexion -> prepare('SELECT * FROM nota WHERE id_curso = :course AND id_ciclo = :cycle AND id_usuario = :id_user LIMIT 1');
		$nota->execute(array(
			':course' => $curso,
			':cycle' => $ciclo,
			':id_user' => $id_user
		));
		return $nota->fetchAll();
	}

	// obtener tipo de promedio
	function tipo_promedio($curso, $conexion) {
		$promedio = $conexion -> prepare('SELECT * FROM curso WHERE id_curso = :course');
		$promedio -> execute(array(
		  ':course' => $curso
		));

		return $promedio->fetch();
	}

	// Inspecting data text
	function limpiar_dato($datos) {
		$datos = trim($datos);
		$datos = stripslashes($datos);
		$datos = htmlspecialchars($datos);

		return $datos;
	}

 ?>