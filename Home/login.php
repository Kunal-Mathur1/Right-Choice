<?php
if (isset($_POST['submit'])) {
  $loginUserName = $_POST['userName'];
  $loginUserPassword = $_POST['password'];


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

// Get data from table
$sql = "SELECT * FROM `userdetails`  WHERE userName='$loginUserName' AND password='$loginUserPassword'";
$result = mysqli_query($conn, $sql);

// find the no. of records
$num = mysqli_num_rows($result);
// echo $num . " no. of records";
echo "<br>";

$row = mysqli_fetch_assoc($result);

// echo "Hey " . $row['role'];

if($row['role'] == "admin" and $num>=1){
    echo "<script>alert('Login Sucessfull'); window.location.href = '../Admin Page/admin1.html';</script>";
}

if($num>=1){
    echo "<script>alert('Login Sucessfull'); window.location.href = 'index.html';</script>";
}
else{
    echo "<script>alert('Incorrect Username or password'); window.location.href = 'index.html';</script>";
}

}







?>