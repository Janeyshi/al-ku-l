<?php
  require_once('view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <form action="process-order.php" method="post">
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

                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for the product name.." title="Type in a name">
                  <p>
                    Product list:
                  </p>
                  <ul id="myUL">
                    <li><a href="#">Rum 1</a></li>
                    <li><a href="#">Rum 2</a></li>
                    <li><a href="#">Rum 3</a></li>
                    <li><a href="#">Vodka 1</a></li>
                    <li><a href="#">Vodka 2</a></li>
                    <li><a href="#">Vodka 3</a></li>
                    <li><a href="#">Whisky 1</a></li>
                    <li><a href="#">Whisky 2</a></li>
                    <li><a href="#">Whisky 3</a></li>
                    <li><a href="#">Gin 1</a></li>
                    <li><a href="#">Gin 2</a></li>
                    <li><a href="#">Gin 3</a></li>
                    <li><a href="#">Tequila 1</a></li>
                    <li><a href="#">Tequila 2</a></li>
                    <li><a href="#">Tequila 3</a></li>
                    <li><a href="#">Brandy 1</a></li>
                    <li><a href="#">Brandy 2</a></li>
                    <li><a href="#">Brandy 3</a></li>
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
                <img src="images/pic1.jpg" alt="rum 1" height="200px" width="200px" class="productImage"/>
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
              <td id="rum2">
                <span class="productName">Rum 2</span>
                <br />
                <img src="images/pic2.jpg" alt="rum 1" height="200px" width="200px" class="productImage"/>
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
              <td id="rum3">
                <span class="productName">Rum 3</span>
                <br/>
                <img src="images/pic3.jpg" alt="rum 1" height="200px" width="200px" class="productImage"/>
                <br />
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
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
                <img src="images/pic1.jpg" alt="vodka 1" height="200px" width="200px" class="productImage"/>
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
              <td id="vodka2">
                <span class="productName">Vodka 2</span>
                <br />
                <img src="images/pic2.jpg" alt="vodka 2" height="200px" width="200px" class="productImage"/>
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
              <td id="vodka3">
                <span class="productName">Vodka 3</span>
                <br/>
                <img src="images/pic3.jpg" alt="vodka 3" height="200px" width="200px" class="productImage"/>
                <br />
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
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
                <img src="images/pic1.jpg" alt="whisky 1" height="200px" width="200px" class="productImage"/>
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
              <td id="whisky2">
                <span class="productName">Whisky 2</span>
                <br />
                <img src="images/pic2.jpg" alt="whisky 2" height="200px" width="200px" class="productImage"/>
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
              <td id="whisky3">
                <span class="productName">Whisky 3</span>
                <br/>
                <img src="images/pic3.jpg" alt="whisky 3" height="200px" width="200px" class="productImage"/>
                <br />
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
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
                <img src="images/pic1.jpg" alt="gin 1" height="200px" width="200px" class="productImage"/>
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
              <td id="gin2">
                <span class="productName">Gin 2</span>
                <br />
                <img src="images/pic2.jpg" alt="gin 2" height="200px" width="200px" class="productImage"/>
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
              <td id="gin3">
                <span class="productName">Gin 3</span>
                <br/>
                <img src="images/pic3.jpg" alt="gin 3" height="200px" width="200px" class="productImage"/>
                <br />
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
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
                <img src="images/pic1.jpg" alt="tequila 1" height="200px" width="200px" class="productImage"/>
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
              <td id="tequila2">
                <span class="productName">Tequila 2</span>
                <br />
                <img src="images/pic2.jpg" alt="tequila 2" height="200px" width="200px" class="productImage"/>
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
              <td id="tequila3">
                <span class="productName">Tequila 3</span>
                <br/>
                <img src="images/pic3.jpg" alt="tequila 3" height="200px" width="200px" class="productImage"/>
                <br />
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
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
                <img src="images/pic1.jpg" alt="brandy 1" height="200px" width="200px" class="productImage"/>
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
              <td id="brandy2">
                <span class="productName">Brandy 2</span>
                <br />
                <img src="images/pic2.jpg" alt="brandy 2" height="200px" width="200px" class="productImage"/>
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
              <td id="brandy3">
                <span class="productName">Brandy 3</span>
                <br/>
                <img src="images/pic3.jpg" alt="brandy 3" height="200px" width="200px" class="productImage"/>
                <br />
                <p class="productDescription">
                  description wazzup bois rock n roll lets go bois
                  ahegao face is the beast
                  <br /><br />
                  Price: Php. 100.00
                </p>
              </td>
            </tr>
          </table>

          <script>
          function myFunction() {
              var input, filter, ul, li, a, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              ul = document.getElementById("myUL");
              li = ul.getElementsByTagName("li");
              for (i = 0; i < li.length; i++) {
                  a = li[i].getElementsByTagName("a")[0];
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
  <?php require_once('view/footer.php'); ?>
