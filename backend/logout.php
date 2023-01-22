<?php  
session_start();

if (isset($_SESSION['email'])) {
    if (session_destroy()) {
        echo json_encode(['statusText'=>"Logout Successfully", "status"=>200]);
        return;
    } 
    echo json_encode(['statusText'=>"Logout Not Successfull", "status"=>401]);
}

?>