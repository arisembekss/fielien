<?php  
session_start();
require 'connect_db.php';
//$tab = $_GET['tab'];
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
//$category = $_GET['q'];


$sellens = "select *, left(keterangan, 100) as keterangan_prod from additional order by last_update desc";
$reslens = mysqli_query($mysql, $sellens);
/*$resedcat = mysqli_query($mysql, $selcat);
$resdelcat = mysqli_query($mysql, $selcat);*/
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
<br>
	<div class="w3-right"><a href="http://www.c-fielien.com/additional" target="blank"><i class="fa fa-external-link"></i> Lihat Website</a></div>
<br><br>
	<div>
	
<center>
	<ul class="w3-navbar w3-blue" style="width:100%">
		<li style="width: 33%"><a href="#" class="w3-hover-admin" onclick="openTabs('lread')" >Overall</a></li>
		<li style="width: 33%"><a href="#" class="w3-hover-admin" onclick="openTabs('ledit')">Edit</a></li>
		<li style="width: 34%"><a href="#" class="w3-hover-admin" onclick="openTabs('ldelete')">Delete</a></li>
	</ul>
	
</center>
	<!-- div Tab Read -->
	<div id="lread" class="w3-container tabs">
	<div class="w3-border-tab w3-border-yellow" style="width:30%;height: 5px" ></div>
		
		<center><h2>Lensa</h2></center>
		<a href="javascript:void(0);" onclick="showAddCategory()"><i class="fa fa-pencil-square-o w3-xlarge" style="margin-top:50px;margin-left:100px"></i>Add New Lensa</a>
		<div id="addCategory" class="w3-hide w3-container">
		<form action="master-additional.php" method="post" enctype="multipart/form-data">
				<input type="text" name="nameLens" class="w3-input" placeholder="Nama Lensa">
			
				<input type="text" name="keteranganLens" class="w3-input" placeholder="Keterangan Lensa">
				<input type="file" name="pictLens" class="w3-input" placeholder="Gambar Tampak Samping">
				<br>

				<input type="submit" name="addLensa" value="Add Category" class="w3-btn w3-indigo">
			
		</form>
		</div>
		
		<table class="w3-table w3-striped" style="margin-top: 30px">
		<tr>
			<th>No</th>
			<th>Nama Lensa</th>
			<th>Keterangan</th>
			<th>Picture</th>
		</tr>
		<?php  
		$counter = 1;
		while ($rowlens = $reslens->fetch_assoc()) {
			# code...
			echo '<tr>';
			//echo '<td>'.$rowlens['id_lensa'].'</td>';
			echo "<td>".$counter."</td>";
			echo '<td>'.$rowlens['nama_produk'].'</td>';
			echo '<td>'.$rowlens['keterangan_prod'].'</td>';
			echo '<td>'.$rowlens['pic'].'</td>';
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
			
		</table>
		
	</div>

	<!-- div Tab Edit -->
	<div id="ledit" class="w3-container tabs">
	<center>
	<div class="w3-border-tab w3-border-pale-blue" style="width:30%;height: 5px" ></div></center>
		<center><h2>Edit Lensa</h2></center>
		<table class="w3-table w3-striped">
		<tr>
			<th>Nomor</th>
			<th>Nama Lensa</th>
			<th>Keterangan</th>
			<th>Picture</th>
			<th>Operation</th>
		</tr>
		<?php  
		$resedlens = mysqli_query($mysql, $sellens);
		$counter=1;
		while ($rowedlens = $resedlens->fetch_assoc()) {
			$idlens=$rowedlens['id_additional'];
			# code...
			echo '<tr>';
			//echo '<td>'.$rowedlens['id_lensa'].'</td>';
			echo "<td>".$counter."</td>";
			echo '<td>'.$rowedlens['nama_produk'].'</td>';
			echo '<td>'.$rowedlens['keterangan_prod'].'</td>';
			echo '<td>'.$rowedlens['pic'].'</td>';
			
			echo '<td><button class="w3-btn w3-purple" value="'.$idlens.'" onclick="editAdditionalCategory(this.value)">Edit</button></td>';
			echo '</tr>';
			$counter++;
		}
		?>
		<tr style="height: 40px">
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			
		</tr>
			
		</table>
		<div class="w3-modal" id="modalEditLens">
    		<div class="w3-modal-content">
    			<header class="w3-conteiner w3-khaki">
					<span onclick="document.getElementById('modalEditLens').style.display='none'" class="w3-closebtn" style="margin-right: 20px">&times;</span>
					<h2 class="w3-text-grey">Edit Lensa</h2>
				</header>
      			<div class="w3-container" id="formEditLens">
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
	<div id="ldelete" class="w3-container tabs">
	<div class="w3-border-tab w3-border-yellow w3-right" style="width:30%;height: 5px" ></div>
		<center><h2>Delete Lensa</h2></center>
		<table class="w3-table w3-striped">
		<tr>
			<th>Nomor</th>
			<th>Nama Lensa</th>
			<th>Keterangan</th>
			<th>Picture</th>
			<th>Operation</th>
		</tr>
		<?php  
			$resdellens = mysqli_query($mysql, $sellens);
			$counter=1;
		while ($rowdellens = $resdellens->fetch_assoc()) {
			$iddellens=$rowdellens['id_additional'];
			# code...
			echo '<tr>';
			//echo '<td>'.$rowdellens['id_lensa'].'</td>';
			echo "<td>".$counter."</td>";
			echo '<td>'.$rowdellens['nama_produk'].'</td>';
			echo '<td>'.$rowdellens['keterangan_prod'].'</td>';
			echo '<td>'.$rowdellens['pic'].'</td>';
			
			echo '<td>
						<form method = "post" action="master-additional.php">
						<button class="w3-btn w3-purple" value="'.$iddellens.'" onclick="" name="delLens">X</button>
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
			<td></td>
		</tr>
		<tr>
			
		</tr>
			
		</table>
	</div>
	<!--  -->
	
	<!--  -->
	<script>
		<?php
		
		if (!isset($_GET['tab'])) {
			# code...
			echo "openTabs('lread');";
			//$tab='';
			//header("Location: admin-lens.php?q=3");
		} else{
			//$tab = $_GET['tab'];
			echo "openTabs('$tab')";
		}
		?>
		
	</script>
	</div>
	
	
	
</div>
</div>

</body>
</html>