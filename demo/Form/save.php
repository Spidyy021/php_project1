<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "demo_1";

$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    echo "not connected";
} else {
    echo "connected";
}

//start
// Start connection (make sure $con is already created above this code)
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$password = $_POST['pass'];

$sql = "INSERT INTO test (name, email, phone, city, password) 
        VALUES ('$name', '$email', '$phone', '$city', '$password')";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "Data submitted";
} else {
    echo "Query failed: ";
}
?>
