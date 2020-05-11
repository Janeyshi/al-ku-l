<?php
  function isActive($page) {
    return strpos($_SERVER['REQUEST_URI'], $page);
  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="../CSS/style.css">
      <script src="https://kit.fontawesome.com/f7015e5bbd.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div href="index.php" class="navbar-brand"><strong> THE ALAK SHOP </strong><i class="fas fa-cocktail"></i></div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item <?php if(isActive('home-user.php')) echo 'active'; ?>">
            <a class="nav-link" href= "home-user.php">Home <i class="fas fa-home"></i></a>
          </li>
          <li class="nav-item <?php if(isActive('browse-products-user.php')) echo 'active'; ?>">
            <a class="nav-link" href="browse-products-user.php">Products <i class="fas fa-wine-bottle"></i></a>
          </li>
          <li class="nav-item <?php if(isActive('profile.php')) echo 'active'; ?>">
            <a class="nav-link" href="profile.php">Profile <i class="fas fa-users"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="routers/logout.php">Log out <i class="fas fa-id-card-alt"></i></a>
          </li>
          <li class="nav-item <?php if(isActive('view-cart.php')) echo 'active'; ?>">
            <a class="nav-link" href="view-cart.php">View Cart <i class="fas fa-shopping-cart"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="card">
        <div class="card-body">
