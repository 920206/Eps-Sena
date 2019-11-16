<?php
require_once "conexion.php";

$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];


$query="INSERT INTO usuario(documento,nombre,apellido,direccion,teleffono) VALUES ('$documento','$nombre','$apellido','$direccion','$telefono')";
	if ($mysqli->query($query)) {
		print "<script>alert(\"Registro exitoso.\");window.location='../citas.php?id=$documento';</script>";
	}else{
		print "<script>alert(\"Ocurrio un error.\");window.location='../index.php';</script>";
			}

?>