<?php
  session_start();
  include("model/product.php");
  if (isset($_SESSION['sess_id'])) {
    require_once('view/header-user.php');
  } else {
    require_once('view/header.php');
  }
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
              if (isset($_POST['1'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 1");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['2'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 2");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['3'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 3");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              }

              //Vodka data
              else if (isset($_POST['4'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 4");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['5'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 5");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['6'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 6");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              }

              //Whisky data
              else if (isset($_POST['7'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 7");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['8'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 8");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['9'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 9");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              }

              //Gin data
              else if (isset($_POST['10'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 10");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['11'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 11");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['12'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 12");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              }

              //Tequila data
              else if (isset($_POST['13'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 13");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['14'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 14");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['15'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 15");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              }

              //Brandy data
              else if (isset($_POST['16'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 16");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['17'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 17");
                  while($row = mysqli_fetch_array($result)){
                    $prod->instantiate($row['type'], $row['imgSrc'], $row['name'], $row['description'], $row['price']);
                  }
              } else if (isset($_POST['18'])) {
                  $result = mysqli_query($con, "SELECT * FROM products WHERE id = 18");
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
      </table><?php
       ?>
      <?php if (isset($_SESSION['sess_id'])) {
        echo '<input type="hidden" name="productName" value="'.$prod->productName.'">
        <input type="hidden" name="productPrice" value = '.$prod->productPrice.'>
        <input type="hidden" name="productImg" value="'.$prod->imgSource.'">
        <button type="submit" value="Add to Cart" class="btn btn-danger"> <i class="fas fa-shopping-cart"></i> Add to cart</button>
        <a href="browse-product.php"><input type="button" value="Back" class="btn btn-secondary"></a>
      </form>';
    } else {
        echo '<a href="browse-product.php"><input type="button" value="Back" class="btn btn-secondary"></a>';
      }

      require_once('view/footer.php');
    ?>
