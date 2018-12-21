<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Hotel Hackathon - Reserva </title>

    <!-- Son todos los archivos CSS que usa la aplicacion -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/customcss.css" rel="stylesheet">
    <link href="css/pasoapaso.css" rel="stylesheet">      
    <link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css"> 
</head>
<body>
    <div class="brand"><img src="img/logotipo.png" style=" padding: 0; width: 15%" ></div>
    <nav class= "navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Cambiar navigacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!! url('/') !!}">Hotel Hackathon</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{!! url('/') !!}">Inicio</a>
                    </li>
                    <li>
                        <a href="{!! url('/reserva') !!}">Reservar</a>
                    </li>
                    <li>
                        <a href="{!! url('/encontrar') !!}">Como llegar</a>
                    </li>
                    <li>
                        <a href="{!! url('/acercade') !!}">Acerca de</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <footer>
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p style="padding : 15px">Copyright &copy; Soluciones Informaticas Matagalpa 2018-2019</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Son todos los archivos JS que usa la aplicacion -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <script src="assets/js/gsdk-bootstrap-wizard.js"></script>
    <script src="assets/js/gsdk-bootstrap-forms.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>

</body>
</html>