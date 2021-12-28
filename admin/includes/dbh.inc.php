<?php

$servername = "localhost";
$dbUsername = "u908947830_test";
$dbPassword = "utoGNTe5@4";
$dbName = "u908947830_tms";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
