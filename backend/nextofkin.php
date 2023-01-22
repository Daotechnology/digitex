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
    $surname = $data['surname'];
    $firstname = $data['firstname'];
    $othername = $data['othername'];
    $dob = $data['dob'];
    $gender = $data['gender'];
    $mobile_number = $data['mobile_number'];
    $street_name = $data['street_name'];
    $bus_stop = $data['bus_stop'];

    $sql = "select * from  nextofkin where email='".$email."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0 ) {
        // Update
        $update = "UPDATE nextofkin SET surname ='$surname',`firstname`='$firstname',`othername`='$othername',`dob`='$dob',`gender`='$gender',`mobile_number`='$mobile_number',`street_name`='$street_name',`bus_stop`='$bus_stop' WHERE email = '$email'";
        $update_personal_details = $conn->query($update);
        if ($update_personal_details) {
            echo json_encode(['status'=>200,'statusText'=>"Next Of Kin Updated Successfully"]);
        } else {
            echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
        }
        return;
    }
   
    //Insert User in the database
    $insert_detail = "INSERT INTO nextofkin(`surname`, `firstname`, `othername`, `dob`, `gender`, `mobile_number`, `street_name`, `bus_stop`, `email`) VALUES ('$surname','$firstname','$othername','$dob','$gender','$mobile_number','$street_name','$bus_stop','$email')";
    $insert_personal_details = $conn->query($insert_detail);
    if ($insert_personal_details) {
        echo json_encode(['status'=>200,'statusText'=>"Next Of Kin Details Updated Successfully"]);
    } else {
        echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
    }
    exit;
}
?>