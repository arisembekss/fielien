<?php 
session_start(); 
date_default_timezone_set("Asia/Jakarta");
$_SESSION['date'] = date('d-m-y');
$_SESSION['time'] = date('h:i:sa');

if (!isset($_SESSION['user'])) {
	# code...
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<?php include 'head.php' ?>
</head>
<body>
<?php  
include 'nav.php';
?>

<!-- end of nav -->
<div style="margin-left:15%">

<div class="w3-container">
	<center>
		<div class="w3-border-bottom" style="width:400px">
	
			<h1>Dashboard</h1>
	
		</div>
	</center>
	<div class="w3-row" style="margin-top:100px">
	<a href="category.php">
		<div class="w3-display-container w3-third w3-hover-shadow" style="width:350px; height:350px">
		<img src="../img/note-paper.png" style="width:350px;height:350px">
		<div class="w3-display-middle">
		<h4>Category</h4>
		<ul>
			<li>Add new category</li>
			<li>Edit existing category</li>
			<li>Delete some of category</li>
		</ul>
		</div>
		</div>
	</a>

	<a href="men-eyeglass.php">
		<div class="w3-display-container w3-third rotate-right w3-hover-shadow" style="width:350px; height:350px">
		<img src="../img/note-paper.png" style="width:350px;height:350px">
		<div class="w3-display-middle">
		<h4>Men Eyeglasses</h4>
		<ul>
			<li>Add new product</li>
			<li>Edit existing product</li>
			<li>Delete some of product</li>
		</ul>
		</div>
		</div>
	</a>

	<a href="women-eyeglass.php">
		<div class="w3-display-container w3-third rotate-left w3-hover-shadow" style="width:350px; height:350px">
		<img src="../img/note-paper.png" style="width:350px;height:350px">
		<div class="w3-display-middle">
		<h4>Women Eyeglass</h4>
		<ul>
			<li>Add new product</li>
			<li>Edit existing product</li>
			<li>Delete some of product</li>
			
		</ul>
		</div>
		</div>
	</a>

	</div>
	
	
	
	
</div>
<div class="w3-content w3-center">
	

<a href="admin-lens.php" class="w3-content">
		<div class="w3-display-container w3-third rotate-left w3-hover-shadow" style="width:350px; height:350px">
		<img src="../img/note-paper.png" style="width:350px;height:350px">
		<div class="w3-display-middle">
		<h4>Lensa</h4>
		<ul>
			<li>Add new product</li>
			<li>Edit existing product</li>
			<li>Delete some of product</li>
			
		</ul>
		</div>
		</div>
	</a>
	</div>
</div>
</body>
</html>