<?php
$conn = mysqli_connect("localhost","root","","manager");


?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search Bar</title>
    <style>
        /*style the search bar*/
           
        form{
            display: flex;
            justify-content: center;
            align-items:20px 0;
        }
        input[type="text"]{
            padding: 10px;
            font-size: 16px;
            border: 2px solid#ccc;
            border-radius: 4px;
            width:300px;
            margin-right: 10px;
        }
        button[type="button"]{
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color:white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="button"]:hover{
            background-color: #45a049;
        }
        /* style the search result*/
          #resultsContainer{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;

          }
          #resultsContainer div {
            padding: 10px;
            margin:10px;
            font-size: 16px;
            border:2px solid #ccc;
            border-radius: 4px;
            min-width: 100px;
            text-align: center;
          }
    </style>
</head>
<body>
    <!-- THE HTML FORM-->
    <form>
        <input type="search"id="searchInput"placeholder="search..">
       <button type="button" onclick="search()">search</button>
    </form>

    <!--The container for search results-->
    <div id="resultscontainer"></div>

    <!--The javascript function-->
    <script>
        function search(){
            var input = document.getElementById("searchInput").value;
            var data = ["apple","banana","orange","pear","grape"];
             
         // filter the array base on the input
            value 
            var filteredData = Data.filter(function(item){
             return item.toLowerCase().includes(input.toLowerCase());

            });


        // display the search results
            var resultsContainer=document.getElementById("resultsContainer");
            resultscontainer.innerHTML="";
            filteredData.ForEach(function(item){
             var result = document.createElement("div");
             result.textContent = item   
            });
        
            }
    </script>

   
</body>
</html>