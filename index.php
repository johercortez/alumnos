<?php

  session_start();

  // Verificación de sesión usuario
  if (isset($_SESSION['usuario'])) {
    header('Location: home.php');
  }

  $errores = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = filter_var(strtoLower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['contraseña'];
    $password = hash('sha512', $password);

    try {
      $conexion = new PDO('mysql:host=localhost;dbname=session', 'root', '12345678');
    } catch (PDOException $e) {
      echo "Error: " .$e.getMessage();
    }

    $statement = $conexion -> prepare('SELECT * FROM usuarios WHERE username = :username AND password = :password');
    $statement -> execute(array(
      ':username' => $usuario,
      ':password' => $password
    ));

    $resultado = $statement->fetch();

    if ($resultado !== false) {
      echo "logueo exitoso";
      $_SESSION['usuario'] = $usuario;
      header('Location: home.php');
    } else {
      $errores .= '<li style="color:red;">El nombre de usuario o contraseña son erróneos</li>';
    }
  }

  require 'views/index.view.php';
 ?>
