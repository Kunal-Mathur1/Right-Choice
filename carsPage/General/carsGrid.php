<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CommoFiles/navFooterContact.css">
    <link rel="stylesheet" href="carsGrid.css">

</head>

<body>

    <div class="backdrop"></div>
    <!-- Nav Bar -->
    <div class="wrapper">
        <nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><img src="../Icons/menu.png" alt="Menu"></label>
            <div class="content">
                <div class="logo"><a href="index.html">Right Choice</a></div>
                <ul class="links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="../Stores/store.html">Stores</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#" id="navContactUs">Contact Us</a></li>
                </ul>
            </div>
            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <label for="show-search" class="search-icon"><img src="../../Icons/search.png" alt="img"></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Type Something to Search..." required>
                <button type="submit" class="go-icon">-></button>
            </form>
        </nav>
    </div>

    <h1 id="carCompanyName">
        <?php
            // Get Car Brand Name 
            $getCarBrandName = $_GET['brand'];
        
            // echo var_dump($getCarBrandName) . "succeed" . "<br>";
            // echo var_dump($getCarBrandName == "AUDI"). "<br>";
            echo $getCarBrandName;
        ?>
    </h1>

    <div class="carsContainer">

        <?php
            
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
            // $sql = "SELECT * FROM `carGrid`";
            $sql = "SELECT * FROM `carGrid` WHERE brandName = '$getCarBrandName'";
            $result = mysqli_query($conn, $sql);
            
            // find the no. of records
            $num = mysqli_num_rows($result);
            // echo $num . "no. of records";
            // echo "<br>";
            
            // echo $num;
            // display row returned by the sql query    
            if($num>0){
                while($row = mysqli_fetch_assoc($result)){
                    
                    $carModalName = $row['modalName'];
                    $imgLink = $row['imgLinkAddress'];
                    $carStartingPrice = $row['startingPrice']; 
                    $carEndingPrice = $row['endingPrice'];
                    // $carDetailLink = $row['carDetailLink'];
                    $carStartingMileage = $row['startingMileage'];
                    $carEndingMileage = $row['endingMileage'];
                    $transmission = $row['transmission'];

                    echo    "<div class='carsContainer__item'>
                                <a href='detailCar.php?carModalName=$carModalName'>
                                    <img class='carsContainer__item__image' src='$imgLink' alt='Cars'>
                                    <div class='carsContainer__item__info'>
                                        <div class='carsContainer__item__info__label'>$carModalName</div>
                                        <div class='carsContainer__item__info__price'>Rs.$carStartingPrice - $carEndingPrice Lakh <sup>*</sup></div>
                                        <div class='carsContainer__item__info__otherInfo'>$carStartingMileage - $carEndingMileage $transmission</div>
                                    </div>
                                </a>
                            </div>";
                }
            }
            
            // $car = "<div class='carsContainer__item'>
            //             <a href='#'>
                            // <img class='carsContainer__item__image' src='../../images/mcqueencar1.jpg' alt='Cars'>
            //                 <div class='carsContainer__item__info'>
            //                     <div class='carsContainer__item__info__label'></div>
            //                     <div class='carsContainer__item__info__price'>Rs.11.29 - 14.55 Lakh <sup>*</sup></div>
            //                     <div class='carsContainer__item__info__otherInfo'>Petrol20.27 to 20.97 kmplManual/Automatic</div>
            //                 </div>
            //             </a>
            //         </div>";

            // echo $car;
            
            // $row = mysqli_fetch_assoc($result);
            // echo "Hey " . $row['carModalName'];
            
            // for($i=0; $i<$num; $i++){
            //     echo $car;
            // }

        ?>
    </div>

    <!-- <img class='carsContainer__item__image' src='../CARIMG/MAHINDRA CAR IMAGES/altrusG4.jpg' alt='Cars'> -->


    <!-- <script src="carsGrid.js"></script> -->
</body>

</html>