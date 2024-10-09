<?php 
//include_once('../../app/config.php');

include_once(__DIR__ . '/../../app/config.php');


session_start();
if(isset($_SESSION['session_email'])){
    //echo "Ha pasado por login";
    $session_email = $_SESSION['session_email'];
    $sql = "SELECT * FROM `usuarios` WHERE email = '$session_email' ";
    $query = $pdo->prepare($sql);
    $query->execute();

//paso la consulta a un array
$usuarios= $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as  $usuario) {
 $id_usuario_sesion = $usuario['id_usuario'];
 $cargo_sesion = $usuario['cargo'];
}
}else{
    echo "no ha pasado por el login";
    header('Location: '.$URL.'/login');
}
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIS | Veterinario</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL?>/public/templates/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL?>/public/templates/dist/css/adminlte.min.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- jQuery -->
<script src="<?php echo $URL?>/public/templates/plugins/jquery/jquery.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <!-- DataTables -->
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

 <link rel="stylesheet" href="<?php echo $URL?>/public/templates/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL?>/public/templates/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL?>/public/templates/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
 

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo $URL;?>" class="nav-link"><?php echo APP_NAME?></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL?>/public/templates/index3.html" class="brand-link">
      <img src="<?php echo $URL;?>/public/templates/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo APP_NAME;?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Bienvenido<br>
          Florencia Merzario
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL?>/admin/usuarios" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?php echo $URL?>/admin/usuarios/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Usuario</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
            <i class="bi bi-clipboard-check-fill"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL?>/admin/productos" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Productos</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?php echo $URL?>/admin/productos/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Producto</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item" >
            <a href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php" class="nav-link active" style="background-color: red;">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Cerrar Sesión
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

                