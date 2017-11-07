<?php
$Name = $_POST["Name"];
$FavThing = $_POST["FavThing"];
$LeastFavThing = $_POST["LeastFavThing"];
$Email = $_POST["Email"];
?>

<!DOCTYPE html>
<html>
<head>
  <?php
  include("includes/head.php"); ?>
</head>
<body class="index">
  <div id="background"></div>
  <div id="overlay">
    <div id="titleabout">
      <h4> Form Submitted, thanks <?php echo($Name);?>!</h4>
      <h5> We are glad you liked the <?php echo($FavThing);?>!</h5>
      <h5> We noticed we can improve <?php echo($LeastFavThing);?> and will take that
      into consideration next year. Thanks for the input! Keep your eyes out on
      your email <?php echo($Email);?> for coupons to next
      year's Apple Fest. Thanks for a great year!</h4>
    </div>
    <div id="overlaynavbar">
      <?php
      include("includes/navigation.php"); ?>
    </div>
    </body>
    </html>
