<?php  
require 'connect_db.php';
if (isset($_POST['addcategory'])) {
	# code...
	addCategory();
} elseif (isset($_POST['editcategory'])) {
	# code...
	editCategory();
} elseif (isset($_POST['delcategory'])) {
	# code...
	deleteCategory();
}

function addCategory(){
	require 'connect_db.php';
	$date = date('d-m-y');
	$time = date('h:i:sa');
	$last_update = $date." ".$time;
	$insertname = $_POST['addCat'];
	$insertdesc = $_POST['addDesc'];
	$queryaddcat = "insert into category (name_category, short_desc, last_update) values ('".$insertname."', '".$insertdesc."', '".$last_update."')";
	$resultaddcat = mysqli_query($mysql, $queryaddcat);

	header("Location: admin-category.php");
      ob_end_flush();
      exit;
	//echo $_POST['addCat'];
}

function editCategory(){
	require 'connect_db.php';
	$date = date('d-m-y');
	$time = date('h:i:sa');
	$last_update = $date." ".$time;
	$queryUpdateCat = "update category set name_category = '".$_POST['edCat']."', short_desc = '".$_POST['edDesc']."', last_update = '".$last_update."' where id_category = ".$_POST['edIdCat']."";
	$resulteditcat = mysqli_query($mysql, $queryUpdateCat);
	//header("Location: admin-category.php");
	header("Location: admin-category.php?tab=ctedit");
      ob_end_flush();
      exit;
	//echo $_POST['edIdCat'];
}

function deleteCategory(){
	require 'connect_db.php';
	$querydelcat = "delete from category where id_category = ".$_POST['delcategory']."";
	$resultdelcat = mysqli_query($mysql, $querydelcat);
	//echo $_POST['delcategory'];
	header("Location: admin-category.php?tab=ctdelete");
      ob_end_flush();
      exit;
}
?>