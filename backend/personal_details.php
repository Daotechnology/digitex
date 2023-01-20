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
    $branch = $data['branch'];
    $title = $data['title'];
    $surname = $data['surname'];
    $firstname = $data['firstname'];
    $othername = $data['othername'];
    $maidenName = $data['maidenName'];
    $pob = $data['pob'];
    $nationality = $data['nationality'];
    $origin = $data['origin'];
    $marital_status = $data['marital_status'];
    $dual_citizenship = $data['dual_citizenship'];
    $acc_category = $data['acc_category']; 
    $acc_type = $data['acc_type']; 

    $sql = "select * from  personal_details where email='".$email."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0 ) {
        // Update
        $update = "UPDATE personal_details SET branch='$branch', title ='$title',surname ='$surname',`firstname`='$firstname',`othername`='$othername',`maidenName`='$maidenName',`pob`='$pob',`nationality`='$nationality',`origin`='$origin',`marital_status`='$marital_status',`dual_citenziship`='$dual_citizenship',`acc_category`='$acc_category',`acc_type`='$acc_type',`email`='$email' WHERE email = '$email'";
        $update_personal_details = $conn->query($update);
        if ($update_personal_details) {
            echo json_encode(['status'=>200,'statusText'=>"Personal Details Updated Successfully"]);
        } else {
            echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
        }
        return;
    }
   
    //Insert User in the database
    $insert_detail = "INSERT INTO personal_details(branch, title, surname, firstname, othername, maidenName, pob, nationality, origin, marital_status, dual_citenziship, acc_category, acc_type, email) VALUES ('$branch','$title','$surname','$firstname','$othername','$maidenName','$pob','$nationality','$origin','$marital_status','$dual_citizenship','$acc_category','$acc_type','$email')";
    $insert_personal_details = $conn->query($insert_detail);
    if ($insert_personal_details) {
        echo json_encode(['status'=>200,'statusText'=>"Personal Details Updated Successfully"]);
    } else {
        echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
    }
    exit;
}
?>