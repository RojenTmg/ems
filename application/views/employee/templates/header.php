<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    
    <title><?php echo $title; ?></title>

    <!-- Stylesheets -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?= link_tag('assets/css/ems.css?version=51') ?>
    
    <script src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>

    <!-- Script Files -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="<?= base_url('assets/js/ems.js') ?>"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- for datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>

</head>

<body>
  <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?= site_url('employee/dashboard'); ?>">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('employee'); ?>/leave_form">
          <i class="fa fa-user-plus" aria-hidden="true"></i>
          Request Leave
        </a>
      </li>
    </ul>
    <ul class="navbar-nav">
    </ul>
    <div class="drop-down-item" id="show-profile">
      <div class="pro-file">
         <span><strong> Christopher Columbus</strong></span>
        <img src="<?= base_url(); ?>/assets/images/images.jpg" onclick="displayFunctionType();">
      </div>
      <div class="drop-down">
        <ul>
          <li><a href=""><i class="fa fa-address-card" aria-hidden="true"></i> &nbsp;&nbsp; My Profile</a></li>
          <li><a href="<?= base_url('logout'); ?>"><i class="fa fa-power-off" title="logout"></i> &nbsp;&nbsp; Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="page-wrapper chiller-theme">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">

        <a href="#">NAMI College</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="<?= base_url(); ?>/assets/images/images.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">
            <strong>Christopher</strong>
          </span>
          <span class="user-role"><?php echo $_SESSION['type']; ?></span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <div class="sidebar-menu">

        <ul>
          <li class="header-menu">
            <span>Profile</span>
          </li>
          <li>
          <a href="<?= site_url(); ?>">
              <i class="fa fa-address-card" aria-hidden="true"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
          <a href="<?= base_url('employee'); ?>/profile_update">
              <i class="fa fa-address-card" aria-hidden="true"></i>
              <span>Update Profile</span>
            </a>
          </li>
        </ul>

        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li>
          <a href="<?= site_url(); ?>">
              <i class="fa fa-home" aria-hidden="true"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('employee/leave_form'); ?>/leave_form">
              <i class="fa fa-user-plus" aria-hidden="true"></i>
              <span>Request Leave</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-users" aria-hidden="true" style="font-size: 0.9em;"></i>
              <span></span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              <span></span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
    </div>
  </nav>
