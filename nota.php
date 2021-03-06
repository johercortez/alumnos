<?php

  session_start();
  require 'config.php';

  if (isset($_SESSION['usuario'])) {

    require 'functions.php';
    $conexion = conexion($bd_config);
    
    require 'views/head.view.php';
    require 'views/header.view.php';


    if ($_SESSION['tipo_usuario'] === 'secretaria') {
      $_SESSION['curso'] = $_GET['curso'];
      $_SESSION['ciclo'] = $_GET['ciclo'];
      $course = tipo_promedio($_GET['curso'], $conexion);
      $notas = obtener_notas($_GET['ciclo'], $_GET['curso'], $conexion);
      require 'views/tableEditable.view.php';
    } else {
      $course = tipo_promedio($_GET['curso'], $conexion);
      $nota = obtener_nota($_GET['ciclo'], $_GET['curso'], $_SESSION['id_usuario'], $conexion);
      $nota = $nota[0];
      // print_r($_SESSION['id_usuario']);
    	require 'views/tableList.view.php';
    }

    require 'views/footer.view.php';
  } else {
    header('Location: '.RUTA);
  }


 ?>
