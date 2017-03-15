<?php
   require 'connect_db.php';
$showpromo1 = "select * from page_index where id=1";
$showstory = "select * from page_index where id=2";
$showservice = "select * from page_index where id=3";
$showanother1 = "select * from page_index where id=4";
$showanother2 = "select * from page_index where id=5";
$showpromo2 = "select * from page_index where id=6";
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

<br>
<!-- <img src="img/img_car.jpg" alt="Car" style="width:100%;margin-top:50px"> -->
<!-- <div class="w3-container" style="margin-top:50px"> -->
<a href="javascript:void(0);" onclick="showEditPromo1()"><i class="fa fa-pencil-square-o w3-xlarge" style="margin-top:50px;margin-left:100px"></i></a>
  <div id="edit-promo-1" class="w3-hide w3-container" style="margin-top:10px" >
      <!-- <form action="upload.php" method="POST" enctype="multipart/form-data">
        select image to upload<br>
        <input type="file" name="image">
        <input type="submit" value="Upload Image" name="submit">
      </form> -->
      <form class="w3-container" action="upload.php" method="POST" enctype="multipart/form-data">
          <label class="w3-text-teal">Image for big screen (pc, llaptop, etc), size : 1500 x 500, example <a href="uploads/tes2.jpg" target="blank">click here</a></label>
         <input class="w3-input" type="file" name="image" placeholder="Image for big size screen (pc, laptop, etc)" /><br>
         <label class="w3-text-teal">Image for mobile screen, size : 1500 x 500 or 1024 x 500, example <a href="uploads/tes1.jpg" target="blank">click here</a></label>
         <input  class="w3-input" type="file" name="imageMob" placeholder="Image for mobile screen"/><br>
         
         <input type="text" placeholder="Judul Promo 1" name="title_promo1" class="w3-input"><span style="color:red">* required</span>
         <input type="text" placeholder="isi Promo 1" name="content_promo1" class="w3-input"><span style="color:red">* required</span>
         <br><br> <input type="submit" value="submit" />
      </form>
      
  </div>
    
    
    
