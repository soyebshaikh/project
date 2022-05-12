<?php
session_start();
require("../includes/database_connect.php");

$name =(string) $_POST['Name'];


$sql = "SELECT * FROM properties WHERE name='$name';";
$result =  mysqli_query($db, $sql);

$row = mysqli_num_rows($result);
 $id=$row['id'];
//$id=1;


//    $checkbox = $_POST['A'];         
     //    for($i=0;$i<count($checkbox);$i++){
     //    $check_id = $checkbox[$i];
     //     mysqli_query($conn,"insert into properties_amenities (property_id,amenity_id) values ('$id','".$check_id."')");
      
     //   }
       if(!empty($_POST['A'])) {
          foreach($_POST['A'] as $check) {
                mysqli_query($conn,"insert into properties_amenities (property_id,amenity_id) values ('$id','$check')");
             
          }
      }


  $response = array("success" => true, "message" => "Your Anemities has been submited successfuly!");
echo json_encode($response);
mysqli_close($db);
