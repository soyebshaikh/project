<?php
session_start();
require "includes/database_connect.php";

if (!isset($_SESSION["user_id"])) {
    header("location: index.php");
    die();
}
$user_id = $_SESSION['user_id'];

// $sql_1 = "SELECT * 
//             FROM book_users_properties iup
//             INNER JOIN users p ON iup.user_id = p.id";
           
// $result_1 =  mysqli_query($db, $sql_1);
// if (!$result_1) {
//     echo "Something went wrong!";
//     return;
// }
// $users = mysqli_fetch_all($result_1, MYSQLI_ASSOC);
// if (!$users) {
//     echo "Something went wrong!";
//     return;
// }

// $sql_2 = "SELECT * 
//             FROM book_users_properties iup
//             INNER JOIN properties p ON iup.property_id = p.id";
           
// $result_2 =  mysqli_query($db, $sql_2);
// if (!$result_2) {
//     echo "Something went wrong!";
//     return;
// }
// $book_properties = mysqli_fetch_all($result_2, MYSQLI_ASSOC);
$sql_2="SELECT
*
FROM properties
INNER JOIN book_users_properties
  ON  properties.id = book_users_properties.property_id
  INNER JOIN users
  ON users.id =  book_users_properties.user_id;";
  $result_2 =  mysqli_query($db, $sql_2);
  if (!$result_2) {
      echo "Something went wrong!";
      return;
  }
  $book_properties = mysqli_fetch_all($result_2, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/dashboard.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Dashboard
            </li>
        </ol>
    </nav>

    

    <?php
    if (count($book_properties) > 0) {
    ?>
        <div class="my-interested-properties">
            <div class="page-container">
                <h1>My Interested Properties</h1>

                <?php
                foreach ($book_properties as $property) {
               
                    $property_images = glob("img/properties/" . $property['id'] . "/*");
                ?>
                    <div class="property-card property-id-<?= $property['id'] ?> row">
                        <div class="image-container col-md-4">
                            <img src="<?= $property_images[0] ?>" />
                        </div>
                        <div class="content-container col-md-8">
                            <div class="row no-gutters justify-content-between">
                                <?php
                                $total_rating = ($property['rating_clean'] + $property['rating_food'] + $property['rating_safety']) / 3;
                                $total_rating = round($total_rating, 1);
                                ?>
                                <div class="star-container" title="<?= $total_rating ?>">
                                    <?php
                                    $rating = $total_rating;
                                    for ($i = 0; $i < 5; $i++) {
                                        if ($rating >= $i + 0.8) {
                                    ?>
                                            <i class="fas fa-star"></i>
                                        <?php
                                        } elseif ($rating >= $i + 0.3) {
                                        ?>
                                            <i class="fas fa-star-half-alt"></i>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="far fa-star"></i>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="interested-container">
                                    <i class="is-interested-image fas fa-heart" property_id="<?= $property['id'] ?>"></i>
                                </div>
                            </div>
                            <div class="detail-container">

                                <div class="property-name"><?= $property['name'] ?></div>
                                <div class="property-address"><?= $property['address'] ?></div>
                                <h6>BOOKED BY</h6>
                                <div class="property-address"><?= $property['full_name'] ?></div>
                                <div class="property-address"><?= $property['college_name'] ?></div>
                                <div class="property-address"><?= $property['phone'] ?></div>
                                
                                <div class="property-gender">
                                    <?php
                                    if ($property['gender'] == "male") {
                                    ?>
                                        <img src="img/male.png">
                                    <?php
                                    } elseif ($property['gender'] == "female") {
                                    ?>
                                        <img src="img/female.png">
                                    <?php
                                    } else {
                                    ?>
                                        <img src="img/unisex.png">
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="rent-container col-6">
                                    <div class="rent">₹ <?= number_format($property['rent']) ?>/-</div>
                                    <div class="rent-unit">per month</div>
                                </div>
                              
                                <div class="button-container col-6">
                                    <a href="property_detail.php?property_id=<?= $property['id'] ?>" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                
            }
                ?>
            </div>
        </div>
    <?php
    
}
    ?>

    <?php
    include "includes/footer.php";
    ?>

    <script type="text/javascript" src="js/dashboard.js"></script>
</body>

</html>
