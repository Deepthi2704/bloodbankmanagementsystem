<?php
$server_name="localhost";
$username="root";
$password="root";
$db_name="donation";
$conn = new mysqli($server_name,$username,$password,$db_name);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
echo " ";
?>