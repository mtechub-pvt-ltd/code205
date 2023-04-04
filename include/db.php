<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'code205';
$conn = mysqli_connect($server, $username, $password, $db);
if (!$conn) {
    echo 'error';
} else {
    //  echo 'data';
}
