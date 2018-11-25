<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['email']))
     header('location:http://localhost/login/index.html');
?>
<html lang="en">
<head>
    <title>Messanger</title>
    <link rel="stylesheet" href="css/message.css">
</head>
<body>
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
    <div class="top" >
        <div class="top-left">
            <div class="pic"><?php $f='image/'.$a['image']; echo "<a href='profile.php'><img src=".$f." width=100px height=58px ></a> "?></div>
            <div class="name">Hi, <?php  echo "<a href='profile.php'>{$a1['name']}</a>"?></div>
        </div>
        <div class="top-right"><a href="logout.php">Logout</a></div>
    </div>
    <div class="pdiv"  id="particles-js" >
        <div class="middle" >
            <!-- for searching of friends -->
            <!-- fetch-list.php -->
            <div class="search main" >
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="search-up">
                        <input type="text" name="friend" onkeyup="fetch();" placeholder="search your friends..">
                        <button type="submit" name="submit"><img src="img/search.svg"></button>
                    </div>
                </form>
                <div class="friend-list" id="display_list">
                <?php
                        if(isset($_POST['submit'])){
                            $friend=$_POST['friend'];
                            $con=mysqli_connect('localhost','root');
                            mysqli_select_db($con,'users');
                            $q="select * from detail,register where name like '%$friend%' and detail.userid=register.userid";
                            $result=mysqli_query($con,$q);
                            if (mysqli_num_rows($result)>0){
                                echo "<table><tr><th>Image</th><th>Name</th><th>Id</th><th>Status</th></tr>";
                                while($ab=mysqli_fetch_assoc($result)){
                                    $temp="img/".$ab['live'];
                                    echo "<tr><td>"."<img src=".'image/'.$ab['image']." width=50px height=40px>"."</td><td>".$ab["name"]."</td><td>".$ab["userid"]."</td><td><div class='status'><img src='$temp' class='imgstatus'></div></td></tr>";
                                }
                                echo "</table>";
                            }
                        }
                ?>
                </div>
            </div> 
            <!-- for chating with friends -->
            <div class="message main">
                <form action="" method="POST" enctype="multiple/form-data">
                <div class="another-user">Friend's ID:</div>
                <input type="number" name="userid" class="userid" placeholder="ID.." value="<?php if(isset($_POST['userid'])) echo "{$_POST['userid']}" ?>">
                <div class="message-place">
                <?php
                if(isset($_POST['sub'])){
                    $toid=$_POST['userid'];
                    $msg=$_POST['msg'];
                    $_SESSION['toid']=$toid;
                    $con=mysqli_connect('localhost','root');
                    mysqli_select_db($con,'users');
                    if(!empty($msg) and !empty($toid)){
                        if(mysqli_num_rows(mysqli_query($con,"select * from detail where userid='$toid'"))>0){
                        $q="insert into chat (fromuser,touser,message) values('{$_SESSION['fromid']}','{$_SESSION['toid']}','$msg')";
                    }}
                    $result=mysqli_query($con,$q);
                }
                ?>
                <?php
                if(isset($_POST['sub'])){
                    $con=mysqli_connect('localhost','root');
                    mysqli_select_db($con,'users');
                    $q="select * from chat where (fromuser='{$_SESSION['fromid']}' and touser='{$_SESSION['toid']}' and fromuser<>'{$_SESSION['toid']}') or (fromuser='{$_SESSION['toid']}' and touser='{$_SESSION['fromid']}' and touser<>'{$_SESSION['toid']}') order by time asc";
                    $result=mysqli_query($con,$q);
                    if (mysqli_num_rows($result)>0){
                        while($a=mysqli_fetch_assoc($result)){
                                echo "<div class='msgcover'><div class=".lefttoright($a['fromuser'],$_SESSION['fromid']).">".$a['message']."</div></div><br>";
                        }
                    }
                }
                ?>
                </div>
                        <div class="foot">
                            <input type="text" name="msg" placeholder="Type a message">
                            <button type="submit" name="sub"><img src="img/send.svg"></button>
                        </div>
                </form>
            </div>
        </div>
        <p class="ceo"><center>Design <label style="color:#676767;">By Lalit</label> </center></p>
    </div>
    <?php
    function lefttoright($from,$current){
        echo '<style>
            .msgcover{
                width:auto;
                overflow: hidden;
            }
        </style>';
        if($from==$current){
            echo '<style>
                .left{
                    display:block;
                    margin:2px;
                    border:.5px solid black;
                    padding:5px 10px;
                    background:#05728f;  
                    color:white;
                    border-radius:10px 10px 10px 0px;
                    float:left;
                }
            </style>';
            return "left";
        }
        else{
            echo "<style>
            .right{
                display:block;
                text-align:right;
                margin:2px;
                border:.5px solid black;
                padding:5px 10px;
                background:#695b44;
                color:white;
                border-radius:10px 10px 0px 10px;
                float:right;
            }
           </style>";
           return "right";
        }
    }
    ?>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="javascript/particle.js"></script>
</body>
</html>