<!DOCTYPE html>
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
        .iniciar{
        text-align: center;
        }
        .flex-row{
        display: flex;
        justify-content: center;
        }
        </style>
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
            <!-- Titulo Inicio -->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Bienvenido</h2><br>
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Formulario Registro de Usuarios</h2>
            <!-- Icon Divisor -->
            <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
            </div>
        <!--Formulario datos paciente-->
            <div class="flex-row">
            <div class="col-md-6 ">
	        <form role="form" name="" action="php/guardar.php" method="post">
		    <div class="form-group" >
			<input type="text" class="form-control" name="documento" placeholder="Documento del usuario">
		    </div>
		    <div class="form-group" >
			<input type="text" class="form-control" name="nombre" placeholder="Nombre del usuario">
		    </div>
		    <div class="form-group" >
			<input type="text" class="form-control" name="apellido" placeholder="Apellido del usuario">
		    </div>
		    <div class="form-group" >
			<input type="text" class="form-control" name="direccion" placeholder="Direccion del usuario">
		    </div>
		    <div class="form-group">
			<input type="text" class="form-control" name="telefono" placeholder="Telefono del usuario">
		    </div>
		        <button class="nuevobtn btn" type="submit">Guardar</button></a>
		        </form>
		    </div>
            </div>
            </header>
        
        <!-- Copyright -->
        <section class="copyright py-4 text-center text-white ">
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