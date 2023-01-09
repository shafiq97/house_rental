<?php
require_once 'session.php';
?>
<!-- Nav Starts -->
<div class="navbar-collapse  collapse">
  <ul class="nav navbar-nav navbar-right">
    <li class="active"><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.html">Contact</a></li>
    <?php
    if (isset($_SESSION['role'])) {
      if ($_SESSION['role'] === 'landlord') {
    ?>
        <li><a href="upload_property_form.php">Upload Your Property</a></li>
    <?php
      }
    }
    ?>
    <?php
    if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    ?>
      <li><a href="setting.php">Settings</a></li>
    <?php
    }
    ?>
    <?php
    if (isset($_SESSION['id'])) {
    ?>
      <li><a onclick="return confirm('Are you sure you want to end this session?')" href="logout.php">Logout</a></li>
    <?php
    }
    ?>
  </ul>
</div>
<!-- #Nav Ends -->