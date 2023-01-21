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
    $gender = $data['gender'];
    $dob = $data['dob'];
    $bvn = $data['bvn'];
    $employers_name = $data['employers_name'];
    $customer_nickname = $data['customer_nickname'];
    $relationship = $data['relationship'];
    $id_type = $data['id_type'];
    $id_no = $data['id_no'];
    $id_issue_date = $data['id_issue_date'];
    $expiry_date = $data['expiry_date'];
    $expected_income = $data['expected_income'];
    $other_income = $data['other_income']; 
    $refferral = $data['refferral']; 

    $sql = "select * from  kyc where email='".$email."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0 ) {
        // Update
        $update = "UPDATE kyc SET `gender`='$gender',`dob`='$dob',`bvn`='$bvn',`employers_name`='$employers_name',`customer_nickname`='$customer_nickname',`relationship`='$relationship',`id_type`='$id_type',`id_no`='$id_no',`id_issue_date`='$id_issue_date',`expiry_date`='$expiry_date',`expected_income`='$expected_income',`other_income`='$other_income',`refferral`='$refferral' WHERE email = '$email' ";
        $update_kyc_details = $conn->query($update);
        if ($update_kyc_details) {
            echo json_encode(['status'=>200,'statusText'=>"KYC Details Updated Successfully"]);
        } else {
            echo json_encode(['errorCode'=>500,'statusText'=>"KYC Not Successful"]);
        }
        return;
    }
   
    //Insert User in the database
    $insert_detail = "INSERT INTO kyc(`email`, `gender`, `dob`, `bvn`, `employers_name`, `customer_nickname`, `relationship`, `id_type`, `id_no`, `id_issue_date`, `expiry_date`, `expected_income`, `other_income`, `refferral`) VALUES ('$email','$gender','$dob','$bvn','$employers_name','$customer_nickname','$relationship','$id_type','$id_no','$id_issue_date','$expiry_date','$expected_income','$other_income','$refferral')";
    $insert_kyc_details = $conn->query($insert_detail);
    if ($insert_kyc_details) {
        echo json_encode(['status'=>200,'statusText'=>"KYC Details Updated Successfully"]);
    } else {
        echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
    }
    exit;
}
?>