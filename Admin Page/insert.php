<?php

$brandName = $_POST['brandName'];
$modalName = $_POST['modalName'];
$imgLinkAddress = $_POST['imgLinkAddress'];
$startingPrice = $_POST['startingPrice'];
$endingPrice = $_POST['endingPrice'];
$startingMileage = $_POST['startingMileage'];
$endingMileage = $_POST['endingMileage'];
$transmission = $_POST['transmission'];
$seats = $_POST['seats'];
$engineDisplacement = $_POST['engineDisplacement'];
$bhp = $_POST['bhp'];
$bootSpace = $_POST['bootSpace'];
$fuelType = $_POST['fuelType'];
$noOfCylinder = $_POST['noOfCylinder'];
$bodyType = $_POST['bodyType'];
$fuelTankCapacity = $_POST['fuelTankCapacity'];
$maxPower = $_POST['maxPower'];
$maxTorque = $_POST['maxTorque'];
$ARAI_mileage = $_POST['ARAI_mileage'];

echo "brandName : " . $brandName . "<br>";
echo "modalName : " . $modalName . "<br>";
echo "imgLinkAddress : " . $imgLinkAddress . "<br>";
echo "startingPrice : " . $startingPrice . "<br>";
echo "endingPrice : " . $endingPrice . "<br>";
echo "startingMileage : " . $startingMileage . "<br>";
echo "endingMileage : " . $endingMileage . "<br>";
echo "transmission : " . $transmission . "<br>";
echo "seats : " . $seats . "<br>";
echo "engineDisplacement : " . $engineDisplacement . "<br>";
echo "bhp : " . $bhp . "<br>";
echo "bootSpace : " . $bootSpace . "<br>";
echo "fuelType : " . $fuelType . "<br>";
echo "noOfCylinder : " . $noOfCylinder . "<br>";
echo "bodyType : " . $bodyType . "<br>";
echo "fuelTankCapacity : " . $fuelTankCapacity . "<br>";
echo "maxPower : " . $maxPower . "<br>";
echo "maxTorque : " . $maxTorque . "<br>";
echo "ARAI_mileage : " . $ARAI_mileage . "<br><br>";



// echo $brandName,$modalName,$imgLinkAddress,$startingPrice,$endingPrice,$carDetailLink,$startingMileage,$endingMileage,$transmission;

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

if(!empty($brandName) || !empty($modalName) || !empty($imgLinkAddress) || !empty($startingPrice) || !empty($endingPrice) || !empty($carDetailLink) || !empty($startingMileage) || !empty($endingMileage) || !empty($transmission)){

    // SQL Query to be executed
    echo "Entered <br>";
    // sql query 

    $query = "INSERT INTO `cargrid` (`brandName`, `modalName`, `imgLinkAddress`, `startingPrice`, `endingPrice`, `startingMileage`, `endingMileage`, `transmission`, `seats`, `engineDisplacement`, `bhp`, `bootSpace`, `fuelType`, `noOfCylinder`, `bodyType`, `fuelTankCapacity`, `maxPower`, `maxTorque`, `ARAI_mileage`) VALUES ('$brandName', '$modalName', '$imgLinkAddress', '$startingPrice', '$endingPrice', '$startingMileage', '$endingMileage', '$transmission', '$seats', '$engineDisplacement', '$bhp', '$bootSpace', '$fuelType', '$noOfCylinder', '$bodyType', '$fuelTankCapacity', '$maxPower', '$maxTorque', '$ARAI_mileage')";

    // echo "Done";

    $result = mysqli_query($conn, $query);
    // echo "result ->". $result;
    // add a new column to the database
    if($result){
        echo "Record Entered Successfully";
    }
    else{
        echo "Record not entered sucessfully erroe --->" . mysqli_error($conn);
    }

}
else if(!empty($newAdminName) || !empty($newAdminUserName) || !empty($newAdminPassword)){
    // SQL Query to be executed

    $sql = "INSERT INTO `adminDetails` (`name`, `userName`, `password`, `addingDate`) VALUES ('$newAdminName', '$newAdminUserName', '$newAdminPassword', current_timestamp())";

    $result = mysqli_query($conn, $sql);
    // add a new column to the database
    if($result){
        echo "Record Entered Successfully";
    }
    else{
        echo "Record not entered sucessfully erroe --->" . mysqli_error($conn);
    }
}
else{
    echo "All fields are required";
}

?>

<!-- INSERT INTO `cargrid` (`brandName`, `modalName`, `imgLinkAddress`, `startingPrice`, `endingPrice`, `startingMileage`, `endingMileage`, `transmission`, `seats`, `engineDisplacement`, `bhp`, `bootSpace`, `fuelType`, `noOfCylinder`, `bodyType`, `fuelTankCapacity`, `maxPower`, `maxTorque`, `ARAI_mileage`) VALUES ('MAHINDRA', 'xuv500', '../../images/mcqueencar1.jpg', '12.5', '15', '19.5', '21.5', 'Manual', '7', '999', '245', '300', '1111', '4', 'Sedan', '55','345@400rpm', '545@400rpm', '1233'); -->