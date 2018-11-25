<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table,th,td{
        border:1px solid black;
    }
    .lk{
        display:block;
        width: 40px;
        height: 40px;
    }
    .pk{
        width:40px;
        height:40px;
    }
    </style>
</head>
<body>
    <table>
        <tr><th>lalit</th></tr>
        <tr><td>kaim</td></tr>
        <?php
        echo 
        "<tr><td><div class='lk'><img src='img/online.png' class='pk'></div></td></tr>";
        ?>
    </table>
</body>
</html>