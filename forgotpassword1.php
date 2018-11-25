<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$password1=$_POST['password1'];
if($password!=$password1)
{
    header('location:http://localhost/login/forgetpassword.php');
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'users');
$q="update detail set password='$password' where email='$email'";
$result=mysqli_query($con,$q);
header('location:http://localhost/login/index.html');
?>