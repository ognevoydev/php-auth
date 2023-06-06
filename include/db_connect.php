<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db";

$connection = mysqli_connect($hostname, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
