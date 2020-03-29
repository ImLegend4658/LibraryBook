<?php
 
 $BookName =$_POST[('BookName')];
$AuthorName =$_POST[('AuthorName')];
$Type =$_POST[('Type')];
$ISBN =$_POST[('ISBN')];
$Price =$_POST[('Price')];
$id =0;
$edit_state = false;

$servername = "localhost";
$username = "root";
$password = "";
$dbname="Library";
//create connection

$conn = new mysqli($servername,$username, $password,$dbname );

//check for connection..

if($conn->connect_error){
    die("connection Failed ". $conn->connect_error);
}

echo "Connection Successfully";

$sql = "INSERT INTO TheBooks (NAME,Authorn,TYPE,ISBN,Price) VALUES ( '$BookName','$AuthorName','$Type','$ISBN','$Price')";
    header('location:addBooks.php'); // redirect to this file after submit
if ($conn->query($sql) === TRUE){
    echo "New Record created successfully";
}else
{
    echo"Error" . $sql . "<br>" . $conn->error;
}

$conn->close();

//update records 

if(isset($_POST['update'])){
    $id =  mysql_real_escape_string($_POST['id']);
    $BookName = mysql_real_escape_string($_POST['BookName']);
    $AuthorName = mysql_real_escape_string($_POST['AuthorName']);
    $Type = mysql_real_escape_string($_POST['Type']);
    $ISBN = mysql_real_escape_string($_POST['ISBN']);
    $Price =  mysql_real_escape_string($_POST['Price']);
    header('location:readTheBooks.php');
}


?>