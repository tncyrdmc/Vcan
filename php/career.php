<?php 
require "../config/config.php";
$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
$mail = trim($_GET["mail"]);
$address = trim($_GET["address"]);
$qualification = trim($_GET["qualification"]);
$resume = $_FILES["resume"]["name"];

$conn = new mysqli(server, user, password,database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// $q = "INSERT INTO contact (name,email,phone_no,message) VALUES('$name','$mail','$phone','$message')";

// if ($conn->query($q) === true) {
// 	echo "Sent";
// }else{
// 	echo "failed";
// }

echo $name ." ".$mail." ".$phone." ".$address." ".$qualification. " " .$resume;
?>