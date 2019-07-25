<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    
    <title><?php echo $title; ?></title>



    <!-- offline bootstrap -->
   <?= link_tag('assets/css/bootstrap.min.css') ?>

   

  <!-- offline jquery -->
   <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.4.1.js') ?>"></script>



    <!-- Stylesheets -->
        <?= link_tag('assets/css/all.css') ?>
         <?= link_tag('assets/css/fontawesome.min.css') ?>


    <?= link_tag('assets/css/ems.css?version=51') ?>

    <!-- Script Files -->

<!-- offline file bootstrap js -->
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>



<!-- offline file bootstrap js -->
<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.3.1.slim.min.js') ?>"></script>

<!-- offline file bootstrap js -->
<script type="text/javascript" src="<?= base_url('assets/js/popper.min.js') ?>"></script>


 <script type="text/javascript" src="<?= base_url('assets/js/ems.js') ?>"></script>



<!-- for datatable -->
<!-- offline datatables css -->
 <?= link_tag('assets/css/datatables.min.css') ?>
 <script type="text/javascript" src="<?= base_url('assets/js/datatables.min.js') ?>"></script>

<link rel="stylesheet" href="<?= base_url('assets/css/fstdropdown.css') ?> ">


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

        <a href="#">EMS</a>
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
          <a href="<?= base_url('employee'); ?>/profile_update/<?php echo $_SESSION['user_id'];?>">
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
            <a href="<?= site_url('employee/leave_form'); ?>">
              <i class="fa fa-user-plus" aria-hidden="true"></i>
              <span>Request Leave</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('employee/recommendation_list'); ?>">
              <i class="fa fa-users" aria-hidden="true" style="font-size: 0.9em;"></i>
              <span>Recommendation Lists</span>
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
