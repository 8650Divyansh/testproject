<?php 

$server = "localhost";
$student = "root";
$pass = "";
$database = "student";

$conn = mysqli_connect($server, $student, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>