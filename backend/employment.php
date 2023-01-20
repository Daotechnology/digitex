<?php 
include_once 'conn.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["statusText"=>"Please use another account or create if haven't one","errorCode"=>500]);
    return;
} 

if ($_SESSION['email']) {
    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);
    $email = $_SESSION['email']; 
    $employment_status = $data['employment_status'];
    $employment_date = $data['employment_date'];
   
    $sql = "select * from employment where email='".$email."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0 ) {
        // Update
        $update = "UPDATE employment SET employment_status='$employment_status', employment_date ='$employment_date' WHERE email = '$email'";
        $update_employment_details = $conn->query($update);
        if ($update_employment_details) {
            echo json_encode(['status'=>200,'statusText'=>"Employment Details Updated Successfully"]);
        } else {
            echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
        }
        return;
    }
   
    //Insert User in the database
    $insert_detail = "INSERT INTO employment(`employment_status`, `employment_date`, `email`) VALUES('$employment_status','$employment_date','$email')";
    $insert_employment_details = $conn->query($insert_detail);
    if ($insert_employment_details) {
        echo json_encode(['status'=>200,'statusText'=>"Personal Details Updated Successfully"]);
    } else {
        echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
    }
    exit;
}
?>