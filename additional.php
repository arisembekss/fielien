<?php
//session_start();
require 'connect_db.php';

$seltest="select * from additional";
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
<div class="w3-content w3-center" style="width:100%;margin-top:175px">

<h1 class="w3-text-teal w3-animate-zoom">C'fielien Additional Product</h1>
<center><div class="w3-border" style="width: 40%"></div></center>
      <!-- <div id="promo1">
      </div>
      
      <div class="w3-display-float-mleft w3-hide-small">
        <div >
          <center>              
            <br>
            <p id="content-promo1" style="color:white">
            Text Promotion for Eyeglass Men
            </p>
          </center>
        </div>  
      </div>
      <div class="w3-display-middle w3-hide-large w3-hide-medium">
        <div class="w3-lime" id="mob-text-promo1">
          <center>
          
            <p style="color:black">
            Text Promotion for Eyeglass Men
            </p>
          </center>
        </div>  
      </div>     -->    
    </div>
<!--  -->

<div class="w3-row-padding" style="margin-top:100px">
<?php

  $result =mysqli_query($mysql, $seltest);
  while ($row = $result -> fetch_assoc()) {
    # code...
   
  echo '
      <div class="w3-content w3-card-2 w3-hide-small" style="min-height:400px">
        <header class="w3-container w3-khaki">
      
          <h2 class="w3-text-grey">'.$row['nama_produk'].'</h2>
        </header>
        <table class="w3-table">
          <tr height="250px">
            <td width="50%" >
              '.$row['keterangan'].'
            </td>
            <td width="50%"  class="w3-display-container">
              <img class="w3-display-middle" style="max-width:100%" src="wp-admin/uploads/'.$row['pic'].'" >
            </td>
          </tr>
        </table>
            
           
      </div>
      <br> <br>
  ';
  echo '
      <div class="w3-content w3-card-2  w3-hide-medium w3-hide-large" style="min-height:400px">
        <header class="w3-container w3-khaki">
      
          <h2 class="w3-text-grey">'.$row['nama_produk'].'</h2>
        </header>
        
          
            <div class="w3-content w3-margin" >
              '.$row['keterangan'].'
            </div>
            <div class="w3-content w3-margin">
            
              <img class="" style="max-width:100%" src="wp-admin/uploads/'.$row['pic'].'" >
              
            </div>
          
        
            
           
      </div>
      <br> <br>
  ';
  }
  
?>

	
	
</div>

      
      
<?php  
include 'footer.php';
?>
</body>
</html>