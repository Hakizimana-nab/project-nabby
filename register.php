<?php
if(isset($_POST(['submit']))){
$_name    = $_POST['name'];
$_email   = $_POST['email'];
$_password = sha1($_password['password']);
$_country  = $_POST['country'];
$_message =$_POST['message'];

// to check file using query
if(!empty($name) && !empty($email) && !empty($password) && !empty($_country)){
    $query = mysqli_query($conn, "INSERT INTO `shop`(`name`, `email`, `password`, `country`,``) VALUES ('$name','$email','$password','$country','$message')");
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