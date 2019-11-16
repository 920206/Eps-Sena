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
        <meta charset="UTF-8">
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
                <?php
                $sql= "SELECT * FROM cita_medica WHERE documento_usuario=$documento";
                $result = mysqli_query($mysqli,$sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $documento1 = $row['documento_usuario'];
            $tipo = $row['tipo_de_cita'];
            $valor = $row['valor_cita'];
            $doctor = $row['documento_medico'];
            $clasif = $row['clasificacion'];
            $fecha = $row['fecha_cita'];
            $hora = $row['hora_cita'];
            }
            ?>
            <?php
                $sql= "SELECT * FROM doctores WHERE documento=$doctor";
                $result = mysqli_query($mysqli,$sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombredoc = $row['nombre'];
            $apellidodoc =$row['apellido'];
            $especialidad =$row['especialidad'];
            }
            ?>
        <!--Formulario datos paciente-->
            <div class="row">
            <div class="col-md-12 col-lg-12">
	        
		    <div class="form-group center" >
			<h5>Paciente: <?php echo $nombre." ".$apellido;?> </h5>
            <h5>Documento: <?php echo $documento1 ?></h5>
            <h5>Telefono: <?php echo $telefono ?></h5>
            <br>

            <h4>Datos de la cita:</h4><br>
		    
			<h5>Tipo de cita:</h5><p> <?php echo $tipo ?></p>
            <h5>Clasificacion de cita:</h5><p> <?php echo $clasif ?></p>
            <h5>Doctor: </h5><p><?php echo $nombredoc." ".$apellidodoc ?></p>
            <h5>Valor de la cita: </h5><p><?php echo $valor ?></p>
            <h5>Fecha de la cita: </h5><p><?php echo $fecha ?></p>
            <h5>Hora de la cita: </h5><p><?php echo $hora ?></p>         
            </div><br>
                        
            <!-- Button trigger modal -->
                <button type="button" class="nuevobtn btn" data-toggle="modal" data-target="#exampleModalCenter">
                 Finalizar</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Completado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            Se han guardado los datos de la cita exitosamente!
            </div>
            <div class="modal-footer">
                <a href="index.php" class="nuevobtn btn">Agregar Otro Paciente</a>
                <a href="conteo.php" class="nuevobtn btn">Terminar</a>
            </div>
            </div>
            </div>
            </div>
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