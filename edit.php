<?php

 $conn = mysqli_connect("localhost","root","","Library");
                    if ($conn-> connect_error){ 
                    die("connect failed". $conn-> connect_error);
                    }
if(isset($_POST['update']))
{
    $BookName =$_POST[('BookName')];
$AuthorName =$_POST[('AuthorName')];
$Type =$_POST[('Type')];
$ISBN =$_POST[('ISBN')];
$Price =$_POST[('Price')];
    
    //check emty fields 
    
    if(empty($BookName) || empty($AuthorName) || empty($Type) || empty($Price)){
        if(empty($BookName)){
            echo "<font color= 'red'> Name Field is empty.</font><br/>";
        }
        if(empty($AuthorName)){
             echo "<font color= 'red'> author name Field is empty.</font><br/>";
        }
        if(empty($Type)){
            echo "<font color= 'red'>Type Field is empty.</font><br/>";
        }
        if(empty($Price)){
            echo "<font color= 'red'>Price Field is empty.</font><br/>";
        }
    } else {
        //Update the table..
        $result = mysqli_query($mysqli, "UPDATE TheBooks SET NAME='$BookName', Authorn='$AuthorName', TYPE='$Type', Price='$Price' WHERE ISBN='$ISBN'");
        
        header("Location: readTheBooks.php");
    }
    
    //NAME,Authorn,TYPE,ISBN,Price
}

?>