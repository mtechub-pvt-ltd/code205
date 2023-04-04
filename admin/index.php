<?php

session_start();
include('include/db.php');
if(isset($_SESSION['email'])) {
    header('location:contacts.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<?php
include('include/scripts.php');
?>

<body class="login-page">
    
<div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-4">
                    <div class="card login-box-container">
                        <div class="card-body">
                            <div class="authent-logo">
                            <img src="../images/logo-small.svg" width="200px" />
                            </div>
                            <div class="authent-text">
                                <p>Admin Login</p>
                                <!-- <p>Please Sign-in to your account.</p> -->
                            </div>

                            <form action="include/login.php" method="POST">
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="floatingInput">
                                        <label for="floatingInput">Email address</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control" id="floatingPassword" >
                                        <label for="floatingPassword">Password</label>
                                      </div>
                                </div>
                                
                                <div class="d-grid">
                                <button type="submit" class="btn btn-custom m-b-xs" >Sign In</button>
                               
                            </div>
                              </form>
                              <!-- <div class="authent-reg">
                                  <p>Not registered? <a href="register.html">Create an account</a></p>
                              </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
	<?php
include('include/footer_script.php');
?>
    



  
   
</body>

</html>