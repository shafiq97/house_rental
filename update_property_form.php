<?php
include_once "connection.php";
require_once "session.php";
if (isset($_GET['id'])) {
  $pageid = $_GET['id'];
}

$query = "select * from properties, agent where properties.property_id = '$pageid' and properties.agent_id = agent.agent_id";
$result = mysqli_query($con, $query);

if (!$result) {
  echo "Error Found!!!";
}

while ($property_result = mysqli_fetch_assoc($result)) {
  $property_id = $property_result['property_id'];
  $property_title = $property_result['property_title'];
  $property_details = $property_result['property_details'];
  $property_type = $property_result['property_type'];
  $delivery_type = $property_result['delivery_type'];
  $availablility = $property_result['availablility'];
  $price = $property_result['price'];
  $property_address = $property_result['property_address'];
  $property_img = $property_result['property_img'];
  $bed_room = $property_result['bed_room'];
  $liv_room = $property_result['liv_room'];
  $parking = $property_result['parking'];
  $kitchen = $property_result['kitchen'];
  $utility = $property_result['utility'];
  $property_type = $property_result['property_type'];
  $floor_space = $property_result['floor_space'];
  $property_id = $property_result['property_id'];

  $agent_id = $property_result['agent_id'];
  $agent_name = $property_result['agent_name'];
  $agent_address = $property_result['agent_address'];
  $agent_contact = $property_result['agent_contact'];
  $agent_email = $property_result['agent_email'];

  if($availablility == 0){
    $availablility_text = "Available";
  }else{
    $availablility_text = "Not Available";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/buysalerent.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <title><?php echo $_SESSION['website_name'] ?></title>
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


        <?php require_once 'header.php' ?>


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
      <h2>Update your property information</h2>
    </div>
  </div>

  <!-- banner -->


  <div class="container">
    <div class="properties-listing spacer">

      <div class="row">
        <div class="col-lg-3 col-sm-4 ">
          <!-- <div class="search-form">
            <h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
            <form action="search.php" method="post" name="search">
              <input required type="text" class="form-control" name="search" placeholder="Search of Properties">
              <div class="row">
                <div class="col-lg-5">
                  <select name="delivery_type" class="form-control">
                    <option value="Rent">Rent</option>

                  </select>
                </div>
                <div class="col-lg-7">
                  <select name="search_price" class="form-control">
                    <option>Price</option>
                    <option value="1">RM300 - RM500</option>
                    <option value="2">RM500 - RM800</option>
                    <option value="3">RM800 - RM1000</option>
                    <option value="4">RM1000 - above</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <select name="property_type" class="form-control">
                    <option>Property Type</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Building">Building</option>
                    <option value="Office-Space">Office-Space</option>
                  </select>
                </div>
              </div>
              <button name="submit" class="btn btn-primary">Find Now</button>
            </form>
          </div> -->
        </div>

        <div class="col-lg-5 col-sm-5">
          <div class="row">
            <form action="api.php" method="post" enctype="multipart/form-data">
              <!-- Property Title -->
              <div class="form-group">
                <label>Property Title</label>
                <input required type="text" class="form-control" name="property_title" value="<?php echo $property_title ?>">
                <input  type="hidden" class="form-control" name="property_id" value="<?php echo $property_id ?>">
              </div>
              <!-- Property details -->
              <div class="form-group">
                <label>Property Details</label>
                <input required type="text" class="form-control" name="property_details" value="<?php echo $property_details ?>">
              </div>
              <!-- Delivery type -->
              <div class="form-group">
                <label>Delivery type</label>
                <select class="form-control" name="delivery_type" id="">
                  <option value="<?php echo $delivery_type ?>"><?php echo $delivery_type ?></option>
                  <option value="Sale">Sale</option>
                  <option value="Rent">Rent</option>
                </select>
              </div>
              <!-- Availability -->
              <div class="form-group">
                <label>Availability</label>
                <select class="form-control" name="availability" id="">
                  <option value="<?php echo $availablility?>"><?php echo $availablility_text?></option>
                  <option value="0">Available</option>
                  <option value="1">Not Available</option>
                </select>
              </div>
              <!-- Property Price -->
              <div class="form-group">
                <label>Price RM</label>
                <input required type="number" class="form-control" name="price" value="<?php echo $price ?>">
              </div>
              <!-- Property address -->
              <div class="form-group">
                <label>Property Address</label>
                <input required type="textbox" class="form-control" name="property_address" value="<?php echo $property_address ?>">
              </div>
              <div class="form-group">
                <img width="100%" src="<?php echo $property_img ?>" alt="">
              </div>
              <!-- Property Image -->
              <div class="form-group">
                <label>Property Image</label>
                <input type="File" class="form-control" name="property_image">
              </div>
              <!-- Property bed room -->
              <div class="form-group">
                <label>No of bed room</label>
                <input required type="number" class="form-control" name="bed_rooms" value="<?php echo $bed_room ?>">
              </div>
              <!-- Property living room -->
              <div class="form-group">
                <label>No of living room</label>
                <input required type="number" class="form-control" name="living_rooms" value="<?php echo $liv_room ?>">
              </div>
              <!-- Property parking -->
              <div class="form-group">
                <label>No of parking</label>
                <input required type="number" class="form-control" name="no_of_parking" value="<?php echo $parking ?>">
              </div>
              <!-- Property kitchen -->
              <div class="form-group">
                <label>No of kitchen</label>
                <input required type="number" class="form-control" name="no_of_kitchen" value="<?php echo $kitchen ?>">
              </div>
              <!-- Property utility -->
              <div class="form-group">
                <label>Utilities</label>
                <input required type="text" class="form-control" name="utilities" value="<?php echo $utility ?>">
              </div>
              <!-- Property type -->
              <div class="form-group">
                <label>Property Type</label>
                <select class="form-control" name="property_type" id="">
                  <option value="<?php echo $property_type ?>"><?php echo $property_type ?></option>
                  <option value="Apartment">Apartment</option>
                  <option value="Office-Space">Office-Space</option>
                  <option value="Building">Building</option>
                </select>
              </div>
              <!-- Property floor space -->
              <div class="form-group">
                <label>Floor space</label>
                <input required type="text" class="form-control" name="floor_space" value="<?php echo $floor_space ?>">
              </div>
              <!-- Property details -->
              <div class="form-group">
                <label>Select Agent</label>
                <select class="form-control" name="agent" id="">
                <option value="<?php echo $agent_id ?>"><?php echo $agent_name ?></option>
                  <?php
                  $sql = "SELECT * FROM agent";
                  $result  = $con->query($sql);
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      ?>
                      <option value="<?php echo $row['agent_id'] ?>"><?php echo $row['agent_name'] ?></option>
                      <?php
                    }
                  } else {
                    echo "0 results";
                  }
                  ?>
                </select>
              </div>
              <button type="submit" name="update_property_details" class="btn btn-primary">Update</button>
            </form>
          </div>
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
            <input required type="text" placeholder="Enter Your email address" class="form-control">
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
          <p><b>Your name</b><br>
            <span class="glyphicon glyphicon-map-marker"></span>Setapak, Kuala lumpur, Malaysia<br>
            <span class="glyphicon glyphicon-envelope"></span>reyhadh@gmail.com<br>
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
                <input required type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Password</label>
                <input required type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
              </div>
              <div class="checkbox">
                <label>
                  <input required type="checkbox"> Remember me
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

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/buysalerent.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:10 GMT -->

</html>