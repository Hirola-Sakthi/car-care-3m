<?php
$servername = "localhost";   
$username   = "root";    
$password   = "Sakthi@123";     
$database   = "sakthi";


$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
