<?php 

$server = "localhost";
$user = "root";
$pass = "Aryanxxvii27!";
$database = "scms";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>