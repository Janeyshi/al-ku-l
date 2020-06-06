<?php
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
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 <link rel="stylesheet" type="text/css" href="CSS/style.css">
 <h3 class="card-title">Cash Checkout Page</h3>
  <form method="post" action="routers/cash-checkout-router.php">
       <h5>Cash Checkout Page</h5>
       <?php
       $id = $_SESSION['user_id'];
       $address;
       $empty = "";
       $result = mysqli_query($con, "SELECT address FROM accounts WHERE id =".$_SESSION['user_id']."");
       while($row = mysqli_fetch_array($result)){
         $address = $row['address'];
       }
       ?>

    <table align="center">
      <!-- USERNAME -->
      <tr>
        <td>
          <label>Enter your Address:</label>
        </td>
        <td>
          <input type="text" name="address" value="<?php

          if($address == $empty){
            echo $empty;
          }else {
            echo $address;
          }
          ?>" size="100" required/>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="submit" class="btn" id="button-2" name="reg_user">
            <div id="dub-arrow"><i class="fas fa-check-circle fa-2x"></i></div>
            <span>Confirm Checkout</span>
          </button>
          
          <a href="view-cart.php"><input type="button" value="Back" class="btn btn-secondary"></a>
        </td>
      </tr>
    </table>
  </form>
<?php require_once('view/footer.php'); ?>
