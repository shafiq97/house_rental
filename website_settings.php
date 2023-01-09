<?php
  // require_once 'connection.php';
  // require_once 'session.php';
  $sql = "SELECT * FROM settings";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $_SESSION['website_name'] = $row['website_name'];
      $_SESSION['business_background'] = $row['business_background'];
      $_SESSION['company_profile'] = $row['company_profile'];
    }
    // die($_SESSION['website_name']);
  } else {
    echo "0 results";
  }
  
?>