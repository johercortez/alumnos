<div class="container">
		<div class="row">
			<br>
				<h4 class="center-align">Nuevo alumno</h4>
				<br>
				<div class="col s12">
						<div class="row">
							<form class="col s12">
								<div class="row">
									<div class="input-field col s4">
										<input name="usuario" id="usuario" type="text" class="validate" required>
										<label for="usuario">Usuario</label>
									</div>
									<div class="input-field col s4">
										<input name="contraseña" id="contraseña" type="password" class="validate" required>
										<label for="contraseña">Contraseña</label>
									</div>
									<div class="input-field col s4">
										<input name="contraseña2" id="contraseña2" type="password" class="validate" required>
										<label for="contraseña2">Confirmar contraseña</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input name="nombres" id="nombres" type="text" class="validate" required>
										<label for="nombres">Nombres</label>
									</div>
									<div class="input-field col s6">
										<input name="apellidos" id="apellidos" type="text" class="validate" required>
										<label for="apellidos">Apellidos</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input name="correo" id="correo" type="email" class="validate" required>
										<label for="correo">Email</label>
									</div>
									<div class="input-field col s6">
										<input name="dni" id="dni" type="number" class="validate" required>
										<label for="dni">DNI</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input name="direccion" id="direccion" type="text" class="validate" required>
										<label for="direccion">Dirección</label>
									</div>
									<div class="input-field col s6">
										<input name="telefono" id="telefono" type="number" class="validate" required>
										<label for="telefono">Teléfono</label>
									</div>
								</div>
								<div>
									<p id="message_new_user"></p>
								</div>
								<br>
								<div class="row">
									<div class="col s12 center-align">
										<button id="sendata" class="btn waves-effect waves-light" type="submit">Registrar</button>
										<span style="padding:0 20px;"></span>
										<a href="<?php echo RUTA; ?>/home" class="waves-effect waves-light btn">Cancelar</a>
									</div>
								</div>
							</form>
						</div>
				</div>
		</div>
</div>
<script src="<?php echo RUTA; ?>/js/new_user.js"></script>