<section class="NavLateral full-width">
    <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
    <div class="NavLateral-content full-width">
        <header class="NavLateral-title full-width center-align">
            SISTEMAS UNICA<i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
        </header>
        <div class="NavLateral-Nav">
            <?php $ciclos = obtener_ciclos($conexion); ?>
            <ul class="full-width">
                <li>
                    <a href="<?php echo RUTA; ?>/home" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i>INICIO</a>
                </li>
                <li class="NavLateralDivider"></li>
                <li><a class="waves-effect waves-light" href="<?php echo RUTA; ?>/perfil">PERFIL</a></li>
                <?php if($_SESSION['tipo_usuario'] === 'secretaria'): ?>
                  <li class="NavLateralDivider"></li>
                  <li><a class="waves-effect waves-light" href="<?php echo RUTA; ?>/nuevo_usuario">NUEVO USUARIO</a></li>
                <?php endif; ?>
                <li class="NavLateralDivider"></li>
                <li><a class="waves-effect waves-light">CICLOS</a></li>
                <?php foreach ($ciclos as $ciclo): ?>
                  <li>
                    <?php $cursos = obtener_cursos($conexion); ?>
                    <a style="padding-left: 30px;" href="<?php echo RUTA; ?>/#" class="NavLateral-DropDown  waves-effect waves-light"> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i><?php echo $ciclo['ciclo'] ?></a>
                    <ul class="full-width">
                      <?php foreach ($cursos as $curso): ?>
                        <li><a href="<?php echo RUTA; ?>/nota?ciclo=<?php echo $ciclo['id_ciclo']; ?>&curso=<?php echo $curso['id_curso']?>" class="waves-effect waves-light"><?php echo $curso['nombre_curso']; ?></a></li>
                        <li class="NavLateralDivider"></li>
                      <?php endforeach; ?>
                    </ul>
                  </li>
                <?php endforeach; ?>
                <!-- <?php if ($_SESSION['tipo_usuario'] === 'secretaria'): ?> -->
                <!-- <?php else: ?>
                  <li>
                    <?php
                      // $ciclo = $ciclos[$_SESSION['ciclo']];
                      print_r($_SESSION['ciclo']);
                      $cursos = obtener_cursos($conexion);
                    ?>
                    <a style="padding-left: 30px;" href="<?php echo RUTA; ?>/#" class="NavLateral-DropDown  waves-effect waves-light"> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i><?php echo $ciclo['ciclo'] ?></a>
                    <ul class="full-width">
                      <?php foreach ($cursos as $curso): ?>
                        <li><a href="<?php echo RUTA; ?>/nota?ciclo=<?php echo $ciclo['id_ciclo']; ?>&curso=<?php echo $curso['id_curso']?>" class="waves-effect waves-light"><?php echo $curso['nombre_curso']; ?></a></li>
                        <li class="NavLateralDivider"></li>
                      <?php endforeach; ?>
                    </ul>
                  </li>
                <?php endif; ?> -->
            </ul>
        </div>
    </div>
</section>
<section class="ContentPage full-width">
    <div class="ContentPage-Nav full-width">
        <ul class="full-width">
            <li><a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Cerrar Sesión"><i class="zmdi zmdi-power"></i></a></li>
            <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
            <li><a style="font-size: 18px; display: inline;" id="userheader" href="<?php echo RUTA; ?>/perfil"><?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?></a></li>
            <li><a href="<?php echo RUTA; ?>/perfil"><figure><img src="<?php echo RUTA; ?>/assets/img/user.png" alt="UserImage"></figure></a></li>
        </ul>
    </div>