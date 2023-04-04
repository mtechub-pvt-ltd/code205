
<?php 
session_start();

include('db.php');





	$email=$_POST['email'];
	$password=$_POST['password'];
	$login=0;
	$message=0;

    $sql="SELECT * FROM admin";
    $run=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($run)) {
        if($row['email']==$email && $row['password']==$password ) {
            $message='User exsist';
           $login=1;
            break;
        }
        else {
            $message='email Not exsist';
        }
    }

    
    
    
   
    if($login==1) {
        $_SESSION['email']=$_POST['email'];
        $_SESSION['password']=$_POST['password'];
        header('location:../contacts.php');
	// echo $message;        
    }
    else {
        echo $message;          
    }


?>



