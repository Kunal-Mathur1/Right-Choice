<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// connecting to the Database
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "RightChoiceDB";

// Create a connection 
$conn = mysqli_connect($serverName, $userName, $password, $database);
// Die if connection was not successfull
if(!$conn){
    die("Sorry we failed to connect : ". mysqli_connect_error());
}
else{
    // echo "connection was successfull <br>";
}


$query = "INSERT INTO `contactusformdetails` (`Name`, `E-mail`, `Message`) VALUES ('$name', '$email', '$message')";

$result = mysqli_query($conn, $query);

if($result){
    // echo "Record Entered Successfully";
    echo "<script>alert('Form Submitted Sucessfully'); window.location.href = 'index.html';</script>";
}
else{
    echo "Record not entered sucessfully erroe --->" . mysqli_error($conn);
    echo "<script>alert('Form Not Submitted'); window.location.href = 'index.html';</script>";
}








?>