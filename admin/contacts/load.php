<?php
session_start();

include('../include/db.php');
echo '<thead>
<tr>
    <th scope="col" style="color:white">#</th>
    <th scope="col" style="color:white">Full Name</th>
    <th scope="col" style="color:white">Email</th>
    <th scope="col" class="w-25" style="color:white">Message</th>
    <th scope="col" class="w-25" style="color:white">Date</th>
  
</tr>
</thead>
<tbody >';
$sql="SELECT * FROM contact ORDER BY id DESC ";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    echo '<tr>
    <th scope="row">'.$row['id'].'</th>
    <td>'.$row['name'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['message'].'</td>
    <td>'.$row['date'].'</td>
   
  </tr>';
}
echo ' </tbody>';
?>


                                
                         