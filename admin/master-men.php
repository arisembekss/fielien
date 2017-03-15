<?php  
session_start();
require 'connect_db.php';
if (isset($_POST['addMen'])) {
	# code...
	addMen();
} elseif (isset($_POST['editcategoryMen'])) {
	# code...
	editCategoryEyeglass();
} elseif (isset($_POST['delcategoryMen'])) {
	# code...
	deleteCategoryMen();
}

function addMen(){
	require 'connect_db.php';
		$menNama = $_POST['menNama'];
		$menKeterangan = $_POST['menKeterangan'];
		$menHarga = $_POST['menHarga'];
		$date = date('d-m-y');
		$time = date('h:i:sa');
		$last_update = $date." ".$time;
		/*handling variables angle depan*/
		$menAngleDepan = $_FILES['menAngleDepan']['name'];
		$depanSize = $_FILES['menAngleDepan']['size'];
		$depanTmp = $_FILES['menAngleDepan']['tmp_name'];
		$depanType = $_FILES['menAngleDepan']['type'];

		/*handling variables tampak samping*/
		$menAngleSamping = $_FILES['menAngleSamping']['name'];
		$sampingSize = $_FILES['menAngleSamping']['size'];
		$sampingTmp = $_FILES['menAngleSamping']['tmp_name'];
		$sampingType = $_FILES['menAngleSamping']['type'];
	if (empty($menAngleDepan) || empty($menAngleSamping)) {
		# code...

		?>
		<script type="text/javascript"> 
    	alert("Harap upload 2 gambar"); 
    	history.back(); 
  		</script> 
		<?php
	} else{
		

		$insertmen = "insert into eyeglasses (id_category, nama_produk, keterangan, harga, angle_depan, angle_samping, last_update) values ('".$_SESSION['idCategoryMen']."', '$menNama', '$menKeterangan', '$menHarga', '$menAngleDepan', '$menAngleSamping', '$last_update')";
		$resultmen = mysqli_query($mysql, $insertmen);

		if (isset($_FILES['menAngleDepan'])) {
			# code...
			$errors = array();
			if ($depanSize>2097152) {
				# code...
				?>
				<script type="text/javascript"> 
    				alert("File size must be exactly 2 mb or below"); 
    				history.back(); 
  				</script> 
				<?php

				$errors[]= 'eror #1';
			}

			if (empty($errors)==true) {
				# code...
				move_uploaded_file($depanTmp, "uploads/".$menAngleDepan);	
			}

		}

		/*handling file tampak samping*/
		if (isset($_FILES['menAngleSamping'])) {
			# code...
			$errorsamping = array();
			if ($sampingSize>2097152) {
				# code...
				?>
				<script type="text/javascript"> 
    				alert("File size must be exactly 2 mb or below"); 
    				history.back(); 
  				</script> 
				<?php

				$errors[]= 'eror #1';
			}

			if (empty($errorsamping)==true) {
				# code...
				move_uploaded_file($sampingTmp, "uploads/".$menAngleSamping);	
			}

		}

		header("Location: men-eyeglass.php");
      	ob_end_flush();
      	exit;	
	}
	
	//echo $_POST['addCat'];
}

function handlingImage(){
	
}

function editCategoryEyeglass(){
	require 'connect_db.php';

		$editAngleDepan = $_FILES['angleDepan']['name'];
		$editdepanSize = $_FILES['angleDepan']['size'];
		$editdepanTmp = $_FILES['angleDepan']['tmp_name'];
		$editdepanType = $_FILES['angleDepan']['type'];
		$date = date('d-m-y');
		$time = date('h:i:sa');
		$last_update = $date." ".$time;

		/*handling variables tampak samping*/
		$editAngleSamping = $_FILES['angleSamping']['name'];
		$editsampingSize = $_FILES['angleSamping']['size'];
		$editsampingTmp = $_FILES['angleSamping']['tmp_name'];
		$editsampingType = $_FILES['angleSamping']['type'];

		if (empty($editAngleDepan) || empty($editAngleSamping)) {
			# code...
			$queryUpdateCatMen = "update eyeglasses set nama_produk = '".$_POST['edMenName']."', keterangan = '".$_POST['edMenKeterangan']."', harga = '".$_POST['edMenHarga']."', last_update = '".$last_update."' where id_eyeglass = ".$_POST['edIdCatMen']."";
			$resulteditcatMen = mysqli_query($mysql, $queryUpdateCatMen);			

		} else{
			$queryUpdateCatMen = "update eyeglasses set nama_produk = '".$_POST['edMenName']."', keterangan = '".$_POST['edMenKeterangan']."', harga = '".$_POST['edMenHarga']."', angle_depan= '".$editAngleDepan."', angle_samping = '".$editAngleSamping."', last_update = '".$last_update."' where id_eyeglass = ".$_POST['edIdCatMen']."";
			$resulteditcatMen = mysqli_query($mysql, $queryUpdateCatMen);

			/*handling files*/
			if (isset($_FILES['angleDepan'])) {
			# code...
			$errors = array();
			if ($editdepanSize>2097152) {
				# code...
				?>
				<script type="text/javascript"> 
    				alert("File size must be exactly 2 mb or below"); 
    				history.back(); 
  				</script> 
				<?php

				$errors[]= 'eror #1';
			}

			if (empty($errors)==true) {
				# code...
				move_uploaded_file($editdepanTmp, "uploads/".$editAngleDepan);	
			}

		}

		/*handling file tampak samping*/
		if (isset($_FILES['angleSamping'])) {
			# code...
			$errorsamping = array();
			if ($editsampingSize>2097152) {
				# code...
				?>
				<script type="text/javascript"> 
    				alert("File size must be exactly 2 mb or below"); 
    				history.back(); 
  				</script> 
				<?php

				$errors[]= 'eror #1';
			}

			if (empty($errorsamping)==true) {
				# code...
				move_uploaded_file($editsampingTmp, "uploads/".$editAngleSamping);	
			}

		}
			/**/

			
		}
		header("Location: men-eyeglass.php?tab=medit");
      	ob_end_flush();
      	exit;
	
	//echo $_POST['edIdCat'];
}

function deleteCategoryMen(){
	require 'connect_db.php';
	$querydelcatMen = "delete from eyeglasses where id_eyeglass = ".$_POST['delcategoryMen']."";
	$resultdelcatMen = mysqli_query($mysql, $querydelcatMen);
	//echo $_POST['delcategory'];
	header("Location: men-eyeglass.php?tab=mdelete");
      ob_end_flush();
      exit;
}
?>