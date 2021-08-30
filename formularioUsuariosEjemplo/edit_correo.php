<?php 
include('conexion.php');
$correo_edit = $_POST['correo'];
$id_edit = $_POST['id'];
mysqli_query($conectar, "UPDATE usuarios SET correo = '$correo_edit' WHERE id_us = $id_edit");
header('Location: ver_usuarios.php');

?>