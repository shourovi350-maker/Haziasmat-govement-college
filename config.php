<?php
$host = "localhost";
$user = "root";        // MySQL ইউজার
$password = "";        // MySQL পাসওয়ার্ড
$dbname = "college_db";

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>
