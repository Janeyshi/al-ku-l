<?php
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
          <!-- Rum -->
          <table class="productTable" align="center" cellspacing="10" cellpadding="10">
            <tr>
              <th colspan="3">
                <h3><?php echo $_POST["productType"];?></h3>
              </th>
            </tr>
            <tr>
              <td id="rum1">
                <span class="productName"><?php echo $_POST["productName"];?></span>
                <br />
                <img src="<?php echo $_POST["productImg"];?>" alt="rum 1" height="700px" width="700px" class="productImageBig"/>
                <p class="productDescription">
                  <?php echo $_POST["productDesc"];?>
                  <br /><br />
                  Price: Php. <span class="productPrice" name=""><?php echo $_POST["productPrice"];?></span>
                </p>
              </td>
            </tr>
          </table>
        </tbody>
      </table>
      <input type="hidden" name="productName" value="<?php echo $_POST["productName"];?>">
      <input type="hidden" name="productPrice" value = <?php echo $_POST["productPrice"];?>>
      <input type="hidden" name="productImg" value="<?php echo $_POST["productImg"];?>">
      <button type="submit" value="Add to Cart" class="btn btn-danger"> <i class="fas fa-shopping-cart"></i> Add to cart</button>
      <a href="browse-products-user.php"><input type="register" value="Back" class="btn btn-secondary"></a>
    </form>
  <?php require_once('view/footer.php'); ?>
