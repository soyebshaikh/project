<?php
require("../includes/database_connect.php");


$email= $_POST['email'];
$password= $_POST['password'];
$password= sha1($password);


$sql = "SELECT * FROM addmin WHERE email='$email'";
// $result =  mysqli_query($db, $sql);
$result =  mysqli_query($db,$sql );
if (!$result) {
    $response = array("success"=> false, "message"=> "Something went wrong!");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
    $response = array("success"=> false, "message" => "This email id is already registered with us!");
    echo json_encode($response);
    return;
}

$sql = "INSERT INTO addmin (email, password) VALUES ('$email', '$password')";
// $result =  mysqli_query($db, $sql);
$result =  mysqli_query($db, $sql);
if (!$result) {
    $response= array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success"=> true, "message"=> "Your account has been created successfuly!");
echo json_encode($response);
mysqli_close($db);

?>