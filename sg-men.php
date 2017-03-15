<?php
require 'connect_db.php';

$seltest="select * from page_index";
$colors = array("red", "green", "blue", "yellow"); 
$cars = array("volvo", "mitsu", "merc", "bmw");

?>
<!DOCTYPE html>

<html>
<head>
<?php  
include 'head.php';
?>

</head>
<body>
<!-- header -->
<?php  
//include 'menu.php';
?>
<!-- end header -->

<div class="w3-row w3-hide-small" style="height: 675px">

<a href="eyeglass-men" class="">
	<div class="w3-half w3-hover-opacity w3-cust-pale-red w3-display-container w3-animate-left" style="height: 100%"> <div class="w3-display-middle">
  <h1 class=" w3-cust-pale-blue w3-container w3-center w3-bottombar w3-topbar w3-leftbar w3-rightbar w3-round-xlarge w3-border-white w3-text-black w3-card-8">Men<br>Eyeglasses</h1>
  <!-- <img src="img/men.png"> -->
  </div></div></a>

<a href="eyeglass-women" class="">
  <div class="w3-half w3-hover-opacity w3-cust-pale-blue w3-display-container w3-animate-right" style="height: 100%">
  <div class="w3-display-middle">
  <h1 class="w3-cust-pale-red w3-container w3-center w3-bottombar w3-topbar w3-leftbar w3-rightbar w3-round-xlarge w3-border-black w3-text-white w3-card-8">Women<br>Eyeglasses</h1>
  <!-- <img src="img/woman.png"> -->
  </div></div></a>
	
</div>

<div class="w3-row w3-hide-medium w3-hide-large" style="height: 520px">

<a href="eyeglass-men" class="">
  <div class="w3-half w3-hover-opacity w3-cust-pale-red w3-display-container w3-animate-left" style="height: 50%"> <div class="w3-display-middle">
  <h1 class=" w3-cust-pale-blue w3-container w3-center w3-bottombar w3-topbar w3-leftbar w3-rightbar w3-round-xlarge w3-border-white w3-text-black w3-card-8">Men<br>Eyeglasses</h1>
  <!-- <img src="img/men.png"> -->
  </div></div></a>

<a href="eyeglass-women" class="">
  <div class="w3-half w3-hover-opacity w3-cust-pale-blue w3-display-container w3-animate-right" style="height: 50%">
  <div class="w3-display-middle">
  <h1 class="w3-cust-pale-red w3-container w3-center w3-bottombar w3-topbar w3-leftbar w3-rightbar w3-round-xlarge w3-border-black w3-text-white w3-card-8">Women<br>Eyeglasses</h1>
  <!-- <img src="img/woman.png"> -->
  </div></div></a>
  
</div>
<?php  
//include 'footer.php';
?>
</body>
</html>