<?php
session_start();

include('../include/db.php');

// email end

$target_dir_image = "../../images/categories/";
$target_file_image = $target_dir_image . basename($_FILES["image"]["name"]);
$dbPath_image= "images/categories/". basename($_FILES["image"]["name"]);

 if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file_image)) {
   echo 'file uploaded';
   $sql="INSERT INTO categories (title,image,background_color) VALUES 
 ('$_POST[title]','$dbPath_image','$_POST[background_color]')";
$run=mysqli_query($conn,$sql);
if($run) {
   echo  'data inserted';
   header('location:../categories.php?action=dataInserted');


  
  }
   else {
   header('location:../categories.php?action=error');



 }
 }

?>