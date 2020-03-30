<?php

 $con = mysqli_connect("localhost","root","","Library");
 mysqli_select_db($con,'Library');

//select query
$sql = "DELETE FROM TheBooks WHERE id='$_GET[id]'";

//execute the qyery 

if(mysqli_query($con,$sql))
    header("refresh:1; url=readTheBooks.php");
else
    echo "not deleted";

?>