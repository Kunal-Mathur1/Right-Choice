<?php

    // Get Data
    $loginUserName = $_POST['userName'];
    $loginUserPassword = $_POST['password'];

    echo $loginUserName . "<br>";
    echo $loginUserPassword . "<br>";

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
        echo "connection was successfull <br>";
    }

    // Get data from table
    $sql = "SELECT * FROM `adminDetails`  WHERE userName='$loginUserName' AND password='$loginUserPassword'";
    // SELECT * FROM `adminDetails` WHERE userName="akshat" AND password="singer";
    $result = mysqli_query($conn, $sql);
    

    // find the no. of records
    $num = mysqli_num_rows($result);
    echo $num . " no. of records";
    echo "<br>";
    
    $row = mysqli_fetch_assoc($result);
    echo "Hey " . $row['userName'];
    echo "Hey " . $row['password'];

    // echo "<br>" . var_dump($sql);

    if($row['userName'] == $loginUserName and $row['password'] == $loginUserPassword){
        header("Location: ../Admin Page/admin.html"); /* Redirect browser */
    }
    
?>

<!-- header("Location: ./"); /* Redirect browser */
exit(); -->