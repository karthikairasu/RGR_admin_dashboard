<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="theme-color" content="#17a2b8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 shrink-to-fit=no, user-scalable=0">
  <link rel="icon" type="image/png" href="assets/img/logo.png" sizes="194x194">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RGR Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/style2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15" style="transform: rotate(0deg);">
          <img src="assets/img/ico3.png" style="height: auto;width: 50px;">
        </div>
        <div class="sidebar-brand-text mx-3">RGR <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt" style="font-size: 1.10rem;"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Main Navigation
      </div>

      <!-- Nav Item - add plant -->
      <li class="nav-item">
        <a class="nav-link" href="add_plant.html">
          <i class="fas fa-fw fa-place-of-worship" style="font-size: 1.10rem;"></i>
          <span>Add Plant</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="add_po.html">
          <i class="fas fa-fw fa-plus" style="font-size: 1.10rem;"></i>
          <span>Add Po</span></a>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="blank.html">Buttons</a>
            <a class="collapse-item" href="blank.html">Cards</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - RGR Supplier Users -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsergruser" aria-expanded="true" aria-controls="collapsergruser">
          <i class="fas fa-fw fa-id-badge" style="font-size: 1.10rem;"></i>
          <span>RGR Supplier Users</span>
        </a>
        <div id="collapsergruser" class="collapse" aria-labelledby="headingrgruser" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Options:</h6>
            <a class="collapse-item" href="rgr_add_user.html"><i class="fas fa-fw fa-user-plus"></i> Add User</a>
            <a class="collapse-item" href="rgr_user_list.html"><i class="fas fa-fw fa-bars"></i> User List</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Moda
      </div>

      <!-- Nav Item - Moda Inbound Users-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInboundUser" aria-expanded="true" aria-controls="collapseInboundUser">
          <i class="fas fa-fw fa-user" style="font-size: 1.10rem;"></i>
          <span>Moda Inbound Users</span>
        </a>
        <div id="collapseInboundUser" class="collapse" aria-labelledby="headingInboundUser" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Options:</h6>
            <a class="collapse-item" href="inbound_user_add_user.html"><i class="fas fa-fw fa-user-plus"></i> Add User</a>
            <a class="collapse-item" href="inbound_user_user_list.html"><i class="fas fa-fw fa-bars"></i> User List</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Moda Inbound Report-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInboundReport" aria-expanded="true" aria-controls="collapseInboundReport">
          <i class="fas fa-fw fa-clipboard-list" style="font-size: 1.10rem;"></i>
          <span>Moda Inbound Report</span>
        </a>
        <div id="collapseInboundReport" class="collapse" aria-labelledby="headingInboundReport" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Options:</h6>
            <a class="collapse-item" href="inbound_report_add_user.html"><i class="fas fa-fw fa-user-plus"></i> Add User</a>
            <a class="collapse-item" href="inbound_report_user_list.html"><i class="fas fa-fw fa-bars"></i> User List</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow br-darkskyblue">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <a href="" class="navbar-brand"> 
            <img src="assets/img/logo.png" style="height: 50px; width: auto">
          </a>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">  
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="assets/img/219986.png" style="height: 40px;width: auto;">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
