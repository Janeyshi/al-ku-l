<?php
include 'databaseConnections/connect.php';
//to ensure guest feature only for guest
if (isset($_SESSION['sess_id'])) {

 ?>

<?php
  require_once('view/header-user.php');
 ?>

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
                    <input type="number" name="productQty'.$ctr.'"  min="0" required value="'.$row["productQty"].'"/>
                   </td>
                   <td>
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
                  <img src="'.$row["productImg"].'" alt="rum 1" height="250px" width="250px" class="productImageBig"/>
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
                <table align="center" style="text-align:center;">
                  <tr>
                    <th>

                      <h3 class="center-text" <?php
                        if (isset($_SESSION['disable'])) {
                          echo $_SESSION['disable'];

                      }
                      ?> >Mode of payment</h3>
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-success" name="cash" <?php
                        if (isset($_SESSION['disable'])) {
                          echo $_SESSION['disable'];

                      }
                      ?>> cash </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-Warning" name="card" <?php
                        if (isset($_SESSION['disable'])) {
                          echo $_SESSION['disable'];

                      }
                      ?> > Card </button>
                    </td>
                  </tr>
                </table>
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
