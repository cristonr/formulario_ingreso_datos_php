<?php
//se definen las variables con los 'name=' del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];

include('conexion.php');
//ingresar datos a la base de datos
mysqli_query($conectar, "INSERT INTO usuarios VALUES (DEFAULT, '$nombre', '$apellido', '$correo', '$edad')");
header("Location: index.php?ok") //esto dirige nuevamente a la pagina indicada
?>