<?php  
require 'connect_db.php';
$q = $_GET["q"];

$query = "select * from eyeglasses where id_eyeglass = '".$q."'";
$result = mysqli_query($mysql, $query);
while ($row = $result->fetch_assoc()) {
	# code...
	$name = $row['nama_produk'];
	$keterangan = $row['keterangan'];
	$harga = $row['harga'];

	

?>

	
	<form action="master-women.php" method="post" enctype="multipart/form-data">
		<label class="w3-text-teal"><h4>Nama Produk</h4></label>
		<input type="hidden" name="edIdCatMen" value="<?php echo $q; ?>">
		<input type="text" class="w3-input" name="edMenName" value="<?php  echo $name;?>">
		
		<label class="w3-text-teal"><h4>Keterangan Produk</h4></label>
		<input type="text" class="w3-input" name="edMenKeterangan" value="<?php echo $keterangan; ?>">
		<label class="w3-text-teal"><h4>Harga</h4></label>
		<input type="text" class="w3-input" name="edMenHarga" value="<?php echo $harga; ?>">
		<label class="w3-text-teal"><h4>Image Tampak Depan</h4></label>
		<input class="w3-input" type="file" name="angleDepan"/>
		<label class="w3-text-teal"><h4>Image Tampak Samping</h4></label>
		<input class="w3-input" type="file" name="angleSamping"/>
		<br><br>
		<input type="submit" name="editcategoryWomen" class="w3-btn w3-teal">
		<br><br>
	</form>


<?php
//echo $query;
}

?>