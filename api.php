<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

</body>

</html>
<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'connection.php';
require_once 'session.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * from users where username = '$username' and password = '$password'";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $_SESSION['id'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['role'] = $row['role'];
      $_SESSION['loggedIn'] = 'true';
      $_SESSION['contact'] = $row['contact'];
    }
?>
    <script>
      Swal.fire({
        title: 'Logged in!',
        text: '<?php echo "Welcome " . $_SESSION['name'] ?>',
        icon: 'success',
        confirmButtonText: 'Next'
      }).then((result) => {
        window.location.href = "index.php";
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      Swal.fire({
        title: 'User not found',
        icon: 'error',
        confirmButtonText: 'Next'
      }).then((result) => {
        window.location.href = "index.php";
      });
    </script>
  <?php
  }
  $con->close();
} else if (isset($_POST['insert_property_details'])) {

  $property_title = $_POST['property_title'];
  $property_details = $_POST['property_details'];
  $delivery_type = $_POST['delivery_type'];
  $availability = $_POST['availability'];
  $price = $_POST['price'];
  $property_address = $_POST['property_address'];
  // $property_image = $_POST['property_image'];
  $bed_rooms = $_POST['bed_rooms'];
  $living_rooms = $_POST['living_rooms'];
  $no_of_parking = $_POST['no_of_parking'];
  $no_of_kitchen = $_POST['no_of_kitchen'];
  $utilities = $_POST['utilities'];
  $property_type = $_POST['property_type'];
  $floor_space = $_POST['floor_space'];
  $agent = $_POST['agent'];

  // upload image
  $target_dir = "images/properties/";
  $target_file = $target_dir . basename($_FILES["property_image"]["name"]);
  $property_image = $target_file;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["property_image"]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["property_image"]["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES["property_image"]["name"])) . " has been uploaded.";
      $sql = "INSERT INTO properties 
      (
        property_title,
        property_details,
        delivery_type,
        availablility,
        price,
        property_address,
        property_img,
        bed_room,
        liv_room,
        parking,
        kitchen,
        utility,
        property_type,
        floor_space,
        agent_id,
        landlord_id
      )VALUES
      (
        '$property_title',
        '$property_details',
        '$delivery_type',
        '$availability',
        '$price',
        '$property_address',
        '$property_image',
        '$bed_rooms',
        '$living_rooms',
        '$no_of_parking',
        '$no_of_kitchen',
        '$utilities',
        '$property_type',
        '$floor_space',
        '$agent',
        '$_SESSION[id]'
      )
      ";

      $result = $con->query($sql);

      if ($result) {
        echo 'success';
      } else {
        echo $con->error;
      }

      header("location: index.php");
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
} else if (isset($_GET['action']) && $_GET['action'] == "delete" && isset($_GET['id'])) {
  $sql = "delete from properties where property_id = '$_GET[id]'";
  $result = $con->query($sql);
  if ($result) {
  ?>
    <script>
      Swal.fire({
        title: 'Property deleted!',
        icon: 'success',
        confirmButtonText: 'Ok'
      }).then((result) => {
        window.location.href = 'index.php';
      })
    </script>
  <?php

  } else {
    echo $con->error;
  }
} else if (isset($_POST['update_property_details'])) {
  $property_id = $_POST['property_id'];
  $property_title = $_POST['property_title'];
  $property_details = $_POST['property_details'];
  $delivery_type = $_POST['delivery_type'];
  $availability = $_POST['availability'];
  $price = $_POST['price'];
  $property_address = $_POST['property_address'];
  // $property_image = $_POST['property_image'];
  $bed_rooms = $_POST['bed_rooms'];
  $living_rooms = $_POST['living_rooms'];
  $no_of_parking = $_POST['no_of_parking'];
  $no_of_kitchen = $_POST['no_of_kitchen'];
  $utilities = $_POST['utilities'];
  $property_type = $_POST['property_type'];
  $floor_space = $_POST['floor_space'];
  $agent = $_POST['agent'];
  if (isset($_FILES["property_image"])) {
    if ($_FILES["property_image"]["name"] != "") {
      $target_dir = "images/properties/";
      $target_file = $target_dir . basename($_FILES["property_image"]["name"]);
      $property_image = $target_file;
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

      // Check if image file is a actual image or fake image
      if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["property_image"]["tmp_name"]);
        if ($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      }

      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }

      // Allow certain file formats
      if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
      ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }
      if($uploadOk != 0){
        if (move_uploaded_file($_FILES["property_image"]["tmp_name"], $target_file)) {
          echo "The file " . htmlspecialchars(basename($_FILES["property_image"]["name"])) . " has been uploaded.";
        }
      }
    } else {
      $property_image = "";
    }
  } else {
    $property_image = "";
  }
  if ($property_image == "") {
    echo 'got null';
    $sql = "UPDATE properties set 
    property_title = '$property_title',
    property_details = '$property_details',
    delivery_type = '$delivery_type',
    availablility = '$availability',
    price = '$price',
    property_address = '$property_address',
    bed_room = '$bed_rooms',
    liv_room = '$living_rooms',
    parking = '$no_of_parking',
    kitchen = '$no_of_kitchen',
    utility = '$utilities',
    property_type = '$property_type',
    floor_space = '$floor_space',
    agent_id = '$agent'
    WHERE property_id = '$property_id'
";
  } else {
    echo $property_id;
    $sql = "UPDATE properties set 
    property_title = '$property_title',
    property_details = '$property_details',
    delivery_type = '$delivery_type',
    availablility = '$availability',
    price = '$price',
    property_address = '$property_address',
    property_img = '$property_image',
    bed_room = '$bed_rooms',
    liv_room = '$living_rooms',
    parking = '$no_of_parking',
    kitchen = '$no_of_kitchen',
    utility = '$utilities',
    property_type = '$property_type',
    floor_space = '$floor_space',
    agent_id = '$agent'
    WHERE property_id = '$property_id'
";
  }
  $result = $con->query($sql);
  if ($result) {
  ?>
    <script>
      Swal.fire({
        title: 'Updated!',
        icon: 'success',
        confirmButtonText: 'Next'
      }).then((result) => {
        window.location.href = "index.php";
      });
    </script>
<?php
  } else {
    echo $con->error;
  }
}
else if(isset($_POST['register'])){
  $name = $_POST['name'];
  $password = $_POST['password'];
  $username = $_POST['email'];
  $role = $_POST['role'];
  $contact = $_POST['contact'];

  $sql = "INSERT INTO users (name, username, password, role, contact)
  VALUES
  (
    '$name',
    '$username',
    '$password',
    '$role',
    '$contact'
  )
  ";

  $result = $con->query($sql);

  if($result){
?>
<script>
        Swal.fire({
        title: 'Registered!',
        icon: 'success',
        confirmButtonText: 'Next'
      }).then((result) => {
        window.location.href = "index.php";
      });
</script>
<?php
  }
  else{
    echo $con->error;
  }
}
else if(isset($_POST['update_settings'])){

  $website_name = $_POST['website_name'];
  $business_background = $_POST['business_background'];
  $company_profile = $_POST['company_profile'];
  $sql = "UPDATE settings set website_name = '$website_name', business_background = '$business_background', company_profile = '$company_profile'";

  $result = $con->query($sql);

  if($result){
    $_SESSION['website_name'] = $website_name;
    $_SESSION['business_background'] = $business_background;
    $_SESSION['company_profile'] = $company_profile;
    header("location: setting.php");
  }
} 
else if(isset($_POST['update_property_images'])){
  $total = count($_FILES['prop_images']['name']);
  $property_id = $_POST['property_id'];
  for( $i=0 ; $i < $total ; $i++ ) {

    //Get the temp file path
    $tmpFilePath = $_FILES['prop_images']['tmp_name'][$i];
  
    //Make sure we have a file path
    if ($tmpFilePath != ""){
      //Setup our new file path
      $newFilePath = "images/properties/" . $_FILES['prop_images']['name'][$i];
      //Upload the file into the temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
        //Handle other code here
        $sql = "INSERT INTO property_image (property_images, property_id) values ('$newFilePath', $property_id)";

        $result = $con->query($sql);
        if($result){
          continue;
        }
        else{
          die($con->error);
        }
      }
    }
  }
  header("location: index.php");
}
else {
  echo "No post submitted";
}
?>