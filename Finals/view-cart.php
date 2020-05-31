<?php
include 'databaseConnections/connect.php';
//to ensure guest feature only for guest
if (isset($_SESSION['sess_id'])) {

 ?>

<?php
  require_once('view/header-user.php');
 ?>
 <style>
  @import url('https://fonts.googleapis.com/css?family=Raleway:300,400');
  body {
    background: #2D3142; /*optional*/
    font-family: 'Raleway', sans-serif;
  }
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
  color: #BFC0C0;
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">


          <h5>View Cart Page</h5>
          <form action="routers/remove-update.php" method="post">
            <?php
            $user_id = $_SESSION['user_id'];
            $sql = "SELECT * FROM cart where user_id = '$user_id'";
            $result = $con->query($sql);
            $ctr = 0;
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
              $ctr = $ctr + 1;
              echo '<table cellspacing="1" cellpadding="5">
              <tr>
                <td>
                  <img src="'.$row["productImg"].'" alt="rum 1" height="250px" width="250px" class="productImageBig"/>
                </td>
              </tr>
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
                  <input type="number" name="productQty'.$ctr.'"  min="0" required value="'.$row["productQty"].'"/>
                  <button type="submit"  class="btn btn-warning" name="productQtyBtn'.$ctr.'"> Update </button>
                 </td>
              </tr>
              <tr>
                <th>
                  Total Price:
                </th>
                <td>
                  Php. '.$row["productPrice"].'
                  <br />
                  <input type="hidden" name="price'.$ctr.'" value="'.$row["productPrice"].'">
                  <input type="hidden" name="origPrice'.$ctr.'" value="'.$row["originalPrice"].'">
                </td>
              </tr>
              <tr>
                <th>
                  Price per piece:
                </th>
                <td>
                  Php. '.$row["originalPrice"].'
                </td>
              </tr>
              <tr>
                <td>
                  <input type="hidden" name="id'.$ctr.'" value="'.$row["id"].'">
                  <button type="submit"  class="btn btn-danger" name="'.$ctr.'"> <i class="fas fa-trash"></i> Remove Item</button>
                </td>
              </tr>
            </table>
            <input type="hidden" name="ctr" value="'.$ctr.'">
            <br />
            <br />';
            }
          }else {
            echo '<h3 class="center-text">NO ITEMS IN CART!</h3>';
            $_SESSION['disable'] = 'style="display: none;"';
          }
          $con->close();
           ?>
        </form>
        <form action="routers/modeOfPayment.php" method="post">
          <table cellspacing="3" cellpadding="2">
            <tr>
              <th>
                <h5<?php
                  if (isset($_SESSION['disable'])) {
                    echo $_SESSION['disable'];
                }
                ?> >Please choose a payment method to continue:</h5>
              </th>
            </tr>
          </table>
            <tr>
              <td>
                <button class="btn" id="button-2" name="cash" <?php
                  if (isset($_SESSION['disable'])) {
                    echo $_SESSION['disable'];
                }?>>
                  <div id="dub-arrow"><i class="fas fa-money-bill-alt fa-2x"></i></div>
                  <span>Cash</span>
                </button>

              </td>
              <td>
                <button class="btn" id="button-2" name="card" <?php
                  if (isset($_SESSION['disable'])) {
                    echo $_SESSION['disable'];
                }?>>
                  <div id="dub-arrow"><i class="fas fa-credit-card fa-2x"></i></div>
                  <span>Card</span>
                </button>
              </td>
            </tr>
        </form>
      </table>


  </tbody>

  </table>
  <!-- </form> -->
  <?php unset($_SESSION['disable']);
  require_once('view/footer.php');}
    else {
      header("location:routers/logout.php");
      exit();
    }
  ?>
