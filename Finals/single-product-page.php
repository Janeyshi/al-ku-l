<?php
    include("model/product.php");
    include 'databaseConnections/connect.php';
  if (isset($_SESSION['sess_id'])) {
    require_once('view/header-user.php');
  } else {
    require_once('view/header.php');
  }
 ?>
  <style type="text/css">
      /* BUTTON */
  .btn {
  display: inline-flex;
  height: 40px;
  width: 150px;
  border: 2px solid #BFC0C0;
  margin: 20px 20px 20px 20px;
  color: #BFC0C0;
  text-transform: uppercase;
  text-decoration: none;
  font-size: .8em;
  letter-spacing: 1.5px;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

span {
  color: black;
  text-decoration: none;
  letter-spacing: 1px;
}

#button-2 {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

#button-2 a {
  position: relative;
  left: 0;
  transition: all .35s ease-Out;
}

#dub-arrow {
  width: 100%;
  height: 100%;
  background: #BFC0C0;
  left: -200px;
  position: absolute;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all .35s ease-Out;
  bottom: 0;
}

#button-2 i {
  width: 20px;
  height: auto;
}

#button-2:hover #dub-arrow {
  left: 0;
}

#button-2:hover a {
  left: 150px;
}
  </style>

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
              } else {
                header("location: browse-product.php");
              }
            ?>
            <!-- Show the picked item -->
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
                <br /><br /><br />
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
        <br />
        <center>
        <div>
          Quantity: <input type="number" name="productQty"  min="1" required/>
          <br /><br />
                    
          <a href="browse-product.php"><input type="button" value="Back" class="btn" id="button-2"></a>

          <button class="btn" id="button-2" type="submit" value="Add to Cart" name="reg_user"> 
            <div id="dub-arrow"><i class="fas fa-shopping-cart"></i></div>
            <span> Add to cart </span>
          </button>
        </div>
        </center>
      </form>';
    } else {
        echo '<a href="browse-product.php"><input type="button" value="Back" class="btn btn-secondary"></a>';
      }

      require_once('view/footer.php');
    ?>
