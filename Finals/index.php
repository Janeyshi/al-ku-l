<?php
  session_start();
  require_once('view/header.php');
  if (isset($_SESSION['sess_id'])) {
    	header("location: home-user.php");
  } else {
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <style>
    .flip-card {
      background-color: transparent;
      width: 250px;
      height: 250px;
      perspective: 1000px;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.6s;
      transform-style: preserve-3d;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .flip-card-front {
      background-color: #bbb;
      color: black;
    }

    .flip-card-back {
      background-color: #dddfd4;
      color: white;
      transform: rotateY(180deg);
      padding-left: 20px;
      padding-right: 20px;
    }

    .glow {
      font-size: 80px;
      color: #fae596;
      text-align: center;
      -webkit-animation: glow 1s ease-in-out infinite alternate;
      -moz-animation: glow 1s ease-in-out infinite alternate;
      animation: glow 1s ease-in-out infinite alternate;
    }

    @-webkit-keyframes glow {
      from {
        text-shadow: 0 0 10px #fae596, 0 0 20px #fae596, 0 0 30px #3fb0ac, 0 0 40px #3fb0ac, 0 0 50px #3fb0ac, 0 0 60px #3fb0ac, 0 0 70px #3fb0ac;
      }

      to {
        text-shadow: 0 0 20px #fae596, 0 0 30px #173e43, 0 0 40px #173e43, 0 0 50px #173e43, 0 0 60px #173e43, 0 0 70px #173e43, 0 0 80px #173e43;
      }
    }
    </style>
    <h3 class="card-title">Home Page</h3>
    <form action="process-order.php" method="post">
      <table class="table">
        <thead>
          <center>
            <h1 class="glow"> Hello Guest</h1>
          </center>
          <br /><br /><br />
        </thead>
        <tbody>
          <!-- Content -->
          <section id="about">
            <div class="container">
              <div class="row">
                <div class="col-lg-6" style="border-style: solid; box-shadow: 10px 10px 5px grey;">
                  <h2>About <strong>THE ALAK SHOP </strong><i class="fas fa-cocktail"></i></h2>
                  <p class="about">Founded by a group of alcoholic enthusiast from the Philippines, <strong>THE ALAK SHOP </strong><i class="fas fa-cocktail"></i> is an
                    eCommerce platform that is dedicated to sell the finest alcoholic beverages available around
                    the globe. Every gathering sometimes lack a dose of entertainment. That is why we aim to further
                    enhance the gathering by making a variety of the finest alcoholic beverages in the planet available
                    to anyone. Remember, the fun begins when you get a dose of this.</p>
                </div>
                <div class="col-lg-1">

                </div>
                <div class="col-lg-4" style="border-style: solid; box-shadow: 10px 10px 5px grey;">
                  <h2><strong>Mission-Vision</strong></h2>
                  <p class="about"><strong>Mission:</strong><br />
                    <strong>THE ALAK SHOP </strong><i class="fas fa-cocktail"></i> has one true mission:
                    "To sell different alcohol of excellence and difference"
                    <br /><br />
                    <strong>Vision:</strong><br />
                    To provide the world with the best alcohol at a good price. We aim to be the <strong>best solution </strong>
                    to any kinds of sdadassdaddaadasaaer through our supplies of alcohol to meet all the needs.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <br /><br /><br />
          <!-- THE TEAM -->
          <section id="team">
            <div class="container">
              <div class="section-header">
                <center>
                  <h2><strong>THE TEAM</strong></h2>
                  <p>The team that made the <strong>THE ALAK SHOP </strong><i class="fas fa-cocktail"></i> possible</p>
                </center>
              </div>
              <br />
              <div class="row">

                <div class="col-lg-4 col-md-6">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="images/team/jc.jpg" alt="pic ni jc"  height="250px" width="250px">
                      </div>
                      <div class="flip-card-back">
                        <br /><br />
                        <h3 class="glow" style="font-size: 22px;">Juan Carlos C. Dulos</h3>
                        <br />
                        <p style="color:black;">Back and Front end Developer</p>
                        <p style="color:black;">"I LOVE JAVA"</p>
                      </div>
                    </div>
                  </div>
                </div>
                <br /><br /><br />
                <div class="col-lg-4 col-md-6">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="images/team/liam.jpg" alt="pic ni liam"  height="250px" width="250px">
                      </div>
                      <div class="flip-card-back">
                        <br /><br />
                        <h3 class="glow" style="font-size: 22px;">James Liam De jesus</h3>
                        <br /><br />
                        <p style="color:black;">Back and Front end Developer</p>
                        <p style="color:black;">"I LAB PHP"</p>
                      </div>
                    </div>
                  </div>
                </div>
                <br /><br /><br />
                <div class="col-lg-4 col-md-6">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="images/team/denise.jpg" alt="pic ni denise"  height="250px" width="250px">
                      </div>
                      <div class="flip-card-back">
                        <br /><br />
                        <h3 class="glow" style="font-size: 24px;">Kaithelyn Jose</h3>
                        <br />
                        <p style="color:black;">Back and Front end Developer</p>
                        <p style="color:black;font-size: 14px;">"Stop whatever you are doing. we need to shop"</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br /><br /><br />
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="images/team/janey.jpg" alt="pic ni janey"  height="250px" width="250px">
                      </div>
                      <div class="flip-card-back">
                        <br />
                        <h3 class="glow" style="font-size: 24px;">Janedel Ac-ac</h3>
                        <br /><br />
                        <p style="color:black;">Content Manager and Front end Developer</p>
                        <p style="color:black;">"An alcohol a day keeps the ulcer away"</p>
                      </div>
                    </div>
                  </div>
                </div>
                <br /><br /><br />
                <div class="col-lg-4 col-md-6">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="images/team/ben.jpg" alt="pic ni ben"  height="250px" width="250px">
                      </div>
                      <div class="flip-card-back">
                        <br /><br />
                        <h1 class="glow" style="font-size: 24px;">Benedick Macayan</h1>
                        <br />
                        <p style="color:black;">Researcher and Front end Developer</p>
                        <p style="color:black;">"JUST BE YOURSELF"</p>
                      </div>
                    </div>
                  </div>
                </div>
                <br /><br /><br />
                <div class="col-lg-4 col-md-6">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="images/team.png" alt="pic ni ben"  height="250px" width="250px">
                      </div>
                      <div class="flip-card-back">
                        <br /><br />
                        <h1 class="glow" style="font-size: 22px;">Everyone</h1>
                        <br />
                        <p style="color:black;">Regradless of the assigned job everyone contributed in the code as well.</p>
                      </div>
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
