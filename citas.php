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
			<h5>Paciente: <?php echo $nombre." ".$apellido;?></h5>
            <h5>Documento: <?php echo $documento?></h5><br>
		    </div>
		    <div class="form-group center" >
			<h4>Por favor seleccione el tipo de cita</h4>
            <select class="form-control" name="cita">
                <option>Seleccione una opcion</option>
                <option>Medicina General</option>
                <option>Odontologia</option>
                <option>Prioritaria</option>
                <option>Urgencias</option>
            </select> <br>
        
          <!---  <div class="form-group center" id="Urgencias" style="display: none;">
                <h5>Seleccione el tipo de urgencias</h5>
                <select class="form-control">
                    <option>Triage I</option>
                    <option>Triage II</option>
                    <option>Triage III</option>
                    <option>Triage IIIB</option>
                    <option>Triage IV</option>
                </select>
            </div>-->
            
		   
		        <button class="nuevobtn btn" type="submit">Siguiente</button></a>
		        </form>

		    </div>
            
            </header>
        
        <!-- Copyright -->
        <section class="copyright py-4 text-center text-white fixed-bottom ">
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