<?php  
require 'connect_db.php';


   /*=================*/
   $title_promo2 = $_POST['another2'];  

$insimage = $_FILES['imageanother2']['name'];
$up_another2 = "update page_index set pic='".$insimage."', judul='".$title_promo2."' where id=5;";

$resinsertanother1=mysqli_query($mysql, $up_another2);
//$resinserttext=mysqli_query($mysql, $up_txt_promo);
$file_name = "";
$file_size = "";
$file_type = "";

   if(isset($_FILES['imageanother2'])){
      $errors= array();
      $file_name = $_FILES['imageanother2']['name'];
      $file_size =$_FILES['imageanother2']['size'];
      $file_tmp =$_FILES['imageanother2']['tmp_name'];
      $file_type=$_FILES['imageanother2']['type'];
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

      header("Location: edit-index");
      ob_end_flush();
      exit;
   }
?>