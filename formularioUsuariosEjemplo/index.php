<!DOCTYPE html>
<html>
<head>
	<title>Formulario de registro</title>
	<link rel="stylesheet" type="text/css" href="./estilos.css">
</head>
<body>
<header class="nav_bar">	
<h2>Formulario de registro</h2>
	<h2><a href='index.php'>Enviar datos</a></h2>
	<h2><a href="ver_usuarios.php">Recibir datos</a></h2>
	

</header>
<div class="formulario_carga">
	<form method="POST" action="cargar_emp.php" class="form_I">
		<input type="text" name="nombre" required placeholder="nombre: ">
		<br>
		<input type="text" name="apellido" required placeholder="apellido">
		<br>
		<input type="email" name="correo" required placeholder="correo electronico: ">
		<br>
		<input type="number" name="edad" required placeholder="edad: ">
		<input type="submit" name="cargar" value="cargar datos">
	</form>
</div>
	<?php 
	//una vez cargados los datos me dirijo a esta pagina y doy un mensaje de carga de datos exitosa
	if (isset($_GET['ok'])) {
		echo '<h3>carga de datos exitosa!!!</h3>';
	}
	?>

</body>
</html>