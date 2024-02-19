<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/2.jpeg">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/flex.css">
    <link rel="stylesheet" href="./css/font-awesome/css/all.min.css">
    <title>Community</title>
    <style>
        .grey{
            color: grey;
        }
        
        .welcome{
            min-height: 400px;
            background-size: cover;
        }
        .headings{
            position: relative;
            color: rgb(40, 51, 58);
            font-family: Arial, Helvetica, sans-serif;
        }
        .headings a{
            position: absolute;
            bottom: -20%;
            right: -5%;
            transform: translate(-50%,-50%);
        }
        @media (max-width: 700px) {
            .headings a{
                position: unset;
                bottom: 0%;
                right: 0%;
            transform: translate(0%,0%);
            }
        }
        .flex-center{
             background-image: url("img/binary-2372130_1280.jpg"); 
             background-size:cover; 
             background-repeat:no-repeat; 
            color: rgb(177, 177, 177);
            padding: 20px 0px;
            width: 100%;
            
        }
        .liked{
            color: rgb(3, 128, 212);
            animation: pop 1s 1;
        }
        @keyframes pop {
            50%{
                transform: rotate(-45deg);
                scale: 1.8;
            }
        }
        
        .hover[flex-center]{
          color:#444;
        }
    </style>
</head>
<body>
    
    <header style="background-image: url('./img/');background-attachment: scroll;">
        <nav class="main-nav dark-back" hidden>
            <ul class="flex-btwn">
                <div class="logo">
                    <i class="fab s-white fa-apple icon s-padd11 dark-back f-border"></i>
                </div>
                <div class="link">
                    <ul class="flex-center s-white">
                        <li><a href="#">books</a></li>
                        <li><a href="#">service</a></li>
                        <li><a href="#">story</a></li>
                        <li><a href="#">fovorite</a></li>
                    </ul>
                </div>
            </ul>
        </nav>
        <div class="containers welcome flex-center">
            <h1 class="s-white s-upper-text">Welcome to your Budget app</h1>
        </div>
    </header>
    <main >
        <div class="container mt-5">
            <div class="headings">
                <h1 style="font-family: cursive;">Community name</h1>
                <p class="grey">Community/<b>community name</b></p>
                <a href="create.php" class="btn btn-outline-secondary">+ Create Post</a>
            </div>
            <hr>
            <div class="single-post">
            <div class="card s-pointer">
                <div class="content s-padd12">
                    <h1>How to create a DB in mongo</h1>
                    <p class="grey">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, veniam quis nemo quia, maiores nobis, fugiat atque tempora voluptas quidem itaque? Cumque quas sequi tempore iusto quasi ullam, ducimus a!
                    </p>
                </div>
                <div class="flex-btwn grey">
                    <div class="btn">
                        <a href="read.php" class="btn btn-outline-secondary">Read Post</a>
                    </div>
                    <div class="links s-padd">
                        
                        <div class="btn-container flex">
                            <span id="counter" >5</span> <i onclick="Like()" id="like" class="fa fa-thumbs-up" >&nbsp;</i>
                        </span>
                      <span id="vbtn">
                            100 <i class="fa fa-book-open" >&nbsp;</i>|
                        </span>
                    </div>

                        <a href="profile2.php" class="nav-link"><i class="fa fa-user"></i>&nbsp;Naby</a>
                    </div>
                </div>
            </div>
            </div>
            
        <hr>
        <p class="grey">copyright &copy; snoaw group</p>
        <hr>
        </div>

    </main>

    <script>
        function Like(){
            like.classList.toggle('liked');
            let likes = parseInt(counter.innerHTML);
            counter.innerHTML = likes + 1;

        }
    </script>

</body>
</html>