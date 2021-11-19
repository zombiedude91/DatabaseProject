<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'homeservice');

if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno . ": " . $mysqli->connect_error;
}

$q = "INSERT INTO user (Email,Password,UserType,FirstName,LastName,Gender,Address,PhoneNo) 
VALUES ('$email','$passwd','$usertype','$fname','$lname','$gender','$address','$phone');";

echo $q;

if (!$mysqli->query($q)) {
    echo "UPDATE failed. Error: " . $mysqli->error;
}

//redirect
header("Location: home.php");

?>