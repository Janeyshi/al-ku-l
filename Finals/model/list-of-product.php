<html>
<body onload="document.form1.submit()">
  <?php
    //rum datas
    if (isset($_POST['rum1'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Rum">
        <input type="hidden" name="productName" value="Rum 1">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic1.jpg">
      </form>';
    } else if (isset($_POST['rum2'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Rum">
        <input type="hidden" name="productName" value="Rum 2">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic2.jpg">
      </form>';
    } else if (isset($_POST['rum3'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Rum">
        <input type="hidden" name="productName" value="Rum 3">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic3.jpg">
      </form>';
    }

    //Vodka data
    else if (isset($_POST['vodka1'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Vodka">
        <input type="hidden" name="productName" value="Vodka 1">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic1.jpg">
      </form>';
    } else if (isset($_POST['vodka2'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Vodka">
        <input type="hidden" name="productName" value="Vodka 2">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic2.jpg">
      </form>';
    } else if (isset($_POST['vodka3'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Vodka">
        <input type="hidden" name="productName" value="Vodka 3">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic3.jpg">
      </form>';
    }

    //Whisky data
    else if (isset($_POST['whisky1'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Whisky">
        <input type="hidden" name="productName" value="Whisky 1">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic1.jpg">
      </form>';
    } else if (isset($_POST['whisky2'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Whisky">
        <input type="hidden" name="productName" value="Whisky 2">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic2.jpg">
      </form>';
    } else if (isset($_POST['whisky3'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Whisky">
        <input type="hidden" name="productName" value="Whisky 3">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic3.jpg">
      </form>';
    }

    //Gin data
    else if (isset($_POST['gin1'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Gin">
        <input type="hidden" name="productName" value="Gin 1">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic1.jpg">
      </form>';
    } else if (isset($_POST['gin2'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Gin">
        <input type="hidden" name="productName" value="Gin 2">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic2.jpg">
      </form>';
    } else if (isset($_POST['gin3'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Gin">
        <input type="hidden" name="productName" value="Gin 3">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic3.jpg">
      </form>';
    }

    //Tequila data
    else if (isset($_POST['tequila1'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Tequila">
        <input type="hidden" name="productName" value="Tequila 1">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic1.jpg">
      </form>';
    } else if (isset($_POST['tequila2'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Tequila">
        <input type="hidden" name="productName" value="Tequila 2">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic2.jpg">
      </form>';
    } else if (isset($_POST['tequila3'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Tequila">
        <input type="hidden" name="productName" value="Tequila 3">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic3.jpg">
      </form>';
    }

    //Brandy data
    else if (isset($_POST['brandy1'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Brandy">
        <input type="hidden" name="productName" value="Brandy 1">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic1.jpg">
      </form>';
    } else if (isset($_POST['brandy2'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Brandy">
        <input type="hidden" name="productName" value="Brandy 2">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic2.jpg">
      </form>';
    } else if (isset($_POST['brandy3'])) {
      echo '<form name="form1" method="post" action="../single-product-page.php">
        <input type="hidden" name="productType" value="Brandy">
        <input type="hidden" name="productName" value="Brandy 3">
        <input type="hidden" name="productDesc" value="description wazzup bois rock n roll lets go bois
        ahegao face is the beast">
        <input type="hidden" name="productPrice" value = 100.00>
        <input type="hidden" name="productImg" value="images/pic3.jpg">
      </form>';
    }
  ?>

</body>
</html>
