<?php
session_start();
require("../includes/database_connect.php");

$name =(string) $_POST['Name'];
$citie = (int) $_POST['Citie'];
$address =(string) $_POST['address'];
$description = (string)$_POST['description'];
$gender =(string) $_POST['gender'];
$rent   =(int) $_POST['rent'];
$rating_clean   = $_POST['rating_clean'];
$rating_food   = $_POST['rating_food'];
$rating_safty   = $_POST['rating_safty'];


$sql_2 = "SELECT * FROM properties WHERE  name='$name'";
$result_2 =  mysqli_query($db, $sql_2);

   

$properties = mysqli_fetch_all($result_2, MYSQLI_ASSOC);
if (count($properties) == 0) {


$sql = "INSERT INTO properties (city_id, name, address, description, gender, rent, rating_clean, rating_food,rating_safety) VALUES ('$citie','$name', '$address', '$description', '$gender', '$rent','$rating_clean ','$rating_food','$rating_safty')";
 
 $result =  mysqli_query($db, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}
$sql = "SELECT id FROM properties WHERE name='$name'";
$result =  mysqli_query($db, $sql);

$row = mysqli_fetch_assoc($result);
 $id=$row['id'];
if(!empty($_POST['A'])) {
  foreach($_POST['A'] as $check) {
        mysqli_query($db,"insert into properties_amenities (property_id,amenity_id) values ('$id','$check')");
     
  }
}

  $response = array("success" => true, "message" => "Your Form has been submited successfuly!");
echo json_encode($response);
mysqli_close($db);
}else
{
  $response = array("success" => false, "message" => "This Properties Already Exite!");
    echo json_encode($response);
    return;
}