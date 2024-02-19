<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        padding: 0px;
        margin:0px;

    }
    body{
          display:flex;
          justify-content: center;
          align-items: center;
          box-shadow: 1px solid #dbd1d1;
          padding: 12px  80px;
        
          

    }
    .container{
        display:flex;
        justify-content: flex-start;
        align-items: flex-start;
        min-height: 60vh;
        background-color: rgb(117, 117, 204);
        width: 100%;
       
    }
    .flex-center{
        display: flex;
        justify-content:flex-start;
        align-items:flex-start;
        font-size: 32px;
        padding:100px  40px;
        height: 200px;
        width: 100%;
    }
    a{
        padding:10px;
        margin: 23px;

    }
    .box{
        
        flex-direction:row-reverse;
        background-image:url('./img/binary-2372130_1280.jpg');
        background-size:cover;
        padding: 42px;  
        border-radius: 100px;
        border: 1px solid #1f1e1e;
        width: 0%;
        margin:12px;
      

    }
    .container{
        background-color: rgba(147, 105, 187, 0.116);
        padding: 52px 83px;
        min-height:60vh;
        margin: 12px;
        width: 500px;
    }
    .footer{
          display: flex;
          justify-content: center;
          align-items: center;
          color:#ccc;
    }
    .nav-side{
        background-color: red;
    }
    h3{
        display:flex;
        justify-content: center;
        align-items: center;
        padding:10px;
        text-transform: uppercase;
    }
    td{
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        /* min-height: 3vh; */
        padding:22px 2px;
        flex-direction: row;
        /* margin: 1px; */
    }
   
</style>
<body>
    <div class="nav-side">
        <span class="welcome to website"></span>

    </div>
    <div class="container">
        <!--[H]eader nav-->
       

        <div class="header">

                 <h3> Please visit  my account</h3>
            
             
            <!-- Codes for coverPic, name and staus-->

        <table border="2">

            <tr>
                
           <td> <div class="box"></div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum numquam itaque nobis dolor molestiae dignissimos quos est illum quaerat. Reprehenderit non deserunt magni hic dolores obcaecati nam molestias iste debitis? <a href="#1f1e1e">Read</a> </p></td>
          
            
           <td> <div class="box"></div>
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque eveniet laudantium illo tempore ea ipsum velit a qui recusandae eos, repellendus saepe neque molestiae possimus. A eum aut mollitia blanditiis! <a href="#1f1e1e">Read</a> </p></td>

           <td> <div class="box"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit excepturi quae autem. Fugit officia, voluptates vel ut nulla ea aut quidem totam numquam cupiditate unde cumque commodi error quo obcaecati? <a href="#1f1e1e">Read</a> </p></td>

        </div>
    </tr>

    </table>

        <div class="footer">
            
          <!-- footer for account  -->
        </div>
      
    
    </div>
    </div>
    
</body>
</html>