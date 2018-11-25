<?php
session_start();
if(!isset($_SESSION['email']))
     header('location:http://localhost/login/index.html');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/message.css">
<style>
* {
	  color:#6a6f8c;

}
.login-image{
	width:100%;
	margin:auto;
	max-width:825px;
	min-height:480px;
    position:absolute;
    top: 19%;
    left: 20%;
    border-radius: 5px;
	background:url(img/reg.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);

}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    box-sizing:border-box;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background:#1161ee;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    float: right;
    margin-top:10px;
}
.container {
    border-radius: 5px;
    padding:20px;
    /* background:rgba(40,57,101,.9); */
    background: #ffd89b;
    background: -webkit-linear-gradient(to right, #19547b, #695940);
    background: linear-gradient(to right, #19547b, #695b44); 
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
h3{
  position:absolute;
  left:44%;
}
.inputimg{
}
</style>

</head>
<body  id="particles-js">
<?php
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'users');
        $q="select * from detail where email='{$_SESSION['email']}'";
        $q1="select * from register,detail where detail.userid=register.userid and email='{$_SESSION['email']}'";
        $result=mysqli_query($con,$q);
        $result1=mysqli_query($con,$q1);
        $a=mysqli_fetch_assoc($result1);
        $a1=mysqli_fetch_assoc($result);
        
    ?>
    <div class="top">
        <div class="top-left">
            <div class="pic"><?php $f='image/'.$a['image']; echo "<a href='profile.php'><img src=".$f." width=100px height=58px ></a> "?></div>
            <div class="name"><p style="color:black;display:inline;">Hi,</p><?php echo "<a href='profile.php'>{$a1['name']}</a>"?></div>
        </div>
        <div class="top-right"><a href="logout.php">Logout</a></div>
    </div>

        <h3>Update Your Profile</h3>
<div class="login-image">
<div class="container">
  <form action="updateprofile1.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Country</label>
      </div>
      <div class="col-75">
        <input type="text" name="country" placeholder="Country..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">State</label>
      </div>
      <div class="col-75">
        <input type="text"  name="state" placeholder="State..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">City</label>
      </div>
      <div class="col-75">
        <input type="text" name="city" placeholder="City..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Local Address</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="address" placeholder="Local Address.." style="height:100px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Image</label>
      </div>
      <div class="col-75">
          <input type="file" class="inputimg" name="image" accept=".jpg" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Mobile No.</label>
      </div>
      <div class="col-75">
        <input type="text" name="mobile" placeholder="Mobile No..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Date Of Birth</label>
      </div>
      <div class="col-75">
        <input type="date" name="dob" placeholder="Date Of Birth..">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="UPDATE">
    </div>
  </form>
</div>
</div>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="javascript/particle.js"></script>
</body>
</html>
