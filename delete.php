<?php

 $conn = mysqli_connect("localhost","root","","Library");
                    if ($conn-> connect_error){ 
                    die("connect failed". $conn-> connect_error);
                    }

        //delete the table..
$ISBN =$_GET['ISBN'];

        $result = mysqli_query($mysqli, "DELETE FROM TheBooks WHERE ISBN='$ISBN'");
        
        header("Location: readTheBooks.php");
    }
    
    //NAME,Authorn,TYPE,ISBN,Price
}

?>