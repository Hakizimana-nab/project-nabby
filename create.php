<?php

include './admin/inc/connection.php';
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $content =$_POST['content'];
    $date = $_POST['date'];

  $query = mysqli_query($conn,"INSERT INTO `tbb_post` (`title`,`content`,`date`)VALUES ('$title','$content','$date')");
  if($query===true){
    echo " data add";
    header('location: ./index.php');
  }else{

    echo"failed to add data";
  }
}

   
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
    <title>Create</title>
</head>
<body>
    <div class="flex-center"hidden ><i class="fab fa-apple fa-5x"></i></div>
    <div class="container mt-5 s-shadow s-border">
        <form action="" method="post" class="pb-4 pt-3">
            <div class="form-group">
                <p class="h1">Create new post</p>
            </div>
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter post Title">
            </div>
            <div class="form-group">
                <label for="content">Post Content</label>
                <textarea class="form-control" name="content" placeholder="Enter post content.."></textarea>
            </div>
            <div class="form-group">
                <label for="date">date_add</label>
                <input type="text" name="date"id="date" class="form-control"placeholder="please insert date">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"name="submit">Create</button>
                <a href="../index.php" class=""></a>
            </div>
        </form>
    </div>
</body>
</html>