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
    <meta name="keywords" content="HTML, CSS, XML, JavaScript">
    <meta name="author" content="Vitor Carvalho">

    <!-- Favicon -->
    <link rel="shortcut icon" href="">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

    <!-- Font Awesome -->

    <!-- Bootstrap  CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

    <!-- jQuery JS -->
    <script src="./jQuery/jquery-3.4.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="mainBootstrap.css" type="text/css">

    <!-- Main JS -->
    <script src="main.js"></script>
</head>

<body>
    <header>
        <div class="headerContent">
            <div class="outer">
                <strong>
                        <a href="#">
                            <img alt="logo" class="logo" src="./img/logo.png" >
                        </a>
                    </strong>
            </div><!-- closing div outer -->

            <nav>
                <ul>
                    <li><a href="#">Reservas Hoteles</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a id="user-link" href="#">Usuario</a></li>
                </ul>
            </nav>
        </div><!-- closing div headerContent -->
    </header>

    <div style="width: 90vw; margin: 0 auto; height: 83vh; margin-top: 10vh;">
        <div class="row">
            <div class="col-8 bg-image">
                <div class="panel panel-default opaqueDiv">
                    <div class="panel-body" style="padding: 10px;">
                        <form action="sevidor.php" method="POST">
                            <div class="row">
                                <div class="col-8">
                                    <h3>Buscar hoteles en</h3>
                                    <input type="text" name="place" placeholder="Ciudad, costa, región, isla, país">
                                    <h3 style="margin-top: 23px;">Email de validación</h3>
                                    <input type="text" name="email" placeholder="Correo Electronico">
                                </div><!-- closing div col-8 -->

                                <div class="col-4" style="margin-top: 0px;">
                                    <div class="row" style="margin-top: 0px;">
                                        <div class="col">
                                            <h3>Fecha de entrada</h3>
                                            <input name="startDate" type="date" value='<?= date("Y-m-d"); ?>'>
                                        </div><!-- closing div col -->

                                        <div class="col">
                                            <h3>Fecha de salida</h3>
                                            <input type="date" name="endDate"
                                            value='<?= date("Y-m-d", strtotime("+1 day")); ?>'>
                                        </div><!-- closing div col -->
                                    </div><!-- closing div row -->

                                    <div>
                                        <input type="submit" value="Buscar" class="btn btn-success">
                                    </div>
                                </div><!-- closing div col-4 -->
                            </div><!-- closing div row -->
                        </form>
                    </div><!-- closing div panel-body -->
                </div><!-- closing panel panel-default opaqueDiv -->
            </div><!-- closing div col-8 -->

            <div class="col-4">
                <div class="box-body" style="float: right;">
                    <div class="get-div">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f0/Wikipedia-logo-de.png"
                            alt="wikipedia"
                            width="200"
                            height="250">
                        <form method="get" action="https://en.wikipedia.org/w/index.php">
                            <div class="form-group">
                                <input type="text" name="search">
                            </div><!-- closing div form-group -->
                            <div class="form-group">
                                <input type="submit" value="Wikipedia " class="btn btn-success" />
                            </div><!-- closing div form-group -->
                        </form>
                    </div><!-- closing div get-div -->

                    <div class=" get-div ">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png "
                            alt="google "
                            width="200 "
                            height="100 ">
                        <form action="http://www.google.com/search " method="get ">
                            <div class="form-group ">
                                <input type="text " name="q " />
                            </div><!-- closing div form-group -->
                            <div class="form-group ">
                                <input type="submit" value="Google " class="btn btn-success" />
                            </div><!-- closing div form-group -->
                        </form>
                    </div><!-- closing div get-div -->
                </div><!-- closing div box-body -->
            </div><!-- closing div col-4 -->
        </div><!-- closing div row -->
    </div>

    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; Reserved</small>
        </div><!-- closing container text-center -->
    </footer>

</body>

</html>