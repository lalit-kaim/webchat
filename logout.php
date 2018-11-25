<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'users');
$q="update detail set live='offline.png' where email='{$_SESSION['email']}'";
mysqli_query($con,$q);
session_destroy();
header('location:http://localhost/login/index.html');
?>
