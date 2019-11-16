<?php
	require_once "conexion.php";


	$documento=$_GET['id'];
	$cita=$_POST['cita'];
	$tipo=$_POST['tipo'];
	$doctor=$_POST['doctor'];
	$fecha=$_POST['dia'];
	$hora=$_POST['hora'];

	$nuevafecha=date("Y/m/d", strtotime($fecha));


	if ($cita=="Medicina General") {
		$query="INSERT INTO cita_medica (documento_usuario,tipo_de_cita,clasificacion,valor_cita,documento_medico,fecha_cita,hora_cita) VALUES ('$documento','$cita','$tipo',3000,'$doctor','$nuevafecha','$hora')";
	}elseif($cita=="Odontologia"){
		$query="INSERT INTO cita_medica (documento_usuario,tipo_de_cita,clasificacion,valor_cita,documento_medico,fecha_cita,hora_cita) VALUES ('$documento','$cita','$tipo',5000,'$doctor','$nuevafecha','$hora')";
	}elseif($cita=="Prioritaria"){
		$query="INSERT INTO cita_medica (documento_usuario,tipo_de_cita,clasificacion,valor_cita,documento_medico,fecha_cita,hora_cita) VALUES ('$documento','$cita','$tipo',15000,'$doctor','$nuevafecha','$hora')";
	}elseif ($cita=="Urgencias") {
		$query="INSERT INTO cita_medica (documento_usuario,tipo_de_cita,clasificacion,valor_cita,documento_medico,fecha_cita,hora_cita) VALUES ('$documento','$cita','$tipo',0,'$doctor','$nuevafecha','$hora')";
	}

	if ($mysqli->query($query)) {
		header ("location:../citas3.php?id=$documento");
	}else{
		print "<script>alert(\"Selecciono la opción Triage IV al paciente se le debe asignar una cita prioritaria.\");window.location='../index.php';</script>";
			}

?>