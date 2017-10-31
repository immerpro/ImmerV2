<body class="hold-transition  sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?= base_url() ?>public/index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">M</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="<?= base_url() ?>public/img/logoimmerv2.png" alt="logoImmer"></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="<?= base_url() ?>public/#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="<?= base_url() ?>public/#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="<?= base_url() ?>public/#">
                                                <div class="pull-left">
                                                    <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="<?= base_url() ?>public/#">
                                                <div class="pull-left">
                                                    <img src="<?= base_url() ?>public/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url() ?>public/#">
                                                <div class="pull-left">
                                                    <img src="<?= base_url() ?>public/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url() ?>public/#">
                                                <div class="pull-left">
                                                    <img src="<?= base_url() ?>public/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url() ?>public/#">
                                                <div class="pull-left">
                                                    <img src="<?= base_url() ?>public/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="<?= base_url() ?>public/#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                         <li class="dropdown notifications-menu">
                                <a href="<?= base_url() ?>public/#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning"><?= $totalNotificaciones ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Usted tiene <?=$totalNotificaciones ?> notificaciones</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="<?= base_url() ?>#">
                                                    <i class="fa fa- fa-calendar-times-o text-gray"></i> <span class="label label-default"><?=$vencidos?></span> productos vencidos
                                                </a>
                                            </li>
                                           
                                            <li>
                                                <a href="<?= base_url() ?>#">
                                                    <i class="fa fa-calendar-minus-o text-info"></i> <span class="label label-info"><?=$porVencerse?></span> productos por vencerse
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url() ?>#">
                                                    <i class="fa fa-battery-empty text-red"></i> <span class="label label-danger"><?=$agotados?></span> productos agotados
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url() ?>#">
                                                    <i class="fa fa-battery-1 text-orange"></i><span class="label label-warning"><?=$porAgotarse?></span> productos  por agotarse
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="<?= base_url() ?>#"></a></li>
                                </ul>
                            </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="<?= base_url() ?>public/#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="<?= base_url() ?>public/#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="<?= base_url() ?>public/#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="<?= base_url() ?>public/#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="<?= base_url() ?>public/#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="<?= base_url() ?>public/#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="<?= base_url() ?>public/#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $perfil->NombreUsuario; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $perfil->NombreUsuario; ?> - ROL
                                        <small></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <?php if ($this->session->userdata('rol') == 1): ?>
                                            <div class="col-xs-4 text-center">
                                                <a href="<?= site_url('habilita') ?>">Habilitar Colaborador</a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-xs-4 text-center">
                                            <a href="#"></a>
                                        </div>
                                        <?php if ($this->session->userdata('rol') == 1): ?>
                                            <div class="col-xs-4 text-center">

                                                <a href="<?= site_url('registro') ?>">Registrar Colaborador</a>

                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">

                                        <a href="<?= site_url('perfiladmin') ?>" class="btn btn-default btn-flat">Perfil</a>
                                    </div>

                                    <div class="pull-right">
                                        <a href="<?= site_url('salir') ?>" class="btn btn-default btn-flat">Cerrar sesiòn</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $perfil->NombreUsuario; ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">

                        <span class="input-group-btn">

                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>

                    <li class="treeview">
                        <?php if ($this->session->userdata('rol') == 1): ?>
                            <a href="<?= base_url() ?>public/#">
                                <i class="fa fa-briefcase text-orange"></i> <span>Categoría</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu skin-green">

                                <li class="active"><a href="<?php echo site_url('categoria/crear'); ?>"><i class="fa fa-plus text-orange"></i> Nueva</a></li>
                                <li><a href="<?php echo site_url('categoria'); ?>"><i class="fa fa-search text-orange"></i> Listar</a></li>

                            </ul>
                        <?php endif; ?>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-files-o text-orange"></i>
                            <span>Producto</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li><a href="<?php echo site_url('nuevoProducto'); ?>"><i class="fa fa-plus text-orange"></i> Nuevo</a></li>
                            <li><a href="<?php echo site_url('producto'); ?>"><i class="fa fa-search text-orange"></i> Consultar</a></li>


                        </ul>
                    </li>

                    <li class="treeview">
                        <?php if ($this->session->userdata('rol') == 1): ?>
                            <a href="#">
                                <i class="fa fa-pie-chart text-orange"></i>
                                <span>Proveedor</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('proveedor/NuevoProveedor'); ?>"><i class="fa fa-plus text-orange"></i> Crear</a></li>
                                <li><a href="<?php echo site_url('proveedor'); ?>"><i class="fa fa-search text-orange"></i> Consultar</a></li>

                            </ul>
                        <?php endif; ?>
                    </li>

                    <li class="treeview">
                        <a href="<?= base_url() ?>public/#">
                            <i class="fa fa-folder text-orange"></i>
                            <span>Inventario</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left  pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($this->session->userdata('rol') == 1): ?>
                                <li class="treeview">
                                    <a href=""><i class="fa fa-circle-o text-orange"></i> Orden Entrada
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo site_url('Entrada'); ?>"><i class="fa fa-plus text-orange"></i> Registrar</a></li>
                                        <li><a href="<?php echo site_url('Consultar'); ?>"><i class="fa fa-search text-orange"></i> Consultar</a></li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                            <li class="treeview">
                                <a href=""><i class="fa fa-circle-o text-orange"></i> Orden Salida
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo site_url('nuevaSalida'); ?>"><i class="fa fa-plus text-orange"></i> Registrar</a></li>
                                    <li><a href="<?php echo site_url('BuscadorController/index'); ?>"><i class="fa fa-search text-orange"></i> Consultar</a></li>
                                </ul>
                            </li>
                            <?php if ($this->session->userdata('rol') == 1): ?>
                                <li><a href="<?php echo site_url('ReporteController/mostrarreporte'); ?>"><i class="fa fa-archive text-orange"></i> Reportes</a></li>
                            <?php endif; ?>
                        </ul>

                    </li>
                    <li>
                        <?php if ($this->session->userdata('rol') == 1): ?>
                        <a href="<?php echo site_url('recuperadato'); ?>">
                            <i class="fa fa-th text-orange"></i> <span>Restauraciòn</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-orange-active">Datos</small>
                            </span>
                        </a>
                        <?php endif; ?>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">