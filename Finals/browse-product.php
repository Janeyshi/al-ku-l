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
      <table class="table">
        <thead>
          <h1 class="center-text"> The Alak Shop <i class="fas fa-cocktail"></i></h1>
        </thead>
        <tbody>
          <?php
            if(isset($_SESSION['insert_success'])){
              echo $_SESSION['insert_success'];
              unset($_SESSION['insert_success']);
            }
           ?>
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
                  <form action="routers/search.php" method="post">
                    <center>
                      <div>
                        <input type="text" id="searchName" name="searchName" placeholder="Search for the product name.." title="Type in a name" size="50">
                      </div>
                      <br />
                      <div>
                        <button type="submit" class="btn btn-secondary" name="search">Search <i class="fas fa-search"></i></button>
                      </div>
                    </center>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <form action="single-product-page.php" method="post">
          <!-- Rum -->
          <table class="productTable" align="center" cellspacing="10" cellpadding="10">
            <tr>
              <th colspan="3">
                <h3>Rum</h3>
              </th>
            </tr>
            <tr>
              <td id="rum1">
                <span class="productName">Bacardi Superios</span>
                <br />
                <button type="submit" class="btn btn-light" name="1"><img src="images/bacardi.png" alt="rum 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 557
                <br />
                  click the picture to view details
              </td>
              <td id="rum2">
                <span class="productName">Appleton Estate</span>
                <br />
                <button type="submit" class="btn btn-light" name="2"><img src="images/appleton.png" alt="rum 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 1500
                <br />
                  click the picture to view details
              </td>
              <td id="rum3">
                <span class="productName">Kraken Black Spiced Rum</span>
                <br/>
                <button type="submit" class="btn btn-light" name="3"><img src="images/KrakenBlack.png" alt="rum 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 1510.31
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
                <span class="productName">Smirnoff Vodka</span>
                <br />
                <button type="submit" class="btn btn-light" name="4"><img src="images/smirnoff.png" alt="vodka 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 453.33
                <br />
                  click the picture to view details
              </td>
              <td id="vodka2">
                <span class="productName">Absolut</span>
                <br />
                <button type="submit" class="btn btn-light" name="5"><img src="images/absolut.png" alt="vodka 2" height="200px" width="150px" class="productImage"/></button>
                <br />
                Price: 1649
                <br />
                  click the picture to view details
              </td>
              <td id="vodka3">
                <span class="productName">Finlandia</span>
                <br/>
                <button type="submit" class="btn btn-light" name="6"><img src="images/finlandia.png" alt="vodka 3" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 1050
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
                <span class="productName">Teeling Single Pot Still</span>
                <br />
                <button type="submit" class="btn btn-light" name="7"><img src="images/teeling.png" alt="whisky 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 2996.13
                <br />
                  click the picture to view details
              </td>
              <td id="whisky2">
                <span class="productName">Ballantine's Finest</span>
                <br />
                <button type="submit" class="btn btn-light" name="8"><img src="images/ballantine.png" alt="whisky 2" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 1301.28
                <br />
                  click the picture to view details
              </td>
              <td id="whisky3">
                <span class="productName">Yamazaki 12</span>
                <br/>
                <button type="submit" class="btn btn-light" name="9"><img src="images/yamazaki.png" alt="whisky 3" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 18950
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
                <span class="productName">Hendricks Gin</span>
                <br />
                <button type="submit" class="btn btn-light" name="10"><img src="images/hendricks.jpg" alt="gin 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 2290
                <br />
                  click the picture to view details
              </td>
              <td id="gin2">
                <span class="productName">The Bar Gin</span>
                <br />
                <button type="submit" class="btn btn-light" name="11"><img src="images/thebar.jpg" alt="gin 2" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 95
                <br />
                  click the picture to view details
              </td>
              <td id="gin3">
                <span class="productName">Gin Bilog</span>
                <br/>
                <button type="submit" class="btn btn-light" name="12"><img src="images/ginbilog.jpg" alt="gin 3" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 55
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
                <span class="productName">Tequila Ocha Plata</span>
                <br />
                <button type="submit" class="btn btn-light" name="13"><img src="images/tequila.png" alt="tequila 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 3508.08
                <br />
                  click the picture to view details
              </td>
              <td id="tequila2">
                <span class="productName">Jose Cuervo</span>
                <br />
                <button type="submit" class="btn btn-light" name="14"><img src="images/cuervo.png" alt="tequila 2" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 1252.76
                <br />
                  click the picture to view details
              </td>
              <td id="tequila3">
                <span class="productName">1800 Tequila</span>
                <br/>
                <button type="submit" class="btn btn-light" name="15"><img src="images/reposado.png" alt="tequila 3" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 1590
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
                <span class="productName">Fundador Spanish Brandy</span>
                <br />
                <button type="submit" class="btn btn-light" name="16"><img src="images/fundador.png" alt="brandy 1" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 1018.80
                <br />
                  click the picture to view details
              </td>
              <td id="brandy2">
                <span class="productName">Remy Martin VSOP Cognac</span>
                <br />
                <button type="submit" class="btn btn-light" name="17"><img src="images/RemyMartin.jpg" alt="brandy 2" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 1980.12
                <br />
                  click the picture to view details
              </td>
              <td id="brandy3">
                <span class="productName">Hennesy</span>
                <br/>
                <button type="submit" class="btn btn-light" name="18"><img src="images/hennesy.png" alt="brandy 3" height="200px" width="200px" class="productImage"/></button>
                <br />
                Price: 1980.12
                <br />
                  click the picture to view details
              </td>
            </tr>
          </table>
        </tbody>
      </table>
    </form>
    <?php require_once('view/footer.php');
    ?>
