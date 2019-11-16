<!DOCTYPE html>
<?php
    require_once "php/conexion.php";
    if(isset($_GET['id'])){
        $documento = $_GET['id'];
        $query = "SELECT * FROM usuario WHERE documento=$documento";
        $result = mysqli_query($mysqli,$query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $documento = $row['documento'];
            $nombre = $row['nombre'];
            $apellido =$row['apellido'];
            $direccion = $row['direccion'];
            $telefono = $row['teleffono'];
}
}
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Eps Sena</title>
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <!-- CSS -->
        <link href="css/freelancer.min.css" rel="stylesheet">
        <style>
        .nuevobtn{
        float: right;
        width: 40%;
        padding: 10px 28px;
        font-size: 16px;
        background-color: none;
        text-decoration: none;
        border: 2px solid black;
        }
        .nuevobtn:hover{
        float: right;
        width: 40%;
        padding: 10px 28px;
        font-size: 16px;
        background-color: #28a745;
        color:white;
        text-decoration: none;
        border: 2px solid black;
        }
        .accederbtn{
        width: 40%;
        padding: 10px 28px;
        font-size: 16px;
        }
        button:hover {
        opacity: 0.6;
        cursor: pointer;
        }
        
        .flex-row{
        display: flex;
        justify-content: center;
        }
        .center{
            text-align: left;
        }
        </style>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        function mostrar(id) {
        if (id == "Urgencias") {
        $("#Urgencias").show();
        $("#Medicina General").hide();
        $("#Odontologia").hide();
        $("#Prioritaria").hide();
        }
        }
        </script>
    </head>
    <!-- Body -->
    <body id="page-top">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Eps Sena</a>
    </div>
    </nav>
        <!-- Header -->
        <header class="masthead bg-white text-secondary text-center">
            <div class="container">
        <!--Formulario datos paciente-->
            <div class="row">
            <div class="col-md-7 col-lg-7">
	        <form role="form" name="" action="php/guardarcita.php?id=<?php echo $documento?>" method="post">
		    <div class="form-group center" >
            <h4>Datos del paciente ingresado</h4>    
			<h5>Paciente: <?php echo $nombre." ".$apellido;?></h5>
            <h5>Documento: <?php echo $documento?></h5><br>
		    </div>
        <!--Formulario datos cita-->
		    <div class="form-group center" >
			<h5>Seleccione el tipo de cita</h5>
            <select class="form-control" name="cita">
                <option>Seleccionar</option>
                <option>Medicina General</option>
                <option>Odontologia</option>
                <option>Prioritaria</option>
                <option>Urgencias</option>
            </select> <br>
                <h5>Seleccione la clasificacion de la cita:</h5>
                <p>Si el paciente ingresa por urgencias porfavor seleccione el nivel de triage segun la condicion del paciente de lo contrario seleccione segun la especialidad que necesita el paciente* </p>
                <select class="form-control" name="tipo">
                    <option>Seleccionar</option>
                    <option>Triage I</option>
                    <option>Triage II</option>
                    <option>Triage III</option>
                    <option>Triage IIIB</option>
                    <option>Triage IV</option>
                    <option>Cita Medicina General</option>
                    <option>Cita Odontologica</option>
                    <option>Cita Prioritaria</option>
                </select><br>
                <h5>Seleccione un Doctor:</h5>
                <p>Seleccione un doctor de acuerdo al tipo de cita seleccionado. Si el paciente ingresa por urgencias seleccione el doctor segun la valoracion del Triage dada.*</p>
            <select class="form-control" name="doctor">
                <option>Selecionar</option>
                <?php 
                $query = $mysqli -> query ("SELECT * FROM doctores  ");
                    while ($valores = mysqli_fetch_array($query)) {
                        echo '<option value="'.$valores[documento].'">'."   ".''.$valores[especialidad].''." -- CC: ".''.$valores[documento].''." - ".''.$valores[nombre].''." ".''.$valores[apellido].'</option>';
                    }
                ?>
            <!--Fecha cita-->    
            </select><br>
                <h5>Seleccione la fecha de su cita:</h5>
                <p>Recuerde que si el paciente ingresa por urgencias debe ser atendido el mismo dia de ingreso*</p>
                <input type="date" name="dia" class="form-control"><br>
            <!--Hora cita-->
            <h5>Seleccione la hora de su cita:</h5>
            <p>Si el paciente fue valorado como TRIEAGE I el paciente tiene que ser atendido inmediatamente*</p>
            <select class="form-control" name="hora">
                <option>Selecionar</option>
                <option>08:00 AM</option>
                <option>09:00 AM</option>
                <option>10:00 AM</option>
                <option>11:00 AM</option>
                <option>12:00 MM</option>
                <option>01:00 PM</option>
                <option>02:00 PM</option>
                <option>03:00 PM</option>
                <option>04:00 PM</option>
                <option>05:00 PM</option>
            </select><br>
                <!--Boton Guardar Datos--> 
		        <button class="nuevobtn btn" type="submit">Siguiente</button></a>
		    </form>
            </div>
        </header>
        <!-- Copyright -->
        <section class="copyright py-4 text-center text-white sticky-bottom ">
            <div class="container">
                <small>Copyright &copy; Sena Eps 2019</small>
            </div>
        </section>
        <!-- Scroll -->
            <div class="scroll-to-top d-lg-none position-fixed ">
                <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
                <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
        <!-- Custom scripts for this template -->
        <script src="js/freelancer.min.js"></script>
    </body>
</html>