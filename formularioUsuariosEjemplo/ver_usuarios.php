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
</div>
<?php
include('conexion.php');
$consulta = mysqli_query($conectar, 'SELECT * FROM usuarios ORDER BY apellido'); //trae los valores de la tabla, pero ordenados por el apellido
//mysqli_fetch_assoc crea un array asociativo o array indexado con mysqli_fetch_row
while ($listar = mysqli_fetch_assoc($consulta)) { ?>
	<div class="recibido">
	<div>
		<h3><?php echo $listar['apellido'].' '.$listar['nombre'];?> </h3>
	
		<h4><?php echo $listar['correo']; ?></h4>
		<p><?php echo 'EDAD: '. $listar['edad'];?></p>
		<p><a href="editar.php?id=<?php echo $listar['id_us'];?>">Editar</a> - <a href="eliminar.php?id=<?php echo $listar['id_us'];?>">borrar </a></p>
	</div>
</div>
<?php }

?>


</body>
</html>