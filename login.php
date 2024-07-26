<?php
$id = $_POST["id"];
$pass = $_POST["pass"];

$servername ="localhost";
$username = "root";
$password = "holiday";

$conn = new mysqli($servername,$username,$password);
if($conn){
    echo "connected successfully";
}
else{
    echo "not connected";
}
?>