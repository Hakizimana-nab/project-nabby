<?php
include_once("connection.php");
if(isset($_POST['submit'])){
$name    = $_POST['name'];
$email   = $_POST['email'];
$password = sha1($_POST['password']);
$country  = $_POST['country'];
$message = $_POST['message'];
echo "$name $email $password $country $message" . "<br>";
// to check file using query
if(!empty($name) && !empty($email) && !empty($password) && !empty($country)&& !empty($message)){
    $query = mysqli_query($conn, "INSERT INTO `maek`(`name`, `email`, `password`, `country`,`message`) VALUES ('$name','$email','$password','$country','$message')");
    if($query){
        echo "Data added";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="./img/massage oil.jpeg.jpg" type="image/x-icon">
    
</head>
<body>
    <h1>created table_data </h1>
           
    <style>
        *{
           padding:0px;
           margin:0px;
        }
        body{
        
            display:inline-block;
            justify-content:center;
            align-items:center;
            padding: 10px 23px;
            margin:12px;
            min-height: 30vh;
        }
        h1{
            display:flex;
            justify-content:center;
            align-items:center;
            margin:12px;
        }
        th{
            background-color: rgb(66, 189, 29);
            padding:8px 2px;
        }
        td{
            color:rgb(6, 38, 54);
            margin:2px;
            padding:2px 14px;
        }
        tr{
          color:rgb(59, 58, 59)
          
        }
        .date{
            min-width: 200px;
        }
    </style>
    
    

<?php
include './connection.php';
$query = mysqli_query($conn, "SELECT * FROM `maek`");
?>
<table border="2">
    <tr>
        <th>reg</th>
        <th>name</th>
        <th width="100px">email</th>
        <th>password</th>
        <th>country</th>
        <th>message</th>
    </tr>
<?php
while ($row= mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td class='email'>".$row['email']."</td>";
    echo "<td>".sha1($row['password'])."</td>";
    echo "<td>".$row['country']."</td>";
    echo "<td>".$row['message']."</td>";
    echo "</tr>";
}


?>

</table>


</body>
</html>