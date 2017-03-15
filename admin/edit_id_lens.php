<?php  
require 'connect_db.php';
$q = $_GET["q"];

$query = "select * from lensa where id_lensa = '".$q."'";
$result = mysqli_query($mysql, $query);
while ($row = $result->fetch_assoc()) {
	# code...
	$name = $row['nama_lensa'];
	$keterangan = $row['keterangan'];
	$picture = $row['picture_lensa'];

	
/*echo $name;
echo "<br>".$keterangan;
echo "<br>".$picture;*/
?>

	
	<form action="master-lens.php" method="post" enctype="multipart/form-data">
		<label class="w3-text-teal"><h4>Nama Produk</h4></label>
		<input type="hidden" name="edIdLens" value="<?php echo $q; ?>">
		<input type="text" class="w3-input" name="name" value="<?php  echo $name;?>">
		
		<label class="w3-text-teal"><h4>Keterangan Produk</h4></label>
		<input type="text" class="w3-input" name="keterangan" value="<?php echo $keterangan; ?>">
		<label class="w3-text-teal"><h4>Image Lensa</h4></label>
		<input type="file" name="picture" class="w3-input" />
		<br><br>
		<input type="submit" name="editlens" class="w3-btn w3-teal">
		<br><br>
	</form>


<?php
//echo $query;
}

?>