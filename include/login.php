<?php

session_start();
/**
 * @var mysqli $connection
 */
require_once $_SERVER["DOCUMENT_ROOT"] . "/include/db_connect.php";

$login = $_POST["login"];
$password = $_POST["password"];
echo $password;

$user = mysqli_query($connection,
    "SELECT * FROM `users` WHERE `login` = '$login'");
$userData = mysqli_fetch_assoc($user);

if (mysqli_num_rows($user) > 0 && password_verify($password, $userData["password"])) {
    $_SESSION["user"] = [
        "id" => $userData ["id"],
        "first_name" => $userData ["first_name"],
        "last_name" => $userData ["last_name"],
        "login" => $userData["login"],
        "email" => $userData["email"],
    ];
    header("Location: /index.php");
} else {
    header("Location: /login/");
}
