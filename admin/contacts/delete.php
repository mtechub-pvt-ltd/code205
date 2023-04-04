<?php
session_start();

include('../include/db.php');
$sql="DELETE FROM categories WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
if($run) {
   echo  'data inserted';
   header('location:../categories.php?action=dataDeleted');
  
  }
   else {
   header('location:../categories.php?action=error');

 }
?>


                                
                         