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
    $house_number = $data['house_number'];
    $street_name = $data['street_name'];
    $bus_stop = $data['bus_stop'];
    $city = $data['city'];
    $lg_area = $data['lg_area'];
    $state = $data['state'];
    $home_town = $data['home_town'];
    $religion = $data['religion'];
    $phone_number1 = $data['phone_number1'];
    $phone_number2 = $data['phone_number2'];
   
    $sql = "select * from  contact_details where email='".$email."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0 ) {
        // Update
        $update = "UPDATE contact_details SET house_number='$house_number', street_name ='$street_name',bus_stop ='$bus_stop',`city`='$city',`lg_area`='$lg_area',`state`='$state',`home_town`='$home_town',`religion`='$religion',`phone_number1`='$phone_number1',`phone_number2`='$phone_number2',`email`='$email' WHERE email = '$email'";
        $update_contact_details = $conn->query($update);
        if ($update_contact_details) {
            echo json_encode(['status'=>200,'statusText'=>"Contact Details Updated Successfully"]);
        } else {
            echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
        }
        return;
    }
   
    //Insert User in the database
    $insert_detail = "INSERT INTO contact_details(`house_number`, `street_name`, `bus_stop`, `city`, `lg_area`, `state`, `home_town`, `religion`, `phone_number1`, `phone_number2`, `email`) VALUES ('$house_number','$street_name','$bus_stop','$city','$lg_area','$state','$home_town','$religion','$phone_number1','$phone_number2','$email')";
    $insert_contact_details = $conn->query($insert_detail);
    if ($insert_contact_details) {
        echo json_encode(['status'=>200,'statusText'=>"Personal Details Updated Successfully"]);
    } else {
        echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
    }
    exit;
}
?>