<?php  
require 'connect_db.php';
$q = $_GET["q"];

$query = "select * from category where id_category = '".$q."'";
$result = mysqli_query($mysql, $query);
while ($row = $result->fetch_assoc()) {
	# code...
	$name = $row['name_category'];
	$desc = $row['short_desc'];
	/*echo '<span onclick="document.getElementById("id01").style.display="none"" class="w3-closebtn">&times;</span>';
	echo $row['name_category'];
	echo '<br>';
	echo $row['short_desc'];*/

?>

	<!-- <header class="w3-conteiner w3-khaki">
	<span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">&times;</span>
	<p>Edit Category ''</p>
	</header> -->
	<form action="master-category.php" method="post">
		<label class="w3-text-teal"><h4>Category Name</h4></label>
		<input type="hidden" name="edIdCat" value="<?php echo $q; ?>">
		<input type="text" class="w3-input" name="edCat" value="<?php  echo $name;?>">
		<br>
		<label class="w3-text-teal"><h4>Short Description</h4></label>
		<input type="text" class="w3-input" name="edDesc" value="<?php echo $desc; ?>">
		<br>
		<input type="submit" name="editcategory" class="w3-btn w3-teal">
		<br><br>
	</form>


<?php
}

?>