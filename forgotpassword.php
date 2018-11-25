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
	width:400px;
  margin:auto;
  position:absolute;
  top:20%;
  left:34%;
  border-radius: 5px;
	background:url(img/reg.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);

}
input[type=text],input[type=password], select, textarea {
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
</style>

</head>
<body  id="particles-js">
<div class="login-image">
<div class="container">
  <img src="img/password.png" alt="" width="40px" height="40px">
  <form action="forgotpassword1.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" name="email" placeholder="Email..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="password"  name="password" placeholder="password..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Confirm Password</label>
      </div>
      <div class="col-75">
        <input type="password" name="password1" placeholder="confirm password..">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="SUBMIT">
    </div>
  </form>
</div>
</div>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="javascript/particle.js"></script>
</body>
</html>
