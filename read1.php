<?php
include './admin/inc/connection.php';

$id = $_GET['id'];

$query = mysqli_query($conn,"SELECT * FROM `tbb_post`");
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>


        * {
    box-sizing: border-box;
  }
  
  body {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
  }
  
  /* Header/Blog Title */
  .header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
  }
  
  /* Create two unequal columns that floats next to each other */
  /* Left column */
  .leftcolumn {
    float: left;
    width: 75%;
  }
  
  /* Right column */
  .rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
  }
  
  /* Fake image */
  .fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
  }
  
  /* Add a card effect for articles */
  .card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  /*paragraph*/
  p{
     font-family:system-ui,;

  }
  /* Footer */
  .footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
  }
  
  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {
      width: 100%;
      padding: 0;
    }
  }
    </style>

    <div class="header">
        <h2>Blog Name</h2>
      </div>
      
      <div class="row">
        <div class="leftcolumn">
          <div class="card">
            <h2>TITLE HEADING</h2>
            <h5>Title description:details about c++, Dec 7, 2017</h5>
            <img src="./img/2.jpeg"width="100%"height="400px"border-radius="10px"padding="12px">
            <p>C++ is a widely used programming language that has a significant impact on various aspects of our daily lives. It plays a crucial role in the development of software applications, operating systems, game engines, embedded systems, and much more. In this comprehensive explanation, we will explore how C++ works in normal life
           <p> about explaination about backend modules for begginer</p>
 Software Development:
C++ is extensively used in software development due to its efficiency, flexibility, and performance. It allows developers to create complex and high-performance applications across different domains. From desktop applications to web servers, C++ is employed in a wide range of software projects. Its ability to directly access hardware resources and low-level programming features make it suitable for developing system software like device drivers and operating systems.
<p>
Operating Systems:
C++ is an integral part of many operating systems. For instance, the Windows operating system heavily relies on C++ for its core components. The kernel, file system, device drivers, and other critical parts of the operating system are often implemented using C++. This language provides the necessary tools and features to interact with hardware components efficiently.<p>

Game Development:
C++ is widely used in the game development industry due to its performance-oriented nature. Game engines like Unreal Engine and Unity are built using C++. These engines provide developers with powerful tools and libraries to create visually stunning and immersive games. Additionally, C++ allows for low-level memory management and optimization, enabling game developers to achieve high frame rates and smooth gameplay experiences.
</p>
Embedded Systems:
Embedded systems are computer systems designed for specific tasks or functions within larger systems. They can be found in various devices such as smartphones, automobiles, medical equipment, and home appliances. C++ is commonly used in embedded systems programming due to its ability to interact with hardware directly. It allows developers to write efficient code that controls the behavior of these devices.

Scientific Computing:<p>
C++ is also utilized in scientific computing applications where performance is critical. It provides libraries like the Boost library, which offers a wide range of functionalities for mathematical computations, linear algebra, and numerical analysis. C++ allows scientists and researchers to develop high-performance simulations, data analysis tools, and computational models.</p>

Top 3 Authoritative Reference Publications or Domain Names:
1. "The C++ Programming Language" by Bjarne Stroustrup - Bjarne Stroustrup, the creator of C++, provides comprehensive insights into the language's design and usage.
2. "C++ Primer" by Stanley B. Lippman, Josée Lajoie, and Barbara E. Moo - This book serves as a comprehensive guide to learning and using C++ effectively.
3. cppreference.com - An authoritative online reference for the C++ programming language, providing detailed documentation on its syntax, standard library, and best practices.

Please note that while these references are highly regarded in the field of C++, it is always recommended to consult multiple sources to ensure accuracy and up-to-date information.
          </div>
          <div class="card">
            <h2>TITLE HEADING: The details of php </h2>
            <h5>Title description, Sep 2, 2017</h5>
             <img src="./img/7.jpeg"width="100%"height="400px">
             
             <!-- <img src="/img/binary-2372130_1280.jpg"> -->
            <p>Some text..  When you run this page on your PHP web hosting server, your result will look like this:
                          
                          
                          
                          As you can clearly see it has returned only those results which matches user_id and where messages is not null.
                          
                          RIGHT JOIN
                          RIGHT;

 
         This command instructs PHP to select the database stored in the variable $database (in our case 
            it will select the database "your_database"). If the script cannot connect it will stop executing 
            and will show the error message: Unable to select database. The 'or die' part is useful as it 
            provides debugging functionality. However, it is not essential.
           

            Below lists example login code, it should work on any OS as there is no platform dependent 
            code for database connectivity in PHP
            some time :

            <!-- lecture of php code* -->
            <ul>
            $conn = mysqli_connect('localhost','root','','db');
            if($conn){
                 echo 'connected';
            }else{
                 echo 'not connected';
            }
            ?>
          
               <ul>and also php we can  insert database using sql ($_query); </ul>
               
              </p>

               some php code of mysqli_query:
               which allow users to fetch data into sql

               <ul>

               <!-- <? -->
            
  if(isset($_POST['send'])){
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
    }
     $_query = mysqli_query($conn,"INSERT INTO `USERS`(`uname`,`email`,`gender`,`age`) VALUES('$uname','$email',   '$gender','$age')");
     if($query ==true){
     echo"data added";
     }else{
       echo"failed to data";
     }
// ?>

  


          </div>
        </div>
        <div class="rightcolumn">
          <div class="card">
            <h2>About Me</h2>
            <img src="./img/1.jpeg">
            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
          </div>
          <div class="card">
            <h3>Popular Post</h3>
             <div class="fakeimg">Image</div><br> -->
            <img src="./img/2.jpeg"width="100%"height="150px">
            <div class="fakeimg">Image</div><br>
            <img src="./img/3.jpeg"width="100%"height="150px">
            
          </div>
          <div class="card">
            <h3>Follow Me</h3>
            <img src="./logo/facebook.png">
            <img src="./logo/instagram.png">
            <img src="./logo/twitter.png">
            <img src="./logo/linkedin.png">
            <p>Some text..</p>
          </div>
        </div>
      </div>
      
      <div class="footer">
        <h2>Footer</h2>

        <p><div class="copyright-container flex-center">
          <p>E-pro blog website copyright &copy; was done 2023 & 2024 , all right reserved.
      </div>
    
    </p>
      </div>
    
</body>
</html>