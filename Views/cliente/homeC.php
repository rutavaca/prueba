
<?php
//Importamos las dependencias
require_once("../../Models/conexion_db.php");
require_once("../../Models/consultas-global.php");
require_once("../../Models/consultaCliente.php");
//require_once("../../Models/seguridadAdmin.php");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ruta Vacacional</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="../dashboard/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../dashboard/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../dashboard/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="../dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">
</head>

<body>

 <?php 
 
 include("menuC.php");
 
 ?>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../dashboard/images/avatar/1.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../dashboard/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../dashboard/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Upgrade Now</span>
                                        <p class="trial-day">30 Days Trail</p>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Inbox</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Bienvenido a Ruta Vacacional</h1>
                            </div>
                        </div>
                    </div>
                    
                    <!-- /# column -->
                    
                    <!-- /# column -->
                </div>
                <section id="content"">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="../cliente/inicioCliente.html" method="post">
                                <div class="form-group">
                                    <label style="color: #fff;"></label>
                                    <input type="text"  class="form-control" placeholder="Ver cerca de tu ubicación actual">
                                </div>
                                <div class="form-group">
                                    <label style="color: #fff;"></label>
                                    <input type="date" class="form-control" placeholder="Fecha: vie,29 abr - mar, 05 may">
                                </div>
                                <div class="form-group"></div>
                                    <label style="color: #fff;"></label>
                                    <input type="text"  class="form-control" placeholder="1 habitación - 2 adultos">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Buscar</button>
                               
                            </form>
                        </div>

                    </div>
                </section><br><br><br>
                <!-- /# row -->
                <section id="main-content">
                
                    <div class="row">
                        <div class="col-lg-4">
                            
                            <div class="card">
                                <div class="card-title">
                                    <h4>Reserva en el hotel Brisas y Mar</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">

                                    <div class="text-center">
                                        <p>Uno de los mejores hoteles de la zona</p>
                                        <img class="" style="height: 200px; width: 250px;"
                                                        src="../../Views/proveedor/imagenesProd/cabañaNocaima.jpg" alt="" />
                                                        <br><br><br>
                                                        <a class="btn btn-primary" style="background-color: #406844;" href="../cliente/verProd.php">Agregar a carrito</a>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-right">Reservar</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Reserva en el hotel Brisas y Mar</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">

                                    <div class="text-center">
                                        <p>Uno de los mejores hoteles de la zona</p>
                                        <img class="" style="height: 200px; width: 250px;"
                                                        src="../../Views/proveedor/imagenesProd/glamping.jpg" alt="" />
                                                        <br><br><br>
                                                        <a class="btn btn-primary" style="background-color: #406844;" href="../cliente/verProd.php">Agregar a carrito</a>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-right">Reservar</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Reserva en el hotel Brisas y Mar</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">

                                    <div class="text-center">
                                        <p>Uno de los mejores hoteles de la zona</p>
                                        <img class="" style="height: 200px; width: 250px;"
                                                        src="../../Views/proveedor/imagenesProd/hotelP.jpg" alt="" />
                                                        <br><br><br>
                                                        <a class="btn btn-primary" style="background-color: #406844;" href="../cliente/verProd.php">Agregar a carrito</a>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-right">Reservar</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            
                            <div class="card">
                                <div class="card-title">
                                    <h4>Reserva en el hotel Brisas y Mar</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">

                                    <div class="text-center">
                                        <p>Uno de los mejores hoteles de la zona</p>
                                        <img class="" style="height: 200px; width: 250px;"
                                                        src="../../Views/proveedor/imagenesProd/barichara.jpg" alt="" />
                                                        <br><br><br>
                                                        <a class="btn btn-primary" style="background-color: #406844;" href="../cliente/verProd.php">Agregar a carrito</a>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-right">Reservar</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Reserva en el hotel Brisas y Mar</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">

                                    <div class="text-center">
                                        <p>Uno de los mejores hoteles de la zona</p>
                                        <img class="" style="height: 200px; width: 250px;"
                                                        src="../../Views/proveedor/imagenesProd/guaviare.jpg" alt="" />
                                                        <br><br><br>
                                                        <a class="btn btn-primary" style="background-color: #406844;" href="../cliente/verProd.php">Agregar a carrito</a>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-right">Reservar</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Reserva en el hotel Brisas y Mar</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">

                                    <div class="text-center">
                                        <p>Uno de los mejores hoteles de la zona</p>
                                        <img class="" style="height: 200px; width: 250px;"
                                                        src="../../Views/proveedor/imagenesProd/sirena.jpg" alt="" />
                                                        <br><br><br>
                                                        <a class="btn btn-primary" style="background-color: #406844;" href="../cliente/verProd.php">Agregar a carrito</a>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-right">Reservar</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Reserva en el hotel Brisas y Mar</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">

                                    <div class="text-center">
                                        <p>Uno de los mejores hoteles de la zona</p>
                                        <img class="" style="height: 200px; width: 250px;"
                                                        src="../../Views/proveedor/imagenesProd/brasilia.png" alt="" />
                                                        <br><br><br>
                                                        <a class="btn btn-primary" style="background-color: #406844;" href="../cliente/verProd.php">Agregar a carrito</a>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-right">Reservar</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Reserva en el hotel Brisas y Mar</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">

                                    <div class="text-center">
                                        <p>Uno de los mejores hoteles de la zona</p>
                                        <img class="" style="height: 200px; width: 250px;"
                                                        src="../../Views/proveedor/imagenesProd/copetran.jpg" alt="" />
                                                        <br><br><br>
                                                        <a class="btn btn-primary" style="background-color: #406844;" href="../cliente/verProd.php">Agregar a carrito</a>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-right">Reservar</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Reserva en el hotel Brisas y Mar</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">

                                    <div class="text-center">
                                        <p>Uno de los mejores hoteles de la zona</p>
                                        <img class="" style="height: 200px; width: 250px;"
                                                        src="../../Views/proveedor/imagenesProd/berlinas.jpg" alt="" />
                                                        <br><br><br>
                                                        <a class="btn btn-primary" style="background-color: #406844;" href="../cliente/verProd.php">Agregar a carrito</a>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-right">Reservar</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="../dashboard/js/lib/jquery.min.js"></script>
    <script src="../dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../dashboard/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="../dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../dashboard/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="../dashboard/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="../dashboard/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="js/lib/calendar-2/pignose.init.js"></script>


    <script src="../dashboard/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="../dashboard/js/lib/weather/weather-init.js"></script>
    <script src="../dashboard/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="../dashboard/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="../dashboard/js/lib/chartist/chartist.min.js"></script>
    <script src="../dashboard/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="../dashboard/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="../dashboard/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../dashboard/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="js/dashboard2.js"></script>
</body>

</html>