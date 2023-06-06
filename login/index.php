<?php

session_start();

if (isset($_SESSION["user"])) {
    header("Location: /index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Авторизация</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
<div class="main-container">
    <form action="/include/login.php" method="post" id="auth-form">
        <span class="auth-title">Добро пожаловать! Снова.</span>
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <button type="submit" id="auth-btn">Войти</button>
        <span class="have-no-acc">Еще нет аккаунта? — <a href="/signup/">Зарегистрироваться</a>.</span>
    </form>
    <a class="error-mes" id="login-error">ㅤ</a>
</div>


</body>
</html>
