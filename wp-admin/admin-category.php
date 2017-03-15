<?php  
session_start();
require 'connect_db.php';

if (!isset($_GET['tab'])) {
	# code...
	$tab='';
	//header("Location: admin-lens.php?q=3");
} else{
	$tab = $_GET['tab'];
}

if (!isset($_SESSION['user'])) {
	# code...
	header("Location: index.php");
}
$selcat = "select * from category";
$rescat = mysqli_query($mysql, $selcat);
$resedcat = mysqli_query($mysql, $selcat);
$resdelcat = mysqli_query($mysql, $selcat);
//$id="";
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

	<!-- <div style="height:100px">
		<form>
			
		</form>
	</div> -->

	<div>
	<!-- <div class="w3-display-container">
	<ul class="w3-navbar w3-blue" style="width:100%">

		<li><div class="w3-display-topleft w3-container"><a href="#" class="w3-hover-admin" onclick="openTabs('ctread')" style="margin-left: 5px">Overall</a></div></li>
		<li><div class="w3-display-topmiddle w3-container"><a href="#" class="w3-hover-admin w3-center" onclick="openTabs('ctedit')">Edit</a></div></li>
		<li><div class="w3-display-topright w3-container"><a href="#" class="w3-hover-admin" onclick="openTabs('ctdelete')">Delete</a></div></li>
	</ul>
	</div> -->
<center>
	<ul class="w3-navbar w3-blue" style="width:100%">
		<li style="width: 33%"><a href="#" class="w3-hover-admin" onclick="openTabs('ctread')" >Overall</a></li>
		<li style="width: 33%"><a href="#" class="w3-hover-admin" onclick="openTabs('ctedit')">Edit</a></li>
		<li style="width: 34%"><a href="#" class="w3-hover-admin" onclick="openTabs('ctdelete')">Delete</a></li>
	</ul>
	
