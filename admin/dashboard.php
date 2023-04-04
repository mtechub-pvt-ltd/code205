
<?php 
session_start();
include('include/db.php');
if(isset($_SESSION['email'])) {
    // echo 'data ';
}
else {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<?php
include('include/scripts.php');
?>

<body class="page-sidebar-collapsed">
    <div class="page-container">
        <?php
include('include/sidebar.php');
?>

        <div class="page-content">
            <?php
include('include/header.php');
?>

            <div class="main-wrapper">

                <div class="row card " >
                    
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <?php
                                            $music=0;
                                    $sql_music="SELECT id FROM musics";
                                    $run_music=mysqli_query($conn,$sql_music);
                                    while($row_music=mysqli_fetch_assoc($run_music)) {
                                      $music++;
                                    }
                                    echo '<h5 class="card-title">'.$music.'<span</h5>';
                                            ?>

                                            
                                            <p class="stats-text">Total Musics</p>
                                        </div>
                                        <div class="stats-icon bg-success text-white">
                                            <i class="material-icons">equalizer</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                        <?php
                                            $users=0;
                                    $sql_users="SELECT id FROM user";
                                    $run_users=mysqli_query($conn,$sql_users);
                                    while($row_users=mysqli_fetch_assoc($run_users)) {
                                      $users++;
                                    }
                                    echo '<h5 class="card-title">'.$users.'<span</h5>';
                                            ?>
                                            <p class="stats-text">Total Users</p>
                                        </div>
                                        <div class="stats-icon bg-danger text-white">
                                            <i class="material-icons">person</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                        <?php
                                            $genere=0;
                                    $sql_genere="SELECT id FROM genere";
                                    $run_genere=mysqli_query($conn,$sql_genere);
                                    while($row_genere=mysqli_fetch_assoc($run_genere)) {
                                      $genere++;
                                    }
                                    echo '<h5 class="card-title">'.$genere.'<span</h5>';
                                            ?>
                                            <p class="stats-text">Total Genre</p>
                                        </div>
                                        <div class="stats-icon change-info bg-info text-white">
                                            <i class="material-icons">emoji_symbols</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       
                    </div>
                </div>
                <div class="row card border">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                
                                    <h5 class="card-title ">Recent Customers</h5>
                                    <h5 class="card-title  ">
                                    <a href="users.php" class="btn btn-info m-b-xs">See All</a>
                               
                                    </h5>
                            </div>
                               <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Gender</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                          $sql="SELECT * FROM user  ORDER BY id DESC limit 4";
                                          $run=mysqli_query($conn,$sql);
                                          while($row=mysqli_fetch_assoc($run)) {
                                              echo '<tr>
                                              <th scope="row">'.$row['id'].'</th>
                                              <td>'.$row['username'].'</td>
                                              <td>'.$row['email'].'</td>
                                              <td>'.$row['gender'].'</td>
                                            </tr>';
                                          }
                                      ?>
                                    
                                   
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php
include('include/footer.php');
?>

        </div>
    </div>
	<?php
include('include/footer_activity.php');
?>
    
	<?php
include('include/footer_script.php');
?>
    



  
   
</body>

</html>