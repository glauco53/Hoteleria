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

    <div class="container">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step col-xs-4"> 
                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                    <p><small>Información Personal</small></p>
                </div>
                <div class="stepwizard-step col-xs-4"> 
                    <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                    <p><small>Información de Reservación</small></p>
                </div>
                <div class="stepwizard-step col-xs-4"> 
                    <a href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
                    <p><small>Resumen</small></p>
                </div>
            </div>
        </div>

        <form role="form" method="POST" action="{!! url('/reserva') !!}">
            {{csrf_field()}}
            <div class="panel panel-primary setup-content" id="step-1">
                <div class="panel-heading">
                    <h3 class="panel-title" align="center">Información Personal</h3>
                </div>
                <!--Datos personales que se ingresaran a la base de datos-->
                <div class="panel-body">
                    <div class="form-group">
                        <label class="control-label">Nombres</label>
                        <input maxlength="100" type="text" name="nombre" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Apellidos</label>
                        <input maxlength="100" type="text" name="apellido" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input maxlength="100" type="text" name="correo" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Teléfono</label>
                        <input maxlength="100" type="text" name="telefono" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Identificación</label>
                        <input maxlength="100" type="text" name="identificacion" class="form-control"/>
                    </div>
                    <button class="btn btn-primary nextBtn pull-right" action="{!! url('/reserva') !!}" type="button" type="submit">Siguiente</button>
                </div>
            </div>
            <!-- Piso, Tipo de habitacion, Descripcion de  la habitacion, Tiempo de reservacion-->
            <div class="panel panel-primary setup-content" id="step-2">
                <div class="panel-heading">
                    <h3 class="panel-title" align="center">Información de la Reservación</h3>
                </div>
                <div class="panel-body">
                </div>
            </div>
            <!--Resumen de la reservacion-->
            <div class="panel panel-primary setup-content" id="step-3">
                <div class="panel-heading">
                    <h3 class="panel-title" align="center">Resumen de la Reservación</h3>
                </div>
                <div class="panel-body">
                </div>
            </div>
        </form>
    </div>

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