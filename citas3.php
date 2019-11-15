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
                <?php
                $sql= "SELECT * FROM cita_medica WHERE documento_usuario=$documento";
                $result = mysqli_query($mysqli,$sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $documento1 = $row['documento_usuario'];
            $tipo= $row['tipo_de_cita'];
            $docudoctor= $row['documento_medico'];
            $clasi = $row['clasificacion'];
            
}

                ?>

                 <?php
                $sql= "SELECT * FROM doctores WHERE documento=$docudoctor";
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
            <div class="col-md-7 col-lg-7">
	        
		    <div class="form-group center" >
			<h5>Paciente: <?php echo $nombre." ".$apellido;?> </h5>
            <h5>Documento: <?php echo $documento1 ?></h5>
		    
			<h5>Tipo de cita: <?php echo $tipo ?></h5>
            <h5>Clasificacion de cita: <?php echo $clasi ?></h5>
            <h5>Doctor: <?php echo $nombredoc." ".$apellidodoc ?></h5>
            </div><br>

        <!--Formulario Datos Doctor segun especialidad-->    
            <?php
            if($tipo =='Medicina General'){
            ?>
            <form role="form" name="" action="php/guardardoctor.php?id=$documento" method="post">
             <div class="form-group center">
            <h5>Seleccione la fecha de su cita:</h5>
            <input type="date" name="dia" class="form-control">
            <h5>Seleccione la hora de su cita:</h5>
            <select class="form-control" name="doctor">
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
            </select>
        </div>
        <button class="nuevobtn btn" type="submit">Siguiente</button></a>
        </form>

        <?php
    }
    ?>
<?php
            if($tipo =='Odontologia'){
            ?>
            <form role="form" name="" action="php/guardardoctor.php?id=$documento" method="post">
             <div class="form-group center">
            <h5>Seleccione la fecha de su cita:</h5>
            <input type="date" name="dia" class="form-control">
            <h5>Seleccione la hora de su cita:</h5>
            <select class="form-control" name="doctor">
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
            </select>
        </div>
        <button class="nuevobtn btn" type="submit">Siguiente</button></a>
        </form>

        <?php
    }
    ?>


<?php
            if($tipo =='Prioritaria'){
            ?>
            <form role="form" name="" action="php/guardardoctor.php?id=$documento" method="post">
             <div class="form-group center">
            <h5>Seleccione la fecha de su cita:</h5>
            <input type="date" name="dia" class="form-control">
            <h5>Seleccione la hora de su cita:</h5>
            <select class="form-control" name="doctor">
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
            </select>
        </div>
        <button class="nuevobtn btn" type="submit">Siguiente</button></a>
        </form>

        <?php
    }
    ?>


    <?php
            if($tipo =='Urgencias'){
            ?>
            <form role="form" name="" action="php/guardardoctor.php?id=$documento" method="post">
             <div class="form-group center">
                <h5>Seleccione la fecha de su cita:</h5>
            <input type="date" name="dia" class="form-control">
            <h5>Seleccione la hora de su cita:</h5>
            <select class="form-control" name="doctor">
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
            </select>
        </div>
        <button class="nuevobtn btn" type="submit">Siguiente</button></a>
        </form>

        <?php
    }
    ?>

            
		   
		        
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