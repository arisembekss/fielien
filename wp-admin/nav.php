<?php 

$_SESSION['idCategoryMen'] = "1" ;
$_SESSION['idCategoryWomen'] = "2";
$_SESSION['idCategoryLens'] = "3";
echo "<script  type='text/javascript' src='admin.js'>";
echo "</script>";
?>
<nav class="w3-sidenav w3-light-grey w3-card-2 w3-hide-small" style="width:200px">
<div class="w3-container w3-border-bottom w3-border-green" style="height:200px">
	<h1>Welcome</h1>
	<h3><?php echo $_SESSION['user']; ?></h3>
	<br>
	<center><a href="index.php" class="w3-hover-shadow w3-text-red"><b>Log Out</b></a></center>
</div>
	<a class="w3-hover-shadow" href="home.php" alt="home"><i class="fa fa-home w3-xlarge" style="margin-right:5px; margin-bottom:10px; margin-top:10px"></i>Home</a>
	<a class="w3-hover-shadow" href="admin-category.php"><i class="fa fa-globe w3-xlarge" style="margin-right:5px; margin-bottom:10px; margin-top:10px"></i>Category</a>
	<a class="w3-hover-shadow" href="javascript:void(0)" onclick="showAdmin(1)"><i class="fa fa-mars-stroke w3-xlarge" style="margin-right:5px; margin-bottom:10px; margin-top:10px"></i>Men Eyeglasses</a>
	<a class="w3-hover-shadow" href="javascript:void(0)" onclick="showAdmin(2)"><i class="fa fa-venus w3-xlarge" style="margin-right:5px; margin-bottom:10px; margin-top:10px"></i>Women Eyeglasses</a>
	<a class="w3-hover-shadow" href="javascript:void(0)" onclick="showAdmin(3)"><i class="fa fa-square-o w3-xlarge" style="margin-right:5px; margin-bottom:10px; margin-top:10px"></i>Lens</a>
	<a class="w3-hover-shadow" href="admin-additional.php" ><i class="fa fa-plus w3-xlarge" style="margin-right:5px; margin-bottom:10px; margin-top:10px"></i>Additional Product</a>
</nav>
<!-- nav on small -->
<nav class="w3-sidenav w3-light-grey w3-card-2 w3-hide-large w3-hide-medium" style="width:60px">
<div class="w3-container w3-border-bottom w3-border-green" style="height:200px">
	<i class="fa fa-tachometer w3-large" style=" margin-bottom:10px; margin-top:10px"></i>
</div>
	<a class="w3-hover-shadow" href="home.php" alt="home"><i class="fa fa-home w3-large" style=" margin-bottom:10px; margin-top:10px"></i></a>
	<a class="w3-hover-shadow" href="admin-category.php"><i class="fa fa-globe w3-large" style="margin-bottom:10px; margin-top:10px"></i></a>
	<a class="w3-hover-shadow" href="javascript:void(0)" onclick="showAdmin(1)"><i class="fa fa-mars-stroke w3-large" style=" margin-bottom:10px; margin-top:10px"></i></a>
	<a class="w3-hover-shadow" href="javascript:void(0)" onclick="showAdmin(2)"><i class="fa fa-venus w3-large" style=" margin-bottom:10px; margin-top:10px"></i></a>
	<a class="w3-hover-shadow" href="javascript:void(0)" onclick="showAdmin(3)"><i class="fa fa-square-o w3-large" style=" margin-bottom:10px; margin-top:10px"></i> </a>
	<a class="w3-hover-shadow" href="admin-additional.php"><i class="fa fa-plus w3-large" style=" margin-bottom:10px; margin-top:10px"></i> </a>
</nav>

