<?php
	require_once "conexion.php";


	$documento=$_GET['id'];
	$cita=$_POST['cita'];

	$query="INSERT INTO cita_medica (documento_usuario,tipo_de_cita) VALUES ('$documento','$cita')";
	if ($mysqli->query($query)) {
		header ("location:../citas2.php?id=$documento");
	}else{
		print "<script>alert(\"Ocurrio un error.\");window.location='../index.php';</script>";
			}

?>