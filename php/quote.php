<?php 
require "../config/config.php";
$name = $_GET["name"];
$phone = $_GET["phone"];
$mail = $_GET["mail"];
$message = $_GET["message"];
$services = $_GET["services"];


$conn = new mysqli(server, user, password,database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = $conn->query("INSERT INTO quote VALUES('$name','$mail','$phone','$services','$message')");

if ($result === true) {
	echo "Sent";
}else{
	echo "failed".$result;
}
?>