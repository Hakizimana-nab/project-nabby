<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<style>
    *{
       padding:0px;
       margin:0px;
       transition:-2s;

    }
    body{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .container_nav-side{
        background-color:red;
        padding:20px 0px;
        
    }
    .nav-side{
        display:flex;
        justify-content:center;
        align-items:center;
        background-color:#444;
        padding:0px 10px;
        margin:12px;
        width:30%;
        min-height:10vh;
    }
   input{
    background-color:white;
    padding:10px 20px;
    margin:12px;
    border-radius:10px;
   }
   p{
    color:blue;
    
   }
   
</style>
<body>
    <div class="container nav-side">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="img" id="img">
        <input type="submit" value="Submit" name="submit">
</div>
          <p> upload new profile</p>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    if ($_FILES['img']['name'] !== "") {
        $img = $_FILES['img'];
        $file = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $file_ext = pathinfo($file, PATHINFO_EXTENSION);
        $upload = "./upload/snoaw-" . "654ce664883ab.jpg";
        $xyz = move_uploaded_file($file_tmp, $upload);
        if($xyz){
            echo "Image added";
            header('location: ../profile2.php');
        }
    }
}
?>