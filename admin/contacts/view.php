<?php
session_start();

include('../include/db.php');
echo '';

     $sql="SELECT * FROM categories  WHERE id = '$_GET[id]'";
     $run=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($run)) {
    echo    '  
    <form action="categories/update.php" method="POST" enctype="multipart/form">
    <div class="form-group mb-3">
    <label class="text-white mb-3 mt-2">Title
    </label>
    <input type="text" class="form-control  text-dark" name="title"
    value="'.$row['title'].'"
        placeholder="Enter Title" required>
    <input type="text" class="form-control d-none  text-dark" name="id"
    value="'.$row['id'].'"
        placeholder="Enter Title" required>
</div>
<div class="form-group mt-4 d-flex justify-content-between">
    <label class="text-white">Background Color
            </label>
    <input type="color" 
    value="'.$row['background_color'].'"
    name="background_color"
     required>
</div>


<button type="submit" class="btn btn-primary col-12 mt-5 ">Submit</button>
</form>
<hr> 
<form action="categories/update.php" method="POST" enctype="multipart/form-data">

<div class="form-group">
    <div class="row">
    <div class="col-8">
    
    <label class="text-white mb-3 mt-2">Current Image
            </label>
    </div>
    <div class="col-4 mb-3 text-right">
    
                              <img src="../'.$row['image'].'"
                              class="float-right"
                              width="70px" alt="...">
                           
    </div>
   
    <div class="col">
    <label class="text-white mb-3 mt-2">Update Image
            </label>
    </div>
    <div class="col">
    <input type="file" class="form-control  text-dark" name="image"
     required>
     <input type="text" class="form-control d-none  text-dark" name="id"
     value="'.$row['id'].'"
         placeholder="Enter Title" required>
    </div>
    </div>

    
</div>

<button type="submit" class="btn btn-info col-12 mt-5 mb-5">Update Image</button>
</form>
';
    
     }
    

echo '
';
?>


                                
                         