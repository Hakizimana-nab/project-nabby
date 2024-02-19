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
            <h5>Title description, Dec 7, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text.. WELCOME TO JavaScript:
                is script language that used to make web page to be more iteractive  
                and dynamically update usually its most popular language  used to make 
                website and web application such social media platform used in our daily
                and java also used in android studio platform and if you all this 
                language your can be great  develop according to you ? opportunies
                if need to be fullstark or font & back end on programming
                you learn more by follow toturial of w3schools toturial to more
                information of JavaScript to emproved your skills on js
                
             
             <r> learn more</r> 

             
                
               IF YOU WANT KNOW JS:  
               if you want to learn js or javascript
               open new folder and rename folder
               as link html with js file as extension or
               syntant of javascript : after start to Learn code
               <!-- you can open file: <tr> <script src="script.js"></script> </tr> -->
               and also after give file name and  extension js you
               can start with declare variable by using <let> <var>
               as your know that variable are set of container 
               where value are store  such as:(let, var are necessary used to declare variable)
               to display output you can used 
               :console.log(); in open in tool develop as Inspect
               in show console 
               :document.write(); in browser in page open if display
               output on page using Chrome and microsoft edge
         
         
               : they are some operator which have big role 
               in js or javascript such (>,<,=,==.===,!==)etc:
               and also we have  data type such ( 'integer','boolen','String','Number');
               and if you to learn more about you can continue with ('if','elseif','else');
               as show if statement and function and loop :
         
               there are 4type of loop:
               for loop;
               while loop;
               do while loop;

              
               etc
         
               according to loop :are repetition of code used to executed given task,
               
               ( <h1 style="color: blue">freeCode learn to get skills</h1>) class
               example:

               <script>
                 let i=0;
                for(i=0, i>0 i++);
         
                 alert(i);
                     
                </script>
         
                  <p>
                     <table>
                         <br>
                     
                     <!-- <script> -->
         
                       <br>  
                         eg:
         
                         let i=0;
                         for(i=0, i>0 i++);
         
                         alert(i);
         
                     </br>
         
                          <br>
                         
                         <tr> var name = 'peter' </tr> 
                         <tr>  var age ='20' </tr> 
                          
                         <tr>  document.writer(name +'is a' + age + 'years old');</tr> 
                 </br>    
                 
                     <!-- </script> -->
                     </br>
                     </table></p>
          </div>
          <div class="card">
            <h2>TITLE HEADING: The details of php </h2>
            <h5>Title description, Sep 2, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
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
            <div class="fakeimg" style="height:100px;">Image</div>
            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
          </div>
          <div class="card">
            <h3>Popular Post</h3>
            <div class="fakeimg">Image</div><br>
            <img src="./img/alone.jpg"width="100%"height="150px">
            <div class="fakeimg">Image</div><br>
            <img src="./img/alone.jpg"width="100%"height="150px">
            <div class="fakeimg">Image</div>
          </div>
          <div class="card">
            <h3>Follow Me</h3>
            <img src="./img/instagram.png">
            <img src="./img/twitter.png">
            <img src="./img/facebook.png">
            <img src="./img/linkedin.png">
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