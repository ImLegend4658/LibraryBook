

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
                 
                 </div>
             
             <div id="tableview">
             <table>
              <tr>
                 <th>Book Name</th>
                  <th>Author Name</th>
                  <th>Type</th>
                  <th>ISBN</th>
                  <th>Price</th>
                  <th colspan="2">Update</th>
                 </tr>
                 
                 <?php 
                    $conn = mysqli_connect("localhost","root","","Library");
                    if ($conn-> connect_error){ 
                    die("connect failed". $conn-> connect_error);
                    }

                    $sql = "SELECT NAME,Authorn,TYPE,ISBN,Price from TheBooks";
                    $result = $conn-> query($sql);

                    if($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){

                    echo "<tr><td>". $row["NAME"] ."</td><td>". $row["Authorn"] . "</td><td>". $row["TYPE"] ."</td><td>". $row["ISBN"] ."</td><td>". $row["Price"] ."</td> ".
                        "<td> 
                        <a href='Submit.php?edit=<?php echo \$row['id'];' ?>Edit</a>
                          <a href='Submit.php?edit=<?php echo \$row['id'];' ?>Delete</a>
                        </td></tr>";
                    }
                        echo "</table>";
                    } else {
                        echo "0 result";
                    }
                 $conn-> close();
                 
                 if(isset($_POST['edit'])){
                     $id = $_POST['edit'];
                      $rec = mysqli_query($db, "SELECT * FROM TheBooks WHERE id=$id");
                     $record = mysqli_fetch_array($rec);
                     $BookName = $record['BookName'];
                     $AuthorName = $record['$AuthorName'];
                     $Type = $record['Type'];
                     $ISBN = $record['ISBN'];
                     $Price = $record['Price'];
                     $id = $record['id'];
                 }
                 
                    ?>
             </table>
             </div>
        </div>
    </body>
</html>