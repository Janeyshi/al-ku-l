<?php
session_start();
//to ensure guest feature only for guest
if (isset($_SESSION['sess_id'])) {

 ?>
<?php
  require_once('view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <form action="single-product-page.php" method="post">
      <table class="table">
        <thead>
          <h1 class="center-text"> The Alak Shop <i class="fas fa-cocktail"></i></h1>
        </thead>
        <tbody>
          <!-- Content -->

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Search <i class="fas fa-search"></i>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLongTitle">Search Products</h2>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <input type="text" id="searchItem" onkeyup="search()" placeholder="Search for the product name.." title="Type in a name">
                  <p>
                    Product list:
                  </p>
                  <ul id="myUL">
                    <li><button type="submit" class="btn btn-secondary" name="rum1">Rum 1</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="rum2">Rum 2</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="rum3">Rum 3</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="vodka1">Vodka 1</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="vodka2">Vodka 2</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="vodka3">Vodka 3</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="whisky1">Whisky 1</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="whisky2">Whisky 2</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="whisky3">Whisky 3</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="gin1">Gin 1</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="gin2">Gin 2</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="gin3">Gin 3</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="tequila1">Tequila 1</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="tequila2">Tequila 2</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="tequila3">Tequila 3</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="brandy1">Brandy 1</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="brandy2">Brandy 2</button></li>
                    <li><button type="submit" class="btn btn-secondary" name="brandy3">Brandy 3</button></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Rum -->
          <table class="productTable" align="center" cellspacing="10" cellpadding="10">
            <tr>
              <th colspan="3">
                <h3>Rum</h3>
              </th>
            </tr>
            <tr>
              <td id="rum1">
                <span class="productName">Rum 1</span>
                <br />
                <button type="submit" class="btn btn-light" name="rum1"><img src="images/pic1.jpg" alt="rum 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
              <td id="rum2">
                <span class="productName">Rum 2</span>
                <br />
                <button type="submit" class="btn btn-light" name="rum2"><img src="images/pic2.jpg" alt="rum 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
              <td id="rum3">
                <span class="productName">Rum 3</span>
                <br/>
                <button type="submit" class="btn btn-light" name="rum3"><img src="images/pic3.jpg" alt="rum 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
            </tr>
          </table>


          <!-- Vodka -->
          <table class="productTable" align="center" cellspacing="10" cellpadding="10">
            <tr>
              <th colspan="3">
                <h3>Vodka</h3>
              </th>
            </tr>
            <tr>
              <td id="vodka1">
                <span class="productName">Vodka 1</span>
                <br />
                <button type="submit" class="btn btn-light" name="vodka1"><img src="images/pic1.jpg" alt="vodka 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
              <td id="vodka2">
                <span class="productName">Vodka 2</span>
                <br />
                <button type="submit" class="btn btn-light" name="vodka2"><img src="images/pic2.jpg" alt="vodka 2" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
              <td id="vodka3">
                <span class="productName">Vodka 3</span>
                <br/>
                <button type="submit" class="btn btn-light" name="vodka3"><img src="images/pic3.jpg" alt="vodka 3" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
            </tr>
          </table>

          <!-- Whisky -->
          <table class="productTable" align="center" cellspacing="10" cellpadding="10">
            <tr>
              <th colspan="3">
                <h3>Whisky</h3>
              </th>
            </tr>
            <tr>
              <td id="whisky1">
                <span class="productName">Whisky 1</span>
                <br />
                <button type="submit" class="btn btn-light" name="whisky1"><img src="images/pic1.jpg" alt="whisky 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
              <td id="whisky2">
                <span class="productName">Whisky 2</span>
                <br />
                <button type="submit" class="btn btn-light" name="whisky2"><img src="images/pic2.jpg" alt="whisky 2" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
              <td id="whisky3">
                <span class="productName">Whisky 3</span>
                <br/>
                <button type="submit" class="btn btn-light" name="whisky3"><img src="images/pic3.jpg" alt="whisky 3" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
            </tr>
          </table>

          <!-- Gin -->
          <table class="productTable" align="center" cellspacing="10" cellpadding="10">
            <tr>
              <th colspan="3">
                <h3>Gin</h3>
              </th>
            </tr>
            <tr>
              <td id="gin1">
                <span class="productName">Gin 1</span>
                <br />
                <button type="submit" class="btn btn-light" name="gin1"><img src="images/pic1.jpg" alt="gin 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
              <td id="gin2">
                <span class="productName">Gin 2</span>
                <br />
                <button type="submit" class="btn btn-light" name="gin2"><img src="images/pic2.jpg" alt="gin 2" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
              <td id="gin3">
                <span class="productName">Gin 3</span>
                <br/>
                <button type="submit" class="btn btn-light" name="gin3"><img src="images/pic3.jpg" alt="gin 3" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
            </tr>
          </table>

          <!-- Tequila -->
          <table class="productTable" align="center" cellspacing="10" cellpadding="10">
            <tr>
              <th colspan="3">
                <h3>Tequila</h3>
              </th>
            </tr>
            <tr>
              <td id="tequila1">
                <span class="productName">Tequila 1</span>
                <br />
                <button type="submit" class="btn btn-light" name="tequila1"><img src="images/pic1.jpg" alt="tequila 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
              <td id="tequila2">
                <span class="productName">Tequila 2</span>
                <br />
                <button type="submit" class="btn btn-light" name="tequila2"><img src="images/pic2.jpg" alt="tequila 2" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
              <td id="tequila3">
                <span class="productName">Tequila 3</span>
                <br/>
                <button type="submit" class="btn btn-light" name="tequila3"><img src="images/pic3.jpg" alt="tequila 3" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
            </tr>
          </table>

          <!-- Brandy -->
          <table class="productTable" align="center" cellspacing="10" cellpadding="10">
            <tr>
              <th colspan="3">
                <h3>Brandy</h3>
              </th>
            </tr>
            <tr>
              <td id="brandy1">
                <span class="productName">Brandy 1</span>
                <br />
                <button type="submit" class="btn btn-light" name="brandy1"><img src="images/pic1.jpg" alt="brandy 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
              <td id="brandy2">
                <span class="productName">Brandy 2</span>
                <br />
                <button type="submit" class="btn btn-light" name="brandy2"><img src="images/pic2.jpg" alt="brandy 2" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
              <td id="brandy3">
                <span class="productName">Brandy 3</span>
                <br/>
                <button type="submit" class="btn btn-light" name="brandy3"><img src="images/pic3.jpg" alt="brandy 3" height="200px" width="200px" class="productImage"/></button>
                <br />
                  click the picture to view details
              </td>
            </tr>
          </table>

          <script>
          function search() {
              var input, filter, ul, li, a, i, txtValue;
              input = document.getElementById("searchItem");
              filter = input.value.toUpperCase();
              ul = document.getElementById("myUL");
              li = ul.getElementsByTagName("li");
              for (i = 0; i < li.length; i++) {
                  a = li[i].getElementsByTagName("button")[0];
                  txtValue = a.textContent || a.innerText;
                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      li[i].style.display = "";
                  } else {
                      li[i].style.display = "none";
                  }
              }
          }
          </script>
        </tbody>
      </table>
    </form>
    <?php require_once('view/footer.php');}
      else {
        header("location:routers/logout.php");
        exit();
      }
    ?>
