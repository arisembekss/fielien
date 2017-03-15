<?php
   require 'connect_db.php';

$title_promo1 = $_POST['title_promo4'];  
$content_promo1 = $_POST['content_promo4'];
$insimage = $_FILES['image4']['name'];
$insimagemob = $_FILES['image4mob']['name'];
$up_pic = "update page_index set pic='".$insimage."', pic_mob = '".$insimagemob."', judul='".$title_promo1."', content='".$content_promo1."' where id=6;";

$resinsertpromo=mysqli_query($mysql, $up_pic);
//$resinserttext=mysqli_query($mysql, $up_txt_promo);
$file_name = "";
$file_size = "";
$file_type = "";

   if(isset($_FILES['image4'])){
      $errors= array();
      $file_name = $_FILES['image4']['name'];
      $file_size =$_FILES['image4']['size'];
      $file_tmp =$_FILES['image4']['tmp_name'];
      $file_type=$_FILES['image4']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      /*$expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }*/
      
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

   if(isset($_FILES['image4mob'])){
      $errorsmob= array();
      $file_namemob = $_FILES['image4mob']['name'];
      $file_sizemob =$_FILES['image4mob']['size'];
      $file_tmpmob =$_FILES['image4mob']['tmp_name'];
      $file_typemob=$_FILES['image4mob']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      /*$expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }*/
      
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