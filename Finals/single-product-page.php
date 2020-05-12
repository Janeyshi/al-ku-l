<?php
  include("model/product.php");
  require_once('view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <form action="routers/add-to-cart.php" method="post">
      <table class="table">
        <thead>
          <h1 class="center-text"> The Alak Shop <i class="fas fa-cocktail"></i></h1>
        </thead>
        <tbody>
          <!-- Content -->
            <?php

              $prod = new Product();

              //connect to db
              $con = mysqli_connect('localhost', 'root', '', 'alakshop');

              //rum datas
              if (isset($_POST['rum1'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['rum2'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['rum3'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              }

              //Vodka data
              else if (isset($_POST['vodka1'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['vodka2'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['vodka3'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              }

              //Whisky data
              else if (isset($_POST['whisky1'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['whisky2'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['whisky3'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              }

              //Gin data
              else if (isset($_POST['gin1'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['gin2'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['gin3'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              }

              //Tequila data
              else if (isset($_POST['tequila1'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['tequila2'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['tequila3'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              }

              //Brandy data
              else if (isset($_POST['brandy1'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['brandy2'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['brandy3'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              }
            ?>
          <!-- Rum -->
          <table class="productTable" align="center" cellspacing="10" cellpadding="10">
            <tr>
              <th colspan="3">
                <h3><?php echo $prod->productType;?></h3>
              </th>
            </tr>
            <tr>
              <td id="rum1">
                <span class="productName"><?php echo $prod->productName;?></span>
                <br />
                <img src="<?php echo $prod->imgSource;?>" alt="rum 1" height="700px" width="700px" class="productImageBig"/>
                <p class="productDescription">
                  <?php echo $prod->productDesc;?>
                  <br /><br />
                  Price: Php. <span class="productPrice" name=""><?php echo $prod->productPrice;?></span>
                </p>
              </td>
            </tr>
          </table>
        </tbody>
      </table>
      <input type="hidden" name="productName" value="<?php echo $prod->productName;?>">
      <input type="hidden" name="productPrice" value = <?php echo $prod->productPrice;?>>
      <input type="hidden" name="productImg" value="<?php echo $prod->imgSource;?>">
      <button type="submit" value="Add to Cart" class="btn btn-danger"> <i class="fas fa-shopping-cart"></i> Add to cart</button>
      <a href="browse-products-user.php"><input type="register" value="Back" class="btn btn-secondary"></a>
    </form>
  <?php require_once('view/footer.php'); ?>