<div class="w3-display-container" style="height:40%;margin-top:20px">
      

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
      
      <div class="w3-display-float-mleft w3-hide-small" >
        <div style="color:black">
          <center>
            
            <?php 
             
             $resultpromo2 = mysqli_query($mysql, $showpromo1);
             while($rowpromo2=$resultpromo2->fetch_assoc()){
   
             echo '<h3 id="title-promo1">'.$rowpromo2['judul'].'</h3>'; 
        
            }
             
              
            ?>
              
            <br>
            <p id="content-promo1" style="color:black">
            <?php 
             $resultpromo3 = mysqli_query($mysql, $showpromo1);
             while($rowpromo3=$resultpromo3->fetch_assoc()){
   
             echo $rowpromo3['content']; 
        
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
        <div id="mob-text-promo1" style="color:black">
          <center>
          <?php  
           
             
             $resultpromo2 = mysqli_query($mysql, $showpromo1);
             while($rowpromo2=$resultpromo2->fetch_assoc()){
   
             echo '<h3 id="title-promo1">'.$rowpromo2['judul'].'</h3>'; 
        
            }
          ?>
            <p style="color:black">
            <?php 
            $resultpromo3 = mysqli_query($mysql, $showpromo1);
             while($rowpromo3=$resultpromo3->fetch_assoc()){
   
             echo $rowpromo3['content']; 
        
            }

        
            ?>
            </p>
          </center>
        </div>  
      </div>        
    </div>

<!-- div short story -->
<center><div class="w3-border-top w3-border-red" style="margin-top:50px;width:70%"></div></center>

<a href="javascript:void(0);" onclick="showEditPromo2()"><i class="fa fa-pencil-square-o w3-xlarge" style="margin-top:50px;margin-left:100px"></i></a>
  <div id="edit-promo-2" class="w3-hide w3-container" style="margin-top:10px" >
      <!-- <form action="upload.php" method="POST" enctype="multipart/form-data">
        select image to upload<br>
        <input type="file" name="image">
        <input type="submit" value="Upload Image" name="submit">
      </form> -->
      <form class="w3-container" action="uploadstory.php" method="POST">
         <!-- <input type="file" name="image" /> -->
         
         <input type="text" placeholder="Story Title" name="title_story" class="w3-input"><span style="color:red">* required</span>
         <input type="text" placeholder="Content Story" name="content_story" class="w3-input"><span style="color:red">* required</span>
         <br><br> <input type="submit" value="submit" />
      </form>
      
  </div>
<div class="w3-row" style="margin-top:20px">
  <div class="w3-third w3-container"></div>
  <div class="w3-third w3-container w3-center">
    <p>
      <?php
        //$showpromo1 = "select * from page_index ";
        $resultstory = mysqli_query($mysql, $showstory);
        while($rowstory=$resultstory->fetch_assoc()){
   
          echo '<p>'.$rowstory['judul'].'</p>'; 
          echo '<p>'.$rowstory['content'].'</p>'; 
        
          }
          
        ?>
    </p>
    
  </div>
  
</div>

<!-- div produk andalan -->
<div class="w3-row" style="margin-top:50px">
  <div class="w3-quarter w3-container">
    
  </div>
  <div class="w3-quarter w3-container w3-center">
    <p>Produk Andalan 1</p>
    <img src="img/andalan1.jpg" class="w3-card-2">
  </div>
  <div class="w3-quarter w3-container w3-center">
    <p>Produk Andalan 2</p>
    <img src="img/andalan2.jpg" class="w3-card-2">
  </div>
  <div class="w3-quarter w3-container">
    
  </div>
</div>

<!-- div service promotion 2 -->
<center><div class="w3-border-top w3-border-red" style="margin-top:50px;width:70%"></div></center>
<a href="javascript:void(0);" onclick="showEditPromo3()"><i class="fa fa-pencil-square-o w3-xlarge" style="margin-top:50px;margin-left:100px"></i></a>
  <div id="edit-promo-3" class="w3-hide w3-container" style="margin-top:10px" >
      <!-- <form action="upload.php" method="POST" enctype="multipart/form-data">

        <input type="file" name="image" class="w3-input">
        <input type="submit" value="Upload Image" name="submit">
      </form> -->
      <form class="w3-container" action="uploadservice.php" method="POST" enctype="multipart/form-data">
                <label class="w3-text-teal">Image size for service field : 1280 x 720</label>
         <input type="file" name="imageservice" class="w3-input"/>

         <input type="text" placeholder="Service Title" name="title_service" class="w3-input"><span style="color:red">* required</span>
         <input type="text" placeholder="Service Content" name="content_service" class="w3-input"><span style="color:red">* required</span>
             <br>     <input type="submit" value="submit" class="w3-btn w3-teal"/>

      </form>
      
  </div>
 <div class="w3-display-container" style="height:500px;margin-top:20px">
      <div class="w3-col l6 s12 w3-center">
        <?php
        //$showpromo1 = "select * from page_index ";
        $resultservice = mysqli_query($mysql, $showservice);
        while($rowservice=$resultservice->fetch_assoc()){
   
          echo '<img id="promo1" class="w3-round-xlarge" src="uploads/'.$rowservice['pic'].'" height="400px" style="width:100%;">'; 
        
          }
          
        ?>
        <!-- <img id="promo1" class="w3-round-xlarge" src="img/promo2.jpg" style="width:100%;height:500px"> -->
      </div>

      <div class="w3-col l6 s12 w3-center w3-hide-small" style="width:40%">
        <div id="text-promo1" style="color:black">
          <center>
            <?php
        //$showpromo1 = "select * from page_index ";
            $resultservice = mysqli_query($mysql, $showservice);
            while($rowservice=$resultservice->fetch_assoc()){
   
            echo '<h3>'.$rowservice['judul'].'</h3>';
            echo '<p>'.$rowservice['content'].'</p>'; 
        
            }
          
            ?>
            <!-- <p style="color:white">
            <h3>Fitur / Pelayanan</h3><br>
            berisi fitur atau pelayanan yang akan dipromosikan
            </p> -->
          </center>
        </div>  
      </div>

      

      <div class="w3-display-middle w3-hide-large w3-hide-medium">
        <div id="mob-text-promo1" style="color:white">
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

<center><div class="w3-border-top w3-border-red" style="margin-top:50px;width:70%"></div></center>
<div class="w3-row-padding" style="margin-top:20px;height:400px">
  <div class="w3-col l6 s12">
  <a href="javascript:void(0);" onclick="showAnotherPromo1()"><i class="fa fa-pencil-square-o w3-xlarge" style="margin-top:50px;margin-left:100px"></i></a>
      <div id="edit-another-1" class="w3-hide w3-container" style="margin-top:10px" >
      <!-- <form action="upload.php" method="POST" enctype="multipart/form-data">
        select image to upload<br>
        <input type="file" name="image">
        <input type="submit" value="Upload Image" name="submit">
      </form> -->
      <form class="w3-container" action="upload-another.php" method="POST" enctype="multipart/form-data">
               <label class="w3-text-teal">Image for Another Promo, size : 700 x 320</label>
         <input type="file" name="imageanother1" class="w3-input"/>
         
         <input type="text" placeholder="Title Another Promo #1" name="another1" class="w3-input"><span style="color:red">* required</span>
         <br><br><input type="submit" value="submit" />

      </form>
      
      </div>
      <div class="w3-card-2" id="another-promo-1" style="height: 400px">
      <?php
        //$showpromo1 = "select * from page_index ";
            $resultanother1 = mysqli_query($mysql, $showanother1);
            while($rowanother1=$resultanother1->fetch_assoc()){
   
            echo '<img src="uploads/'.$rowanother1['pic'].'" height="320px" style="width:100%;">';
            echo '<p class="w3-center">'.$rowanother1['judul'].'</p>'; 
        
          }
          
        ?>
        
        <!-- <p>Another Promo</p>     -->
      </div>
    
  </div>

  <div class="w3-col l6 s12 ">

  <a href="javascript:void(0);" onclick="showAnotherPromo2()" ><i class="fa fa-pencil-square-o w3-xlarge" style="margin-top:50px;margin-left:100px"></i></a>
     <div id="edit-another-2" class="w3-hide w3-container" style="margin-top:10px" >
      <!-- <form action="upload.php" method="POST" enctype="multipart/form-data">
        select image to upload<br>
        <input type="file" name="image">
        <input type="submit" value="Upload Image" name="submit">
      </form> -->
      <form class="w3-container" action="upload-another2.php" method="POST" enctype="multipart/form-data">
               <label class="w3-text-teal">Image for Another Promo, size : 700 x 320</label>
         <input type="file" name="imageanother2" class="w3-input" />
         
         <input type="text" placeholder="Title Another Promo #2" name="another2" class="w3-input"><span style="color:red">* required</span>
         <br><br><input type="submit" value="submit" />

      </form>
      
      </div>
      <div class="w3-card-2" id="another-promo-2" style="height: 400px">
        <?php
        //$showpromo1 = "select * from page_index ";
            $resultanother2 = mysqli_query($mysql, $showanother2);
            while($rowanother2=$resultanother2->fetch_assoc()){
   
            echo '<img src="uploads/'.$rowanother2['pic'].'" height="320px" style="width:100%;">';
            echo '<p class="w3-center">'.$rowanother2['judul'].'</p>'; 
        
          }
          
        ?>  
      </div>
    
  </div>
</div>

<!-- div promotion 2 -->
<center><div class="w3-border-top w3-border-red" style="margin-top:250px;width:70%"></div></center>
<a href="javascript:void(0);" onclick="showEditPromo4()"><i class="fa fa-pencil-square-o w3-xlarge" style="margin-top:50px;margin-left:100px"></i></a>
  <div id="edit-promo-4" class="w3-hide w3-container" style="margin-top:10px" >
      <!-- <form action="upload.php" method="POST" enctype="multipart/form-data">
        select image to upload<br>
        <input type="file" name="image">
        <input type="submit" value="Upload Image" name="submit">
      </form> -->
      <form class="w3-container" action="upload-promo4.php" method="POST" enctype="multipart/form-data">
         <label class="w3-text-teal">Image for big screen, size : 1500 x 500, example <a href="uploads/tes2.jpg" target="blank">click here</a></label>
         <input class="w3-input" type="file" name="image4" />
         <label class="w3-text-teal">Image for mobile screen, size : 1500 x 500 or 1024 x 500, example <a href="uploads/tes1.jpg" target="blank">click here</a></label>
         <input class="w3-input" type="file" name="image4mob" />
         <input type="text" placeholder="Judul Promo" name="title_promo4" class="w3-input"><span style="color:red">* required</span>
         <input type="text" placeholder="isi Promo" name="content_promo4" class="w3-input"><span style="color:red">* required</span>
         <br><br><input type="submit" value="submit" />

      </form>
      
  </div>
<div class="w3-display-container" style="height:500px;margin-top:20px">
            
      <div id="promo2">
        <?php
        //$showpromo1 = "select * from page_index ";
        $resultpromo4 = mysqli_query($mysql, $showpromo2);
        while($rowpromo4=$resultpromo4->fetch_assoc()){
   
          echo '<img src="uploads/'.$rowpromo4['pic'].'" style="width:100%;height:500px">'; 
        
          }
          
        ?>
        
      </div>
      
      <div class="w3-display-float-mleft w3-hide-small" style="width:40%">
        <div style="color:white">
          <center>
            
            <?php 
             
             $resultpromo5 = mysqli_query($mysql, $showpromo2);
             while($rowpromo5=$resultpromo5->fetch_assoc()){
   
             echo '<h3 id="title-promo1">'.$rowpromo5['judul'].'</h3>'; 
             echo '<p>'.$rowpromo5['content'].'</p>';
            }
             
              
            ?>
              
            
          </center>
        </div>  
      </div>

      <!-- <div class="w3-display-middle w3-hide-small" style="color:black">
        <p>Picture Promotion 1</p>
        1066 x 500
      </div> -->

      <div class="w3-display-middle w3-hide-large w3-hide-medium">
        <div id="mob-text-promo1" style="color:white">
          <center>
          <?php  
           
             
             $resultpromo5 = mysqli_query($mysql, $showpromo2);
             while($rowpromo5=$resultpromo5->fetch_assoc()){
   
             echo '<h3 id="title-promo1">'.$rowpromo5['judul'].'</h3>'; 
             echo "<p>".$rowpromo5['content']."</p>";
        
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
