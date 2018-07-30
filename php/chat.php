<?php 
require "../config/config.php";

$name = $_GET["name"];
$mail = $_GET["mail"];
$message = $_GET["message"];

$conn = new mysqli(server, user, password,database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$q = "INSERT INTO chat (name,mail,message) VALUES('$name','$mail','$message')";

if ($conn->query($q) === true) {
	echo "Sent";
}else{
	echo "failed";
}
?>