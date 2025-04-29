<?php

$conn=new mysqli("localhost", "root" , "", "contact" );

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error );
}


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql= "INSERT INTO labAgain (name, email, password) 
       VALUES ('$name', '$email', '$password' )";

if ($conn->query($sql)===TRUE)
{
    echo("Record entered successfully.");
}
else
{
    echo"Error: ". $conn->error;
}

$conn->close();

?>
