<div class="container" style="margin-bottom: 128px;">
    <div class="row">
	    <br>
        <h4 class="center-align"><?php echo $course['nombre_curso'] ?> - NOTAS</h4>
        <br>
        <div class="col s12">
            <table>
                <thead>
                    <tr>
                        <th style="width: 300px; text-align: center;">ALUMNO</th>
                        <th>PR. 1</th>
                        <th>PR. 2</th>
                        <th>PR. 3</th>
                        <th>PA. 1</th>
                        <th>PA. 2</th>
                        <th>PERM.</th>
                        <th>P.G.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-student="<?php echo $nota['id_usuario'] ?>" data-nota="<?php echo $nota['id_nota'] ?>">
                        <td><?php echo $nota['nombre_apellido'] ?></td>
                        <td><?php echo $nota['primer_practica'] ?></td>
                        <td><?php echo $nota['segunda_practica'] ?></td>
                        <td><?php echo $nota['tercer_practica'] ?></td>
                        <td><?php echo $nota['Primer_Parcial'] ?></td>
                        <td><?php echo $nota['Segundo_Parcial'] ?></td>
                        <td><?php echo $nota['nota_permanente'] ?></td>
                        <td><?php echo $nota['promedio'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
