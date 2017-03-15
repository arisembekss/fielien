<?php
   require 'connect_db.php';

$title_promo1 = $_POST['title_promo1'];  
$content_promo1 = $_POST['content_promo1'];
$insimage = $_FILES['image']['name'];
$insimagemob = $_FILES['imageMob']['name'];
$up_pic = "update page_index set pic='".$insimage."', pic_mob = '".$insimagemob."',judul='".$title_promo1."', content='".$content_promo1."' where id=1;";

$resinsertpromo=mysqli_query($mysql, $up_pic);
//$resinserttext=mysqli_query($mysql, $up_txt_promo);
$file_name = "";
$file_size = "";
$file_type = "";

   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         //echo "Success";
         //$_SESSION['imgup'] = $_FILES['image']['name'];
      }else{
         print_r($errors);
      }

      /*header("Location: edit-index");
      ob_end_flush();
      exit;*/
   }

   if(isset($_FILES['imageMob'])){
      $errorsmob= array();
      $file_namemob = $_FILES['imageMob']['name'];
      $file_sizemob =$_FILES['imageMob']['size'];
      $file_tmpmob =$_FILES['imageMob']['tmp_name'];
      $file_typemob=$_FILES['imageMob']['type'];
      
      
      if($file_sizemob > 2097152){
         $errorsmob[]='File size must be excately 2 MB';
      }
      
      if(empty($errorsmob)==true){
         move_uploaded_file($file_tmpmob,"uploads/".$file_namemob);
         //echo "Success";
         //$_SESSION['imgup'] = $_FILES['image']['name'];
      }else{
         print_r($errorsmob);
      }

      
   }
   header("Location: edit-index");
      ob_end_flush();
      exit;
?>
<!-- <html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html> -->