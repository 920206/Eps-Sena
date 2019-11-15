<?php 
	
	require_once "conexion.php";


	$documento=$_GET['id'];
	$doctor=$_POST['doctor'];
	$clasi=$_POST['clasi'];

	$query="UPDATE `cita_medica` SET documento_medico=$doctor WHERE documento_usuario=$documento";
	
	if ($mysqli->query($query)) {
		
		header ("location:../citas3.php?id=$documento");
	
	}else{
		print "<script>alert(\"Ocurrio un error.\");window.location='../index.php';</script>";
			}

?>