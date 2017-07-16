<?php

  require 'config.php';
  require 'functions.php';

  session_start();

  // Verificación de sesión usuario
  if (isset($_SESSION['usuario'])) {
    header('Location: home');
  }

  $errores = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = filter_var(strtoLower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $contraseña = $_POST['contraseña'];
    $contraseña = hash('sha512', $contraseña);

    $conexion = conexion($bd_config);
    
    $statement = $conexion -> prepare('SELECT * FROM usuario WHERE usuario = :username AND contrasena = :password');
    $statement -> execute(array(
      ':username' => $usuario,
      ':password' => $contraseña
    ));

    $resultado = $statement->fetch();

    if ($resultado !== false) {

      echo "logueo exitoso";

      $_SESSION['usuario'] = $resultado['usuario'];
      $_SESSION['tipo_usuario'] = $resultado['tipo_usuario'];
      $_SESSION['id_usuario'] = $resultado['id_usuario'];
      $_SESSION['nombre'] = $resultado['nombre'];
      $_SESSION['apellido'] = $resultado['apellido'];
      $_SESSION['dni'] = $resultado['dni'];
      $_SESSION['direccion'] = $resultado['direccion'];
      $_SESSION['telefono'] = $resultado['telefono'];
      $_SESSION['email'] = $resultado['email'];

      header('Location: home');
    } else {
      $errores .= '<li style="color:red;">El nombre de usuario o contraseña son erróneos</li>';
      header('Location: index');
    }
  }

  require 'views/index.view.php';
 ?>
