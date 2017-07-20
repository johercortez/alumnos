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
    <script src="<?php echo RUTA; ?>/js/jquery-2.2.0.min.js"></script>
</head>
<body>
    <?php
        require 'headerLateral.view.php' 
    ?>
    <section class="ContentPage full-width">
        <div class="ContentPage-Nav full-width">
            <ul class="full-width">
                <li><a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Cerrar Sesión"><i class="zmdi zmdi-power"></i></a></li>
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <li><a style="font-size: 18px; display: inline;" id="userheader" href="<?php echo RUTA; ?>/perfil"><?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?></a></li>
                <li><a href="<?php echo RUTA; ?>/perfil"><figure><img src="<?php echo RUTA; ?>/assets/img/user.png" alt="UserImage"></figure></a></li>
            </ul>
        </div>
