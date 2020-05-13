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
          <h1 class="center-text"> Hello World </h1>
        </thead>
        <tbody>
          <!-- Content -->
          <h5>View Cart Page</h5>

          <<?php
          $sql = "SELECT id, productName, productPrice, productImg, productQty FROM cart";
          $result = $con->query($sql);

          if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            echo "id: " . $row["id"]. " - Product Name: " . $row["productName"]. " " . $row["imgSrc"]. "- Product Quantity: " . $row["productQty"]. "<br>";
            echo '<img src="'.$row[imageSrc]'" alt="rum 1" height="700px" width="700px" class="productImageBig"/>'
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
