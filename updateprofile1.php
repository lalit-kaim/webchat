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
    $con=mysqli_connect("localhost","root");
    mysqli_select_db($con,"users");
    $q="update register,detail set country='$country',state='$state',city='$city',address='$address',mobile='$mobile',dob='$dob',image='$nam' where email='{$_SESSION['email']}' and detail.userid=register.userid";
    $result=mysqli_query($con,$q);
?>