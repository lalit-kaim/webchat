<?php
session_start();
if(!isset($_SESSION['email']))
     header('location:http://localhost/login/index.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>

html,body
{
	background:#b61924;
  margin:0px;
}
*
{
  box-sizing: border-box;
}
.main
{
  width: 100%;
  height: 100vh;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  /* background: rgb(248, 233, 300); */
}
.container
{
    width: 80%;
    height:80%;
    position: absolute;
    box-shadow: 0px 0px 20px rgb(0,0,.7);
    /* background: rgb(200, 220, 213); */
    /* background:#b61924; */
    background: #ffd89b;
    background: -webkit-linear-gradient(to right, #19547b, #19547b);
    background: linear-gradient(to right, #19547b, #19547b); 
    bottom: 5%;
}
.main1
{
  width: 25%;
  height: 10%;
  position: absolute;
  position: absolute;
  display: flex;
  justify-content: left;
  align-items: center;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-size: 40px;
  top: 10%;
  left: 5%;
  text-transform:capitalize;
}
.main2
{
  width: 40%;
  height: 15%;
  position: absolute;
  position: absolute;
  display: flex;
  justify-content: left;
  align-items: center;
  top: 25%;
  left: 5%;
}
.main3
{
  width: 20%;
  height: 10%;
  position: absolute;
  display: flex;
  justify-content: left;
  align-items: center;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-size: 30PX;
  top: 45%;
  left: 5%;
}
.main4
{
  width: 15%;
  height: 8%;
  position: absolute;
  display: flex;
  justify-content: left;
  align-items: center;
  font-family: sans-serif;
  color: rgb(126, 119, 119);
  top: 57%;
  left: 5%;
}
.main5
{
  width: 15%;
  height: 8%;
  position: absolute;
  display: flex;
  justify-content: left;
  align-items: center;
  font-family: sans-serif;
  color: rgb(126, 119, 119);
  top: 67%;
  left: 5%;
}
.main6
{
  width: 15%;
  height: 8%;
  position: absolute;
  display: flex;
  justify-content: left;
  align-items: center;
  font-family: sans-serif;
  color: rgb(126, 119, 119);
  bottom: 14%;
  left: 5%;
}
.main7
{
  width: 15%;
  height: 8%;
  position: absolute;
  display: flex;
  justify-content: left;
  align-items: center;
  font-family: sans-serif;
  color: rgb(126, 119, 119);
  bottom: 4%;
  left: 5%;
}
.main8
{
  width: 20%;
  height: 8%;
  position: absolute;
  display: flex;
  justify-content: left;
  align-items: center;
  font-family: sans-serif;
  bottom: 4%;
  left: 22%;
}
.main9
{
  width: 20%;
  height: 8%;
  position: absolute;
  display: flex;
  justify-content: left;
  align-items: center;
  bottom: 14%;
  left: 22%;
}
.main10
{
  width: 20%;
  height: 8%;
  position: absolute;
  display: flex;
  justify-content: left;
  align-items: center;
  font-family: sans-serif;
  bottom: 25%;
  left: 22%;
}
.main11
{
  width: 20%;
  height: 8%;
  position: absolute;
  display: flex;
  justify-content: left;
  align-items: center;
  font-family: sans-serif;
  bottom: 35%;
  left: 22%;
}
.main12
{
  width: 40%;
  height: 80%;
  position: absolute;
  right: 5%;
  top: 10%;
  box-shadow: 0px 0px 20px rgb(0,0,.7);
  background: white;
  border-radius:50%;
}
img{
  border-radius:50%;
  
}
.header
{
  width: 100%;
  height: 10%;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  color: rgb(10, 174, 174);
  box-shadow: 0px 0px 20px rgb(0,0,.7);
  top: 0%;
}
.name
{
  width: 10%;
  height: 80%;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Times New Roman', Times, serif;
  font-size: 25px;
  color: rgb(185, 174, 174);
  left: 3%;
}
.frnd
{
  width: 10%;
  height: 70%;
  border: 1px solid burlywood;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: sans-serif;
  font-size: 20px;
  color: rgb(185, 174, 174);
  border-radius: 5px;
  right: 3%;
}
.msg
{
  width: 10%;
  height: 70%;
  border: 1px solid burlywood;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: sans-serif;
  font-size: 20px;
  color: rgb(185, 174, 174);
  border-radius: 5px;
  right: 14%;
}
a{
    text-decoration: none;
    color: rgb(238, 148, 12);
}
.frnd:hover,.msg:hover
{
    background: rgb(173, 125, 125);
}
a:hover
{
    background: rgb(173, 125, 125);
    color: rgb(226, 224, 224);
}
.update{
  position:relative;
  top:300px;
  left:47%;
}
.update>a{
  display:block;
  width:max-content;
}
#particles-js{
  z-index:9999;
}
</style>
<body>
<!-- <div id="particles-js"></div> -->

  <div class="main"  id="particles-js">

    <div class="header">

        <div class="name"><h1>Profile</h1></div>
        <div class="msg"><a href="http://localhost/login/message.php">Messenger</a></div>
        <div class="frnd" ><a href="http://localhost/login/logout.php">Logout</a></div>

    </div>
      <?php
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'users');
        $q="select * from detail where email='{$_SESSION['email']}'";
        $q1="select * from register,detail where detail.userid=register.userid and email='{$_SESSION['email']}'";
        $result=mysqli_query($con,$q);
        $result1=mysqli_query($con,$q1);
        $a=mysqli_fetch_assoc($result1);
        $a1=mysqli_fetch_assoc($result);
        $_SESSION['fromid']=$a['userid'];
      ?>

      <div class="container">
        <div class="main1" ><?php  echo "{$a1['name']}"?></div>
        <div class="main2"></div>
        <div class="main3">PERSONAL INFO</div>
        <div class="main4">Date of Birth</div>
        <div class="main5">Address</div>
        <div class="main6">E-mail</div>
        <div class="main7">Phone</div>
        <div class="main8"><?php  echo "{$a['mobile']}"?></div>
        <div class="main9"><?php echo "{$a1['email']}"?></div>
        <div class="main10"><?php echo "{$a['address']}"?></div>
        <div class="main11"><?php echo "{$a['dob']}"?></div>
        <div class="main12"><?php $f='image/'.$a['image']; echo "<img src=".$f." width=100% height=100%>"?></div>
      </div>
      <div class="update"><a href="updateprofile.php" >Update Profile</a></div>

  </div>
  <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="javascript/particle.js"></script>
<?php 
mysqli_close($con);
?>
</body>
</html>