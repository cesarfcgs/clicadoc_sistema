
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>ClicaDoc | Administrção</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <!-- jvectormap -->
        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="#" class="logo">
                    <span>
                        <img src="assets/images/clicadoc.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="assets/images/clicadoc.png" alt="logo-large" class="logo-lg logo-light">
                        <!-- <img src="assets/images/clicadoc.png" alt="logo-large" class="logo-lg logo-dark"> -->
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">               
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Home</span></a>                        
                    </li>

                    <li>
                        <a href="#"><i data-feather="clipboard" class="align-self-center menu-icon"></i><span>Fila de Atendimentos</span></a>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="bar-chart" class="align-self-center menu-icon"></i><span>Indicadores</span><span class="menu-arrow"><i class="mdi mdi-plus"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            
                            <li class="nav-item"><a class="nav-link"><i class="ti-control-record"></i>Submenu</a></li>
                            
                        </ul>
                    </li> 

                    <li>
                        <a href="javascript: void(0);"><i data-feather="user" class="align-self-center menu-icon"></i><span>Pacientes</span><span class="menu-arrow"><i class="mdi mdi-plus"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            
                            <li class="nav-item"><a class="nav-link"><i class="ti-control-record"></i>Submenu</a></li>
                            
                        </ul>
                    </li> 
                </ul>
            </div>
        </div>
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    <ul class="list-unstyled topbar-nav float-end mb-0">                                              

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="bell" class="align-self-center topbar-icon"></i>
                                <span class="badge bg-danger rounded-pill noti-icon-badge">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                            
                                <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                    Notifications <span class="badge bg-primary rounded-pill">2</span>
                                </h6> 
                                <div class="notification-menu" data-simplebar>
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">2 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">10 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">40 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">                                                    
                                                <i data-feather="users" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">1 hr ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">2 hrs ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ms-1 nav-user-name hidden-sm">Nick</span>
                                <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle thumb-xs" />                                 
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Profile</a>
                                <a class="dropdown-item" href="apps-contact-list.html"><i data-feather="users" class="align-self-center icon-xs icon-dual me-1"></i> Contacts</a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="auth-login.html"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout</a>
                            </div>
                        </li>
                    </ul><!--end topbar-nav-->
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li> 
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Indicadores</h4>                                        
                                    </div><!--end col-->                                    
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-dark mb-0 fw-semibold">Consultas realizadas</p>
                                                    <h3 class="m-0">24k</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="users" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col">
                                                    <p class="text-dark mb-0 fw-semibold">Total de atendimentos</p>
                                                    <h3 class="m-0">00:18</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>1.5%</span> Weekly Avg.Sessions</p>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="clock" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div> 
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col">
                                                    <p class="text-dark mb-0 fw-semibold">Pacientes</p>
                                                    <h3 class="m-0">$2400</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-danger"><i class="mdi mdi-trending-down"></i>35%</span> Bounce Rate Weekly</p>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="activity" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div> 
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col--> 
                                                             
                            </div><!--end row-->
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Atendimentos</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   Este Ano<i class="las la-angle-down ms-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Hoje</a>
                                                    <a class="dropdown-item" href="#">Última semana</a>
                                                    <a class="dropdown-item" href="#">Último Mês</a>
                                                    <a class="dropdown-item" href="#">Este ano</a>
                                                </div>
                                            </div>               
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="chart-demo">
                                        <div id="apex_column1" class="apex-charts"></div>
                                    </div>                                        
                                </div><!--end card-body-->
                            </div><!--end card--> 
                        </div><!--end col-->                       
                    </div><!--end row-->

                </div><!-- container -->

                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> ClicaDoc
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>
        <script src="assets/js/moment.js"></script>
        <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>

        <script src="assets/plugins/apex-charts/apexcharts.min.js"></script>
        <script src="assets/plugins/apex-charts/apexcharts.min.js"></script>
        <script src="assets/plugins/apex-charts/irregular-data-series.js"></script>
        <script src="assets/plugins/apex-charts/ohlc.js"></script>
        <script src="assets/pages/jquery.apexcharts.init.js"></script>

        <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="assets/pages/jquery.analytics_dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        
    </body>

</html>