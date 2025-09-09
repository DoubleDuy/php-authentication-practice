<?php

session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "php_authentication";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error) {
    die("Connection failed : " . $conn->connect_error) ;
}

?>