<div class="container" style="margin-bottom: 128px;">
	<div class="row">
		<br>
		<h4 class="Title_course center-align" data-type-course="<?php echo $course['tipo_calificacion'] ?>"><?php echo $course['nombre_curso'] ?> - NOTAS</h4>
		<br>
		<?php require './views/formBuscar.view.php' ?>
		<p><?php echo $title; ?></p>
		<?php if (!empty($results)): ?>
			<div class="col s12">
				<table>
					<thead>
						<tr>
							<th style="width: 300px; text-align: center;">ALUMNO</th>
							<?php if ($course['tipo_calificacion'] !== 'E'): ?>
								<th>PR. 1</th>
								<th>PR. 2</th>
								<th>PR. 3</th>
							<?php endif; ?>
							<?php if ($course['tipo_calificacion'] !== 'F'): ?>
								<th>PA. 1</th>
								<th>PA. 2</th>
							<?php endif; ?>
							<th>PERM.</th>
							<th>P.G.</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr class="fila_nota" data-student="<?php echo $nota['id_usuario'] ?>" data-nota="<?php echo $nota['id_nota'] ?>" >
							<td style="width: 60px;" ><input type="text" name="nota" value="<?php echo $nota['nombre_apellido']; ?>"></td>
							<?php if ($course['tipo_calificacion'] !== 'E'): ?>
								<td style="width: 60px;" ><input class="pr1_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['primer_practica']; ?>"></td>
								<td style="width: 60px;" ><input class="pr2_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['segunda_practica']; ?>"></td>
								<td style="width: 60px;" ><input class="pr3_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['tercer_practica']; ?>"></td>
							<?php endif; ?>
							<?php if ($course['tipo_calificacion'] !== 'F'): ?>
								<td style="width: 60px;" ><input class="pa1_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['Primer_Parcial']; ?>"></td>
								<td style="width: 60px;" ><input class="pa2_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['Segundo_Parcial']; ?>"></td>
							<?php endif; ?>
							<td style="width: 60px;" ><input class="per_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['nota_permanente']; ?>"></td>
							<td style="width: 60px;" ><input class="pro_<?php echo $nota['id_nota']; ?>" type="number" min="0" max="20" name="nota" value="<?php echo $nota['promedio']; ?>" disabled></td>
							<th style="width: 60px;" ><input class="buttonSaveNote" style="background-color: #0084ff; color: #fff; outline: none; border:none; padding: 5px; border-radius: 100px; font-size: 12px" type="button" value="Guardar"></th>
						</tr>
					</tbody>
				</table>
			</div>
		<?php endif; ?>
	</div>
</div>
<script src="js/table.js"></script>
