
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <style>
    *{
      background: color #cfd50c;;
    }
    input, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color:blueviolet;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:#444;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
h3{
  display:flex;
  justify-content:center;
  align-items:center;
}
input{
  width:100%;
  padding:13px 0px;
}
textarea{
  display:flex;
  justify-content:center;
  align-items:center;
  padding:30px 3px;
  margin:12px;
  width:40%;
  border-radius:10px;


}
  </style>
    <h3> contact</h3>
    <div>
        <form action="save.php" method="post">
         <label for="name">name</label>
           <input type="text" id="name" name="name" placeholder=" name..">

         <label for="Email">email</label>
            <input type="text" id="Email" name="email" placeholder=" email..">

            <select id="option" name="country">
        <option value="rwanda" name="">rwanda</option>


  
    
    <script>
        let country = ['rwanda','burundi','england','france','usa','uganda','kenya','south africa','russia'];
        let i= 0;
        while(i<country.length){
            let tb = country[i];
            option.innerHTML+=`<option value="${tb}">${tb}</option>`;
            i++;
        }
    </script>
    

    </select>
    <label for="password">password</label>
    <input type="password" name="password" id="password" placeholder="enter password....">
    
    <label src="Message"></label>
    <textarea id="Message"name="message"placeholder=" Message "style="height:100px"Required></textarea>
      
    <input type="submit" name="submit" value="sumbit">

    </form>    
    </div>
    <script src="index.js"></script>
</body>
</html>
    
</body>
</html>