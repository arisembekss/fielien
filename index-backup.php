<?php  
require 'connect_db.php';
//session_start();
$showpromo1 = "select * from page_index where id=1";
$showstory = "select * from page_index where id=2";
$showservice = "select * from page_index where id=3";
$showanother1 = "select * from page_index where id=4";
$showanother2 = "select * from page_index where id=5";
$showpromo2 = "select * from page_index where id=6";
//$resultpromo1 = mysqli_query($mysql, $showpromo1);

//session_start();
$imgses = $_SESSION['lens'];
?>
<!DOCTYPE html>
<html>
<head>
<?php  
include 'head.php';
?>
</head>
<body>
<?php  
include 'menu.php';
?>
  
    <div class="w3-display-container" style="height:40%;margin-top:55px">

      <div id="promo1" class="w3-hide-small">
        <?php
        //$showpromo1 = "select * from page_index ";
        $resultpromo1 = mysqli_query($mysql, $showpromo1);
        while($rowpromo1=$resultpromo1->fetch_assoc()){
   
          echo '<img src="uploads/'.$rowpromo1['pic'].'" height="500px" style="width:100%;">'; 
        
          }
          
        ?>
        
      </div>
       <div id="promo1" class="w3-hide-large w3-hide-medium">
        <?php
        //$showpromo1 = "select * from page_index ";
        $resultpromo1 = mysqli_query($mysql, $showpromo1);
        while($rowpromo1=$resultpromo1->fetch_assoc()){
   
          echo '<img src="uploads/'.$rowpromo1['pic_mob'].'" style="width:100%;height:40%">'; 
        
          }
          
        ?>
        
      </div>
      
      <div class="w3-display-float-mleft w3-container w3-hide-small" style="width:20%">
        <div class="w3-text-black">
          <center>
            
            <?php 
             
             $resultpromo2 = mysqli_query($mysql, $showpromo1);
             while($rowpromo2=$resultpromo2->fetch_assoc()){
   
             echo '<h3 id="title-promo1">'.$rowpromo2['judul'].'</h3>'; 
        
            }
             
              
            ?>
              
            <br>
            <p id="content-promo1" class="w3-text-black">
            <?php 
             $resultpromo3 = mysqli_query($mysql, $showpromo1);
             while($rowpromo3=$resultpromo3->fetch_assoc()){
   
             echo $rowpromo3['content'].'
             <br><br>
              <a class="w3-btn w3-pale-blue" href="sg-men" style="text-decoration:none">Shop Now</a>
             '; 
        
            }

        
            ?>
            </p>
          </center>
        </div>  
      </div>

      <!-- <div class="w3-display-middle w3-hide-small" style="color:black">
        <p>Picture Promotion 1</p>
        1066 x 500
      </div> -->

      <div class="w3-content w3-hide-large w3-hide-medium">
        <div id="mob-text-promo1" class="w3-text-black" >
          <center>
          <?php  
           
             
             $resultpromo2 = mysqli_query($mysql, $showpromo1);
             while($rowpromo2=$resultpromo2->fetch_assoc()){
   
             echo '<h3 id="title-promo1">'.$rowpromo2['judul'].'</h3>'; 
        
            }
          ?>
            <p class="w3-text-black">
            <?php 
            $resultpromo3 = mysqli_query($mysql, $showpromo1);
             while($rowpromo3=$resultpromo3->fetch_assoc()){
   
             echo $rowpromo3['content'].'<br><br>
              <a class="w3-btn w3-pale-blue" href="sg-men" style="text-decoration:none">Shop Now</a>'; 
        
            }

        
            ?>
            </p>
          </center>
        </div>  
      </div>        
    </div>
    
  
<!-- div short story -->
<div class="w3-row w3-border-top" style="margin-top:50px">
  <div class="w3-third w3-container"></div>
  <div class="w3-third w3-container w3-center w3-text-black">
    <p>
      <?php
        //$showpromo1 = "select * from page_index ";
        $resultstory = mysqli_query($mysql, $showstory);
        while($rowstory=$resultstory->fetch_assoc()){
   
          echo '<h3>'.$rowstory['judul'].'</h3>'; 
        
          }
          
        ?>
    </p>
  <p>
   <!--  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." -->
   <?php
        //$showpromo1 = "select * from page_index ";
        $resultstorycontent = mysqli_query($mysql, $showstory);
        while($rowstorycontent=$resultstorycontent->fetch_assoc()){
   
          echo $rowstorycontent['content']; 
        
          }
          
        ?>
  </p>  
  </div>
  
