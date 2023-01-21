<?php 
include_once 'conn.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["statusText"=>"Please use another account or create if haven't one","errorCode"=>500]);
    return;
} 

// echo $_POST;
    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);    
    $email = $data['email'];
    $password = $data['password'];
    $sql = "select * from  users where email='".$email."' AND passwords = '".$password."' ";
    $result = $conn->query($sql);
    if ($result->num_rows < 1) {
        echo json_encode(['statusText'=>"Password is Incorrect, please try again", "errorCode"=>401]);
        return;
    }
    $_SESSION['email'] = $email;
    echo json_encode(['statusText'=>"Login Successful", "status"=>200]);
    exit;
?>