<main>
	<h1>Datos de registro: </h1>
	<form class="form_usuario " action="?action=insertar_usuario" method="POST">

		
		<label for="nombre">Nombre</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Miguel Cervantes" />
		<br/>
		<label for="surname">Apellidos</label>
		<br/>
		<input type="text" name="surname" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Ignacio" />
		<br/>
		<label for="passwd">Clave</label>
		<br/>
		<input type="password" name="passwd" class="item_requerid" size="8" maxlength="25" value=""
		/>
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>