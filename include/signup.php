<?php


/**
 * @var mysqli $connection
 */
require_once $_SERVER["DOCUMENT_ROOT"] . "/include/db_connect.php";

$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];

$password = password_hash($password, PASSWORD_DEFAULT);

$signup = mysqli_query($connection,
    "INSERT INTO `users` 
    (`id`, `first_name`, `last_name`, `login`, `email`, `password`) VALUES 
    (NULL, '$firstName', '$lastName', '$login', '$email', '$password')");


if ($signup) {
    header("Location: /login/");
}
