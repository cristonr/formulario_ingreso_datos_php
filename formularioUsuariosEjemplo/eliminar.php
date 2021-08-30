<?php
include('conexion.php');
$id_us = $_GET['id'];
mysqli_query($conectar, "DELETE FROM usuarios WHERE id_us = $id_us");
header('Location: ver_usuarios.php');
?>