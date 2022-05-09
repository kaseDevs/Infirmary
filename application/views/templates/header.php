<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
  <!-- admin Styling -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin.css">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

  <title>Infirmary@Cuea</title>
</head>

<body>
    <!--navigation header-->
    
  <header>
    <div class="logo">
      <img class="logo-image" src="<?php echo base_url(); ?>assets/images/cuealogo.png" width=60px height=60px float="left" />
      <h1 class="logo-text"><span>Infirmary</span>@Cuea</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
    <?php if($this->session->userdata('logged_in')): ?>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <!-- <li><a href="#">Sign Up</a></li>
      <li><a href="#">Login</a></li> -->
       
      <li>
        <a href="#">
          <i class="fa fa-user"></i>
         <?php echo $this->session->userdata('username'); ?>
          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="<?php echo base_url(); ?>user_controller/logout_user" class="logout">Logout</a></li>
        </ul>
      </li>
       <?php endif; ?>    
    </ul>
  </header>
    <!--end of navigation header-->
    <!-- <div class="container"> -->
    