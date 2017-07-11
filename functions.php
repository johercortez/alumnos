<?php 

	function conexion($bd_config){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basededatos'], $bd_config['usuario'], $bd_config['pass']);
			return $conexion;
		} catch (PDOException $e) {
			return false;
		}		
	}

	function obtener_ciclos($conexion){
		$ciclo = $conexion -> prepare('SELECT * FROM ciclo');
		$ciclo->execute();
		return $ciclo->fetchAll();
	}

	function obtener_notas($ciclo, $curso, $conexion){

		$notas = $conexion -> prepare('SELECT * FROM nota WHERE id_curso = :course AND id_ciclo = :cycle');
		$notas->execute(array(
			':course' => $curso,
			':cycle' => $ciclo
		));
		return $notas->fetchAll();
	}

	function tipo_promedio($curso, $conexion) {
		$promedio = $conexion -> prepare('SELECT * FROM curso WHERE id_curso = :course');
		$promedio -> execute(array(
		  ':course' => $curso
		));

		return $promedio->fetch();
	}

	function guardar_nota($primer_practica, $segunda_practica, $tercer_practica, $Primer_Parcial, $Segundo_Parcial, $nota_permanente, $promedio, $id_nota, $conexion){

		$nota = $conexion -> prepare('UPDATE nota SET primer_practica = :first_practice, segunda_practica = :second_practice, tercer_practica: :third_practice, Primer_Parcial = :first_parcial, Segundo_Parcial = :second_parcial, nota_permanente = :permanent_note, promedio = :average WHERE id_nota = :id_note ');

		$nota -> execute(array(
		  ':first_practice' => $primer_practica,
		  ':second_practice' => $segunda_practica,
		  ':third_practice' => $tercer_practica,
		  ':first_parcial' => $Primer_Parcial,
		  ':second_parcial' => $Segundo_Parcial,
		  ':permanent_note' => $nota_permanente,
		  ':average' => $promedio,
		  ':id_note' => $id_nota
		));

		$resultado = $nota ->fetch();

		if ($resultado !== false) {
			return array('access' => true);
		} else {
			return array('access' => false);
		}

	}

 ?>