<?php 
include_once 'conn.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["statusText"=>"Please use another account or create if haven't one","errorCode"=>500]);
    return;
} 

// echo $_POST;
if ($_SESSION['email']) {
    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);    
    $email = $_SESSION['email'];
    $street_name = $data['street_name'];
    $street_number = $data['street_number'];
    $city = $data['city'];
    $bus_stop = $data['bus_stop'];
    $lga_area = $data['lga_area'];
    $state = $data['state'];
    $nature_of_business = $data['nature_of_business'];
    $fax_number = $data['fax_number'];
    $phone_number = $data['phone_number'];

    $sql = "select * from  employment_address where email='".$email."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0 ) {
        // Update
        $update = "UPDATE employment_address SET `street_name`='$street_name',`street_number`='$street_number',`city`='$city',`bus_stop`='$bus_stop',`lga_area`='$lga_area',`state`='$state',`nature_of_business`='$nature_of_business',`fax_number`='$fax_number',`phone_number`='$phone_number' WHERE email = '$email'";
        $update_details = $conn->query($update);
        if ($update_details) {
            echo json_encode(['status'=>200,'statusText'=>"Employers Address Updated Successfully"]);
        } else {
            echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
        }
        return;
    }
   
    //Insert User in the database
    $insert_detail = "INSERT INTO employment_address(`email`, `street_name`, `street_number`, `city`, `bus_stop`, `lga_area`, `state`, `nature_of_business`, `fax_number`, `phone_number`) VALUES ('$email','$street_name','$street_number','$city','$bus_stop','$lga_area','$state','$nature_of_business','$fax_number','$phone_number')";
    $insert_details = $conn->query($insert_detail);
    if ($insert_details) {
        echo json_encode(['status'=>200,'statusText'=>"Employers Address Updated Successfully"]);
    } else {
        echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
    }
    exit;
}
?>