<?php  
session_start();
require 'connect_db.php';
if (isset($_POST['addLensa'])) {
	# code...
	addLensa();
} elseif (isset($_POST['editlens'])) {
	# code...
	editLens();
} elseif (isset($_POST['delLens'])) {
	# code...
	deleteLensa();
}

function addLensa(){
	require 'connect_db.php';
	$namaLensa = $_POST['nameLens'];
	$keterangan = $_POST['keteranganLens'];
	$date = date('d-m-y');
	$time = date('h:i:sa');
	$last_update = $date." ".$time;

		/*handling variables angle depan*/
		$pictLens = $_FILES['pictLens']['name'];
		$lensSize = $_FILES['pictLens']['size'];
		$lensTmp = $_FILES['pictLens']['tmp_name'];
		$lensType = $_FILES['pictLens']['type'];

		/*handling variables tampak samping*/
		
	if (empty($pictLens)) {
		# code...

		?>
		<script type="text/javascript"> 
    	alert("Harap upload gambar"); 
    	history.back(); 
  		</script> 
		<?php
	} else{
		

		$insertlens = "insert into lensa (id_category, nama_lensa, keterangan, picture_lensa, last_update) values ('".$_SESSION['idCategoryLens']."', '$namaLensa', '$keterangan', '$pictLens', '$last_update')";
		$resultLens = mysqli_query($mysql, $insertlens);

		if (isset($_FILES['pictLens'])) {
			# code...
			$errors = array();
			if ($lensSize>2097152) {
				# code...
				?>
				<script type="text/javascript"> 
    				alert("File size must be exactly 2 mb or below"); 
    				history.back(); 
  				</script> 
				<?php

				$errors[]= 'eror #3';
			}

			if (empty($errors)==true) {
				# code...
				move_uploaded_file($lensTmp, "uploads/".$pictLens);	
			}

		}

		
		header("Location: admin-lens.php");
      	ob_end_flush();
      	exit;	
	}
	
	//echo $_POST['addCat'];
}

function handlingImage(){
	
}

function editLens(){
	require 'connect_db.php';
	$date = date('d-m-y');
	$time = date('h:i:sa');
	$last_update = $date." ".$time;
	

		/*handling variables tampak samping*/
		$editPictLens = $_FILES['picture']['name'];
		$editPictSize = $_FILES['picture']['size'];
		$editPictTmp = $_FILES['picture']['tmp_name'];
		$editPictType = $_FILES['picture']['type'];

		if (empty($editPictLens) ) {
			# code...
			$queryUpdateLens = "update lensa set nama_lensa = '".$_POST['name']."', keterangan = '".$_POST['keterangan']."', last_update = '".$last_update."' where id_lensa = ".$_POST['edIdLens']."";
			$resulteditLens = mysqli_query($mysql, $queryUpdateLens);			

		} else{
			$queryUpdateLens = "update lensa set nama_lensa = '".$_POST['name']."', keterangan = '".$_POST['keterangan']."', picture_lensa = '".$editPictLens."', last_update = '".$last_update."' where id_lensa = ".$_POST['edIdLens']."";
			$resulteditLens = mysqli_query($mysql, $queryUpdateLens);

			/*handling files*/
			if (isset($_FILES['picture'])) {
			# code...
			$errors = array();
			if ($editPictSize>2097152) {
				# code...
				?>
				<script type="text/javascript"> 
    				alert("File size must be exactly 2 mb or below"); 
    				history.back(); 
  				</script> 
				<?php

				$errors[]= 'eror #4';
			}

			if (empty($errors)==true) {
				# code...
				move_uploaded_file($editPictTmp, "uploads/".$editPictLens);	
			}

		}

		

			
		}
//		header("Location: admin-lens");
		header("Location: admin-lens.php?tab=ledit");
      	ob_end_flush();
      	exit;
	
	//echo $_POST['edIdCat'];
}

function deleteLensa(){
	require 'connect_db.php';
	$querydelLens = "delete from lensa where id_lensa = ".$_POST['delLens']."";
	$resultdelLens = mysqli_query($mysql, $querydelLens);
	//echo $_POST['delcategory'];
	//header("Location: admin-lens.php");
		header("Location: admin-lens.php?tab=ldelete");
      ob_end_flush();
      exit;
}
?>