</center>
	<!-- div Tab Read -->
	<div id="ctread" class="w3-container tabs">
	<div class="w3-border-tab w3-border-yellow" style="width:30%;height: 5px" ></div>
		
		<center><h2>Categories of Product</h2></center>
		<a href="javascript:void(0);" onclick="showAddCategory()"><i class="fa fa-pencil-square-o w3-xlarge" style="margin-top:50px;margin-left:100px"></i>Add New Category</a>
		<div id="addCategory" class="w3-hide w3-container">
		<form action="master-category.php" method="post">
				<input type="text" name="addCat" class="w3-input" placeholder="Category Name">
			
				<input type="text" name="addDesc" class="w3-input" placeholder="Category Short Description">
				<br>
				<input type="submit" name="addcategory" value="Add Category" class="w3-btn w3-indigo">
			
		</form>
		</div>
		
		<table class="w3-table w3-striped" style="margin-top: 30px">
		<tr>
			<th>Nomor</th>
			<th>Category Name</th>
			<th>Short Desciption</th>
		</tr>
		<?php  
		$counter = 1;
		while ($rowcat = $rescat->fetch_assoc()) {
			# code...
			echo '<tr>';
			//echo '<td>'.$rowcat['id_category'].'</td>';
			echo "<td>".$counter."</td>";
			echo '<td>'.$rowcat['name_category'].'</td>';
			echo '<td>'.$rowcat['short_desc'].'</td>';
			echo '</tr>';
			$counter++;
		}
		?>
		<tr style="height: 40px">
			<td></td>
			<td></td>
			<td></td>
		</tr>
			
		</table>
		
	</div>

	<!-- div Tab Edit -->
	<div id="ctedit" class="w3-container tabs">
	<center>
	<div class="w3-border-tab w3-border-pale-blue" style="width:30%;height: 5px" ></div></center>
		<center><h2>Edit Category</h2></center>
		<table class="w3-table w3-striped">
		<tr>
			<th>Nomor</th>
			<th>Category Name</th>
			<th>Short Desciption</th>
			<th>Operation</th>
		</tr>
		<?php  
		$counter = 1;
		while ($rowedcat = $resedcat->fetch_assoc()) {
			$id=$rowedcat['id_category'];
			# code...
			echo '<tr>';
			//echo '<td>'.$rowedcat['id_category'].'</td>';
			echo "<td>".$counter."</td>";
			echo '<td>'.$rowedcat['name_category'].'</td>';
			echo '<td>'.$rowedcat['short_desc'].'</td>';
			echo '<td><button class="w3-btn w3-purple" value="'.$id.'" onclick="editCategory(this.value)">Edit</button></td>';
			echo '</tr>';
			$counter++;
		}
		?>
		<tr style="height: 40px">
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<!-- <form>
				<td>Add New Category</td>
				<td>
					<input type="text" name="" class="w3-input">
				</td>
				<td>
					<input type="text" name="" class="w3-input">
					<br>
					<input type="button" name="" value="Add Category" class="w3-btn w3-indigo">
				</td>
			</form> -->
		</tr>
			
		</table>
		<div  class="w3-modal" id="modalEditt">
    		<div class="w3-modal-content">
    		<header class="w3-conteiner w3-khaki">
			<span onclick="document.getElementById('modalEditt').style.display='none'" class="w3-closebtn" style="margin-right: 20px">&times;</span>
			<h2 class="w3-text-grey">Edit Category</h2>
			</header>
      			<div class="w3-container" id="modalEdit">
        		<p></p>
        		<!-- <p>Some text. Some text. Some text.</p>
        		<p>Some text. Some text. Some text.
        		</p> -->
        		
      			</div>
      			<footer class="w3-container w3-khaki">
      				<h2 class="w3-text-grey">C'filien</h2>
    			</footer>
    		</div>
  		</div>
	</div>

	<!-- div Tab Delete -->
	<div id="ctdelete" class="w3-container tabs">
	<div class="w3-border-tab w3-border-yellow w3-right" style="width:30%;height: 5px" ></div>
		<center><h2>Delete Category</h2></center>
		<table class="w3-table w3-striped">
		<tr>
			<th>Nomor</th>
			<th>Category Name</th>
			<th>Short Desciption</th>
			<th>Operation</th>
		</tr>
		<?php  
		$counter = 1;
		while ($rowdelcat = $resdelcat->fetch_assoc()) {
			$iddel=$rowdelcat['id_category'];
			# code...
			echo '<tr>';
			//echo '<td>'.$rowdelcat['id_category'].'</td>';
			echo "<td>".$counter."</td>";
			echo '<td>'.$rowdelcat['name_category'].'</td>';
			echo '<td>'.$rowdelcat['short_desc'].'</td>';
			echo '<td>
			<form method = "post" action="master-category.php">
			<button class="w3-btn w3-purple" value="'.$iddel.'" onclick="" name="delcategory">X</button>
			</form>	
			</td>';
			echo '</tr>';
			$counter++;
		}
		?>
		<tr style="height: 40px">
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<!-- <form>
				<td>Add New Category</td>
				<td>
					<input type="text" name="" class="w3-input">
				</td>
				<td>
					<input type="text" name="" class="w3-input">
					<br>
					<input type="button" name="" value="Add Category" class="w3-btn w3-indigo">
				</td>
			</form> -->
		</tr>
			
		</table>
	</div>
	<!--  -->
	
	<!--  -->
	<script>
		<?php
		
		if (!isset($_GET['tab'])) {
			# code...
			echo "openTabs('ctread');";
			//$tab='';
			//header("Location: admin-lens.php?q=3");
		} else{
			//$tab = $_GET['tab'];
			echo "openTabs('$tab')";
		}
		?>
		
	</script>
	</div>
	<!-- table category -->
	<!-- <div class="w3-border-top">
		<table border="1">
			<tr>
				<td>
					kolom 1
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>

		</table>
	</div> -->
	
	
</div>
</div>

</body>
</html>