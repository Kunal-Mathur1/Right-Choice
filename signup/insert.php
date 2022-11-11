<?php

$name = $_POST['name'];
$userName = $_POST['userName'];
$email = $_POST['email'];
$mobileNo = $_POST['mobileNo'];
$address = $_POST['address'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost","root","","RightChoiceDB");

if($conn){
//    echo "connected";
}

if(!empty($name) || !empty($userName) || !empty($email) || !empty($mobileNo) || !empty($address) || !empty($password)){
    // INSERT INTO `userdetails` (`name`, `userName`, `email`, `mobileNo`, `address`, `password`, `role`) VALUES (' Kunal Mathur', 'kunal19', 'im.kunalmathur@gmail.com', '6378178765', 'Umaid Chowk', '1234', 'admin');
    $query = "INSERT INTO `userdetails` (`name`, `userName`, `email`, `mobileNo`, `address`, `password`, `role`) VALUES ('$name', '$userName', '$email', '$mobileNo', '$address', '$password', 'user')";
    $result = mysqli_query($conn, $query);
    if($result){
        // echo "Record Entered Successfully";
        // echo "";
    }
    else{
        // echo "Record not entered sucessfully error" . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome Page</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        div {
            text-align: center;
            border: 1px solid gray;
            width: 33%;
            background: white;
            padding: 25px;
            margin-bottom: 150px;
            border: 2px solid rgb(97, 80, 80);
            border-radius: 25px;
        }

        button {
            height: 30px;
            width: 40%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div>
        <h1>Welcome <?php $name ?></h1>
        <h3>You Registered Successfully</h3>
        <button><a href="../Home/index.html">Go Home</a></button>
        <p>5s to go home page</p>
    </div>

    <script>
        setTimeout(()=>{
            location.href = '../Home/index.html';
        },5000)
    </script>
</body>

</html>