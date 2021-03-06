<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>ALUMNOS</title>
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/materialize.min.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>/css/sweetalert.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/style.css">
</head>
<body class="font-cover" style="background-image: url(<?php echo RUTA; ?>/assets/img/1.jpg);">
    <header class="HeaderIndex">
      <div class="HeaderIndex__container">
        <div class="HeaderIndex__container--icon">
          <figure>
            <img src="<?php echo RUTA; ?>/assets/img/fis.png" alt="Facultad de ing. de sistemas - UNICA">
          </figure>
        </div>
        <div class="HeaderIndex__container--title">
          <h1>FIS</h1>
        </div>
      </div>
    </header>
    <div class="container-login center-align">
        <div style="margin:15px 0;">
            <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            <p>Iniciar sesión</p>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="input-field">
                <input type="text" class="validate" name="usuario" required>
                <label for="UserName"><i class="zmdi zmdi-account"></i>&nbsp; Usuario</label>
            </div>
            <div class="input-field col s12">
                <input type="password" class="validate" name="contraseña" required>
                <label for="Password"><i class="zmdi zmdi-lock"></i>&nbsp; Contraseña</label>
            </div>
            <button class="waves-effect waves-teal btn-flat">Ingresar &nbsp; <i class="zmdi zmdi-mail-send"></i></button>
            <?php if(!empty($errores)): ?>
              <ul>
                <?php echo $errores; ?>
              </ul>
            <?php endif; ?>
        </form>
    </div>
    <script src="<?php echo RUTA; ?>/js/sweetalert.min.js"></script>
	<script src="<?php echo RUTA; ?>/https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo RUTA; ?>/js/jquery-2.2.0.min.js"><\/script>')</script>
	<script src="<?php echo RUTA; ?>/js/materialize.min.js"></script>
	<script src="<?php echo RUTA; ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo RUTA; ?>/js/main.js"></script>
</body>
</html>
