<?php


$host = 'localhost';
$db_user = 'root';
$db_pass = ''; // change this if your MySQL has a password
$db_name = 'auth_system';

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>