<?php
// Create a connection
$Your_Name = $_POST['Your_Name'];
$email = $_POST['email'];
$number = $_POST['number'];
$DoB = $_POST['DoB'];

// connecting the Database 
$servername = "localhost";
$username = "root";
$Password = "";

// create a connecton
$conn = new mysqli('localhost','root', '','test');


// Die if was connection was not successful
if ($conn->connect_error)
{
 die("Sorry we failed to connect:".$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into data (Name, email, number, DoB)
    values(?,?,?,?)");
    $stmt->bind_param("isss",$Your_Name, $email, $number, $DoB);
    $stmt->execute();
    echo "Appointment was fixed";
    $stmt -> close();
    $conn -> close();
}
?>