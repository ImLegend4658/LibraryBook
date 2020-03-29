 <!Doctype html>
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
    <p>Here you can add many books as you can <br> All you have to do is writing:</p>
      <p>Book name, Authoer name, ISBN, types of book and price of it.</p>
             
              
             <div id="return">
             <a href="home.php" target="_self">Return the main page? here</a>
                 
                 </div>
             
             
             
             
             <div id="Form"> 
             <form action="Submit.php" method="POST">
              <input type="hidden" name="id" value="<?php  echo (isset($id)&&!empty($id)) ? $id : '';?>"/>
             <label>  Book Name: </label><br>
              <input type="text" name="BookName" value="<?php echo (isset($BookName)&&!empty($BookName)) ? $BookName : ''; ?>" >
              <br>
              <lable>Author Name:</lable> <br>
              <input type="text" name="AuthorName" value="<?php echo (isset($AuthorName)&&!empty($AuthorName)) ? $AuthorName : ''; ?>">
              <br>
                 <label>Type:</label>  <br>
              <input type="text" name="Type" value="<?php  echo (isset($Type)&&!empty($Type)) ? $Type : ''; ?>">
              <br>
              <lable>ISBN:</lable> <br>
              <input type="number" name="ISBN" required value="<?php echo $ISBN; ?>">
              <br>
              <label>Price:</label>  <br>
              <input type="number" name="Price" value="<?php echo $Price; ?>">
              <br> <br>
                 <?php 
                 $edit_state = false;
                 if($edit_state == false ): ?>
                 <button type="submit" value="Submit"> Save </button>
                 <?php else: ?>
                 <button type="submit" value="update">update </button>
                 <?php endif; ?>
                 
             </form></div>
             
        </div>
    </body>
</html>