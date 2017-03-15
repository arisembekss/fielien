<?php  
session_start();
require 'connect_db.php';
if (isset($_POST['addWomen'])) {
	# code...
	addWomen();
} elseif (isset($_POST['editcategoryWomen'])) {
	# code...
	editCategoryEyeglass();
} elseif (isset($_POST['delcategoryWomen'])) {
	# code...
	deleteCategoryWomen();
}

function addWomen(){
	require 'connect_db.php';
		$menNama = $_POST['womenNama'];
		$menKeterangan = $_POST['womenKeterangan'];
		$menHarga = $_POST['womenHarga'];
		$date = date('d-m-y');
		$time = date('h:i:sa');
		$last_update = $date." ".$time;
		/*handling variables angle depan*/
		$menAngleDepan = $_FILES['womenAngleDepan']['name'];
		$depanSize = $_FILES['womenAngleDepan']['size'];
		$depanTmp = $_FILES['womenAngleDepan']['tmp_name'];
		$depanType = $_FILES['womenAngleDepan']['type'];

		/*handling variables tampak samping*/
		$menAngleSamping = $_FILES['womenAngleSamping']['name'];
		$sampingSize = $_FILES['womenAngleSamping']['size'];
		$sampingTmp = $_FILES['womenAngleSamping']['tmp_name'];
		$sampingType = $_FILES['womenAngleSamping']['type'];
	if (empty($menAngleDepan) || empty($menAngleSamping)) {
		# code...

		?>
		<script type="text/javascript"> 
    	alert("Harap upload 2 gambar"); 
    	history.back(); 
  		</script> 
		<?php
	} else{
		

		$insertwomen = "insert into eyeglasses (id_category, nama_produk, keterangan, harga, angle_depan, angle_samping) values ('".$_SESSION['idCategoryWomen']."', '$menNama', '$menKeterangan', '$menHarga', '$menAngleDepan', '$menAngleSamping', '$last_update')";
		$resultwomen = mysqli_query($mysql, $insertwomen);

		if (isset($_FILES['womenAngleDepan'])) {
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

				$errors[]= 'eror #2';
			}

			if (empty($errors)==true) {
				# code...
				move_uploaded_file($depanTmp, "uploads/".$menAngleDepan);	
			}

		}

		/*handling file tampak samping*/
		if (isset($_FILES['womenAngleSamping'])) {
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

		header("Location: women-eyeglass.php");
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
		header("Location: women-eyeglass.php?tab=wedit");
      	ob_end_flush();
      	exit;
	
	//echo $_POST['edIdCat'];
}

function deleteCategoryWomen(){
	require 'connect_db.php';
	$querydelcatMen = "delete from eyeglasses where id_eyeglass = ".$_POST['delcategoryWomen']."";
	$resultdelcatMen = mysqli_query($mysql, $querydelcatMen);
	//echo $_POST['delcategory'];
	header("Location: women-eyeglass.php?tab=wdelete");
      ob_end_flush();
      exit;
}
?>