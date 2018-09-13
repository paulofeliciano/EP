<!DOCTYPE HTML>

  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Paulo Feliciano - Elevation Partners</title>
  <meta name="author" content="Paulo Feliciano">
  <meta name="description" content="Why Paulo is a good fit for Elevation Partners">
  <meta name="keywords" content="paulo,feliciano,elevation,partners,hireme">
  <link rel="shortcut icon" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . "/ep/img/favicon.ico" ?>">

  <!--Vendors-->
  <link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . "/ep/vendors/css/bootstrap.min.css" ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

  <script src="<?php echo "http://" . $_SERVER['SERVER_NAME'] . "/ep/vendors/js/jquery-3.3.1.min.js" ?>"></script>
  <script src="<?php echo "http://" . $_SERVER['SERVER_NAME'] . "/ep/vendors/js/bootstrap.min.js" ?>"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- Custom -->
  <link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . "/ep/custom/css/styles.css" ?>">
  <script src="<?php echo "http://" . $_SERVER['SERVER_NAME'] . "/ep/custom/js/smoothscroll.js" ?>"></script>

  <!-- NAVIGATION BAR -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark custom-nav">
  <a class="navbar-brand" href="index.php">PF</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- NAVBAR CONTENT -->
  <?php
  if (strpos($_SERVER['SCRIPT_NAME'], 'developer.php') !== false) {
  ?>
  <div class="collapse navbar-collapse navbar-collapse collapse w-100 order-3 dual-collapse2 " id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link smoothscroll" href="index.php">Save Our Oceans</a>
      </li>
      <li class="nav-item">
        <a class="nav-link smoothscroll" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link smoothscroll" href="#why">Why</a>
      </li>
      <li class="nav-item">
        <a class="nav-link smoothscroll" href="#portfolio">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link smoothscroll" href="#contact">Contact</a>
      </li>

    </ul>
  </div>

  <?php } else {  ?>
  <div class="collapse navbar-collapse navbar-collapse collapse w-100 order-3 dual-collapse2 " id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link smoothscroll" href="developer.php">About The Developer</a>
      </li>
    </ul>
  </div>
  <?php } ?>

</nav>
<body>
