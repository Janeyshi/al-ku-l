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
<<<<<<< HEAD
  </head>
  <body>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div href="index.php" class="navbar-brand">ALAK SHOP</div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item <?php if(isActive('order-form.php')) echo 'active'; ?>">
            <a class="nav-link" href="order-form.php">Products</a>
          </li>
          <li class="nav-item <?php if(isActive('price-list.php')) echo 'active'; ?>">
            <a class="nav-link" href="price-list.php">Profile</a>
          </li>
          <li class="nav-item <?php if(isActive('price-list.php')) echo 'active'; ?>">
            <a class="nav-link" href="price-list.php">Log in</a>
          </li>
          <li class="nav-item <?php if(isActive('price-list.php')) echo 'active'; ?>">
            <a class="nav-link" href="price-list.php">View Cart</a>
=======
      <script src="https://kit.fontawesome.com/f7015e5bbd.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div href="index.php" class="navbar-brand"><strong> THE ALAK SHOP </strong><i class="fas fa-cocktail"></i></div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item <?php if(isActive('index.php')) echo 'active'; ?>">
            <a class="nav-link" href= "index.php">Home <i class="fas fa-home"></i></a>
          </li>
          <li class="nav-item <?php if(isActive('browse-product.php')) echo 'active'; ?>">
            <a class="nav-link" href="browse-product.php">Products <i class="fas fa-wine-bottle"></i></a>
          </li>
          <li class="nav-item <?php if(isActive('login.php')) echo 'active'; ?>">
            <a class="nav-link" href="login.php">Log in <i class="fas fa-id-card-alt"></i></a>
>>>>>>> 5a57bc46dcc7e143027f9052ee7b48ce147bebff
          </li>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="card">
        <div class="card-body">
