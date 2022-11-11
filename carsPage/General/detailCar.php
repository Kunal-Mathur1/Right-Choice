<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CommoFiles/navFooterContact.css">
    <link rel="stylesheet" href="detailCar.css">
</head>

<body>
    <div class="backdrop"></div>
    <!-- Nav Bar -->
    <div class="wrapper">
        <nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><img src="../../Icons/menu.png" alt="Menu"></label>
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
                <!-- <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button> -->
                <button type="submit" class="go-icon">-></button>
            </form>
        </nav>
    </div>

    <?php
            // Get Car Brand Name 
            $getCarModalName = $_GET['carModalName'];
            // echo $getCarModalName;

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
            // $sql = "SELECT * FROM `carGrid` WHERE modalName = 'Maruti Baleno'";
            $sql = "SELECT * FROM `carGrid` WHERE modalName = '$getCarModalName'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            // Set Variable
            $startingPrice = $row['startingPrice'];
            $endingPrice = $row['endingPrice'];
            $startingMileage = $row['startingMileage'];
            $endingMileage = $row['endingMileage'];
            $transmission = $row['transmission'];
            $seatingCapacity = $row['seats'];
            $engineDisplacement = $row['engineDisplacement'];
            $bhp = $row['bhp'];
            $bootSpace = $row['bootSpace'];
            $fuelType = $row['fuelType'];
            $noOfCylinder = $row['noOfCylinder'];
            $bodyType = $row['bodyType'];
            $fuelTankCapacity = $row['fuelTankCapacity'];
            $maxPower = $row['maxPower'];
            $maxTorque = $row['maxTorque'];
            $ARAI_mileage = $row['ARAI_mileage'];
            // echo $brandName;
            // echo "Hey " . $row['startingPrice'];

    //  Slide Bar Images
    $content="<div class='main'>
                <div class='leftSection'>
                    <div class='slideContainer'>
                        <div class='content'>
                            <div class='images'>
                            <img class='content__images__image' src='../CARIMG/MAHINDRA CAR IMAGES/altrusG4.jpg'>
                                <img class='content__images__image' src='../CARIMG/MAHINDRA CAR IMAGES/thar.jpg'>
                                <img class='content__images__image' src='../../images/Audi.jpg'>
                                <img class='content__images__image' src='../../images/ucar.jpg'>
                                <img class='content__images__image' src='../../images/kia.jpg'>
                            </div>
                            <div class='sliders left' onclick='side_slide(-1)'>
                                <span><</span>
                            </div>
                            <div class='sliders right' onclick='side_slide(1)'>
                                <span>></span>
                            </div>
                        </div>
                    </div>
                    <div class='carInfoBottom'>
                        <div class='namePriceInfo'>
                            <div class='carName'><h1>$getCarModalName</h1></div>
                            <div class='carPrice'><h2>Rs $startingPrice to $endingPrice Lakh<sup>*</sup></h2><p>*Ex-showroom Price in Jodhpur</p></div>
                        </div>
                        <div class='storeBtn'>
                            <button>See Stores</button>
                        </div>
                    </div>

                </div>

                <div class='rightSection'>
                    <div class='keySpecs'>
                        <h2>Key specs of Car Name</h2>
                        <div class='keySpecs__items'>
                            <div>
                                <img src='icons/mileage.jpg' alt='mileage'>
                                <p>$ARAI_mileage</p>
                            </div>
                            <div>
                                <img src='icons/engine.jpg' alt='mileage'>
                                <p>$engineDisplacement</p>
                            </div>
                            <div>
                                <img src='icons/bhp.jpg' alt='mileage'>
                                <p>$bhp</p>
                            </div>
                            <div>
                                <img src='icons/Transmission.jpg' alt='mileage'>
                                <p>$transmission</p>
                            </div>
                            <div>
                                <img src='icons/Seats.jpg' alt='mileage'>
                                <p>$seatingCapacity</p>
                            </div>
                            <div>
                                <img src='icons/Airbag.jpg' alt='mileage'>
                                <p>Yes</p>
                            </div>
                        </div>
                    </div>
                    <div class='keySpecification'>
                        <h2>Specification of Car Name</h2>
                        <div class='keySpecification_item'>
                            <table>
                                <tr>
                                    <td>Boot Space</td>
                                    <td>$bootSpace</td>
                                </tr>
                                <tr>
                                    <td>Fuel Type</td>
                                    <td>$fuelType</td>
                                </tr>
                                <tr>
                                    <td>No. of cylinder</td>
                                    <td>$noOfCylinder</td>
                                </tr>
                                <tr>
                                    <td>Engine Displacement (cc)</td>
                                    <td>$engineDisplacement</td>
                                </tr>
                                <tr>
                                    <td>Max Power (bhp@rpm)</td>
                                    <td>$maxPower</td>
                                </tr>
                                <tr>
                                    <td>Seating Capacity</td>
                                    <td>$seatingCapacity</td>
                                </tr>
                                <tr>
                                    <td>Max Torque (nm@rpm)</td>
                                    <td>$maxTorque</td>
                                </tr>
                                <tr>
                                    <td>TransmissionType</td>
                                    <td>$transmission</td>
                                </tr>
                                <tr>
                                    <td>Body Type</td>
                                    <td>$bodyType</td>
                                </tr>
                                <tr>
                                    <td>Fuel Tank Capacity</td>
                                    <td>$fuelTankCapacity</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>";

            echo $content;
        ?>
    

    <!-- Footer -->
    <footer class="footerContainer">
        <div class="footerContainer__websiteInfo">
            <h1 class="footerContainer__websiteInfo__websiteName">Right Choice</h1>
            <p class="footerContainer__websiteInfo__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                molestias, iusto dolorem ea laudantium assumenda in quo iure incidunt eum!. Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Blanditiis, et! Esse nesciunt, at explicabo accusamus harum quisquam!
                Perferendis,
                natus accusamus!</p>
        </div>
        <div class="footerContainer__socialMediaIcons">
            <div><a href="#"><img src="../../Icons/linkedIn.png" alt="LinkedIn"></a></div>
            <div><a href="#"><img src="../../Icons/facebook.png" alt="Facebook"></a></div>
            <div><a href="#"><img src="../../Icons/instagram.jpeg" alt="Instagram"></a></div>
            <div><a href="#"><img src="../../Icons/linkedIn.png" alt="Img"></a></div>
        </div>
        <div class="footerContainer__items">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Stores</a>
            <a href="#">Contact</a>
        </div>
        <div class="designerName">
            <h3>Designed by : Kunal Mathur</h3>
        </div>
    </footer>

    <!-- Contact Form -->
    <div class="contactUsDisplay">
        <div class="contactUsContainer">
            <div class="contactUsContainer__item">
                <div id="closeForm">X</div>
                <div class="contactUsContainer__item__image">
                    <img src="../../images/mcqueencar1.jpg" alt="Car">
                </div>
                <div class="contactUsContainer__item__form">
                    <h2>Contact Us</h2>
                    <fieldset>
                        <legend>Name</legend>
                        <input type="text" placeholder="Enter your name">
                    </fieldset>
                    <fieldset>
                        <legend>E-mail</legend>
                        <input type="email" placeholder="Enter your email">
                    </fieldset>
                    <fieldset>
                        <legend>Message</legend>
                        <textarea id="contactUsContainer__item__form__msg" cols="30" rows="5"></textarea>
                    </fieldset>
                    <div class="contactUsContainer__item__form__submit">
                        <button>Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../CommoFiles/script.js"></script>
    <script src="detailCar.js"></script>
</body>
</html>