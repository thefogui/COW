<!DOCTYPE html>
<html lang="en">

<head>
    <!--[if IE 9 ]>
            <html class="ie9">
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
    <title>Reservas Hoteles</title>

    <meta name="copyright" content="© 2020">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Reserva Hoteles">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Vitor Carvalho">

    <!--Favicon-->
    <link rel="shortcut icon" href="">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

    <!--Font Awesome-->

    <!-- Bootstrap  CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

    <!-- Bootstrap JS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="mainBootstrap.css" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.png" alt="Logo" style="width:70px;">
        </a>

        <!-- Links -->
        <div class="float-right" style="float: right;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reservas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lista de reservas</a>
                </li>
            </ul>
        </div>
    </nav>

    <div style="width: 90vw; margin: 0 auto;">
        <div class="card">
            <div class="card-header">Busquedas</div>
            <div class="card-body">
                <div class="box-body" style="float: right;">
                    <div class="get-div">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f0/Wikipedia-logo-de.png" alt="wikipedia" width="200" height="250">
                        <form method="get" action="https://en.wikipedia.org/w/index.php">
                            <div class="form-group">
                                <input type="text" name="search">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Wikipedia " class="btn btn-success" />
                            </div>
                        </form>
                    </div>
                    <!-- closing div get-div -->

                    <div class=" get-div ">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png " alt="google " width="200 " height="100 ">
                        <form action="http://www.google.com/search " method="get ">
                            <div class="form-group ">
                                <input type="text " name="q " />
                            </div>
                            <div class="form-group ">
                                <input type="submit" value="Google " class="btn btn-success" />
                            </div>
                        </form>
                    </div>
                    <!-- closing div get-div -->
                </div>
                <!-- closing div box-body -->
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>

    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; Reserved</small>
        </div>
    </footer>
</body>

</html>