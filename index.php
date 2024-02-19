<?php
include './admin/inc/connection.php';
  $query = mysqli_query($conn, "SELECT * FROM `tbb_post`");  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/flex.css">
    <link rel="stylesheet" href="./css/font-awesome/css/all.min.css">
    <title>Document</title>
    <style>
        .welcome{
            min-height: 400px;
            background-size: cover;
        }
        .sub-title{
            font-weight: bold;
            font-size: larger;
        }
        .bold-o{
            font-weight: 400;
        }
        .grey{
            color: grey;
        }
        li:hover{
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0.096);
        }
        .s-white a{
            color: #fff;
            font-size: 20px;
        }
        .link li{
            padding: 10px 15px;
        }
        .icon{
            font-size: 60px;
        }

        .header[style]{
          background-size: cover;
          background-repeat: no-repeat;
          color:yellow;
        }
        .flex-center{
            /* background-image: url("./img/1.jpeg");  */
             background-size:cover; 
             background-repeat:no-repeat; 
            color: rgb(177, 177, 177);
            padding: 20px 0px;
            width: 100%;
        }
    </style>
</head>
<body>
    <header style="background-image: url('./img/1.jpeg');background-attachment: scroll;">
        <nav class="main-nav dark-back" hidden>
            <ul class="flex-btwn">
                <div class="logo">
                    <i class="fab s-white fa-apple icon s-padd11 dark-back f-border"></i>
                </div>
                <div class="link">
                    <ul class="flex-center s-white">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Home</a></li>
                    </ul>
                </div>
            </ul>
        </nav>
        <div class="containers welcome flex-center">
            <h1 class="s-white s-upper-text">Welcome to your Budget app</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="mt-4">Community List</h1>
            <hr>
            <ul class="list-group">
                <?php
                while ($row = mysqli_fetch_assoc($query)):
                ?>
                <li class="list-group-item flex-btwn sub-title">
                    <?=$row['title']?>
                    <span class="grey bold-o">28 <i class="fa fa-book"></i></span>
                    <a href="Read.php?id=<?=$row['id']?>">Read</a>
                    <a href=""></a>
                </li>
                <?php
                endwhile;
                ?>
            </ul>
            <hr>
            <p class="grey">copyright &copy; snoaw group</p>
            <hr>
        </div>
    </main>
</body>
</html>