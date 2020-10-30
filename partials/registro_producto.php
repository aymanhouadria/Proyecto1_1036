<main>
	<h1>Datos de registro: </h1>
	<form class="form_usuario" action="?action=insertar_producto" method="POST">

		<legend>Datos básicos</legend>
		<label for="nombre">Nombre</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Lechuga" />
		<br/>
		<label for="price">Precio</label>
		<br/>
		<input type="text" name="price" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="precio" />
		<br/>
		<label for="foto_url">Foto</label>
		<br/>
		<input type="url" name="foto_url" class="item_requerid" size="8" maxlength="25" value=""
		/>
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>