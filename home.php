<?php

    include './admin/inc/connection.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender =$_POST['gender'];
        $password = sha1($_POST['password']);
        echo "$name $email $gender $password " . "<br>";
    // to check file using query
     if(!empty($name) && !empty($email) && !empty($gender) && !empty($password)){
      $query = mysqli_query($conn, "INSERT INTO `client_tb`(`name`, `email`, `gender`, `password`) VALUES ('$name','$email','$gender','$password')");
      if($query===true){
        echo "Data added";
        header('location: ./admin/login.php ');
    } else {
        echo "Failed to add data.";
    }
   } else {
      echo "all are required";
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-page</title>
    <link rel="shortcut icon" href="img/100.jpg" type="image/x-icon">
</head>
<style>

body{
        display:flex;
        justify-content:center;
        align-items:center;
        min-height: 100vh;
        background-color: rgb(245, 234, 255);

    }
    form{ 
        padding: 20px 50px;
        background-color: #FFF;
        border-radius: 10px;
        width: 400px;
        box-shadow: 0px 0px 20px 0px #00000028;
        
    }
    input{
       padding: 15px;
       width: 100%;
       margin: 10px 2px;
    }
    button{
        padding: 16px 32px;
        border:20px;
        background-color:blueviolet;
    

    }
    button:hover{
        background-color:#444444;
        
        

    }
</style>
<body>
    <form action=""method="post">

        <h2>login-form</h2> 
      <div class="form-group">
        <label for="username">name*</label>
        <input type="name" name="name"id="name"value="<?php if(isset($_POST['name'])){ echo strip_tags($_POST['email']);}?>"placeholder="enter you email">  
        </div>
    
        <div class="form-group">
      <label for="email">email</label>
      <input type="email" name="email" id="email"placeholder="enter you email word">  
      </div>


      <div class="form-group">
      <label for="pass word">password</label>
      <input type="password" name="password" id="password"placeholder="enter you pass word">  
      </div>


      <div class="form-group">
      <label for="gender">gender</label>
      <input type="gender" radio="" name="gender" id="gender"placeholder="enter you gender word">  
      </div>
      
      
    
      <div class="form-group">
          <label for="email"></label>
       <button type="submi" name="submit"value="submit"></button>
       <a href="./admin/login.php">sign up</a>
        </div>
    </form>

</body>
</html>