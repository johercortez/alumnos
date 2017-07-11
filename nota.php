<?php

session_start();

if (isset($_SESSION['usuario'])) {
  require 'views/header.view.php';

  require 'config.php';
  require 'functions.php';

  $conexion = conexion($bd_config);

  $course = tipo_promedio($_GET['curso'], $conexion);
  $notas = obtener_notas($_GET['ciclo'], $_GET['curso'], $conexion);

  if ($_SESSION['tipo_usuario'] === 'secretaria') {
  	require 'views/tableEditable.view.php';
  } else {
  	require 'views/tableList.view.php';
  }

  require 'views/footer.view.php';
} else {
  header('Location: index');
}


 ?>
