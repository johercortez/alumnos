<div class="row">
    <p align="center">La carrera de Ingeniería de Sistemas forma Ingenieros capaces de desarrollar grandes proyectos tecnológicos y sistemas de información eficaces y de alta calidad en las empresas. De acuerdo con la tendencia internacional, la FIS de la UNICA emplea metodologías especializadas en el desarrollo de los conocimientos adquiridos por el alumno, con el fin de potenciar su capacidad de innovación y prepararlo en la gestión y dirección de proyectos corporativos o propios.​​​</p>

    <article class="col s12">
        <h4>Redes Sociales</h4>
        <hr>
        <ul class="timeline">
            <li class="timeline-inverted">
                <div class="timeline-badge bg-info"><i class="zmdi zmdi-twitter"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h5 class="timeline-title">Twitter</h5>
                        <p><small class="text-muted"><i class="zmdi zmdi-time"></i><a target="_blank" href="https://twitter.com/facsistemas?lang=es">Sistemas UNICA</a></small></p>
                    </div>
                    <div class="timeline-body">
                        <p></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge bg-primary"><i class="zmdi zmdi-facebook"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h5 class="timeline-title">Facebook</h5>
                        <p><small class="text-muted"><i class="zmdi zmdi-time"></i><a target="_blank" href="https://www.facebook.com/SistemasUnica/">Sistemas UNICA</a></small></p>
                    </div>
                    <div class="timeline-body">
                        <p></p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge bg-success"><i class="zmdi zmdi-whatsapp"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h5 class="timeline-title">Whatsapp</h5>
                        <p><small class="text-muted"><i class="zmdi zmdi-time"></i><a target="_blank" href="#">056 620588</a></small></p>
                    </div>
                    <div class="timeline-body">
                        <p></p>
                    </div>
                </div>
            </li>
        </ul>
    </article>
</div>
<script>
    fetch('/promedio.php', {
        method: 'POST',
        body: {
            username: 'prueba'
        }
    })
        .then(res => {
            var txt = res.json();
            // console.log(res.json())
            console.log(txt)
        })
        .catch(function(err){
            console.log(err)
        })
</script>
