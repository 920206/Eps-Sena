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
            
		    </div>

		    <div class="form-group center" >
			<?php
            $sql2 = $mysqli->query("SELECT * FROM usuario  ORDER BY documento DESC ");
            $totalp = $sql2->num_rows;

            $sql3 = $mysqli->query("SELECT * FROM cita_medica WHERE tipo_de_cita = 'Medicina General'  ORDER BY documento_usuario DESC ");
            $medicina = $sql3->num_rows;

            $sql4 = $mysqli->query("SELECT * FROM cita_medica WHERE tipo_de_cita = 'Odontologia'  ORDER BY documento_usuario DESC  ");
            $odontologia = $sql4->num_rows;

            $sql5 = $mysqli->query("SELECT * FROM cita_medica WHERE tipo_de_cita = 'Prioritaria'  ORDER BY documento_usuario DESC ");
            $prio = $sql5->num_rows;

            $sql6 = $mysqli->query("SELECT * FROM cita_medica WHERE tipo_de_cita = 'Urgencias'  ORDER BY documento_usuario DESC  ");
            $urgen = $sql6->num_rows;

            $sql7 = $mysqli->query("SELECT * FROM cita_medica WHERE clasificacion = 'Triage I'  ORDER BY documento_usuario DESC  ");
            $t1 = $sql7->num_rows;

            $sql8 = $mysqli->query("SELECT * FROM cita_medica WHERE clasificacion = 'Triage II'  ORDER BY documento_usuario DESC  ");
            $t2 = $sql8->num_rows;

            $sql9 = $mysqli->query("SELECT * FROM cita_medica WHERE clasificacion = 'Triage III'  ORDER BY documento_usuario DESC  ");
            $t3 = $sql9->num_rows;

            $sql = $mysqli->query("SELECT * FROM cita_medica WHERE clasificacion = 'Triage IIIB'  ORDER BY documento_usuario DESC  ");
            $t3s = $sql->num_rows;

            $result = $mysqli->query("SELECT sum(valor_cita) AS valortotal FROM cita_medica");
            $row = mysqli_fetch_assoc($result); 
            $suma1 = $row['valortotal'];

            $result2 = $mysqli->query("SELECT sum(valor_cita) AS valortotal FROM cita_medica WHERE tipo_de_cita='Medicina General'");
            $row = mysqli_fetch_assoc($result2); 
            $suma2 = $row['valortotal'];

            $result3 = $mysqli->query("SELECT sum(valor_cita) AS valortotal FROM cita_medica WHERE tipo_de_cita='Odontologia'");
            $row = mysqli_fetch_assoc($result3); 
            $suma3 = $row['valortotal'];

            $result4 = $mysqli->query("SELECT sum(valor_cita) AS valortotal FROM cita_medica WHERE tipo_de_cita='Prioritaria'");
            $row = mysqli_fetch_assoc($result4); 
            $suma4 = $row['valortotal'];
            ?>

            <h3>Total Pacientes: <?php echo $totalp ?></h3>
            <h3>Total Pacientes Medicina General: <?php echo $medicina ?></h3>
            <h3>Total Pacientes Odontologia: <?php echo $odontologia ?></h3>
            <h3>Total Pacientes Prioritaria: <?php echo $prio ?></h3>
            <h3>Total Pacientes Urgencias: <?php echo $urgen ?></h3> <br>
            <h3>Total Pacientes Urgencias Triage I: <?php echo $t1 ?></h3>
            <h3>Total Pacientes Urgencias Triage II: <?php echo $t2 ?></h3>
            <h3>Total Pacientes Urgencias Triage III: <?php echo $t3 ?></h3>
            <h3>Total Pacientes Urgencias Triage IIIB: <?php echo $t3s ?></h3><br><br>

            <h2>Recaudo</h2>
            <h3>Total recaudo medicina general: $<?php echo $suma2 ?></h3>
            <h3>Total recaudo odontologia: $<?php echo $suma3 ?></h3>
            <h3>Total recaudo prioritaria: $<?php echo $suma4 ?></h3>
            <h3>Total recaudo: $<?php echo $suma1 ?> </h3>
		    </div>

            <a href="index.php" class="nuevobtn btn">Salir</a>
            
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