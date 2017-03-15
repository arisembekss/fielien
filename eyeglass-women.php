<?php
//session_start();
require 'connect_db.php';

$seltest="select * from eyeglasses where id_category = '".$_SESSION['eyeWomen']."' order by last_update desc limit 6";
$colors = array("red", "green", "blue", "yellow"); 
$cars = array("volvo", "mitsu", "merc", "bmw");

$idfirst = array();
//$countfirst = count($idfirst)

?>
<!DOCTYPE html>

<html>
<head>
<?php  
include 'head.php';
?>

</head>
<body>
<!-- header -->
<?php  
include 'menu.php';
?>
<!-- end header -->
<div class="w3-container w3-hide-small" style="width:100%;height:400px;margin-top:75px">

  <img src="wp-admin/uploads/prom.jpg" style="width: 100%; height: 90%">
           
</div>
<div class="w3-content w3-hide-medium w3-hide-large" style="width:100%;height:50%;margin-top:75px">

  <img src="wp-admin/uploads/prom.jpg" style="width: 100%; height: 90%">
           
</div>
<!--  -->

<div class="w3-row-padding" style="margin-top:40px">
<?php

  $result =mysqli_query($mysql, $seltest);
  while ($row = $result -> fetch_assoc()) {
    # code...
    $idfirst[]=$row['id_eyeglass'];
    
    echo '<div class="w3-third w3-margin-bottom " >';
    echo '<a href = "detail-product.php?show='.urlencode(base64_encode($row['id_eyeglass'])).'" style="text-decoration: none">';
    echo '<img src="wp-admin/uploads/'.$row['angle_depan'].'" style="width: 100%;">';
    echo '<div class="w3-white w3-container"><center><h4 class="w3-text-purple">';
    echo $row['nama_produk'];
    echo "</h4></center></div>";     
    echo '</a>';
    echo '</div>' ;
    /*
    echo '<a href = "detail-product.php?show='.urlencode(base64_encode($row['id_eyeglass'])).'" style="text-decoration: none" value="'.$row['id_eyeglass'].'" name="idProduct">';
    echo '<div class="w3-hover-shadow w3-hide-small w3-third" style="height:400px">';
    echo '<img src="wp-admin/uploads/'.$row['angle_depan'].'" style="width: 90%; height:40%; margin-left:5%; margin-top:20%">';
    echo '<br><br><center><h4 class="w3-text-purple">';
    echo $row['nama_produk'];
    echo "</h4></center>";  
  
    
  
    echo '</div>' ;

    echo '<div class="w3-card-2 w3-hide-medium w3-hide-large w3-third" style="height:40%">';
    echo '<img src="wp-admin/uploads/'.$row['angle_depan'].'" style="width: 90%; height:30%; margin-left:5%; margin-top:5px">';
    echo '<br><center><h4 class="w3-text-purple">';
    echo $row['nama_produk'];
    echo "</h4></center>";  
  
    
  
    echo '</div>' ;
    echo '</a>';*/
  }
  //echo implode(", ", $idfirst).'<br>';
  $countfirst = count($idfirst);
  //echo $countfirst;
?>

	
	
</div>

<div class="w3-container w3-hide-small w3-border-top w3-border-bottom" style="width:100%;height:400px; margin-top: 100px">

  <img src="wp-admin/uploads/prom.jpg" style="width: 100%; height: 90%">
           
</div>
<div class="w3-content w3-hide-medium w3-hide-large  w3-border-top w3-border-bottom" style="width:100%;height:50%;margin-top: 100px">

  <img src="wp-admin/uploads/prom.jpg" style="width: 100%; height: 90%">
           
</div>

<div class="w3-row-padding" style="margin-top:50px">
<?php
  $idsecond = array();
  $selsecond = "select * from eyeglasses where id_category = '".$_SESSION['eyeWomen']."' and not id_eyeglass= '".$idfirst['0']."' and not id_eyeglass= '".$idfirst['1']."' and not id_eyeglass= '".$idfirst['2']."' and not id_eyeglass= '".$idfirst['3']."' and not id_eyeglass= '".$idfirst['4']."' and not id_eyeglass= '".$idfirst['5']."' order by last_update desc limit 12";
  $resultsecond =mysqli_query($mysql, $selsecond);
  while ($rowsecond = $resultsecond -> fetch_assoc()) {
    # code...
    $idsecond[]=$rowsecond['id_eyeglass'];
    
    echo '<div class="w3-third w3-margin-bottom " >';
    echo '<a href = "detail-product.php?show='.urlencode(base64_encode($rowsecond['id_eyeglass'])).'" style="text-decoration: none">';
    echo '<img src="wp-admin/uploads/'.$rowsecond['angle_depan'].'" style="width: 100%;">';
    echo '<div class="w3-white w3-container"><center><h4 class = "w3-text-purple">';
    echo $rowsecond['nama_produk'];
    echo '</h4></center></div>';  
    echo '</a>';
    echo '</div>' ;

/*
    echo '<a href = "detail-product.php?show='.urlencode(base64_encode($rowsecond['id_eyeglass'])).'" style="text-decoration: none">';
    echo '<div class="w3-hover-shadow w3-hide-small w3-third" style="height:400px">';
    echo '<img src="wp-admin/uploads/'.$rowsecond['angle_depan'].'" style="width: 90%; height:300px">';
    echo '<br><br><center><h4 class="w3-text-purple">';
    echo $rowsecond['nama_produk'];
    echo "</h4></center>";  
  
    
  
    echo '</div>' ;

    echo '<div class="w3-hover-shadow w3-hide-medium w3-hide-large w3-third" style="height:40%">';
    echo '<img src="wp-admin/uploads/'.$rowsecond['angle_depan'].'" style="width: 90%; height:30% ;margin-left:5%; margin-top:5px">';
    echo '<br><center><h4 class="w3-text-purple">';
    echo $rowsecond['nama_produk'];
    echo "</h4></center>";  
  
    
  
    echo '</div>' ;
    echo "</a>";*/
  }
  $countsecond = count($idsecond)
  /*echo implode(", ", $idfirst).'<br>';
  $countfirst = count($idfirst);
  echo $countfirst;*/
?>


  
</div>

<!-- <div class="w3-content w3-border-top w3-border-bottom w3-center" style="height: 300px; margin-top: 50px">
  Boo
</div> -->
<?php  
include 'footer.php';
?>
</body>
</html>