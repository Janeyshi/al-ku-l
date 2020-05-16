<?php
  session_start();
  require_once('view/header.php');
  if (isset($_SESSION['sess_id'])) {
    	header("location: home-user.php");
  } else {
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">Home Page</h3>
    <form action="process-order.php" method="post">
      <table class="table">
        <thead>
          <h1 class="center-text"> Hello Guest</h1>
          <br /><br /><br />
        </thead>
        <tbody>
          <!-- Content -->
          <section id="about">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <h2>About <strong>THE ALAK SHOP </strong><i class="fas fa-cocktail"></i></h2>
                  <p class="about">Founded by a group of alcoholic enthusiast from the Philippines, <strong>THE ALAK SHOP </strong><i class="fas fa-cocktail"></i> is an
                    eCommerce platform that is dedicated to sell the finest alcoholic beverages available around
                    the globe. Every gathering sometimes lack a dose of entertainment. That is why we aim to further
                    enhance the gathering by making a variety of the finest alcoholic beverages in the planet available
                    to anyone. Remember, the fun begins when you get a dose of this.</p>
                </div>
                <div class="col-lg-6">
                  <h2><strong>Mission-Vision</strong></h2>
                  <p class="about"><strong>Mission:</strong><br />
                    <strong>THE ALAK SHOP </strong><i class="fas fa-cocktail"></i> has one true mission:
                    "To sell different alcohol of excellence and difference"
                    <br /><br />
                    <strong>Vision:</strong><br />
                    To provide the world with the best alcohol at a good price. We aim to be the <strong>best solution </strong>
                    to any kinds of customer through our supplies of alcohol to meet all the needs.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <br /><br /><br />
          <!-- THE TEAM -->
          <section id="speakers" class="wow fadeInUp">
            <div class="container">
              <div class="section-header">
                <center>
                  <h2><strong>THE TEAM</strong></h2>
                  <p>The team that made the <strong>THE ALAK SHOP </strong><i class="fas fa-cocktail"></i> possible</p>
                </center>
              </div>

              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <div>
                    <img src="images/team/jc.jpg" alt="pic ni jc"  height="250px" width="250px">
                    <div class="details">
                      <h3>Juan Carlos C. Dulos</h3>
                      <p>Back and Front end Developer</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div>
                    <img src="images/team/liam.jpg" alt="pic ni liam"  height="250px" width="250px">
                    <div class="details">
                      <h3>James Liam De jesus</h3>
                      <p>Back and Front end Developer</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div>
                    <img src="images/team/denise.jpg" alt="pic ni denise"  height="250px" width="250px">
                    <div class="details">
                      <h3>Kaithelyn Jose</h3>
                      <p>Back and Front end Developer</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div>
                    <img src="images/team/janey.jpg" alt="pic ni janey"  height="250px" width="250px">
                    <div class="details">
                      <h3>Janedel Ac-ac</h3>
                      <p>Content Manager</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div>
                    <img src="images/team/ben.jpg" alt="pic ni ben"  height="250px" width="250px">
                    <div class="details">
                      <h3>Benedick Macayan</h3>
                      <p>Researcher</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div>
                    <img src="images/team.png" alt="pic ni ben"  height="250px" width="250px">
                    <div class="details">
                      <h3>Everyone</h3>
                      <p>Regradless of the assigned job everyone contributed in the code as well.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </tbody>
      </table>
    </form>
  <?php require_once('view/footer.php'); }?>
