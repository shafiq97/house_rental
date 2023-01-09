<?php
include_once "connection.php";
require_once "session.php";
require_once 'website_settings.php';
// die($_SESSION['website_name']);
if (isset($_SESSION['id'])) {
  if (isset($_SESSION['role']) && $_SESSION['role'] == 'landlord') {
    $query = "select * from properties where landlord_id = '$_SESSION[id]'";
  } else if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
    $query = "select * from properties";
  } else {
    $query = "select * from properties";
  }
} else {
  $query = "select * from properties";
}
$result = mysqli_query($con, $query);


if (!$result) {
  echo "Error Found!!!";
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <title>House Rental</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css" />
  <script src="assets/jquery-1.9.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
    <div class="navbar-inverse" style="background-color: #000000">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <?php require_once 'header.php' ?>
      </div>
    </div>
  </div>
  <!-- #Header Starts -->
  <?php
  require_once 'sub_header.php';
  ?>
  <div class="">
    <div id="slider" class="sl-slider-wrapper">
      <div class="sl-slider">
        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-1"></div>
            <h2><a href="#">4 Bed Rooms and 1 Dinning Room</a></h2>
            <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Rumah Taman Seri Arau</p>
              <p>House for rent especially for UiTM students End lot terrace house suitable for 7 students </p>
              <cite>RM 800</cite>
            </blockquote>
          </div>
        </div>

        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-2"></div>
            <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Maandeed Mansion</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 150,000</cite>
            </blockquote>
          </div>
        </div>

        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-3"></div>
            <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Liido Mansion</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 250,000</cite>
            </blockquote>
          </div>
        </div>

        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-4"></div>
            <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Mudug Mansion</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 200,000</cite>
            </blockquote>
          </div>
        </div>

        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-5"></div>
            <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Blue ocean mansion</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 250,000</cite>
            </blockquote>
          </div>
        </div>
      </div><!-- /sl-slider -->



      <nav id="nav-dots" class="nav-dots">
        <span class="nav-dot-current"></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </nav>

    </div><!-- /slider-wrapper -->
  </div>



  <div class="banner-search">
    <div class="container">
      <!-- banner -->
      <h3>Rental House</h3>
      <div class="searchbar">
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            <!-- <form action="search.php" method="post">
              <input name="search" type="text" class="form-control" placeholder="Search of Properties">
              <div class="row">
                <div class="col-lg-3 col-sm-3 ">
                  <select name="delivery_type" class="form-control">
                    <option value="Rent">Rent</option>

                  </select>
                </div>
                <div class="col-lg-3 col-sm-4">
                  <select name="search_price" class="form-control">
                    <option>Price</option>
                    <option value="1">RM300 - RM500</option>
                    <option value="2">RM500 - RM800</option>
                    <option value="3">RM800 - RM1000</option>
                    <option value="4">RM1000 - above</option>
                  </select>
                </div>
                <div class="col-lg-3 col-sm-4">
                  <select name="property_type" class="form-control">
                    <option>Property Type</option>
                    <option value="Apartment">Terrace House</option>
                    <option value="Building">Building</option>
                    <option value="Office-Space">Office-Space</option>
                  </select>
                </div>
                <div class="col-lg-3 col-sm-4">
                  <button name="submit" class="btn btn-success" onclick="window.location.href='buysalerent.html'">Find Now</button>
            </form> -->
          </div>
        </div>


      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
        <p>Join now and get updated with all the properties deals.</p>
        <?php
        if (!isset($_SESSION['username'])) {
        ?>
          <button class="btn btn-info" data-toggle="modal" data-target="#loginpop">Login</button>
        <?php
        } else {
        ?>
          <a onclick="return confirm('Are you sure you want to logout?')" class="btn btn-info" href="logout.php">Logout</a>
          <?php
        }
        if (isset($_SESSION['role'])) {
          if ($_SESSION['role'] == 'landlord') {
          ?>
            <a href="upload_property_form.php" class="btn btn-light">Upload Your Property</a>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- banner -->
  <div class="container">
    <?php
    if (!isset($_SESSION['id'])) {
    ?>
      <div style="margin-top: 20px; margin-bottom: 20px">
        <a href="list-properties.php" class="">View All Listing</a>
      </div>
    <?php
    }
    ?>
    <?php
    if (isset($_SESSION['role'])) {
      if ($_SESSION['role'] == 'landlord') {
    ?>
        <h2>Your Properties</h2>
      <?php
      } else {
      ?>
        <h2>Featured Properties</h2>
    <?php
      }
    }
    ?>

    <div id="owl-example" class="owl-carousel">
      <?php
      while ($property_result = mysqli_fetch_assoc($result)) {
        $id = $property_result['property_id'];
        $property_title = $property_result['property_title'];
        $delivery_type = $property_result['delivery_type'];
        $availablility = $property_result['availablility'];
        $price = $property_result['price'];
        $property_img = $property_result['property_img'];
        $bed_room = $property_result['bed_room'];
        $liv_room = $property_result['liv_room'];
        $parking = $property_result['parking'];
        $kitchen = $property_result['kitchen'];
        $utility = $property_result['utility'];

      ?>
        <div class="properties">
          <div class="image-holder"><img style="min-height: 200px; max-height:200px" src="<?php echo $property_img; ?>" class="img-responsive" alt="properties">
            <?php if ($availablility == 0) { ?><div class="status sold">Available</div> <?php } else { ?>
              <div class="status new">Not Available</div>
            <?php } ?>
          </div>
          <h4><a href="property-detail.php?id=<?php echo $id; ?>"><?php echo $property_title;  ?></a></h4>
          <p class="price">Price: RM<?php echo $price; ?></p>
          <p class="price">Delivery Type: <?php echo $delivery_type; ?></p>
          <p class="price">Utilities: <?php echo $utility; ?></p>
          <div class="listing-detail">
            <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $bed_room; ?></span>
            <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $liv_room; ?></span>
            <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $parking; ?></span>
            <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $kitchen; ?></span>
          </div>
          <a class="btn btn-primary" href="property-detail.php?id=<?php echo $id; ?>">View Details</a>
        </div>

      <?php } ?>

    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-12 col-sm-12 recent-view">
        <h3>About Us</h3>
        <p>The main goal of <?php echo $_SESSION['website_name'] ?>, a firm located in UiTM, Perlis is to provide digital renting and via the internet. Nadiah Husna created <?php echo $_SESSION['website_name'] ?> in 2022, and the company now has a fully functional website and social media accounts where you may follow them. <?php echo $_SESSION['website_name'] ?> offers inexpensive residences and 24/7 service..<br><a href="about.php">Learn More</a></p>

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
          <!-- <form class="form-inline" role="form">
            <input type="text" placeholder="Enter Your email address" class="form-control">
            <button class="btn btn-success" type="button">Notify Me!</button>
          </form> -->
        </div>

        <div class="col-lg-3 col-sm-3">
          <h4>Follow us</h4>
          <a href="https://www.facebook.com/"><img src="images/facebook.png" alt="facebook"></a>
          <a href="https://twitter.com/koodhaa?lang=en"><img src="images/twitter.png" alt="twitter"></a>
          <a href="https://my.linkedin.com/in/abdirisak-abdirahman-62141517a"><img src="images/linkedin.png" alt="linkedin"></a>
          <a href="https://www.instagram.com/?hl=en"><img src="images/instagram.png" alt="instagram"></a>
        </div>

        <div class="col-lg-3 col-sm-3">
          <h4>Contact us</h4>
          <p><b>NadiahHusna</b><br>
            <span class="glyphicon glyphicon-map-marker"></span>Arau, Perlis, Malaysia<br>
            <span class="glyphicon glyphicon-envelope"></span>nadhusnaa@gmail.com<br>
            <span class="glyphicon glyphicon-earphone"></span> +60177790651
          </p>
        </div>
      </div>
      <p class="copyright">Copyright NADIAH 2022. All rights reserved. </p>


    </div>
  </div>

  <!-- Login Modal -->
  <div id="loginpop" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="row">
          <div class="col-sm-6 login">
            <h4>Login</h4>
            <form class="" method="post" action='api.php'>
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name="username">
              </div>
              <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password">
              </div>
              <button type="submit" name="login" class="btn btn-success">Sign in</button>
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

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:16 GMT -->

</html>