<?php include_once("../admin/inc/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cantact</title>
  
    <style>
      .error{
        padding: 20px;
        background-color: rgba(255, 0, 0, 0.199);
        border: 1px solid red;

      }
      *{
    background-color:#fff;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding:0px;
    margin:0px;
}
body{
    display:flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
form{
    max-width: 90%;
    min-width: 50%;
    padding: 10px 20px;
    padding-right: 50px;
    background-color: #fff;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.353);
    border-radius: 10px;
}
input{
    display: block;
    padding: 10px 15px;
    width: 100%;
    border: 1px solid #23232372;
    border-radius: 8px;
    outline: none;
}
input:focus{
    border: 1px solid #29f;

}
label{
    text-transform: capitalize;
}
.form-group{
    padding: 10px;
}
button{
    border: none;
    padding: 10px 15px;
    background-color: rgb(93, 188, 236);
    border-radius: 10px;
    color: #fff;
}
    </style>
</head>
<body>
  <form action="" method="post">
    <div class="form-group">
      <h1>Login</h1>
    </div>
      <div class="error" 
        <?php 
            if(empty($_SESSION['error'])){
              echo "hidden";
            } ?>>
              
        <?php 
            if(isset($_SESSION['error'])){
              echo $_SESSION['error'];
            }
             ?>
      </div>
      <div class="form-group">
        <label for="email">email</label>
        <input type="text"id="email" name="email"placeholder="enter you email">
      </div>

      <div class="form-group">
        <label for="password">password</label>
        <input type="password"id="password"name="password"placeholder="enter you password">
      </div>

  <div class="form-group">
    <button type="submit" name="submit">login</button>
    <a href="../home.php">sign up</a>
  </div>
</form>


</body>
</html>

<?php
include ('../admin/inc/connection.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = mysqli_query($conn, "SELECT * FROM `shop` WHERE `email`='$email' AND `password`='$password'");
        if(mysqli_num_rows($query)>0){
            $row = mysqli_fetch_assoc($query);
            $_SESSION['login']   = true;
            $_SESSION['name']    = $row['name'];
            $_SESSION['email']   = $row['email'];
            header("location:../index.php");
        } else{
            $_SESSION['error'] = "invalid email or password!";
        }
    }
?>