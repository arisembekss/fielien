<?php  
require 'connect_db.php';
if (isset($_GET['show'])) {
  # code...
  foreach($_GET as $loc=>$show)
    $_GET[$loc] = urldecode(base64_decode($show));

  $idProduk = $_GET['show'];
} else{$idProduk='';}
$selprod = "select * from eyeglasses where id_eyeglass = '".$idProduk."'";
$resprod = mysqli_query($mysql, $selprod);
while ($rowprod = $resprod -> fetch_assoc()) {
  # code...
  $idcat  = $rowprod['id_category'];
}
?>
<!DOCTYPE html>

<html>
<head>
<?php  
include 'head.php';
?>
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
</head>
<body>

<?php  
include 'nav.php';
?>

<div class="w3-container w3-card-2" style="width: 100%; height: 80%;margin-top: 3%">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <?php
              if ($idcat == 1) {
                # code...
                echo '<li><a href="services.php?category='. urlencode(base64_encode(1)).'">Eyeglass</a></li>';
              } else {
                echo '<li><a href="services.php?category='. urlencode(base64_encode(2)).'">Eyeglass</a></li>';
              }
            ?>
            <li class="active">Detail</li>
        </ol>
    </div>
</div>
<center>
<div style=" width: 50%">
<?php  
//require 'connect_db.php';
  $selpictprod = "select * from eyeglasses where id_eyeglass = '".$idProduk."'";
  $respictprod = mysqli_query($mysql, $selpictprod);
  while ($rowpictprod = $respictprod->fetch_assoc()) {
    # code...
    echo '<img class="mySlides w3-animate-left" src="wp-admin/uploads/'.$rowpictprod['angle_depan'].'" style="width:100%">';
    echo '<img class="mySlides w3-animate-right" src="wp-admin/uploads/'.$rowpictprod['angle_samping'].'" style="width:100%; height: 100%">';

    ?>
</div>

</center>
  <div class="w3-center w3-section w3-large w3-text-white w3-left" style="width:100%">
    <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)" style="color: black; font-size: 30px">&#10094;</div>
    <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)" style="color: black; font-size:30px">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-teal" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-teal" onclick="currentDiv(2)"></span>
  </div>
  <div class="w3-center w3-row">
    <div class="w3-half w3-container">
      <h2><?php echo $rowpictprod['nama_produk']; ?></h2><br>
      <div class="w3-text-grey">Starting at Rp <?php echo $rowpictprod['harga']; ?>,- </div><br>  <!-- <?php echo $idProduk.'<br>'; ?> -->
    </div>
    <div class="w3-half w3-container">
       <br><br><br><div class="w3-text-grey"> including prescription lenses. <br>Visit our store</div><br>
        
    </div>
    
    
  </div>
</div>
    <?php
  }
?>
  
  <!-- <img class="mySlides w3-animate-left" src="img/promo2.jpg" style="width:100%; height: 100%"> -->
  <!-- <img class="mySlides w3-animate-zoom" src="img/promo3.jpg" style="width:100%; height: 100%"> -->


<!-- detail frame -->
<div class="w3-container " style="width:100%; margin-top: 25px">
  <div class="w3-row">
    <div class="w3-col l6 s12 w3-container">
      <div style="margin-left: 40px">
        <h2>Detail Frame</h2> 
        <br>
        Keterangan frame <br><br>
        Frame Fit :<br>
        Measurements :<br> 
      </div>
      
      

    </div>

    <div class="w3-col l6 s12 w3-display-container">
      <center>
      <div>
        <img src="img/img_car.jpg" class="w3-card-8" style="margin-top: 10px; width:100%">  
      </div>
      <!-- <h2>Photo Frame</h2> -->
      
     
      </center>
    </div>
  </div>
</div>

<!-- Detail Produk -->
<div class="w3-container w3-topbar w3-border-sand w3-white" style="margin-top: 25px; ">
  <h2>Nothing But The Best</h2>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>

<!-- div promises -->

<div class="w3-content w3-pale-blue w3-topbar w3-bottombar w3-border-blue" style="margin-top: 50px; width: 80%">
    
    <h2>Our Promises</h2> 
    <br><br><br><br><br><br><br><br><br><br>
  </div>


<script>
var slideIndex = 1;
  showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
</script>

<?php  
include 'footer1.php';
?>
</body>
</html>