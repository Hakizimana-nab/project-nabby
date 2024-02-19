<?php
    include('connection.php');
    if(isset($_POST['submit'])){
        //[G]etting data
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $gender   = $_POST['gender'];

        //[Cheching] filelds
        if(!empty($name) && !empty($email) && !empty($password) && !empty($gender)){
        $query = mysqli_query($conn, "INSERT INTO `user_tb`(`name`, `email`, `password`, `gender`) VALUES ('$name','$email','$password','$gender')");
        if($query){
            echo "Data added";
        } else {
            echo "Failed to add data.";
        }
    }
    } else {
        echo "all are required";
    }
?>