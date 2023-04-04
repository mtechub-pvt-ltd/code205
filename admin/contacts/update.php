<?php
session_start();

include('../include/db.php');
if(isset($_FILES["image"]["name"])) {
  $target_dir_image = "../../images/categories/";
  $target_file_image = $target_dir_image . basename($_FILES["image"]["name"]);
  $dbPath_image= "images/categories/". basename($_FILES["image"]["name"]);
  
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file_image)) {
    
    $sql="UPDATE categories SET image='$dbPath_image' WHERE id='$_POST[id]'";
    $run=mysqli_query($conn,$sql);
    if($run) {
       echo  'data updated';
       header('location:../categories.php?action=dataUpdated');
      
      }
       else {
       header('location:../categories.php?action=error');
    
     }
   }





}
else {
  $sql="UPDATE categories SET title='$_POST[title]',background_color='$_POST[background_color]' WHERE id='$_POST[id]'";
    $run=mysqli_query($conn,$sql);
    if($run) {
       echo  'data updated';
       header('location:../categories.php?action=dataUpdated');
      
      }
       else {
       header('location:../categories.php?action=error');
    
     }
}

?>


                                
                         