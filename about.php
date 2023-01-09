<?php
include_once "connection.php";
require_once "session.php";
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <title>About us</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css" />
  <script src="assets/jquery-1.9.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



  <!-- Owl stylesheet -->
  <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
  <script src="assets/owl-carousel/owl.carousel.js"></script>
  <!-- Owl stylesheet -->


  <!-- slitslider -->
  <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
  <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
  <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
  <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
  <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
  <!-- slitslider -->

  <script src='assets/google_analytics_auto.js'></script>
</head>

<body>
  <div style="padding: 20px;">
    <h1 style="color:black;"><?php echo $_SESSION['website_name'] ?></h1>
  </div>

  <!-- Header Starts -->
  <div class="navbar-wrapper">

    <div class="navbar-inverse" style="background-color:  #000000">
      <div class="container">
        <div class="navbar-header">


          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>

        <?php
        require_once 'header.php';
        ?>

      </div>
    </div>

  </div>
  <!-- #Header Starts -->





  <div class="container">

    <!-- Header Starts -->
    <div class="header">
      <!-- <a href="index.php"><img src="images/header.png" alt="Realestate"></a> -->

      <div class="menu">
        <ul class="pull-right">
          <li><a href="index.php">Home</a></li>
          <li><a href="list-properties.php">List Properties</a>
            <ul class="dropdown">

              <li><a href="list-properties.php">Properties on Rent</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
    <!-- #Header Starts -->
  </div><!-- banner -->
  <div class="inside-banner">
    <div class="container">
      <h2>About Us</h2>
    </div>
  </div>
  <!-- banner -->


  <div class="container">
    <div class="spacer">
      <div class="row">
        <div class="col-lg-8  col-lg-offset-2">
          <!--img src="" class="img-responsive thumbnail"  alt="realestate"-->
          <h3>Business Background</h3>
          <p><?php echo $_SESSION['business_background'] ?></p>
          <h3>Company Profile</h3>
          <p><?php echo $_SESSION['company_profile'] ?></p>

        </div>

      </div>
    </div>
  </div>




  <div style="background-color: #D3D3D3">

    <div class="container">



      <div class="row">
        <div class="col-lg-3 col-sm-3">
          <h4>Information</h4>
          <ul class="row">
            <li class="col-lg-12 col-sm-12 col-xs-3"><a href="index.php">Home</a></li>
            <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
            <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.html">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-sm-3">
          <h4>Newsletter</h4>
          <p>Get notified about the latest properties in our marketplace.</p>
          <form class="form-inline" role="form">
            <input type="text" placeholder="Enter Your email address" class="form-control">
            <button class="btn btn-success" type="button">Notify Me!</button>
          </form>
        </div>

        <div class="col-lg-3 col-sm-3">
          <h4>Follow us</h4>
          <a href="#"><img src="images/facebook.png" alt="facebook"></a>
          <a href="#"><img src="images/twitter.png" alt="twitter"></a>
          <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
          <a href="#"><img src="images/instagram.png" alt="instagram"></a>
        </div>

        <div class="col-lg-3 col-sm-3">
          <h4>Contact us</h4>
          <p><b> Your Name</b><br>
            <span class="glyphicon glyphicon-map-marker"></span>Setapak, Kuala lumpur, Malaysia<br>
            <span class="glyphicon glyphicon-envelope"></span>reyadh@gmail.com<br>
            <span class="glyphicon glyphicon-earphone"></span> +601114339971
          </p>
        </div>
      </div>
      <p class="copyright">Copyright NADIAH 2022. All rights reserved. </p>



    </div>
  </div>




  <!-- Modal -->
  <div id="loginpop" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="row">
          <div class="col-sm-6 login">
            <h4>Login</h4>
            <form class="" role="form">
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
            </form>
          </div>
          <div class="col-sm-6">
            <h4>New User Sign Up</h4>
            <p>Join today and get updated with all the properties deal happening around.</p>
            <button type="submit" class="btn btn-info" onclick="window.location.href='register.php'">Join Now</button>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- /.modal -->



</body>

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:40 GMT -->

</html>