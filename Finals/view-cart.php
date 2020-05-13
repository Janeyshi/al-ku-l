<?php
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "alakshop";
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
session_start();
//to ensure guest feature only for guest
if (isset($_SESSION['sess_id'])) {

 ?>

<?php
  require_once('view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">View Cart Page</h3>
    <form action="confirmation.php" method="post">
      <table class="table">
        <thead>
        </thead>
        <tbody>
          <!-- Content -->
          <h5>View Cart Page</h5>

          <?php
          $sql = "SELECT id, productName, productPrice, productImg, productQty FROM cart";
          $result = $con->query($sql);

          if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            // echo "id: " . $row["id"]. " - Product Name: " . $row["productName"]. " " . $row["imgSrc"]. "- Product Quantity: " . $row["productQty"]. "<br>";
            // echo '<img src="'.$row[imageSrc]'" alt="rum 1" height="700px" width="700px" class="productImageBig"/>'
            echo '<table align="center">
              <tr>
                <td>
                  Product Name:
                </td>
                <td>
                  <h5>'.$row["productName"].'</h5>
                </td>
              </tr>
              <tr>
                <td>
                  Product Quantity:
                </td>
                 <td>
                  <input type="number" name="productQty"  min="0" required value="'.$row["productQty"].'"/>
                 </td>
              </tr>
              <tr>
                <th>
                  Price:
                </th>
                <td>
                  Php. '.$row["productPrice"].'
                </td>
              </tr>
              <tr>
              <td>
                <img src="'.$row["productImg"].'" alt="rum 1" height="250px" width="250px" class="productImageBig"/>
              </td>
              </tr>
              <tr>
                <td>
                  <button type="remove"  class="btn btn-danger"> <i class="fas fa-trash"></i> Remove Item</button>
                </td>
              </tr>
            </table>
            <br />
            <br />';
            }
          }else {
            echo "NO ITEMS IN CART!";
          }
          $con->close();
           ?>

          <button class="btn btn-success"> Go </button>
        </tbody>
      </table>
    </form>
    <?php require_once('view/footer.php');}
      else {
        header("location:routers/logout.php");
        exit();
      }
    ?>
