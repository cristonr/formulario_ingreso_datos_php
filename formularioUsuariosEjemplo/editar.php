<!DOCTYPE html>
<html>
<head>
	<title>Administracion de usuarios</title>
	<link rel="stylesheet" type="text/css" href="./estilos.css">
</head>
<body>
<header class="nav_bar">	
<h2>Formulario de registro</h2>
	<h2><a href='index.php'>Enviar datos</a></h2>
	<h2><a href="ver_usuarios.php">Recibir datos</a></h2>
	

</header>
<div>
	<?php 
	include('conexion.php');
	$id_us = $_GET['id'];// uso el id para que la edicion sea solo de este item
	$consulta = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_us = $id_us");
	$info_us = mysqli_fetch_assoc($consulta);//creo un array
	?>
	<form method="POST" action="edit_correo.php">
		<input type="hidden" name="id" value="<?php echo $info_us['id_us'];?>"><!-- este input de tipo oculto lo uso para pasar el id a la funcion de edit:correo.php-->
		<h4><?php echo $info_us['apellido'].' '.$info_us['nombre'];?></h4> <!-- imprimo por pantalla el nombre y apellido del usuario que quiere editar sus datos -->
	<input type="email" name="correo" placeholder="<?php echo $info_us['correo']?>">
	<input type="submit" value="Guardar cambios">
	</form>
</div>



</body>
</html>