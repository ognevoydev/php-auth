<?php

session_start();

if (!isset($_SESSION["user"])) {
    header("Location: /login/");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Главная</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
<a href="/include/logout.php" id="logout-btn">Выйти</a>
</body>
</html>
