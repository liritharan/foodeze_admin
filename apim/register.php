<?php

$con = mysqli_connect("localhost","u401320649_grubb","u401320649_grubb","u401320649_grubb");

if ($_POST["reg"]) 
  {
    
    $fname = $_POST['firs_name'];
    $lname = $_POST['last_name'];
    
    $sql = "INSERT INTO `rider_request`(`first_name`, `last_name`, `email`, `phone`, `city`, `state`, `country`, `address`, `created`) VALUES ()";
    
    mysqli_query($con, $sql);

	$response = array();
}
    if($sql){
        echo json_encode(array("message"=>"Success"));
    }else{
        echo json_encode(array("message"=>"Failed"));
    }
    
?>