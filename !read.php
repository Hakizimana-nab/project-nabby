<?php
include './admin/inc/connection.php';

?>
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
        }
        .flex-center{
            background-image:url('./img/3.jpeg');
            background-size:cover;
            background-repeat:no-repeat;
            color:#ccc;
            padding:12px 10px;
            
            min-height: 60vh;
        }
        .headings a{
            position: absolute;
            bottom: -20%;
            right: -5%;
            transform: translate(-50%,-50%);
        }
        code.code, code.code:focus{
            background-color: black;
        }
        @media (max-width: 700px) {
            .headings a{
                position: unset;
                bottom: 0%;
                right: 0%;
            transform: translate(0%,0%);
            }
        }
        .liked{
            color: rgb(3, 128, 212);
            animation: pop 1s 1;
        }
        @keyframes pop {
            50%{
                transform: rotate(45deg);
                scale: 1.8;
            }
        }
    </style>
</head>
<body>
    
    <header style="background-image: url('./');background-attachment: scroll;">
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
            <h1 class="s-white s-upper-text">Welcome to your Budget app</h1>>
        </div>
    </header>
    <main >
        <div class="container mt-5">
            <div class="headings">
                <h1 style="font-family: cursive;">Community name</h1>
                <p class="grey">Community/<b>community name</b></p>
                <a href="#" class="btn btn-outline-secondary">+ Reply</a>
            </div>
            <hr>
            <div class="single-post">
            <div class="card s-pointer">
                <div class="content s-padd12">
                    <h1>How to create a DB in mongo</h1>
            
                    <div class="btn-container flex">
                            2 day ago by<a href="#" class="nav-link"><i class="fa fa-user"></i>&nbsp;Nkiko Hertier</a>
                             <span id="counter">5</span><i onclick="Like()" id="like" class="fa fa-thumbs-up">&nbsp;</i>|
                            100 <i class="fa fa-book-open"></i>&nbsp;
                            <br>
                            <br>
                    </div>
                    <p class="grey">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, veniam quis nemo quia, maiores nobis, fugiat atque tempora voluptas quidem itaque? Cumque quas sequi tempore iusto quasi ullam, ducimus a!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, veniam quis nemo quia, maiores nobis, fugiat atque tempora voluptas quidem itaque? Cumque quas sequi tempore iusto quasi ullam, ducimus a! 
<pre class="form-control s-margin code">
       const xhr = new XMLHttpRequest();
       xhr.open('POST', 'php/login.php', true);
       xhr.addEventListener('load', () => {
        if (xhr.readyState == 200) {
            if(xhr.response == 'success'){
                alert('hello');
            }
        }
    });
</pre>
                      <p class="grey">  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, veniam quis nemo quia, maiores nobis, fugiat atque tempora voluptas quidem itaque? Cumque quas sequi tempore iusto quasi ullam, ducimus a! 
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, veniam quis nemo quia, maiores nobis, fugiat atque tempora voluptas quidem itaque? Cumque quas sequi tempore iusto quasi ullam, ducimus a!
</p>
                        <pre class="form-control s-margin code">
        const xhr = new XMLHttpRequest();
       xhr.open('POST', 'php/login.php', true);
       xhr.addEventListener('load', () => {
        if (xhr.readyState == 200) {
            if(xhr.response == 'success'){
                alert('hello');
            }
        }
    });
</pre>
                    
                    </p>
                    
            
                    <div class="btn-container flex">
                        2 day ago by<a href="./profile2.php" class="nav-link"><i class="fa fa-user"></i>&nbsp;naby hakizimana</a>
                        2.3K,<span id="counter">5</span> <i onclick="Like()" id="like" class="fa fa-thumbs-up">&nbsp;</i>|
                        100 <i class="fa fa-book-open"></i>&nbsp;
                        <br>
                        <br>
                </div>
                </div>
            </div>
            </div>
            <div class="card mt-4 s-padd">
                <form class="card mb-1 s-padd12">
                    <h1>Leave Comment</h1>
                    <div class="form-group" hidden>
                        <input type="text" class="form-control" name="postId" disabled>
                    </div>
                    <div class="form-group" hidden>
                        <input type="text" class="form-control" name="parentCommentId" disabled>
                    </div>
                    <div class="form-group">
                        <textarea name="comment" cols="30" rows="10" placeholder="Whats on your mind..." class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Comment</button>
                    </div>
                </form>
                <div class="card">
                    <div class="grey s-padd12">
                        <h4><a href="./profile2.php" class="nav-link"><i class="fa fa-user"></i>&nbsp;naby</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, dicta! Nemo id laborum laboriosam, veniam quo qui enim debitis nostrum! Facere rem doloremque doloribus neque inventore quos illum perferendis recusandae!</p>
                        </div>
                        <div class="grey s-padd12 flex-btwn">
                            <div class="side">
                                <span class="grey s-pointer"><i class="fa fa-reply-all"></i>&nbsp;Reply</span>
                            </div>
                            <div class="icons">
                            <span id="counter" >5</span> <i onclick="Like()" id="like" class="fa fa-thumbs-up" >&nbsp;</i>
                        </span>
                                100 <i class="fa fa-book-open"></i>&nbsp;
                            </div>
                        </div>
                </div>
            </div>
            
        <hr>
        <p class="grey">copyright &copy; snoaw group</p>
        <hr>
        </div>
        
    </main>
    
    <script src="script"></script>
    
</body>
</html>