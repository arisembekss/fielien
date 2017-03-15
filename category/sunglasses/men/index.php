<?php
require '../../../connect_db.php';
$seltest="select * from page_index";
$colors = array("red", "green", "blue", "yellow"); 
$cars = array("volvo", "mitsu", "merc", "bmw");

?>
<!DOCTYPE html>

<html>
<head>
<?php  
include '../../../head.php';
?>

</head>
<body>
<!-- header -->
<?php  
include '../../../header.php';
?>
<!-- end header -->

<div class="w3-row-padding" style="margin-top:100px">
<?php
/*foreach($colors as $value) {
  foreach ($cars as $valcar) {
    echo '<div class="w3-card-2 w3-third" style="height:75px">';
  echo $value;  
  echo '<br>';
    echo $valcar;
  
  echo '</div>' ;
}
  }
	*/
  $result =mysqli_query($mysql, $seltest);
  while ($row = $result -> fetch_assoc()) {
    # code...
    echo '<div class="w3-card-2 w3-third" style="height:250px">';
  echo $row['judul'];  
  echo '<br>';
    echo $row['content'];
  
  echo '</div>' ;
  }
?>

	
	
</div>
<?php  
include '../../../footer.php';
?>
</body>
</html>