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
    $account_name = $data['account_name'];
    $account_number = $data['account_number'];
    $account_type = $data['account_type'];
    $officer_name = $data['officer_name'];
    $address_visited = $data['address_visited'];
    $building_description= $data['building_description'];
    $bus_stop = $data['bus_stop'];
    $landmark = $data['landmark'];
    $address_confirmed = $data['address_confirmed'];
    $visited_date = $data['visited_date'];
    $sms = $data['sms'];
    $atm = $data['atm'];
    $mobile_banking = $data['mobile_banking'];
    $internet_banking= $data['internet_banking'];

    $sql = "select * from  account_officer where email='".$email."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0 ) {
        // Update
        $update = "UPDATE account_officer SET `account_name`='$account_name',`account_number`='$account_number',`account_type`='$account_type',`officer_name`='$officer_name',`address_visited`='$address_visited',`building_description`='$building_description',`bus_stop`='$bus_stop',`landmark`='$landmark',`address_confirmed`='$address_confirmed',`visited_date`='$visited_date',`sms`='$sms',`atm`='$account_name',`mobile_banking`='$mobile_banking',`internet_banking`='$internet_banking' WHERE email = '$email'";
        $update_account_officer = $conn->query($update);
        if ($update_account_officer) {
            echo json_encode(['status'=>200,'statusText'=>"Officer Details Updated Successfully"]);
        } else {
            echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
        }
        return;
    }
   
    //Insert User in the database
    $insert_detail = "INSERT INTO account_officer(`account_name`, `account_number`, `account_type`, `officer_name`, `address_visited`, `building_description`, `bus_stop`, `landmark`, `address_confirmed`, `visited_date`, `email`, `sms`, `atm`, `mobile_banking`, `internet_banking`) VALUES ('$account_name','$account_number','$account_type','$officer_name','$address_visited','$building_description','$bus_stop','$landmark','$address_confirmed','$visited_date','$email','$sms','$atm','$mobile_banking','$internet_banking')";
    $insert_account_officer = $conn->query($insert_detail);
    if ($insert_account_officer) {
        echo json_encode(['status'=>200,'statusText'=>"Personal Details Updated Successfully"]);
    } else {
        echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
    }
    exit;
}
?>