</div>

<!-- div produk andalan -->
<div class="w3-row w3-text-black w3-border-bottom" style="margin-top:50px">
  <div class="w3-quarter w3-container">
    
  </div>
  <div class="w3-quarter w3-container w3-center">
    <p>Produk Andalan 1</p>
    <img src="img/andalan1.jpg" class="w3-card-2"><br><br>
  </div>
  <div class="w3-quarter w3-container w3-center">
    <p>Produk Andalan 2</p>
    <img src="img/andalan2.jpg" class="w3-card-2"><br><br>
  </div>
  <div class="w3-quarter w3-container">
    
  </div>
</div>

<!-- div service promotion 2 -->
 <div class="w3-display-container w3-text-black" style="height:500px;margin-top:50px">
      <div class="w3-col l6 s12 w3-hide-large w3-hide-medium w3-center">
       <?php
        //$showpromo1 = "select * from page_index ";
        $resultservice = mysqli_query($mysql, $showservice);
        while($rowservice=$resultservice->fetch_assoc()){
   
          echo '<img id="promo1" class="w3-round-xlarge" src="uploads/'.$rowservice['pic'].'" height="250px" style="width:100%;">'; 
        
          }
          
        ?>
      </div>
      <div class="w3-col l6 s12 w3-hide-small w3-center">
       <?php
        //$showpromo1 = "select * from page_index ";
        $resultservice = mysqli_query($mysql, $showservice);
        while($rowservice=$resultservice->fetch_assoc()){
   
          echo '<img id="promo1" class="w3-round-xlarge" src="uploads/'.$rowservice['pic'].'" height="400px" style="width:100%;">'; 
        
          }
          
        ?>
      </div>

      <!-- <div class="w3-display-float-mleft w3-hide-small" style="width:40%"> -->
      <div class="w3-col l6 s12  w3-center">
        <div id="text-promo1" >
          <center>
            <?php
        //$showpromo1 = "select * from page_index ";
            $resultservice = mysqli_query($mysql, $showservice);
            while($rowservice=$resultservice->fetch_assoc()){
   
            echo '<h3>'.$rowservice['judul'].'</h3>';
            echo '<p>'.$rowservice['content'].'</p>'; 
        
          }
          
        ?>
          </center>
        </div>  
      </div>

            
    </div>

<!-- div another promo -->
<div class="w3-row">
<div class="w3-row-padding w3-hide-small" style="margin-top:50px;height:400px;margin-bottom:100px">
  <div class="w3-half w3-card-2 w3-center" style="height: 400px;">
    <?php
        //$showpromo1 = "select * from page_index ";
            $resultanother1 = mysqli_query($mysql, $showanother1);
            while($rowanother1=$resultanother1->fetch_assoc()){
   
            echo '<img src="uploads/'.$rowanother1['pic'].'" height="320px" style="width:100%;margin-top:5px">';
            echo '<p>'.$rowanother1['judul'].'</p>'; 
        
          }
          
        ?>
  </div>

  <div class="w3-half w3-card-2 w3-center " style="height: 400px; ">
    <?php
        //$showpromo1 = "select * from page_index ";
            $resultanother2 = mysqli_query($mysql, $showanother2);
            while($rowanother2=$resultanother2->fetch_assoc()){
   
            echo '<img src="uploads/'.$rowanother2['pic'].'" height="320px" style="width:100%; margin-top:5px">';
            echo '<p>'.$rowanother2['judul'].'</p>'; 
        
          }
          
        ?>
  </div>
  <!-- <div class="w3-half w3-card-2 w3-center w3-hide-large w3-hide-medium" style="margin-top:50px; height: 400px">
    <?php
        
            $resultanother2 = mysqli_query($mysql, $showanother2);
            while($rowanother2=$resultanother2->fetch_assoc()){
   
            echo '<img src="uploads/'.$rowanother2['pic'].'" style="width:100%; height:80%">';
            echo '<p>'.$rowanother2['judul'].'</p>'; 
        
          }
          
        ?>
  </div> -->

</div>

