<?php
include('include/db.php');
echo $_GET['name'];
echo $_GET['email'];
echo $_GET['message'];
$date = date('d-m-Y');

$sql = "INSERT INTO contact (name,email,message,date) VALUES ('$_GET[name]','$_GET[email]','$_GET[message]','$date')";
$run = mysqli_query($conn, $sql);
if ($run) {
    header('location:index.php');
} else {
    echo 'error';
}
?>
