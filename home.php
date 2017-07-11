<?php
  session_start();

  if (isset($_SESSION['usuario'])) {

    require 'views/header.view.php';

    require 'views/home.view.php';

    require 'views/footer.view.php';
  } else {
    header('Location: index.php');
  }


 ?>
