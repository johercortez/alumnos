<?php
  session_start();
  require 'config.php';

  if (isset($_SESSION['usuario'])) {
    require 'functions.php';

    $conexion = conexion($bd_config);

    require 'views/head.view.php';
    require 'views/header.view.php';

    require 'views/home.view.php';

    require 'views/footer.view.php';
  } else {
    header('Location: '.RUTA);
  }


 ?>
