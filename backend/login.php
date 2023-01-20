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
    $sql = "select * from  users where email='".$email."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo json_encode(['statusText'=>"Please use another account or create if haven't one", "errorCode"=>401]);
        return;
    }
    //Insert User in the database
    $insert_sql = "INSERT INTO `users`(`email`, `passwords`) VALUES ('".$email."','".$password."')";
    $insert = $conn->query($insert_sql);
    if ($insert) {
        $_SESSION['email'] = $email;
        echo json_encode(['status'=>200,'statusText'=>"Registration Successful"]);
    } else {
        echo json_encode(['errorCode'=>500,'statusText'=>"Not Successful"]);
    }
    exit;
?>