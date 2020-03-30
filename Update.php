<?php 


 $con = mysqli_connect("localhost","root","","Library");
 mysqli_select_db($con,'Library');

//select query
$sql = "UPDATE TheBooks SET NAME='$_POST[bookname]', Authorn='$_POST[Author]', TYPE='$_POST[Type]', ISBN='$_POST[ISBN]', price= '$_POST[Price]' WHERE id='$_POST[id]'";

//execute the qyery 
if( mysqli_query($con,$sql))
 header("refresh:1; url=edit.php");
else
    echo "Not updated.";
    


?>