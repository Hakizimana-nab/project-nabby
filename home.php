<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            font-family: system-ui;
        }
        .container{
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.339);
            padding: 25px 40px;
            border-radius: 15px;
        }
        .cover{
            background-image:url("./img/image.jpg");
            background-size:cover;
            background-repeat: no-repeat;
            height: 100px;
            width: 100px;
            border-radius: 100px;
            border: 2px solid rgba(255, 255, 255, 0.656);
        }
        .content{
            text-align: center;
        }
        .name{
            font-size: 28px;
        }
        .gender{
            color: grey;
            font-size: 17px;
        }
        .btn{
            color: #fff;
            padding: 10px 15px;
            font-size: 20px;
            background-image: linear-gradient(45deg, blue, magenta);
            text-decoration: none;
            margin: 10px;
            border-radius: 10px;
        }
        .padd{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="cover"></div>
        <div class="content">
            <span class="name"><?=$_SESSION['name']?></span><br>
            <span class="gender"><?=$_SESSION['gender']?></span><br>
            <div class="padd"></div>
            <a href="php/logout.php" class="btn">Logout</a>
        </div>
    </div>
</body>
</html>
