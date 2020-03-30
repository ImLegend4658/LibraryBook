<?php
 $con = mysqli_connect("localhost","root","","Library");
 mysqli_select_db($con,'Library');

//select query
$sql = "SELECT * FROM TheBooks";

//execute the qyery 
$records = mysqli_query($con,$sql);
//if(mysqli_query($con,$sql))
//    header("refresh:1; url=readTheBooks.php");
//else
//    echo "not deleted";

?>
<!doctype html>
<html>
<head>
    <meta charset="ut-8">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Library web </title>
    </head>
    
    <body>
         <div id="wrapper"> 
        <div class="logo">
        <img src="/test/pic/book-2943383_640.png" alt="logo library" width="200">
        </div>
        
        
    <h1>Welcome to Library web</h1>
    <p>This page about to chose any book that  you want to read. just chose any book and enjoy to read it :) </p>
             
              
             <div id="return">
             <a href="home.php" target="_self">Return the main page? here</a>
                 <br><br>
                 <a href="addBooks.php" target="_self">Add book here</a>
                 </div>
             
             <div id="tableview">
             <table>
              <tr> 
                 <th>Book Name</th>
                  <th>Author Name</th>
                  <th>Type</th>
                  <th>ISBN</th>
                  <th>Price</th>
                  <th>Edit</th>
                 </tr>
                 
                 <?php 
                  while($row = mysqli_fetch_array($records)){
                      echo "<tr><form action=Update.php method=post>";
                      echo "<td><input type=text name= bookname value='".$row['NAME']."'></td>";
                      echo "<td><input type=text name= Author value='".$row['Authorn']."'></td>";
                      echo "<td><input type=text name= Type value='".$row['TYPE']."'></td>";
                      echo "<td><input type=number name= ISBN value='".$row['ISBN']."'></td>";
                      echo "<td><input type=number name= Price value='".$row['price']."'></td>";
                      echo "<input type=hidden name=id value='".$row['id']."'></td>";
                      echo "<td><input type=submit>";
                      echo "</form></tr>";
                  }
                    ?>
             </table>
             </div>
        </div>
    </body>
</html>