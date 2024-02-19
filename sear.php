
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seacrh.html</title>
  </head>
  <style>
    *{
      background-color:gainsboro;
      padding:0px;
      margin:0px;
    }
    body{
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .sec1-container .flex-center {
      background-color:#fbfbfb;
       padding: 10px;
       margin: 23px;
       width:82%;
    }
    .flex-center{
      background-color: rgb(26, 26, 60);
      padding:5px;
      margin:1vw;
      border-radius: 10px;

    }
    input[type=text]{
      background-color: rgb(180, 180, 184);
      padding:12px;
      border-radius: 1px;
    }
  </style>
  <body>
    <section class="sec001">
      <div class="sec1-container flex-center">
        <form action="search.php" method="get" class="flex-center">
          <input type="text" class="search" name="q" id="search" placeholder="search by keyword(ex: login page in...)">
              <a type="submit" class="twiter-background" name="searcher">Search</a>

             
              
                  <?php
                  // GET the search query from the request parameter
                  $query=$_GET['q'];
                  // perfom the search using your chosen
                  data source
                  //for example,you could run a Mysql
                  query like this:
                  // $result = Mysql_query("SELECT * FROM article WHERE title LIKE'%query%'");


                  // Display the search results
                  while($row = Mysql_fetch_array($results))
                  {
                    echo'<div>';
                    echo'<h2>'.$row['title'].'</h2>';
                    echo'<p>'.$row['excerpt'].'</p>';
                    echo'</div>';  
                  }
                  ?>

                  ?>
               
</div></div>
          </form>
      </div>
    </section>   
  </body>
  </html>