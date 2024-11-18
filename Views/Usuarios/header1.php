<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/snackbar.min.css">

    <link href="<?php echo base_url; ?>Assets/css/jquery-ui.min.css" rel="stylesheet" />
    <link href="Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="icon" href="Assets/images/logo.png">
    <!-- Custom styles for this template-->
    <link href="Assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="img">
                <img src="Assets/images/logo.png" class="img-fluid" alt="...">
                </div>
                <div class="sidebar-brand-text mx-3">CodefitBD</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url . 'administracion/home'; ?>">
                <i class="fas fa-home"></i>
                    <span>Inicio</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Herramientas
            </div>

            <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url; ?>usuarios">
                            <i class="fa fa-user menu-icon"></i>
                            <span class="menu-title">Empleados</span>
                        </a>
                    </li>
            <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url; ?>planes">
                            <i class="fa fa-list-alt menu-icon"></i>
                            <span class="menu-title">Planes y servicios</span>
                        </a>
                    </li>
            
        
            <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                            <i class="fa fa-users menu-icon"></i>
                            <span class="menu-title">Clientes</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="page-layouts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?php echo base_url; ?>clientes">Listado</a></li>
                                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?php echo base_url; ?>clientes/plan">Plan</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url; ?>clientes/pagos">Pagos</a></li>
                            </ul>
                        </div>
                    </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Clientes
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
        

            <!-- Nav Item - Charts -->
             
            <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url; ?>asistencias">
                            <i class="fa fa-calendar menu-icon"></i>
                            <span class="menu-title">Asistencias</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url; ?>rutinas">
                            <i class="fa fa-list menu-icon"></i>
                            <span class="menu-title">Rutinas</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url; ?>entrenador">
                            <i class="fa fa-user menu-icon"></i>
                            <span class="menu-title">Entrenador</span>
                        </a>
                    </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url; ?>administracion">
                            <i class="fa fa-cog menu-icon"></i>
                            <span class="menu-title">Contactos</span>
                        </a>
                    </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="cerrar.php">
                <i class="fas fa-sign-out-alt"></i>
                    <span>Cerrar sesion</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Nav Item - Alerts -->
    

        

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nombre']; ?></span>
                    <img class="img-profile rounded-circle"
                        src="<?php echo base_url; ?>Assets/images/user.png">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                  
                    <a class="dropdown-item" href="<?php echo base_url; ?>usuarios/perfil">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url; ?>usuarios/salir" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->
        <!-- End of Sidebar -->
