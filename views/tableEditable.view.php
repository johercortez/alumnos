<div class="container" style="margin-bottom: 128px;">
    <div class="row">
        <br>
        <h4 class="Title_course center-align" data-type-course="<?php echo $course['tipo_calificacion'] ?>"><?php echo $course['nombre_curso'] ?> - NOTAS</h4>
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($notas as $nota): ?>
                        <tr class="fila_nota" data-student="<?php echo $nota['id_usuario'] ?>" data-nota="<?php echo $nota['id_nota'] ?>" >
                            <td><input type="text" name="nota" value="<?php echo $nota['nombre_apellido'] ?>"></td>
                            <td><input class="pr1_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['primer_practica'] ?>"></td>
                            <td><input class="pr2_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['segunda_practica'] ?>"></td>
                            <td><input class="pr3_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['tercer_practica'] ?>"></td>
                            <td><input class="pa1_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['Primer_Parcial'] ?>"></td>
                            <td><input class="pa2_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['Segundo_Parcial'] ?>"></td>
                            <td><input class="per_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['nota_permanente'] ?>"></td>
                            <td><input class="pro_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['promedio'] ?>" disabled></td>
                            <th><input class="buttonSaveNote" style="background-color: #0084ff; color: #fff; outline: none; border:none; padding: 5px; border-radius: 100px; font-size: 12px" type="button" value="Guardar"></th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="js/table.js"></script>
