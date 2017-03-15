<?php  
session_start();
require 'connect_db.php';
if (!isset($_SESSION['user'])) {
	# code...
	header("Location: index.php");
}

$selmen = "select *, left(keterangan, 100) as keterangan_prod from eyeglasses where id_category = '".$_SESSION['idCategoryMen']."'";
$resultMen = mysqli_query($mysql, $selmen);

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
	<div class="w3-right"><a href="http://www.c-fielien.com/eyeglass-men" target="blank"><i class="fa fa-external-link"></i> Lihat Website</a></div>
<br><br>
	
	<div>
	
<center>
	<ul class="w3-navbar w3-blue" style="width:100%">
		<li style="width: 33%"><a href="#" class="w3-hover-admin" onclick="openTabs('mread')" >Overall</a></li>
		<li style="width: 33%"><a href="#" class="w3-hover-admin" onclick="openTabs('medit')">Edit</a></li>
		<li style="width: 34%"><a href="#" class="w3-hover-admin" onclick="openTabs('mdelete')">Delete</a></li>
	</ul>
	
</center>
	<!-- div Tab Read -->
	<div id="mread" class="w3-container tabs">
	<div class="w3-border-tab w3-border-yellow" style="width:30%;height: 5px" ></div>
		
		<center><h2>Men Eyeglasses</h2></center>
		<a href="javascript:void(0);" onclick="showAddProduct()"><i class="fa fa-pencil-square-o w3-xlarge" style="margin-top:50px;margin-left:100px"></i>Add New Product</a>
		<div id="addProduct" class="w3-hide w3-container">
		<form action="master-men.php" method="post" enctype="multipart/form-data">
				<input type="text" name="menNama" class="w3-input" placeholder="Product Name">
			
				<input type="text" name="menKeterangan" class="w3-input" placeholder="Keterangan Produk">
				<input type="text" name="menHarga" class="w3-input" placeholder="Harga, contoh : 100.000">
				<input type="file" name="menAngleDepan" class="w3-input" placeholder="Gambar Tampak Depan">
				<input type="file" name="menAngleSamping" class="w3-input" placeholder="Gambar Tampak Samping">
				<br>
				<input type="submit" name="addMen" value="Add Produk" class="w3-btn w3-indigo">
			
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
			while ($rowMen = $resultMen-> fetch_assoc()) {
				# code...
				echo '<tr>';
				//echo '<td>'.$rowMen['id_eyeglass'].'</td>';
				echo '<td>'.$counter.'</td>';
				echo '<td>'.$rowMen['nama_produk'].'</td>';
				echo '<td>'.$rowMen['keterangan_prod'].'</td>';
				echo '<td>'.$rowMen['harga'].'</td>';
				echo '<td>'.$rowMen['angle_depan'].'</td>';
				echo '<td>'.$rowMen['angle_samping'].'</td>';
				echo '</tr>';
				$counter++;
			}
			
			
		?>
		<tr style="height: 40px">
			<td>
				<!-- <?php echo $_SESSION['idCategoryMen']; ?> -->
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
	<div id="medit" class="w3-container tabs">
	<center>
	<div class="w3-border-tab w3-border-pale-blue" style="width:30%;height: 5px" ></div></center>
		<center><h2>Edit Products</h2></center>
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
		$resultMenEdit = mysqli_query($mysql, $selmen);
		$counter = '1';
		while ($rowMenEdit = $resultMenEdit-> fetch_assoc()) {
			# code...
			$idEye = $rowMenEdit['id_eyeglass'];
			echo '<tr>';
				//echo '<td>'.$rowMenEdit['id_eyeglass'].'</td>';
				echo "<td>".$counter."</td>";
				echo '<td>'.$rowMenEdit['nama_produk'].'</td>';
				echo '<td>'.$rowMenEdit['keterangan_prod'].'</td>';
				echo '<td>'.$rowMenEdit['harga'].'</td>';
				echo '<td>'.$rowMenEdit['angle_depan'].'</td>';
				echo '<td>'.$rowMenEdit['angle_samping'].'</td>';
				echo '<td><button class="w3-btn w3-purple" value="'.$idEye.'" onclick="editMenCategory(this.value)">Edit</button></td>';
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
		<div id="modalEditMen" class="w3-modal">
    		<div class="w3-modal-content">
    		<header class="w3-conteiner w3-khaki">
			<span onclick="document.getElementById('modalEditMen').style.display='none'" class="w3-closebtn" style="margin-right: 20px">&times;</span>
			<h2 class="w3-text-grey">Edit Products 'Men Eyeglass'</h2>
			</header>
      			<div class="w3-container" id="formEditMen">
        		<p></p>
        		
        		
      			</div>
      			<footer class="w3-container w3-khaki">
      				<h2 class="w3-text-grey">C'filien</h2>
    			</footer>
    		</div>
  		</div>
	</div>

	<!-- div Tab Delete -->
	<div id="mdelete" class="w3-container tabs">
	<div class="w3-border-tab w3-border-yellow w3-right" style="width:30%;height: 5px" ></div>
		<center><h2>Delete Product</h2></center>
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
		$resultMenDelete = mysqli_query($mysql, $selmen);
		$counter = '1';
		while ($rowMenDelete = $resultMenDelete-> fetch_assoc()) {
			$idEyeDel = $rowMenDelete['id_eyeglass'];
			# code...
			echo '<tr>';
				//echo '<td>'.$rowMenDelete['id_eyeglass'].'</td>';
				echo "<td>".$counter."</td>";
				echo '<td>'.$rowMenDelete['nama_produk'].'</td>';
				echo '<td>'.$rowMenDelete['keterangan_prod'].'</td>';
				echo '<td>'.$rowMenDelete['harga'].'</td>';
				echo '<td>'.$rowMenDelete['angle_depan'].'</td>';
				echo '<td>'.$rowMenDelete['angle_samping'].'</td>';
				echo '<td>
						<form method = "post" action="master-men.php">
						<button class="w3-btn w3-purple" value="'.$idEyeDel.'" onclick="" name="delcategoryMen">X</button>
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
	
	<script>
		openTabs("mread")
		
	</script>
	</div>
	
	
</div>
</div>

</body>
</html>