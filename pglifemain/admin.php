<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome To Admin Page</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes\headerad.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Welcome to the Admin Page</h2>


    </div>

    <div class="page-container">
        <h1 class="city-heading">
            Fill Information about the more PG's
        </h1>
        <div class="container contact-form">
            <div class="contact-image">
                <img src="img/download.png" alt="rocket_contact" />
            </div>
            <form id="form" class="form" role="form" method="post" action="api/from.php">
                <h3>Fill the below information</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="Name" class="form-control" placeholder="PG Name *" required>
                        </div>

                        <h4>Enter the citie</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Citie" id="Citie" value=1>
                            <label class="form-check-label" for="Citie">
                                Delhi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Citie" id="Citie" value=2>
                            <label class="form-check-label" for="Citie">
                                Mumbai
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Citie" id="Citie" value=3>
                            <label class="form-check-label" for="Citie">
                                Bengaluru
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Citie" id="Citie" value=4>
                            <label class="form-check-label" for="Citie">
                                Hyderabad
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="address" required>
                                Enter the Address of the PG
                            </label>
                            <textarea name="address" class="form-control" placeholder="Your Adress *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description"">
                            Enter the Description of the PG
                            </label>
                            <textarea name=" description" class="form-control" placeholder="Your Description *" style="width: 100%; height: 150px;" required></textarea>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Enter the Gender</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                            <label class="form-check-label" for="gender">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                            <label class="form-check-label" for="gender">
                                Female
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="unisex">
                            <label class="form-check-label" for="gender">
                                Unisex
                            </label>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" name="rent" class="form-control" placeholder="Rent" required>
                        </div>
                        <div class="form-group">
                            <input type="number" step="0.1" name="rating_clean" class="form-control" placeholder="Rating Clean" required>
                        </div>
                        <div class="form-group">
                            <input type="number" step="0.1" name="rating_food" class="form-control" placeholder="Rating Food*" required>
                        </div>
                        <div class="form-group">
                            <input type="number"  step="0.1" name="rating_safty" class="form-control" placeholder="Rating Safty *" required>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-12">
                   
                        <h4>Enter the anenities</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=1 id="flexCheckDefault" name="A[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                Wifi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=2 id="flexCheckChecked" name="A[]">
                            <label class="form-check-label" for="flexCheckChecked">
                                Power Backup
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=3 id="flexCheckDefault" name="A[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                Fire Extinguisher
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=4 id="flexCheckChecked" name="A[]">
                            <label class="form-check-label" for="flexCheckChecked">
                                TV
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=5 id="flexCheckDefault" name="A[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                Bed with Matterss
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=6 id="flexCheckChecked" name="A[]">
                            <label class="form-check-label" for="flexCheckChecked">
                                Parking
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=7 id="flexCheckDefault" name="A[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                Water Purifier
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=8 id="flexCheckChecked" name="A[]">
                            <label class="form-check-label" for="flexCheckChecked">
                                Dining
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=9 id="flexCheckDefault" name="A[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                Air Conditioner
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=10 id="flexCheckChecked" name="A[]">
                            <label class="form-check-label" for="flexCheckChecked">
                                Washing Machine
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=11 id="flexCheckChecked" name="A[]">
                            <label class="form-check-label" for="flexCheckChecked">
                                Lift
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=12 id="flexCheckDefault" name="A[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                CCTV
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=13 id="flexCheckChecked" name="A[]">
                            <label class="form-check-label" for="flexCheckChecked">
                                Geyser
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" name="btnSubmit" class="btn-primary" value="Submit the PG Information" />
                        </div>
                    </div>
                
            </form>
        </div>
    </div>











    <div class="page-container">
        <h1 class="city-heading">
            Major Cities
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bengaluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php
    include "includes/adminlogin.php";
    include "includes/adminsigup.php";
    include "includes/footer.php";
    ?>
    <script type="text/javascript" src="js/from.js"></script>

</body>

</html>