<div class="w3-row-padding w3-hide-medium w3-hide-large" style="margin-top:50px;height:400px;margin-bottom:100px">
  <div class="w3-half w3-card-2 w3-center" style="height: 300px;">
    <?php
        //$showpromo1 = "select * from page_index ";
            $resultanother1 = mysqli_query($mysql, $showanother1);
            while($rowanother1=$resultanother1->fetch_assoc()){
   
            echo '<img src="uploads/'.$rowanother1['pic'].'" height="200px" style="width:100%;margin-top:15px">';
            echo '<p>'.$rowanother1['judul'].'</p>'; 
        
          }
          
        ?>
  </div>

  <div class="w3-half w3-card-2 w3-center " style="height: 300px; ">
    <?php
        //$showpromo1 = "select * from page_index ";
            $resultanother2 = mysqli_query($mysql, $showanother2);
            while($rowanother2=$resultanother2->fetch_assoc()){
   
            echo '<img src="uploads/'.$rowanother2['pic'].'" height="200px" style="width:100%; margin-top:15px">';
            echo '<p>'.$rowanother2['judul'].'</p>'; 
        
          }
          
        ?>
  </div>
  <!-- <div class="w3-half w3-card-2 w3-center w3-hide-large w3-hide-medium" style="margin-top:50px; height: 400px">
    <?php
        
            $resultanother2 = mysqli_query($mysql, $showanother2);
            while($rowanother2=$resultanother2->fetch_assoc()){
   
            echo '<img src="uploads/'.$rowanother2['pic'].'" style="width:100%; height:80%">';
            echo '<p>'.$rowanother2['judul'].'</p>'; 
        
          }
          
        ?>
  </div> -->

</div>
</div>

<!-- div promotion 2 -->
<div class="w3-border-top w3-border-grey w3-text-black" style="margin-top:100px"></div>
<!-- <div id="promosi2">
  <div class="w3-display-container" style="height:500px">
    
  </div>
</div> -->
<div class="w3-display-container" style="height:40%;">
        
      <div id="promo2" class="w3-hide-small">
        <?php
        //$showpromo1 = "select * from page_index ";
        $resultpromo4 = mysqli_query($mysql, $showpromo2);
        while($rowpromo4=$resultpromo4->fetch_assoc()){
   
          echo '<img src="uploads/'.$rowpromo4['pic'].'" height="500px" style="width:100%;">'; 
        
          }
          
        ?>
        
      </div>

       <div id="promo2" class="w3-hide-medium w3-hide-large">
        <?php
        //$showpromo1 = "select * from page_index ";
        $resultpromo4 = mysqli_query($mysql, $showpromo2);
        while($rowpromo4=$resultpromo4->fetch_assoc()){
   
          echo '<img src="uploads/'.$rowpromo4['pic_mob'].'" style="width:100%;height:40%">'; 
        
          }
          
        ?>
        
      </div>
      
      <div class="w3-display-float-mleft w3-hide-small" style="width:20%">
        <div >
          <center>
            
            <?php 
             
             $resultpromo5 = mysqli_query($mysql, $showpromo2);
             while($rowpromo5=$resultpromo5->fetch_assoc()){
   
             echo '<h3 id="title-promo1">'.$rowpromo5['judul'].'</h3>'; 
             echo '<p>'.$rowpromo5['content'].'</p> <br><br>
              <a class="w3-btn w3-pale-blue" href="additional" style="text-decoration:none">Shop Now</a>';
        
            }
             
              
            ?>
              
            
          </center>
        </div>  
      </div>


      <!-- <div class="w3-display-middle w3-hide-small" style="color:black">
        <p>Picture Promotion 1</p>
        1066 x 500
      </div> -->

      <div class="w3-content w3-hide-large w3-hide-medium" style="margin-top:20px">
        <div id="mob-text-promo1" style="color:black">
          <center>
          <?php  
           
             
             $resultpromo5 = mysqli_query($mysql, $showpromo2);
             while($rowpromo5=$resultpromo5->fetch_assoc()){
   
             echo '<h3 id="title-promo1">'.$rowpromo5['judul'].'</h3>'; 
             echo '<p>'.$rowpromo5['content'].'</p> <br><br>
              <a class="w3-btn w3-pale-blue" href="additional" style="text-decoration:none">Shop Now</a>';
        
            }
          ?>
            
          </center>
        </div>  
      </div>      
    </div>





<?php  
include 'footer.php';
?>

</body>
</html>