<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	
	require_once "conexion.php";


	$documento=$_GET['id'];
	$doctor=$_POST['doctor'];
	$clasif=$_POST['clasi'];

	$sql="INSERT INTO cita_medica (clasificacion) VALUES ('$clasif') WHERE documento_usuario=$documento";
	$query="UPDATE `cita_medica` SET documento_medico=$doctor WHERE documento_usuario = $documento";
	
	if ($mysqli->query($sql)) {
		
		header ("location:../citas3.php?id=$documento");
	
	}else{
		print "<script>alert(\"Ocurrio un error.\")</script>";
			}

?>