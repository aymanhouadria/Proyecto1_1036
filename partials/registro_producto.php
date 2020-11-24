<main>
	<h1>Datos de registro: </h1>
	<form class="form_usuario" action="?action=insertar_producto" method="POST" onsubmit="return enviarFormulario();">

		<legend>Datos básicos</legend>
		<label for="nombre">Nombre</label>
		<br/>
		<input id = "name" type="text" name="name" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Lechuga" />
		<br/>
		<label for="price">Precio</label>
		<br/>
		<input id ="price" type="text" name="price" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="precio" />
		<br/>
		<label for="url">Foto</label>
		<br/>
		<?php
		if ( count($_FILES) < 1){
			echo '<input id ="url" name="url" type="url" href="" class="item_requerid" size="8" maxlength="50" value="" readonly" />';


		}
		else{
			$VAR= $_FILES["inpFile"]["name"];
			echo "<input id ='url' name='url' type='text' href='C:\Users\USUARIO\Desktop\P1_proy\includes\uploads/$VAR'  class='item_requerid' size='8' maxlength='50' value='C:\Users\USUARIO\Desktop\P1_proy\includes\uploads/$VAR'  />";
			
		}
		?>
		
		<input type="button" value="Subir Foto" onclick="showHidde()">
		
		
		<br/>
		<p><input type="submit" value="Enviar" onclick="enviarFormulario();">
		<input type="reset" value="Deshacer">
		</p>
	</form>

	<form id="caja" action="?action=upload" method="post" enctype="multipart/form-data">
		
		Selecciona	una	imagen:
		<input type="file" accept="image/*" name="inpFile" id="inpFile">
		<input id="button" type="button" value="X"  name="button" onclick="hide()" >
		<div class="image-preview" id="imagePreview">
			<img src="" alt="Image Preview" class="image-preview__image">
			<span class="image-preview__default-text">Image Preview</span>
		</div>
		
		<input id="subir" disabled="true" type="submit" value="SUBIR" name="submit" >
	</form>

	

	

	
</main>