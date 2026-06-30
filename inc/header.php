<?php

$page = basename($_SERVER['PHP_SELF']);
$nav_class = ($page == 'index.php') ? 'ftco-navbar-light' : 'ftco-navbar-light-2';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


  <head>
    <title>Sparlex - Beauty Clinic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <nav <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark" id="ftco-navbar">

      <div class="container">
        <a class="navbar-brand" href="index.php"><span class="flaticon-lotus"></span>Sparlex</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($page == 'index.php') echo 'active'; ?>"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item <?php if($page == 'about.php') echo 'active'; ?>"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item <?php if($page == 'service.php') echo 'active'; ?>"><a href="service.php" class="nav-link">Treatments</a></li>
            <li class="nav-item <?php if($page == 'team.php') echo 'active'; ?>"><a href="team.php" class="nav-link">Specialists</a></li>
            <li class="nav-item <?php if($page == 'price.php') echo 'active'; ?>"><a href="price.php" class="nav-link">Pricing</a></li>
            <li class="nav-item <?php if($page == 'booking.php') echo 'active'; ?>"><a href="booking.php" class="nav-link">Appointment</a></li>
            <li class="nav-item <?php if($page == 'contact.php') echo 'active'; ?>"><a href="contact.php" class="nav-link">Contact</a></li>
            <?php if(isset($_SESSION['logged']) && $_SESSION['logged'] === TRUE): ?>
            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
            <?php else: ?>
            <li class="nav-item <?php if($page == 'login.php') echo 'active'; ?>"><a href="login.php" class="nav-link">Login</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
