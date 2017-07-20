<section class="NavLateral full-width">
    <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
    <div class="NavLateral-content full-width">
        <header class="NavLateral-title full-width center-align">
            SISTEMAS UNICA<i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
        </header>
        <div class="NavLateral-Nav">
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
                <li>
                  <a style="padding-left: 30px;" href="<?php echo RUTA; ?>/#" class="NavLateral-DropDown  waves-effect waves-light"> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>I</a>
                  <ul class="full-width">
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=1&curso=2" class="waves-effect waves-light">Cálculo Diferencial</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=1&curso=2" class="waves-effect waves-light">Sociología</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=1&curso=2" class="waves-effect waves-light">Matemática Básica</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=1&curso=2" class="waves-effect waves-light">Taller Informática</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=1&curso=2" class="waves-effect waves-light">Introducción a la Ing. de Sistemas</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=1&curso=2" class="waves-effect waves-light">Actividades</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=1&curso=2" class="waves-effect waves-light">Terminología Extrangera</a></li>
                      <li class="NavLateralDivider"></li>
                  </ul>
                </li>
                <li>
                  <a style="padding-left: 30px;" href="<?php echo RUTA; ?>/#" class="NavLateral-DropDown  waves-effect waves-light"> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>II</a>
                  <ul class="full-width">
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=2&curso=2" class="waves-effect waves-light">Cálculo Integral</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=2&curso=2" class="waves-effect waves-light">Matemática Discreta</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=2&curso=2" class="waves-effect waves-light">Taller Informática II</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=2&curso=2" class="waves-effect waves-light">Algoritmo y Estructura de datos I</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=2&curso=2" class="waves-effect waves-light">Terminologìa Extrangera II</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=2&curso=2" class="waves-effect waves-light">Ética y Moral</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=2&curso=2" class="waves-effect waves-light">Fundamentos FÍsicos Para la Ing. de Sistemas</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=2&curso=2" class="waves-effect waves-light">Actividades II</a></li>
                      <li class="NavLateralDivider"></li>
                  </ul>
                </li>
                <li>
                  <a style="padding-left: 30px;" href="<?php echo RUTA; ?>/#" class="NavLateral-DropDown  waves-effect waves-light"> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>III</a>
                  <ul class="full-width">
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=3&curso=2" class="waves-effect waves-light">Estadística Aplicada</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=3&curso=2" class="waves-effect waves-light">Algoritmo y Estructura de datos II</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=3&curso=2" class="waves-effect waves-light">Lenguaje de Programación I</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=3&curso=2" class="waves-effect waves-light">Terminología Extrangera III</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=3&curso=2" class="waves-effect waves-light">Electrónica Digital</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=3&curso=2" class="waves-effect waves-light">Liderazgo y Comprensión del Lenguaje</a></li>
                      <li class="NavLateralDivider"></li>
                  </ul>
                </li>
                <li>
                  <a style="padding-left: 30px;" href="<?php echo RUTA; ?>/#" class="NavLateral-DropDown  waves-effect waves-light"> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>IV</a>
                  <ul class="full-width">
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=4&curso=2" class="waves-effect waves-light">Microeconomía</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=4&curso=2" class="waves-effect waves-light">Programación Orientado a Objetos I</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=4&curso=2" class="waves-effect waves-light">Lenguaje de Programación II</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=4&curso=2" class="waves-effect waves-light">Desarrollo y Defenza Nacional</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=4&curso=2" class="waves-effect waves-light">Electrónica Digital II</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=4&curso=2" class="waves-effect waves-light">Modelos Cuantitativos para el Ingeniería</a></li>
                      <li class="NavLateralDivider"></li>
                  </ul>
                </li>
                <li>
                  <a style="padding-left: 30px;" href="<?php echo RUTA; ?>/#" class="NavLateral-DropDown  waves-effect waves-light"> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>V</a>
                  <ul class="full-width">
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=5&curso=1" class="waves-effect waves-light">Ingeniería Ambiental</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=5&curso=2" class="waves-effect waves-light">Programación Orientado a Objetos II</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=5&curso=3" class="waves-effect waves-light">Teoría y Diseños de Base de Datos</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=5&curso=4" class="waves-effect waves-light">Gestión Financiera y Conciclo</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=5&curso=5" class="waves-effect waves-light">Investigación de Operaciones</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=5&curso=6" class="waves-effect waves-light">Arquitectura de Computadoras</a></li>
                      <li class="NavLateralDivider"></li>
                  </ul>
                </li>
                <li>
                  <a style="padding-left: 30px;" href="<?php echo RUTA; ?>/#" class="NavLateral-DropDown  waves-effect waves-light"> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>VI</a>
                  <ul class="full-width">
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=6&curso=2" class="waves-effect waves-light">Sistemas de Información</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=6&curso=2" class="waves-effect waves-light">Análisis y Diseño de Sistemas</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=6&curso=2" class="waves-effect waves-light">Gestión y Dirección de Empresas</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=6&curso=2" class="waves-effect waves-light">Investigación de Operaciones II</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=6&curso=2" class="waves-effect waves-light">Sistemas Operativos</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=6&curso=2" class="waves-effect waves-light">Compiladores</a></li>
                      <li class="NavLateralDivider"></li>
                  </ul>
                </li>
                <li>
                  <a style="padding-left: 30px;" href="<?php echo RUTA; ?>/#" class="NavLateral-DropDown  waves-effect waves-light"> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>VII</a>
                  <ul class="full-width">
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=7&curso=2" class="waves-effect waves-light">Marketing</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=7&curso=2" class="waves-effect waves-light">Implementación de Base de Datos</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=7&curso=2" class="waves-effect waves-light">Dinámica de Sistemas</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=7&curso=2" class="waves-effect waves-light">Arquitectura de Redes</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=7&curso=2" class="waves-effect waves-light">Telecomunicaciones</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=7&curso=2" class="waves-effect waves-light">Metodología de la Investigación Científica</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=7&curso=2" class="waves-effect waves-light">Ingeniería de Software I</a></li>
                      <li class="NavLateralDivider"></li>
                  </ul>
                </li>
                <li>
                  <a style="padding-left: 30px;" href="<?php echo RUTA; ?>/#" class="NavLateral-DropDown  waves-effect waves-light"> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>VIII</a>
                  <ul class="full-width">
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=8&curso=2" class="waves-effect waves-light">Redes y Sistemas Distribuidos</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=8&curso=2" class="waves-effect waves-light">Simulación de Sistemas Discretos</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=8&curso=2" class="waves-effect waves-light">Diseños e Implementación de Sistemas</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=8&curso=2" class="waves-effect waves-light">Control de Calidad de Software</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=8&curso=2" class="waves-effect waves-light">Ingeniería de Procesos de Negocios</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=8&curso=2" class="waves-effect waves-light">Gerencia de Proyectos TI</a></li>
                  </ul>
                </li>
                <li>
                  <a style="padding-left: 30px;" href="<?php echo RUTA; ?>/#" class="NavLateral-DropDown  waves-effect waves-light"> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>IX</a>
                  <ul class="full-width">
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=9&curso=2" class="waves-effect waves-light">Inteligente de Negocios</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=9&curso=2" class="waves-effect waves-light">E-Business</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=9&curso=2" class="waves-effect waves-light">Desarrollo de Aplicaciones Empresariales</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=9&curso=2" class="waves-effect waves-light">Pruebas de Software</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=9&curso=2" class="waves-effect waves-light">Proyecto de Tesis I</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=9&curso=2" class="waves-effect waves-light">Sistemas Expertos</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=9&curso=2" class="waves-effect waves-light">Gestión de Procesos de Negocios</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=9&curso=2" class="waves-effect waves-light">Formulación de Proyectos de Inversión</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=9&curso=2" class="waves-effect waves-light">Arquitectura de DATACENTER</a></li>
                      <li class="NavLateralDivider"></li>
                  </ul>
                </li>
                <li>
                  <a style="padding-left: 30px;" href="<?php echo RUTA; ?>/#" class="NavLateral-DropDown  waves-effect waves-light"> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>X</a>
                  <ul class="full-width">
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=10&curso=2" class="waves-effect waves-light">Ingenieria de Información</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=10&curso=2" class="waves-effect waves-light">Seguridad y Auditoría de Sistemas</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=10&curso=2" class="waves-effect waves-light">Sistemas Tiempo Real</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=10&curso=2" class="waves-effect waves-light">Proyecto de Tesis II</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=10&curso=2" class="waves-effect waves-light">Inteligencia Artificial y Robótica</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=10&curso=2" class="waves-effect waves-light">Planificación Estratégica de TI</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=10&curso=2" class="waves-effect waves-light">Gestión de Talento Humano</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=10&curso=2" class="waves-effect waves-light">Innovación Tecnológica</a></li>
                      <li><a href="<?php echo RUTA; ?>/nota?ciclo=10&curso=2" class="waves-effect waves-light">Administrador del Conocimiento</a></li>
                      <li class="NavLateralDivider"></li>
                  </ul>
                </li>
            </ul>
        </div>
    </div>
</section>
