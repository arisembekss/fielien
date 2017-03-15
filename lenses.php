<?php
//session_start();
require 'connect_db.php';

$seltest="select * from lensa";
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
<div class="w3-container w3-lime" style="width:100%;height:350px;margin-top:75px">

      <div id="promo1">
      </div>
      
      <div class="w3-display-float-mleft w3-hide-small">
        <div >
          <center>              
            <br>
            <p id="content-promo1" style="color:white">
            Text Promotion for Lens
            </p>
          </center>
        </div>  
      </div>
      <div class="w3-display-middle w3-hide-large w3-hide-medium">
        <div class="w3-lime" id="mob-text-promo1">
          <center>
          
            <p style="color:black">
            Text Promotion for Lens
            </p>
          </center>
        </div>  
      </div>        
    </div>
<!--  -->

<div class="w3-row-padding" style="margin-top:100px">
<?php

  $result =mysqli_query($mysql, $seltest);
  while ($row = $result -> fetch_assoc()) {
    # code...
   // $idfirst[]=$row['id_eyeglass'];
    echo '<div class="w3-container w3-hover-shadow w3-panel w3-pale-green w3-border w3-round-xlarge w3-animate-zoom" style="width: 90%;min-height:400px; margin-left:5%">';
    echo '<div  class="w3-container"><h2 class="w3-text-indigo"> '.$row['nama_lensa'].'</h2><div class="w3-border" style="width:40%"></div>';
    echo '<p class="w3-text-black w3-margin" style="margin-left:5px">'.$row['keterangan'].'</p></div>';
    echo '<div style="height:60%">';
    echo '<img class="w3-right w3-card-2 w3-hide-small" src="wp-admin/uploads/'.$row['picture_lensa'].'" style="width: 50%; height:300px; margin-bottom:10px; margin-right:10px">';
    echo '<img class="w3-right w3-card-2 w3-hide-medium w3-hide-large" src="wp-admin/uploads/'.$row['picture_lensa'].'" style="width: 50%; height:60%; margin-bottom:10px; margin-right:10px">';

    echo "</div>";
       
  
  echo '</div>' ;

  //echo '<br><div class="w3-border w3-content" style="width:50%"></div><br>';
  }
  
?>

	
	
</div>

<?php  
include 'footer.php';
?>
</body>
</html>