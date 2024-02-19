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
     font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

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
            <img src="./img/4.jpeg"width="90%s"height="400px">
           
            <p>C++ is a widely used programming language that has a significant impact on various aspects of our daily lives. It plays a crucial role in the development of software applications, operating systems, game engines, embedded systems, and much more. In this comprehensive explanation, we will explore how C++ works in normal life scenarios.


          </div>
          <div class="card">
            <h2>TITLE HEADING: The details of php </h2>
            <h5>Title description, Sep 2, 2017</h5>
            <img src="./img/3.jpeg"width="90%s"height="400px">
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
            ( ?php 
            $conn = mysqli_connect('localhost','root','','db');
            if($conn){
                 echo 'connected';
            }else{
                 echo 'not connected';
            }
            ?)
               and also php we can  insert database using sql ($_query); 
               
              </p>
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
            <!-- <div class="fakeimg">Image</div><br> -->
            <img src="./img/5.jpeg"width="100%"height="150px">
            <div class="fakeimg">Image</div><br>
            <img src="./img/5.jpeg"width="100%"height="150px">
            <!-- <div class="fakeimg">Image</div> -->
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