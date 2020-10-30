<nav>
	<ul>
		<li>
			<a href="./portal.php?action=home">Home</a>
		</li>
		<li>
			<a href="?action=listar_productos">Productos</a>
		</li>
		<?php 
		 
		
		 if (!isset($_SESSION['usuario'])){
			echo '<li><a href="?action=login">Autentificar</a></li>';
			echo '<li><a href="?action=registrar_usuario">Registrarme</a></li>';
		 }
		elseif (isset($_SESSION['usuario']) AND $_SESSION['usuario'][0] == 'a'){
			echo '<li><a href="?action=registrar_producto">Registrar Producto</a></li>';
			echo '<li><a href="?action=salir">Salir</a></li>';
		}
		elseif (isset($_SESSION['usuario']) AND  $_SESSION['usuario'][0] == 'n'){
			
			echo '<li><a href="?action=ver_cesta">Cesta de Compra</a></li>';
			echo '<li><a href="?action=salir">Salir</a></li>';
		}
        ?>
	</ul>
</nav>