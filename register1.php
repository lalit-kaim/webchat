<?php
session_start();
if(!isset($_SESSION['email']))
    header('location:http://localhost/login/index.html');
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$address=$_POST['address'];    
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$nam=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"image/".$nam);
$_SESSION['address']=$address;
$_SESSION['mobile']=$mobile;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'users');
$q="insert into detail (name,email,password,live) values('{$_SESSION['username']}','{$_SESSION['email']}','{$_SESSION['password']}','offline.png')";
$q1="insert into register (country,state,city,address,mobile,dob,image) values('$country','$state','$city','$address','$mobile','$dob','$nam')";
$result=mysqli_query($con,$q);
$result1=mysqli_query($con,$q1);
mysqli_close($con);
header('location:http://localhost/login/index.html');
?>