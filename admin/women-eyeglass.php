<?php  
session_start();
require 'connect_db.php';
if (!isset($_SESSION['user'])) {
	# code...
	header("Location: index.php");
}
$selwomen = "select *, left(keterangan, 100) as keterangan_prod from eyeglasses where id_category = '".$_SESSION['idCategoryWomen']."'";
$resultwomen = mysqli_query($mysql, $selwomen);


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
<div style="margin-left:15%" id='top'>

<div class="w3-container">
<br>
	<div class="w3-right"><a href="http://www.c-fielien.com/eyeglass-women" target="blank"><i class="fa fa-external-link"></i> Lihat Website</a></div>
<br><br>
	<div>
	
<center>
	<ul class="w3-navbar w3-blue" style="width:100%">
		<li style="width: 33%"><a href="#" class="w3-hover-admin" onclick="openTabs('wread')" >Overall</a></li>
		<li style="width: 33%"><a href="#" class="w3-hover-admin" onclick="openTabs('wedit')">Edit</a></li>
		<li style="width: 34%"><a href="#" class="w3-hover-admin" onclick="openTabs('wdelete')">Delete</a></li>
	</ul>
	
</center>
	<!-- div Tab Read -->
	<div id="wread" class="w3-container tabs">
	<div class="w3-border-tab w3-border-yellow" style="width:30%;height: 5px" ></div>
		
		<center><h2>Women Eyeglass</h2></center>
		<a href="javascript:void(0);" onclick="showAddProduct()"><i class="fa fa-pencil-square-o w3-xlarge" style="margin-top:50px;margin-left:100px"></i>Add New Product</a>
		<div id="addProduct" class="w3-hide w3-container">
		<form action="master-women.php" method="post" enctype="multipart/form-data">
				<input type="text" name="womenNama" class="w3-input" placeholder="Product Name">
			
				<input type="text" name="womenKeterangan" class="w3-input" placeholder="Keterangan Produk">
				<input type="text" name="womenHarga" class="w3-input" placeholder="Harga Produk">
				<input type="file" name="womenAngleDepan" class="w3-input" placeholder="Gambar Tampak Depan">
				<input type="file" name="womenAngleSamping" class="w3-input" placeholder="Gambar Tampak Samping">
				<br>
				<input type="submit" name="addWomen" value="Add Produk" class="w3-btn w3-indigo">
			
		</form>
		</div>
		
		<table class="w3-table w3-striped" style="margin-top: 30px">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Angle Depan</th>
			<th>Angle Samping</th>
		</tr>
		<?php  
		$counter = 1;
			while ($rowwomen = $resultwomen-> fetch_assoc()) {
				# code...
				echo '<tr>';
				//echo '<td>'.$rowwomen['id_eyeglass'].'</td>';
				echo "<td>".$counter."</td>";
				echo '<td>'.$rowwomen['nama_produk'].'</td>';
				echo '<td>'.$rowwomen['keterangan_prod'].'</td>';
				echo '<td>'.$rowwomen['harga'].'</td>';
				echo '<td>'.$rowwomen['angle_depan'].'</td>';
				echo '<td>'.$rowwomen['angle_samping'].'</td>';
				echo '</tr>';
				$counter++;
			}
		?>
		<tr style="height: 40px">
			<td>
				
			</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
			
		</table>
		
	</div>
<?php include 'float-button.php' ?>
	<!-- div Tab Edit -->
	<div id="wedit" class="w3-container tabs">
	<center>
	<div class="w3-border-tab w3-border-pale-blue" style="width:30%;height: 5px" ></div></center>
		<center><h2>Edit Product</h2></center>
		<table class="w3-table w3-striped">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Angle Depan</th>
			<th>Angle Samping</th>
		</tr>
		<?php  
		$resultwomenEdit = mysqli_query($mysql, $selwomen);
		$counter = 1;
			while ($rowwomenedit = $resultwomenEdit-> fetch_assoc()) {
				# code...
				$ideyeWomen = $rowwomenedit['id_eyeglass'];
				echo '<tr>';
				//echo '<td>'.$rowwomenedit['id_eyeglass'].'</td>';
				echo "<td>".$counter."</td>";
				echo '<td>'.$rowwomenedit['nama_produk'].'</td>';
				echo '<td>'.$rowwomenedit['keterangan_prod'].'</td>';
				echo '<td>'.$rowwomenedit['harga'].'</td>';
				echo '<td>'.$rowwomenedit['angle_depan'].'</td>';
				echo '<td>'.$rowwomenedit['angle_samping'].'</td>';
				echo '<td><button class="w3-btn w3-purple" value="'.$ideyeWomen.'" onclick="editWomenCategory(this.value)">Edit</button></td>';
				echo '</tr>';
				$counter++;
			}
		?>
		<tr style="height: 40px">
			<td>
				
			</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			
		</tr>
			
		</table>
		<div class="w3-modal" id="modalEditWomen">
    		<div class="w3-modal-content">
    		<header class="w3-conteiner w3-khaki">
			<span onclick="document.getElementById('modalEditWomen').style.display='none'" class="w3-closebtn" style="margin-right: 20px">&times;</span>
			<h2 class="w3-text-grey">Edit Product 'Women Eyeglass'</h2>
			</header>
      			<div class="w3-container" id="formEditWomen">
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
	<div id="wdelete" class="w3-container tabs">
	<div class="w3-border-tab w3-border-yellow w3-right" style="width:30%;height: 5px" ></div>
		<center><h2>Delete Category</h2></center>
		<table class="w3-table w3-striped">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Angle Depan</th>
			<th>Angle Samping</th>
			<th>Operation</th>
		</tr>
		<?php  
			$resultWomenDelete = mysqli_query($mysql, $selwomen);
			$counter = 1;
		while ($rowwomenDelete = $resultWomenDelete-> fetch_assoc()) {
			$idEyeDel = $rowwomenDelete['id_eyeglass'];
			# code...
			echo '<tr>';
				//echo '<td>'.$rowwomenDelete['id_eyeglass'].'</td>';
				echo "<td>".$counter."</td>";
				echo '<td>'.$rowwomenDelete['nama_produk'].'</td>';
				echo '<td>'.$rowwomenDelete['keterangan_prod'].'</td>';
				echo '<td>'.$rowwomenDelete['harga'].'</td>';
				echo '<td>'.$rowwomenDelete['angle_depan'].'</td>';
				echo '<td>'.$rowwomenDelete['angle_samping'].'</td>';
				echo '<td>
						<form method = "post" action="master-women.php">
						<button class="w3-btn w3-purple" value="'.$idEyeDel.'" onclick="" name="delcategoryWomen">X</button>
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
		openTabs("wread")
		
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