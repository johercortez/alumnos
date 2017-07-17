<div class="container">
		<div class="row">
			<br>
			<h4 class="center-align">Editar Perfil</h4>
			<br>
			<div class="col s12">
					<div class="row">
						<form class="col s12">
							<div class="row">
								<div class="input-field col s6">
									<input name="nombres" id="nombres" type="text" class="validate" required value="<?php echo $_SESSION['nombre']; ?>">
									<label for="nombres">Nombres</label>
								</div>
								<div class="input-field col s6">
									<input name="apellidos" id="apellidos" type="text" class="validate" required value="<?php echo $_SESSION['apellido']; ?>">
									<label for="apellidos">Apellidos</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input name="correo" id="correo" type="email" class="validate" required value="<?php echo $_SESSION['email']; ?>">
									<label for="correo">Email</label>
								</div>
								<div class="input-field col s6">
									<input name="dni" id="dni" type="number" class="validate" required value="<?php echo $_SESSION['dni']; ?>">
									<label for="dni">DNI</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input name="direccion" id="direccion" type="text" class="validate" required value="<?php echo $_SESSION['direccion']; ?>">
									<label for="direccion">Dirección</label>
								</div>
								<div class="input-field col s6">
									<input name="telefono" id="telefono" type="number" class="validate" required value="<?php echo $_SESSION['telefono']; ?>">
									<label for="telefono">Teléfono</label>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col s12 center-align">
									<button id="updateData" class="btn waves-effect waves-light" type="submit">Actualizar</button>
									<!-- <span style="padding:0 20px;"></span> -->
									<!-- <a href="index" class="waves-effect waves-light btn">Cancelar</a> -->
								</div>
							</div>
						</form>
					</div>
			</div>
		</div>
		<div class="row">
			<br>
			<h4 class="center-align">Cambiar contraseña</h4>
			<br>
			<div class="col s12">
					<div class="row">
						<form class="col s12">
							<div class="row">
								<div class="input-field col s6">
									<input name="actual-contraseña" id="cambiar-actual-contraseña" type="password" class="validate" required>
									<label for="actual-contraseña">Contraseña Actual</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input name="contraseña" id="cambiar-contraseña" type="password" class="validate" required>
									<label for="contraseña">Nueva Contraseña</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input name="contraseña2" id="cambiar-contraseña2" type="password" class="validate" required>
									<label for="contraseña2">Confirmar nueva contraseña</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button id="updatePassword" class="btn waves-effect waves-light" type="submit">Cambiar</button>
									<!-- <span style="padding:0 20px;"></span> -->
									<!-- <a href="index" class="waves-effect waves-light btn">Cancelar</a> -->
								</div>
							</div>
						</form>
					</div>
			</div>
		</div>
</div>
<script src="js/perfil.js"></script>