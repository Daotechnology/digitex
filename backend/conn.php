<?php
/* these variables will use for connection to mysql across all pages */
// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname = "digitex";
// $conn = new MySQLi($server,$username,$password,$dbname);
$conn = new mysqli('localhost','root','','digitex') or die("Could not connect to mysql".mysqli_error($conn));
// session_start();
?>