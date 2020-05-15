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
        </thead>
        <tbody>
          <!-- Content -->
          <h5>Home Page</h5>
          <section id="about">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <h2>About <strong>THE ALAK SHOP </strong><i class="fas fa-cocktail"></i></h2>
                  <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
                    accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
                    est ut optio sequi unde.</p>
                </div>
                <div class="col-lg-3">
                  <h3>Core values</h3>
                  <p>~Just get random ecommerce core value~</p>
                </div>
                <div class="col-lg-3">
                  <h3>Location</h3>
                  <p>~Put a random location here/or just put school address~
                    <br>~Opening time put here~</p>
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
                  <div class="speaker">
                    <img src="images/pic1.jpg" alt="pic ni jc" class="img-fluid" height="250px" width="250px">
                    <div class="details">
                      <h3>Juan Carlos C. Dulos</h3>
                      <p>Back and Front end Developer</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="speaker">
                    <img src="images/pic2.jpg" alt="pic ni liam" class="img-fluid" height="250px" width="250px">
                    <div class="details">
                      <h3>James Liam De jesus</h3>
                      <p>Back and Front end Developer</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="speaker">
                    <img src="images/pic3.jpg" alt="pic ni denise" class="img-fluid" height="250px" width="250px">
                    <div class="details">
                      <h3>Kaithelyn Jose</h3>
                      <p>Back and Front end Developer</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="speaker">
                    <img src="images/pic2.jpg" alt="pic ni janey" class="img-fluid" height="250px" width="250px">
                    <div class="details">
                      <h3>Janedel Ac-ac</h3>
                      <p>Content Manager</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="speaker">
                    <img src="images/pic1.jpg" alt="pic ni ben" class="img-fluid" height="250px" width="250px">
                    <div class="details">
                      <h3>Benedick Macayan</h3>
                      <p>Researcher</p>
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
