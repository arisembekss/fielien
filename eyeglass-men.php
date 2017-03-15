<?php
//session_start();
require 'connect_db.php';

$seltest="select * from eyeglasses where id_category = '".$_SESSION['eyeMen']."' order by last_update desc limit 6";
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
<body class="w3-light-grey" >
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

<?php

  /*$result =mysqli_query($mysql, $seltest);
  while ($row = $result -> fetch_assoc()) {
    # code...
    $idfirst[]=$row['id_eyeglass'];*/
?>
<!--
<div class="w3-row-padding" style="max-width:1532px;">
    <div class="w3-third w3-margin-bottom" >
      <img src="wp-admin/uploads/<?= $row['angle_depan'];?>" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Single Room</h3>
        <h6 class="w3-opacity">From $99</h6>
        <p>Single bed</p>
        <p>15m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button class="w3-btn-block w3-margin-bottom">Choose Room</button>
      </div>
    </div>
    
    
</div>
-->
<?php
//}
?>

<div class="w3-row-padding w3-padding-16" style="margin-top:40px">

<?php

  $result =mysqli_query($mysql, $seltest);
  while ($row = $result -> fetch_assoc()) {
    # code...
    $idfirst[]=$row['id_eyeglass'];
    
    echo '<div class="w3-third w3-margin-bottom " style="margin-bottom:90px">';
    echo '<a href = "detail-product.php?show='.urlencode(base64_encode($row['id_eyeglass'])).'" style="text-decoration: none">';
    echo '<img src="wp-admin/uploads/'.$row['angle_depan'].'" style="width: 100%;">';
    echo '<div class="w3-white w3-container"><center><h4 class="w3-text-purple">';
    echo $row['nama_produk'];
    echo "</h4></center></div>";     
    echo '</a>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '</div>' ;
    
    
    
    /*echo '<div class="w3-card-2 w3-third w3-hide-medium w3-hide-large" style="height:40%">';
    echo '<img src="wp-admin/uploads/'.$row['angle_depan'].'" style="width: 90%; height:30%; margin-left:5%; margin-top:5px">';
    echo '<br><center><h4 class="w3-text-purple">';
    echo $row['nama_produk'];
    echo "</h4></center>";  
  
    
  
    echo '</div>' ;
    */
  }
  //echo implode(", ", $idfirst).'<br>';
  $countfirst = count($idfirst);
  //echo $countfirst;
?>

	
</div>
<!---->

<!-- <div class="w3-content w3-border-top w3-border-bottom w3-center" style="height: 300px; margin-top: 50px"> -->
<div class="w3-container w3-hide-small w3-border-top w3-border-bottom" style="width:100%;height:400px; margin-top: 100px">

  <img src="wp-admin/uploads/prom.jpg" style="width: 100%; height: 90%">
           
</div>
<div class="w3-content w3-hide-medium w3-hide-large  w3-border-top w3-border-bottom" style="width:100%;height:50%;margin-top: 100px">

  <img src="wp-admin/uploads/prom.jpg" style="width: 100%; height: 90%">
           
</div>
<!-- </div> -->

<div class="w3-row-padding" style="margin-top:50px">
<?php
  $idsecond = array();
  $selsecond = "select * from eyeglasses where id_category = '".$_SESSION['eyeMen']."' and not id_eyeglass= '".$idfirst['0']."' and not id_eyeglass= '".$idfirst['1']."' and not id_eyeglass= '".$idfirst['2']."' and not id_eyeglass= '".$idfirst['3']."' and not id_eyeglass= '".$idfirst['4']."' and not id_eyeglass= '".$idfirst['5']."' order by last_update desc";
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
    echo '<div class="w3-card-2 w3-third w3-hide-medium w3-hide-large" style="height:40%">';
    echo '<img src="wp-admin/uploads/'.$rowsecond['angle_depan'].'" style="width: 90%; height:30% ;margin-left:5%; margin-top:5px">';
    echo '<br><center><h4 class = "w3-text-purple">';
    echo $rowsecond['nama_produk'];
    echo "</h4></center>";  
  
    
  
    echo '</div>' ;*/
   
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