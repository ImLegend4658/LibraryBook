<?php
//include("delete.php");
 include("addBooks.php");
include("edit.php");
$id =$_POST[('id')];
$BookName =$_POST[('BookName')];
$AuthorName =$_POST[('AuthorName')];
$Type =$_POST[('Type')];
$ISBN =$_POST[('ISBN')];
$Price =$_POST[('Price')];
 
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

$sql = "INSERT INTO TheBooks (NAME,Authorn,TYPE,ISBN,Price) VALUES ('$BookName','$AuthorName','$Type','$ISBN','$Price')";

 //   header('location:addBooks.php'); // redirect to this file after submit
if ($conn->query($sql) === TRUE){
     echo "New Record created successfully";
}else
{
    echo"Error" . $sql . "<br>" . $conn->error;
}
 
$conn->close();
 