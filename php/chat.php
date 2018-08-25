<?php 
require "../config/config.php";

$name = trim($_GET["name"]);
$mail = trim($_GET["mail"]);
$message = trim($_GET["message"]);

$conn = new mysqli(server, user, password,database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$q = "INSERT INTO chat(name,mail,message) VALUES('$name','$mail','$message')";

if ($conn->query($q) === true) {
	echo "Sent";
}else{
	echo "failed from";
}
?>