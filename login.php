<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'users');
$q="select * from detail where email='$email' and password='$password'";
$q1="update detail set live='online.png' where email='$email'";
$result=mysqli_query($con,$q);
$result1=mysqli_query($con,$q1);
$num=mysqli_num_rows($result);
$_SESSION['email']=$email;
if($num==1)
{
    mysqli_close($con);
    header('location:http://localhost/login/profile.php');
}
else{
    mysqli_close($con);
    header('location:http://localhost/login/index.html');

}
?>